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

    <div class="card-actions">
        <a href="{{ url('hub/object') }}" class="button is-danger is-outlined confirm-click" data-text="Are you sure you want to delete this contact?"><i class="fal fa-trash-alt"></i> Delete Contact</a>
    </div>
    <h2 class="card-title">
        <i class="fal fa-address-book"></i> John Doe
    </h2>

    <div class="card">
        <div class="card-content">

            <div class="columns is-desktop object-wrapper">
                <div class="column">

                    <div class="object-content">

                        <div class="field is-horizontal has-mb-20">
                            <div class="field-label is-hidden-touch"></div>
                            <div class="field-body">
                                <h2 class="has-font-22">Edit Contact</h2>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">From</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" placeholder="Name">
                                        <span class="icon is-small is-left"><i class="fas fa-user"></i></span>
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control is-expanded has-icons-left has-icons-right">
                                        <input class="input is-success" type="email" placeholder="Email" value="alex@smith.com">
                                        <span class="icon is-small is-left"><i class="fas fa-envelope"></i></span>
                                        <span class="icon is-small is-right"><i class="fas fa-check"></i></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label"></div>
                            <div class="field-body">
                                <div class="field is-expanded">
                                    <div class="field has-addons">
                                        <p class="control">
                                            <a class="button is-static">+44</a>
                                        </p>
                                        <p class="control is-expanded">
                                            <input class="input" type="tel" placeholder="Your phone number">
                                        </p>
                                    </div>
                                    <p class="help">Do not enter the first zero</p>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Department</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-narrow">
                                    <div class="control">
                                        <div class="select is-fullwidth">
                                            <select>
                                                <option>Business development</option>
                                                <option>Marketing</option>
                                                <option>Sales</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Already a member?</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-normal">
                                    <input class="is-checkradio" id="exampleRadioInline1" type="radio" name="exampleRadioInline" checked="checked">
                                    <label for="exampleRadioInline1">Yes</label>
                                    <input class="is-checkradio" id="exampleRadioInline2" type="radio" name="exampleRadioInline">
                                    <label for="exampleRadioInline2">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Subject</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input class="input is-danger" type="text" placeholder="e.g. Partnership opportunity">
                                    </div>
                                    <p class="help is-danger">
                                        This field is required
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Question</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <!-- Left empty for spacing -->
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <button class="button is-success">
                                            <i class="fal fa-check"></i> Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a href="#" class="toggle-object-sidebar"><i class="fal fa-bars fa-lg"></i></a>

                </div>
                <div class="column is-one-fifth-desktop">

                    <div class="object-sidebar">

                        <a href="#" class="toggle-object-sidebar"><i class="fal fa-bars fa-lg"></i></a>

                        <ul>
                            <li class="parent">
                                <a href="#">Edit Contact</a>
                            </li>
                            <li class="child">
                                <a href="#">Access Permissions</a>
                            </li>
                            <li class="child active">
                                <a href="#">Custom Fields</a>
                            </li>
                            <li class="parent non-clickable">
                                <a>Import</a>
                            </li>
                            <li class="child">
                                <a href="#">Import via CSV</a>
                            </li>
                            <li class="child">
                                <a href="#">Import via API</a>
                            </li>
                            <li class="parent">
                                <a href="#">Clickable Parent</a>
                            </li>
                            <li class="child">
                                <a href="#">Indented Child</a>
                            </li>
                            <li class="child">
                                <a href="#">Indented Child Two</a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection