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

    <h2 class="card-title">
        <i class="fal fa-building"></i> Listing Overview
    </h2>

    <div class="card">
        <div class="card-content">

            <div class="columns is-desktop object-wrapper">
                <div class="column">

                    <div class="object-content">

                        <div class="columns">
                            <div class="column">
                                <div class="image">
                                    <img src="{{ url('images/listing.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="column">

                                <h3>
                                    6532 N Descartes Dr<br>
                                    Coeur d' Alene AL 83815
                                </h3>

                                <hr>

                                <p>
                                    <strong>Category</strong>: Category Name Here
                                </p>
                                <p>
                                    <strong>Available</strong>: June 16th, 2019
                                </p>
                                <p class="has-font-14">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi bibendum pretium fermentum. Sed dapibus sagittis gravida. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                </p>

                            </div>
                        </div>

                        <h3 class="page-subtitle">Attributes</h3>

                        <div class="static-fields">

                            <div class="field is-horizontal">
                                <div class="field-label">Custom Field 1</div>
                                <div class="field-body">Foo bar baz</div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-label">Example Label</div>
                                <div class="field-body">Ipsum dolas solet mit lorem</div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-label">Another Custom Field</div>
                                <div class="field-body">More example text</div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-label">And Last Example</div>
                                <div class="field-body">Lorem Ipsum</div>
                            </div>

                        </div>

                        <h3 class="page-subtitle">Description</h3>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi bibendum pretium fermentum. Sed dapibus sagittis gravida. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent non tempor augue. Curabitur viverra mauris quis nulla luctus eu tristique quam pretium. Donec interdum, ligula ac aliquet iaculis, ante eros iaculis urna, ut scelerisque urna augue vestibulum enim.
                        </p>
                        <p>
                            Etiam sollicitudin, velit eu tempor elementum, neque arcu viverra diam, et sodales lacus massa vitae tellus. Maecenas arcu nunc, consequat at volutpat eget, vestibulum id arcu. Etiam risus arcu, eleifend at volutpat nec, elementum nec tortor. Pellentesque nec tortor vitae nunc laoreet sollicitudin ut eu elit.
                        </p>


                    </div>

                    <a href="#" class="toggle-object-sidebar"><i class="fal fa-bars fa-lg"></i></a>
                </div>
                <div class="column is-one-fifth-desktop">

                    <div class="object-sidebar">
                        <a href="#" class="toggle-object-sidebar"><i class="fal fa-bars fa-lg"></i></a>

                        <ul>
                            <li class="parent active">
                                <a href="{{ url('hub/property/listings/view') }}">Overview</a>
                            </li>
                            <li class="child">
                                <a href="#">Footprints</a>
                            </li>
                            <li class="child">
                                <a href="#">Leads & Inquiries</a>
                            </li>
                            <li class="parent">
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