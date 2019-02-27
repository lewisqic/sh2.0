/******************************************************
 * Core class is used throughout the site
 ******************************************************/
class Core {

    /**
     * Class constructor, called when instantiating new class object
     */
    constructor() {
        // declare our class properties

        // call init
        this.init();
    }

    /**
     * We run init when our class is first instantiated
     */
    init() {
        // various custom utilities
        this.utilities();
        // initiate vendor plugins
        this.vendors();
        // init some default ajax settings
        this.ajaxSettings();
    }

    /**
     * Setup some global utilities
     */
    utilities(fromSidebar) {
        const self = this;

        // setup our Noty defaults
        Noty.overrideDefaults({
            layout   : 'bottomRight',
            theme    : 'nest',
            progressBar: true,
            closeWith: ['click', 'button']
        });

        // confirm a click before following link
        $('body').on('click', '.confirm-click', function(e) {
            e.preventDefault();
            const $this = $(this);
            var n = new Noty({
                type: 'alert',
                layout: 'center',
                text: $this.attr('data-text') ? $this.attr('data-text') : 'Are you sure?',
                progressBar: false,
                closeWith: ['click'],
                animation: {
                    open: 'animated fadeInDown',
                    close: null
                },
                buttons: [
                    Noty.button('Yes', 'button is-success', function () {
                        if ( $this.is('button') || $this.hasClass('submit-form') ) {
                            $this.closest('form').submit();
                        } else if ( $this.attr('href') !== undefined && $this.attr('href') !== '#' && $this.attr('href') !== '' ) {
                            window.location = $this.attr('href');
                        }
                    }),
                    Noty.button('No', 'button is-secondary', function () {
                        n.close();
                    })
                ]
            }).show();
        });

        // allow link to submit a form
        $('a.submit-form').not('.confirm-click').on('click', function(e) {
            e.preventDefault();
            $(this).closest('form').submit();
        });

        // show/hide elements
        let $contentToggle, $contentHide, $contentShow;
        let toggleContent = function($this) {
            if ( $this.attr('data-toggle') !== undefined ) {
                $contentToggle = $($this.attr('data-toggle'));
                $contentToggle.toggle();
            }
            if ( $this.attr('data-hide') !== undefined ) {
                $contentHide = $($this.attr('data-hide'));
                if ( $contentHide.attr('data-ignore-validation') === 'true' ) {
                    $contentHide.addClass('ignore-validation');
                    $contentHide.find('[data-fv-field]').each(function(index, el) {
                        $this.closest('form').data('formValidation').resetField($(el));
                    });
                }
                if ( $this.closest('.show-after-clone').length > 0 ) {
                    $this.closest('.show-after-clone').find($this.attr('data-hide')).hide();
                } else {
                    $contentHide.hide();
                }
            }
            if ( $this.attr('data-show') !== undefined ) {
                $contentShow = $($this.attr('data-show'));
                if ( $this.closest('.show-after-clone').length > 0 ) {
                    $this.closest('.show-after-clone').find($this.attr('data-show')).show();
                } else {
                    $contentShow.show();
                }
                if ( $contentShow.hasClass('ignore-validation') ) {
                    $contentShow.removeClass('ignore-validation');
                    $contentShow.attr('data-ignore-validation', 'true');
                }
                $contentShow.find('input.toggle-content:checked').trigger('click');
            }
        };
        $('.toggle-content').on('click', function(e) {
            let $this = $(this);
            if ( $this.is('a') ) {
                e.preventDefault();
            }
            toggleContent($this);
        });
        $('select.toggle-content').on('change', function(e) {
            let $this = $(this).find('option:selected');
            toggleContent($this);
        });

        // delete closest
        $('.delete-closest').on('click', function(e) {
            if ( $(this).is('a') ) {
                e.preventDefault();
            }
            $(this).closest($(this).attr('data-closest')).remove();
        });

    }

    /**
     * initiate vendor plugin functionality
     */
    vendors() {

        // init our colorpicker library
        $('.colorpicker').colorPicker({
            animationSpeed: 0
        });

    }

    /**
     * setup form validation plugin
     */
    ajaxSettings() {
        $.ajaxSetup({
            data: { _token: config._token }
        });
    }

    /**
     * Helper methods
     */
    url(url) {
        return `${config.url}/${url}`;
    }

}

/******************************************************
 * launch core, create instance
 ******************************************************/
$(function() {
    window.Core = new Core();
});