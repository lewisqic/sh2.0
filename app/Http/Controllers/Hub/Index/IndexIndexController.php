<?php
namespace App\Http\Controllers\Hub\Index;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public $defaultTheme = [
        'sidebar' => '#4a5864',
        'primary' => '#69cfdd',
        'link' => '#69cfdd',
        'info' => '#209cee',
        'success' => '#9dc470',
        'warning' => '#ffdd57',
        'danger' => '#ff3861',
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show our list page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showList()
    {
        $data = [

        ];
        return view('content.hub.index.list', $data);
    }

    /**
     * Show our object page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showObject()
    {
        $data = [

        ];
        return view('content.hub.index.object', $data);
    }

    /**
     * Show our theme settings page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showThemeSettings()
    {
        
        if ( !file_exists(resource_path('assets/theme-settings.json')) ) {
            file_put_contents(resource_path('assets/theme-settings.json'), json_encode($this->defaultTheme));
        }
        $settings = json_decode(file_get_contents(resource_path('assets/theme-settings.json')), true);
        $data = [
            'colors' => $settings,
            'defaults' => $this->defaultTheme
        ];
        return view('content.hub.index.theme-settings', $data);
    }

    /**
     * Save our theme settings
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function saveThemeSettings()
    {

        $colors = \Request::input('colors');

        $custom_vars = '';
        foreach ( $colors as $key => $value ) {
            $custom_vars .= "\${$key}: {$value};\n";
        }

        file_put_contents(resource_path('assets/theme-settings.json'), json_encode($colors));
        file_put_contents(resource_path('assets/scss/variables/_custom.scss'), $custom_vars);

        if ( env('APP_ENV') == 'local' ) {
            exec('cd ' . base_path() . ' && node node_modules/cross-env/dist/bin/cross-env.js NODE_ENV=development node_modules/webpack/bin/webpack.js --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js --env.source=theme 2>&1', $output, $return_var);
        } else {
            exec('cd ' . base_path() . ' && node node_modules/cross-env/dist/bin/cross-env.js NODE_ENV=production node_modules/webpack/bin/webpack.js --no-progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js --env.source=theme 2>&1', $output, $return_var);
        }
        
        s($return_var);
        sd($output);


        if ( $return_var === 0 ) {
            output('success', 'Your theme settings have been saved');
        } else {
            output('danger', 'Unable to save your theme settings');
        }

        return redirect()->back();
        
    }


}