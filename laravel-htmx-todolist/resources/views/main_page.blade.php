@extends('layouts.sort_amp')

@section('sort_by_source')
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Review</th>
        </tr>
    </thead>

    <tbody>

    </tbody>
@endsection

    <title>Headphones Power Calculator</title>
    <link rel="preload" as="font" href="" crossorigin="">
    <link rel="preload" as="font" href="" crossorigin="">
    <style id="wpr-usedcss">

    </style>
    <meta name="description"
        content="Calculate the power needed to drive your headphone based on sensitivity (db/mw or db/V), impedance (ohms) and loudness (dbSPL)">
    <link rel="canonical" href="">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Headphones Power Calculator">
    <meta property="og:description"
        content="Calculate the power needed to drive your headphone based on sensitivity (db/mw or db/V), impedance (ohms) and loudness (dbSPL)">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="Headphonesty">
    <meta property="article:publisher" content="">
    <meta property="article:modified_time" content="2023-05-24T10:31:49+00:00">
    <meta property="og:image" content="">
    <meta property="og:image:width" content="1330">
    <meta property="og:image:height" content="778">
    <meta property="og:image:type" content="image/jpeg">


    <link rel="dns-prefetch" href="https://scripts.mediavine.com/">
    <link rel="dns-prefetch" href="https://a.omappapi.com/">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net/">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com/">
    <link rel="alternate" type="application/rss+xml" title="Headphones" href="">
    <style type="text/css" media="all"></style>
    <style id="classic-theme-styles-inline-css"></style>
    <style id="global-styles-inline-css"></style>






    <meta name="generator" content="Site Kit by Google 1.104.0">
    <meta name="p:domain_verify" content="859612a861cc7c28ef81d9f07678dba5">
    <meta name="google-site-verification" content="RAD7POWkDtsh106qVJtr6seQsdW6sTDC9Sio7bd593M">
    <meta name="ahrefs-site-verification" content="c6bf888dcc207e7a02749de16fa98e46b2ea69b19e8f24ada7a28a3700337a85">
    <meta name="facebook-domain-verification" content="8lwhjpyocw7rencxeodstno2ebw7bl">
    <link rel="preload" href="" as="font" type="font/ttf" crossorigin="">






</head>

<body
    class="page-template page-template-calculator page-template-calculator-php page page-id-347 wp-custom-logo mv-loaded mv-device-desktop"
    data-slot-rendered-universalplayer="true" data-slot-rendered-adhesion="true">
    <header class="header scroll">


        <div class="container-fluid">
            <div class="header-inner row align-items-center ps-2 pe-2">
                <div class="burger col-auto">
                    <a href="javascript:void(0)">
                        <svg class="burger-icon" width="29" height="25" viewBox="0 0 29 25"
                            xmlns="http://www.w3.org/2000/svg">
                            <g stroke-width="5" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                <path stroke="#04A777" d="M2.5 2.5H26"></path>
                                <path stroke="#E36F3F" d="M8.5 12.5H26"></path>
                                <path stroke="#F1C40F" d="M16.5 22.5H26"></path>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="logo col">
                    <a href="">
                        <svg class="logo-img" width="44" height="51" viewBox="0 0 44 51"
                            xmlns="http://www.w3.org/2000/svg">
                            <g fill-rule="nonzero" fill="none">

                            </g>
                        </svg>
                        <svg class="logo-txt" width="210" height="19" viewBox="0 0 210 19"
                            xmlns="http://www.w3.org/2000/svg">
                            <path></path>
                        </svg>
                    </a>
                </div>
                <div class="col-auto">
                    <nav class="row align-items-center">
                        <div class="col-auto">
                            <div class="menu-top-nav-container">
                                <ul id="primary-menu" class="menu">
                                    <div>
                                        <input name="price_start" type="text" value="500" id="">
                                    
                                        <input name="price_end" type="text" value="1000" id="">                                  
                                    </div>
                                    <li id="menu-item-2019817"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2019817">
                                        <a hx-post="{{ url('api/amp_price_sort') }}" hx-trigger="click once"
                                            hx-target="#div_to_past" hx-swap="innerHTML" href="">Reviews</a>
                                    </li>
                                    <li id="menu-item-2019818"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2019818">
                                        <a href="">Learn</a>
                                    </li>
                                    <li id="menu-item-2019819"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2019819">
                                        <a href="">Buyer’s Guide</a>
                                    </li>
                                    <li id="menu-item-2022573"
                                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-347 current_page_item menu-item-2022573">
                                        <a href="" aria-current="page">Power Calculator</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                       
                        
                        <div class="col-auto">
                            <a href="javascript:void(0)" id="search" class="d-block">
                                <svg class="search-icon" width="28" height="27" viewBox="0 0 28 27"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g transform="translate(0 1)" fill="none" fill-rule="evenodd">
                                        <circle stroke="currentColor" stroke-width="2" cx="17" cy="10"
                                            r="10"></circle>
                                        <path d="M10 10s0 3 2 5 5 2 5 2" stroke="currentColor" stroke-linecap="round"
                                            fill="currentColor"></path>
                                        <path fill="currentColor"
                                            d="M1.439 25.373a2.003 2.003 0 01-.045-2.833L8.676 15l1.438 1.39 1.439 1.389-7.282 7.54a1.998 1.998 0 01-2.832.054z">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </nav>
                </div>
                <div class="search-bar">
                    <div class="search-bar-form-group ps-2 pe-2">
                        <form action="" method="post" class="row align-items-center gx-1">
                            @csrf <!-- {{ csrf_field() }} -->
                            <div class="col-auto">
                                <a href="javascript:void(0)" id="close-search">
                                    <svg class="cross-logo" width="30" height="30" viewBox="0 0 30 30"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30 3.535L26.465 0 15 11.465 3.535 0 0 3.535 11.465 15 0 26.465 3.535 30 15 18.535 26.465 30 30 26.465 18.535 15z"
                                            fill="#000" fill-rule="currentColor"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="col">
                                <input type="text" name="s" id="search-txt"
                                    placeholder="Search any topic here...." class="form-control txt-field"
                                    value="">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn">
                                    <svg class="search-icon" width="28" height="27" viewBox="0 0 28 27"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g transform="translate(0 1)" fill="none" fill-rule="evenodd">
                                            <circle stroke="currentColor" stroke-width="2" cx="17"
                                                cy="10" r="10"></circle>
                                            <path d="M10 10s0 3 2 5 5 2 5 2" stroke="currentColor"
                                                stroke-linecap="round" fill="currentColor"></path>
                                            <path fill="currentColor"
                                                d="M1.439 25.373a2.003 2.003 0 01-.045-2.833L8.676 15l1.438 1.39 1.439 1.389-7.282 7.54a1.998 1.998 0 01-2.832.054z">
                                            </path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <div id="primary" class="site-main main power-calculator">
        <header class="page-header section">
            <div class="container-xl">
                <h1 class="page-title section-head large mb-4">Headphones Power Calculator</h1>
                <div class="archive-description">
                    <p>Ever wonder if your headphones are merely existing in an unfulfilled half-life, yearning for more
                        power?</p>

                </div>
            </div>
        </header>



        <div id="div_to_past"></div>
        <div id="price_sort"></div>
        <div class="container-xl">
            <div class="page-content">
                <div class="section">
                    <div id="loading" style="display: none;">
                        <object class="pc-icon" alt=""></object>
                        <p>Loading Calculator...</p>
                    </div>
                    <div id="app" class="content">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <div class="box box-shadow p-4">
                                    <h2 class="m-0 mb-2 d-flex align-items-center gap-2"><object alt=""
                                            class="pc-icon"></object>
                                        Calculator
                                    </h2>
                                    <div class="custom-separator mt-4 mb-2"><span>Pick Headphones</span></div>
                                    <div>
                                        <div tabindex="-1" class="multiselect multiselect--above">
                                            <div class="multiselect__select">

                                            </div>
                                            <div class="multiselect_amp">

                                                <form action="" type="post">
                                                    @csrf <!-- {{ csrf_field() }} -->
                                                    <div class="input-group">
                                                        <select class="bg bg-white text-primary rounded form-control" name="sort_source" id="cari">

                                                            <option value="empty">Choose sort order...</option>
                                                            <option value="stereophile" <?php
                                                            if (isset($_POST['sort_source']) && $_POST['sort_source'] == 'stereophile') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Stereophile</option>
                                                            <option value="asr" <?php
                                                            if (isset($_POST['sort_source']) && $_POST['sort_source'] == 'asr') {
                                                                echo 'selected';
                                                            }
                                                            ?>>ASR</option>
                                                            <input class="btn btn-primary  text-light rounded fas fa-search" id="sort" type="submit"
                                                                value="sort">
                                                        </select>
                                                        {{-- <input class="btn btn-primary  text-light rounded fas fa-search" id="sort" type="submit"
                                                        value="sort"> --}}

                                                    </div>

                                                </form>

                                            </div>



                                        </div>
                                    </div>
                                    <div class="custom-separator mt-4 mt-lg-5 mb-2"><span>Or Use Custom
                                            Settings</span></div>
                                    <div>
                                        <div class="row">
                                            <div class="sensitivity-wrapper col-12 col-sm-6 col-lg-4"><label
                                                    for="sensitivity" class="form-label label">Headphone
                                                    Sensitivity</label>
                                                <div class="input-group box mb-3 mb-md-0"><input type="number"
                                                        id="sensitivity" placeholder="dB(1mW)"
                                                        class="form-control border-0">
                                                    <div class="input-group-append border-0">
                                                        <div tabindex="0" class="multiselect">
                                                            <div class="multiselect__select"></div>
                                                            <div class="multiselect__tags">
                                                                <div class="multiselect__tags-wrap"
                                                                    style="display: none;"></div> <!---->
                                                                <div class="multiselect__spinner"
                                                                    style="display: none;"></div> <input
                                                                    name="" type="text" autocomplete="off"
                                                                    placeholder="Select option" tabindex="0"
                                                                    class="multiselect__input" style="display: none;">
                                                                <span class="multiselect__single">db(1VRMS)</span>
                                                                <!---->
                                                            </div>
                                                            <div class="multiselect__content-wrapper"
                                                                style="max-height: 229.471px; display: none;">
                                                                <ul class="multiselect__content"
                                                                    style="display: inline-block;"> <!---->
                                                                    <li class="multiselect__element"><span
                                                                            data-select="" data-selected=""
                                                                            data-deselect=""
                                                                            class="multiselect__option multiselect__option--highlight"><span>db(1mw)</span></span>
                                                                        <!---->
                                                                    </li>
                                                                    <li class="multiselect__element"><span
                                                                            data-select="" data-selected=""
                                                                            data-deselect=""
                                                                            class="multiselect__option multiselect__option--selected"><span>db(1VRMS)</span></span>
                                                                        <!---->
                                                                    </li>
                                                                    <li style="display: none;"><span
                                                                            class="multiselect__option">No elements
                                                                            found. Consider changing the search
                                                                            query.</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4"><label for="impedance"
                                                    class="form-label label">Headphone Impedance</label>
                                                <div class="input-group box mb-3 mb-md-0"><input type="number"
                                                        id="impedance" placeholder="ohms"
                                                        class="form-control border-0"> <span id="basic-addon2"
                                                        class="input-group-text border-0 bg-transparent">Ω</span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4"><label for="loudness"
                                                    class="form-label label">Headphone Loudness</label>
                                                <div class="input-group box"><input type="number" id="loudness"
                                                        placeholder="dBSPL" class="form-control border-0"> <span
                                                        id="basic-addon2"
                                                        class="input-group-text border-0 bg-transparent">dB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="result-wrapper box box-shadow">
                                    <div class="p-4">

                                        <div class="result row">
                                            <div class="col-4"><label for="power" class="label">Required
                                                    Power</label>
                                                <div class="unit-num">15.38 <span class="unit">mw</span></div>
                                            </div>
                                            <div class="col-4"><label for="volt" class="label">Required
                                                    Voltage</label>
                                                <div class="unit-num">1.00 <span class="unit">RMS (V)</span></div>
                                            </div>
                                            <div class="col-4"><label for="current" class="label">Required
                                                    Current</label>
                                                <div class="unit-num">15.38 <span class="unit">RMS (mA)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="share"><label for="share" class="label fw-bold pe-2">Share
                                            Settings 👇</label>
                                        <div class="input-group share-input"><input type="text" id="share"
                                                readonly="readonly" class="form-control border-0 rounded-0 fw-normal">
                                            <div class="input-group-append"><button type="button" id="button-addon2"
                                                    class="btn copy rounded-0 fw-bold btn-info">COPY URL</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <hr>
                        <div class="device-compat-table d-flex">
                            <h3 class="device-label m-0 mb-3 d-flex align-items-center gap-2"><object
                                    data="./How_to_Create_a_Search_Engine_With_Python_and_Laravel_Built_In_files/amp.svg"
                                    alt="" class="pc-icon"></object> <b>Amps</b></h3>
                            <div class="flex-grow-1">
                                <div class="row">
                                    <div class="col-6 col-sm-4 col-md-3">
                                        <div class="device-card mb-3">
                                            <div class="device-card-name"><b>Woo Audio WA8</b></div>
                                            <div class="device-card-power"><span class="label">14.491 RMS
                                                    (V)</span></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <hr>


                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
