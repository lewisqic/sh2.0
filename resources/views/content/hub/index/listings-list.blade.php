@extends('layouts.hub')

@section('content')

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Contacts</a></li>
            <li class="is-active"><a href="#" aria-current="page">List</a></li>
        </ul>
    </nav>

    <div class="card-actions">
        <a href="#" class="button is-success is-outlined toggle-content" data-toggle=".new-contact-wrapper"><i class="fal fa-plus-circle "></i> New Listing</a>
    </div>
    <h2 class="card-title">
        <i class="fal fa-building"></i> Property Listings
        <span class="tools-wrapper">
            <a href="#" class="toggle-content" data-toggle=".search-wrapper"><i class="fal fa-search"></i></a>
        </span>
    </h2>

    <div class="search-wrapper is-display-none">
        <div class="card">
            <div class="card-header">
                <div class="card-header-title">Search Listings</div>
            </div>
            <div class="card-content">

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
                    <div class="field-label">
                        <!-- Left empty for spacing -->
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <button class="button is-success"><i class="fal fa-search"></i> Search</button>
                                <a href="{{ url('hub') }}" class="button is-secondary">Reset</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="new-contact-wrapper is-display-none">
        <div class="card">
            <div class="card-header">
                <div class="card-header-title"><i class="fa fa-plus-circle fa-lg has-text-success has-mr-4"></i> Add New Listing</div>
            </div>
            <div class="card-content">

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
                        <div class="field is-narrow">
                            <div class="control">
                                <label class="radio">
                                    <input type="radio" name="member">
                                    Yes
                                </label>
                                <label class="radio">
                                    <input type="radio" name="member">
                                    No
                                </label>
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
                                <button class="button is-secondary toggle-content" data-toggle=".new-contact-wrapper">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-content">

            <div class="listing-items-wrapper">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('hub/property/listings/view') }}">6532 N Descartes Dr Coeur d' Alene AL 83815</a>
                        <div class="labels">
                            <span><strong>Created</strong> Feb 12th, 2019</span>
                            <button class="button is-success is-outlined is-small">Live</button>
                            <button class="button is-outlined is-small">Not Featured</button>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-one-fifth">
                                <div class="image">
                                    <img src="{{ url('images/listing.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="column">

                                <div class="columns static-fields">
                                    <div class="column">

                                        <div class="field is-horizontal has-mb-6">
                                            <div class="field-label"></div>
                                            <div class="field-body is-font-18 has-text-grey-light">Listing Details</div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-label">Category</div>
                                            <div class="field-body">Example Category</div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-label">Tags</div>
                                            <div class="field-body">Foo, Bar, Baz</div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-label">Available</div>
                                            <div class="field-body">Apr 1st, 2019</div>
                                        </div>

                                    </div>
                                    <div class="column">

                                        <div class="field is-horizontal has-mb-6">
                                            <div class="field-label"></div>
                                            <div class="field-body is-font-18 has-text-grey-light">Custom Fields</div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-label">Overview Field</div>
                                            <div class="field-body">Lorem ipsum dolar</div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-label">Custom Field</div>
                                            <div class="field-body">Ipsum lorem dolar</div>
                                        </div>
                                        <div class="field is-horizontal has-mb-4">
                                            <div class="field-label">Example Field</div>
                                            <div class="field-body">Dolar ipsum lorem</div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('hub/property/listings/view') }}">6532 N Descartes Dr Coeur d' Alene AL 83815</a>
                        <div class="labels">
                            <span><strong>Created</strong> Jan 12th, 2019</span>
                            <span><strong>Updated</strong> Jan 25th, 2019</span>
                            <button class="button is-outlined is-small">Draft</button>
                            <button class="button is-outlined is-small">Not Featured</button>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-one-fifth">
                                <div class="image">
                                    <img src="{{ url('images/courtyard.jpeg') }}" alt="">
                                </div>
                            </div>
                            <div class="column">

                                <div class="columns static-fields">
                                    <div class="column">

                                        <div class="field is-horizontal has-mb-6">
                                            <div class="field-label"></div>
                                            <div class="field-body is-font-18 has-text-grey-light">Listing Details</div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-label">Category</div>
                                            <div class="field-body">Example Category</div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-label">Tags</div>
                                            <div class="field-body">Foo, Bar, Baz</div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-label">Available</div>
                                            <div class="field-body">Apr 1st, 2019</div>
                                        </div>

                                    </div>
                                    <div class="column">

                                        <div class="field is-horizontal has-mb-6">
                                            <div class="field-label"></div>
                                            <div class="field-body is-font-18 has-text-grey-light">Custom Fields</div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-label">Overview Field</div>
                                            <div class="field-body">Lorem ipsum dolar</div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-label">Custom Field</div>
                                            <div class="field-body">Ipsum lorem dolar</div>
                                        </div>
                                        <div class="field is-horizontal has-mb-4">
                                            <div class="field-label">Example Field</div>
                                            <div class="field-body">Dolar ipsum lorem</div>
                                        </div>
                                        <div class="field is-horizontal has-mb-0">
                                            <div class="field-label"></div>
                                            <div class="field-body is-font-14"><a href="#">show more <i class="fal fa-angle-down"></i></a></div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('hub/property/listings/view') }}">6532 N Descartes Dr Coeur d' Alene AL 83815</a>
                        <div class="labels">
                            <span><strong>Created</strong> Dec 12th, 2018</span>
                            <span><strong>Updated</strong> Dec 25th, 2018</span>
                            <button class="button is-outlined is-small">Draft</button>
                            <button class="button is-primary is-outlined is-small">Featured</button>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-one-fifth">
                                <div class="image">
                                    <img src="{{ url('images/house.jpeg') }}" alt="">
                                </div>
                            </div>
                            <div class="column">

                                <div class="columns static-fields">
                                    <div class="column">

                                        <div class="field is-horizontal has-mb-6">
                                            <div class="field-label"></div>
                                            <div class="field-body is-font-18 has-text-grey-light">Listing Details</div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-label">Category</div>
                                            <div class="field-body">Example Category</div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-label">Tags</div>
                                            <div class="field-body">Foo, Bar, Baz</div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-label">Available</div>
                                            <div class="field-body">Apr 1st, 2019</div>
                                        </div>

                                    </div>
                                    <div class="column">

                                        <div class="field is-horizontal has-mb-6">
                                            <div class="field-label"></div>
                                            <div class="field-body is-font-18 has-text-grey-light">Custom Fields</div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-label">Overview Field</div>
                                            <div class="field-body">Lorem ipsum dolar</div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-label">Custom Field</div>
                                            <div class="field-body">Ipsum lorem dolar</div>
                                        </div>
                                        <div class="field is-horizontal has-mb-4">
                                            <div class="field-label">Example Field</div>
                                            <div class="field-body">Dolar ipsum lorem</div>
                                        </div>
                                        <div class="field is-horizontal has-mb-0">
                                            <div class="field-label"></div>
                                            <div class="field-body is-font-14"><a href="#">show more <i class="fal fa-angle-down"></i></a></div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <nav class="pagination is-centered is-small" role="navigation" aria-label="pagination">
                <a class="pagination-previous">Previous</a>
                <a class="pagination-next">Next <i class="fal fa-angle-right ml-6"></i></a>
                <ul class="pagination-list">
                    <li><a class="pagination-link" aria-label="Goto page 1">1</a></li>
                    <li><span class="pagination-ellipsis">&hellip;</span></li>
                    <li><a class="pagination-link" aria-label="Goto page 45">45</a></li>
                    <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">46</a></li>
                    <li><a class="pagination-link" aria-label="Goto page 47">47</a></li>
                    <li><span class="pagination-ellipsis">&hellip;</span></li>
                    <li><a class="pagination-link" aria-label="Goto page 86">86</a></li>
                </ul>
            </nav>

        </div>
    </div>

@endsection