@extends('layouts.hub')

@section('content')

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Property</a></li>
            <li><a href="#">Listings</a></li>
            <li class="is-active"><a href="#" aria-current="page">6532 N Descartes Dr Coeur d' Alene AL 83815</a></li>
        </ul>
    </nav>

    <div class="card-actions can-be-fixed">
        <button class="button is-success" data-save-form="#form_id_here"><i class="fal fa-check"></i> <span class="is-hidden-touch">Save</span></button>
        <a href="{{ url('hub/property/listings/edit') }}" class="button is-danger is-outlined confirm-click" data-text="Are you sure you want to delete this listing?"><i class="fal fa-trash-alt"></i> <span class="is-hidden-touch">Delete Listing</span></a>
    </div>
    <h2 class="card-title can-be-fixed">
        <i class="fal fa-building"></i> Manage Listing
    </h2>

    <div class="card">
        <div class="card-content">

            <div class="columns is-desktop object-wrapper">
                <div class="column">

                    <div class="object-content">

                        <h3 class="page-subtitle has-mt-0">Address</h3>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Address</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <input class="input" type="text" placeholder="Address 1">
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label"></div>
                            <div class="field-body">
                                <div class="field">
                                    <input class="input" type="text" placeholder="Address 2">
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">City</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <input class="input" type="text" placeholder="City">
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">State</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <input class="input" type="text" placeholder="State">
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Zip</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <input class="input" type="text" placeholder="Zip">
                                </div>
                            </div>
                        </div>

                        <h3 class="page-subtitle">Details</h3>

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Visibility</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-normal">
                                    <input class="is-checkradio" id="exampleRadioInline1" type="radio" name="exampleRadioInline" checked="checked">
                                    <label for="exampleRadioInline1">Draft</label>
                                    <input class="is-checkradio" id="exampleRadioInline2" type="radio" name="exampleRadioInline">
                                    <label for="exampleRadioInline2">Live</label>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Featured</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-normal">
                                    <input class="is-checkradio" id="featured" type="checkbox" name="exampleRadioInline" checked="checked">
                                    <label for="featured"></label>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Category</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
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
                            <div class="field-label is-normal">
                                <label class="label">Snippet</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <textarea class="textarea" rows="2" placeholder="snippet..."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Listing Date</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <input class="input" type="date" placeholder="mm/dd/yyyy">
                                </div>
                            </div>
                        </div>


                        <h3 class="page-subtitle">Description</h3>

                        <div class="field">
                            <div class="control">
                                <textarea class="textarea" rows="6" placeholder="WYSIWYG editor needed here"></textarea>
                            </div>
                        </div>

                        <h3 class="page-subtitle">Custom Fields</h3>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Foo Bar</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <input class="input" type="text" placeholder="Foo Bar">
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Lorem Ipsum</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <input class="input" type="text" placeholder="lorem ipsum...">
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Custom Select</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
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
                            <div class="field-label is-normal">
                                <label class="label">Custom Example</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <input class="input" type="date" placeholder="mm/dd/yyyy">
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
                                <a href="{{ url('hub/property/listings/view') }}">Overview</a>
                            </li>
                            <li class="child">
                                <a href="#">Footprints</a>
                            </li>
                            <li class="child">
                                <a href="#">Leads & Inquiries</a>
                            </li>
                            <li class="parent active">
                                <a href="{{ url('hub/property/listings/edit') }}">Manage Listing</a>
                            </li>
                            <li class="child">
                                <a href="#">Photos & Images</a>
                            </li>
                            <li class="child">
                                <a href="#">Custom Fields</a>
                            </li>
                            <li class="child">
                                <a href="#">Access Permissions</a>
                            </li>
                            <li class="parent">
                                <a>Advanced</a>
                            </li>
                            <li class="parent has-mt-20">
                                <a>View on Site <i class="fal fa-angle-right"></i></a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="page-footer">
        Listing created by <strong>John Doe</strong> on <strong>Jan 13th, 2019 1:32 PM</strong>.  Last updated by <strong>John
            Doe</strong> on <strong>Feb 2nd, 2019 10:32 AM.</strong>
    </div>

@endsection