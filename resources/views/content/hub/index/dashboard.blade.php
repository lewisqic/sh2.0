@extends('layouts.hub')

@section('content')

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li class="is-active"><a href="#">Dashboard</a></li>
        </ul>
    </nav>

    <h2 class="card-title">
        <i class="fal fa-fw fa-chart-line"></i> Recent Footprints
        <span class="tools-wrapper">
            <a href="#" class="has-font-14">view more <i class="fal fa-angle-right"></i></a>
        </span>
    </h2>

    <div class="card">
        <div class="card-content">

            <div class="columns">
                <div class="column">
                    <h5 class="has-mb-10">Visitors <small>(past week)</small></h5>

                    <img src="{{ url('images/footprints.jpg') }}" alt="">
                </div>
                <div class="column">

                    <h5 class="has-mb-10">Popular Pages <small>(past week)</small></h5>

                    <div class="card has-mb-12">
                        <div class="card-content has-px-6 has-py-4">
                            <a href="#">Diversified Net-Leased Portfolios</a>
                            <span class="is-pulled-right has-font-14 has-text-grey is-hidden-touch">811 visitors | 1440 page views</span>
                        </div>
                    </div>
                    <div class="card has-mb-12">
                        <div class="card-content has-px-6 has-py-4">
                            <a href="#">Access Team Portfolios</a>
                            <span class="is-pulled-right has-font-14 has-text-grey is-hidden-touch">645 visitors | 840 page views</span>
                        </div>
                    </div>
                    <div class="card has-mb-12">
                        <div class="card-content has-px-6 has-py-4">
                            <a href="#">Diversified Net-Leased Portfolios</a>
                            <span class="is-pulled-right has-font-14 has-text-grey is-hidden-touch">811 visitors | 1440 page views</span>
                        </div>
                    </div>
                    <div class="card has-mb-12">
                        <div class="card-content has-px-6 has-py-4">
                            <a href="#">Access Team Portfolios</a>
                            <span class="is-pulled-right has-font-14 has-text-grey is-hidden-touch">645 visitors | 840 page views</span>
                        </div>
                    </div>
                    <div class="card has-mb-12">
                        <div class="card-content has-px-6 has-py-4">
                            <a href="#">Diversified Net-Leased Portfolios</a>
                            <span class="is-pulled-right has-font-14 has-text-grey is-hidden-touch">811 visitors | 1440 page views</span>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>

    <h2 class="card-title has-mt-30">
        <i class="fal fa-fw fa-file-alt"></i> Leads & Form Submissions
        <span class="tools-wrapper">
            <a href="#" class="has-font-14">view more <i class="fal fa-angle-right"></i></a>
        </span>
    </h2>

    <div class="card">
        <div class="card-content">

            <div class="card">
                <div class="card-header has-background-content-bg has-px-6 has-py-4">
                    <i class="fal fa-user has-mt-4 has-mr-4"></i> <a href="#">Lead: Equity Email Survey</a>
                    <span class="has-ml-auto has-text-grey has-font-14">
                        January 12th, 2019 4:13 PM
                    </span>
                </div>
                <div class="card-content has-p-6 has-font-14">
                    <div class="columns">
                        <div class="column">
                            <strong>Name:</strong> Kenneth Gilmore
                        </div>
                        <div class="column">
                            <strong>Email:</strong> kenneth.gil@example.com
                        </div>
                        <div class="column is-two-fifths">
                            <strong>Response:</strong> Lorem ipsum dolor sit amet, consectetur elit.
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header has-background-content-bg has-px-6 has-py-4">
                    <i class="fal fa-user has-mt-4 has-mr-4"></i> <a href="#">Lead: Equity Email Survey</a>
                    <span class="has-ml-auto has-text-grey has-font-14">
                        January 12th, 2019 4:13 PM
                    </span>
                </div>
                <div class="card-content has-p-6 has-font-14">
                    <div class="columns">
                        <div class="column">
                            <strong>Name:</strong> Jackson Stewart
                        </div>
                        <div class="column">
                            <strong>Email:</strong> kenneth.gil@example.com
                        </div>
                        <div class="column is-two-fifths">
                            <strong>Response:</strong> Lorem ipsum dolor sit amet, consectetur elit.
                        </div>
                    </div>
                </div>
            </div>

            <div class="card has-mb-0">
                <div class="card-header has-background-content-bg has-px-6 has-py-4">
                    <i class="fal fa-user has-mt-4 has-mr-4"></i> <a href="#">Lead: Equity Email Survey</a>
                    <span class="has-ml-auto has-text-grey has-font-14">
                        January 12th, 2019 4:13 PM
                    </span>
                </div>
                <div class="card-content has-p-6 has-font-14">
                    <div class="columns">
                        <div class="column">
                            <strong>Name:</strong> Robert Humphries
                        </div>
                        <div class="column">
                            <strong>Email:</strong> kenneth.gil@example.com
                        </div>
                        <div class="column is-two-fifths">
                            <strong>Response:</strong> Lorem ipsum dolor sit amet, consectetur elit.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <h2 class="card-title has-mt-30">
        <i class="fal fa-fw fa-address-book"></i> My Contacts
        <span class="tools-wrapper">
            <a href="#" class="has-font-14">view more <i class="fal fa-angle-right"></i></a>
        </span>
    </h2>

    <div class="card">
        <div class="card-content has-pb-0">

            <div class="columns">
                <div class="column">
                    <div class="card">
                        <div class="card-header has-background-content-bg is-display-block has-text-centered has-py-6">
                            Today
                        </div>
                        <div class="card-content has-text-centered has-font-26 has-text-primary">
                            1
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-header has-background-content-bg is-display-block has-text-centered has-py-6">
                            Past 7 Days
                        </div>
                        <div class="card-content has-text-centered has-font-26 has-text-primary">
                            7
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-header has-background-content-bg is-display-block has-text-centered has-py-6">
                            Past Month
                        </div>
                        <div class="card-content has-text-centered has-font-26 has-text-primary">
                            23
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-header has-background-content-bg is-display-block has-text-centered has-py-6">
                            All Time
                        </div>
                        <div class="card-content has-text-centered has-font-26 has-text-primary">
                            227
                        </div>
                    </div>
                </div>
                <div class="column is-one-quarter">
                    <h5 class="has-mb-10 has-lh-10">Recently Added</h5>
                    <ul>
                        <li><a href="#">Income Fund RIA</a></li>
                        <li><a href="#">John Doe</a></li>
                        <li><a href="#">NLP30 Lender</a></li>
                        <li><a href="#">NLP30 Offering</a></li>
                        <li><a href="#">Jane Doe</a></li>
                    </ul>
                </div>
                <div class="column is-one-quarter">
                    <h5 class="has-mb-10 has-lh-10">Recently Updated</h5>
                    <ul>
                        <li><a href="#">NLP30 Offering</a></li>
                        <li><a href="#">NLP30 Lender</a></li>
                        <li><a href="#">John Doe</a></li>
                        <li><a href="#">Income Fund RIA</a></li>
                        <li><a href="#">Jane Doe</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

@endsection