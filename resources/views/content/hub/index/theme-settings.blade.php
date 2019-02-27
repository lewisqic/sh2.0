@extends('layouts.hub')

@section('content')

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Contacts</a></li>
            <li><a href="#">John Doe</a></li>
            <li class="is-active"><a href="#" aria-current="page">Edit Contact</a></li>
        </ul>
    </nav>

    <h2 class="card-title">
        <i class="fal fa-paint-brush"></i> Theme Settings
    </h2>

    <div class="card">
        <div class="card-content">

            <form action="{{ url('hub/theme-settings') }}" method="POST" id="theme_settings_form">
                @csrf

                @foreach ( $colors as $name => $value )

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">{{ ucwords($name) }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" name="colors[{{ $name }}]" class="input colorpicker" placeholder="#abc123" value="{{ $value }}">
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

                <div class="field is-horizontal has-mt-30">
                    <div class="field-label">
                        <!-- Left empty for spacing -->
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <button class="button is-success submit-theme-settings-form"><i class="fal fa-check"></i> Save</button>
                                <a href="{{ url('hub') }}" class="button is-secondary use-defaults"><i class="fal fa-undo"></i> Use Defaults</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal has-mt-30 building-notification" style="display: none;">
                    <div class="field-label"><!-- Left empty for spacing --></div>
                    <div class="field-body">
                        <div class="notification is-success has-p-10">
                            <i class="fal fa-cog fa-spin"></i> Building your custom theme, please wait...
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection

@push('scripts')
    <script>
        var defaults = JSON.parse('{!! json_encode($defaults) !!}');
        $('.use-defaults').on('click', function(e) {
            e.preventDefault();
            $.each(defaults, function(name, value) {
                $('input[name="colors[' + name + ']"]').val(value).css('background-color', value);
            });
        });

        $('#theme_settings_form').on('submit', function() {
            $('.building-notification').show();
            $('button.submit-theme-settings-form').prop('disabled', true);
        });

    </script>
@endpush