<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTAL PELAPORAN eGUMIS MOBILE APPS</title>
    <link rel="manifest" href="/assets/img/favicons/manifest.json">
    <meta name="theme-color" content="#ffffff">
    <script src="/assets/js/config.js"></script>
    <script src="/vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/js/flatpickr.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script src="/vendors/choices/choices.min.js"></script>
    <link href="/vendors/choices/choices.min.css" rel="stylesheet" />


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css"
        rel="stylesheet">

    <link href="/vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="/vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="/vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    <link href="/vendors/fullcalendar/main.min.css" rel="stylesheet">
    <link href="/vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="/vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="/assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="/assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="/assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="/assets/css/user.min.css" rel="stylesheet" id="user-style-default">


    <script>
        var APP_URL = {!! json_encode(url('/')) !!}

        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>

    <style>
        .form-select{
            border-color: #1A7FE5;
            box-shadow: inset 2px 2px 5px 2px lightgrey;
        }
        /* .card-body{
            background: #003478;
        } */
        .form-control {
            border-color: #1A7FE5;
            box-shadow: inset 2px 2px 5px 2px lightgrey;
        }

        .text-primary {
            color: #EB5500 !important;
        }

        .bg-primary {
            background-color: #EB5500 !important;
            color: white;
        }

        .text-dark-green-jkr {
            color: #1A7FE5;
        }

        .btn-green-jkr {
            color: white;
            background-color: #5B8E7D;
        }

        .btn-green-jkr:hover {
            color: white;
            background-color: #335349;
        }

        .btn-outline-green-jkr {
            color: #5B8E7D;
            background-color: white;
            border-color: #5B8E7D;
        }

        .btn-outline-green-jkr:hover {
            color: white;
            background-color: #335349;
        }

        .btn-orange-jkr {
            color: white;
            background-color: #EB5500;
        }

        .btn-orange-jkr:hover {
            color: white;
            background-color: #be4803;
        }

        .btn-outline-orange-jkr:hover {
            color: white;
            background-color: #be4803;
        }

        .bg-orange-jkr{
            background-color: #EB5500;
        }

        .line-table{
            border-color: #1A7FE5;
        }
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 99999;
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            align-items: center;
            background: none repeat scroll 0 0 #ffffff75;
        }

        .word {
            position: absolute;
            margin-top: 120px;
            margin-left: 25px;
            font-weight: bold;
        }

        .spinner {
            border: 1px solid transparent;
            border-radius: 3px;
            position: relative;
        }

        .spinner:before {
            content: "";
            box-sizing: border-box;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 45px;
            height: 45px;
            margin-top: -10px;
            margin-left: -10px;
            border-radius: 50%;
            border: 5px solid #1A7FE5;
            border-top-color: #ffffff00;
            animation: spinner 0.9s linear infinite;
        }

        @keyframes spinner {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
    

    @include('sweetalert::alert')



    <style>
        /* .form-control {
            border-color: #1A7FE5;
        } */

        .nav-link-egumis.active {
            background-color: #003478;
            color: white;
        }

        .nav-link.active {
            background-color: #003478;
            border-radius: 2px;
            color: black;
        }

        .nav-link.active-main {
            background-color: #003478;
            border-radius: 5px;
            color: white;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #003478;
        }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
            color: #003478;
            -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
            -o-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        }

        .nav-link:hover,
        .nav-link:focus {
            color: #fff;
            background-color: #003478;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-primary,
        .navbar-vertical .btn-purchase,
        .tox .tox-menu__footer .tox-button:last-child,
        .tox .tox-dialog__footer .tox-button:last-child {
            color: #003478;
            background-color: #FFFFFF;
            border-color: #FFFFFF;
            -webkit-box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%);
            box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%);
        }

        .btn-primary:hover,
        .navbar-vertical .btn-purchase:hover,
        .tox .tox-menu__footer .tox-button:hover:last-child,
        .tox .tox-dialog__footer .tox-button:hover:last-child {
            color: #fff;
            background-color: #003478;
            border-color: #FFF;
        }

        .btn-check:focus+.btn-primary,
        .navbar-vertical .btn-check:focus+.btn-purchase,
        .tox .tox-menu__footer .btn-check:focus+.tox-button:last-child,
        .tox .tox-dialog__footer .btn-check:focus+.tox-button:last-child,
        .btn-primary:focus,
        .navbar-vertical .btn-purchase:focus,
        .tox .tox-menu__footer .tox-button:focus:last-child,
        .tox .tox-dialog__footer .tox-button:focus:last-child {
            color: #fff;
            background-color: #003478;
            border-color: #003478;
            -webkit-box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%), 0 0 0 0 rgb(76 143 233 / 50%);
            box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%), 0 0 0 0 rgb(76 143 233 / 50%);
        }

        .btn-secondary {
            color: #FFF;
            background-color: #1A7FE5;
            border-color: #FFF;
            -webkit-box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%);
            box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%);
        }

        .btn-secondary:hover,
        .navbar-vertical .btn-purchase:hover,
        .tox .tox-menu__footer .tox-button:hover:last-child,
        .tox .tox-dialog__footer .tox-button:hover:last-child {
            color: #003478;
            background-color: #fff;
            border-color: #003478;
        }

        .btn-outline-primary {
            color: #F4A258;
            border-color: #F4A258;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #FFF;
            border-color: #FFF;
        }

       
        .nav-link-side {
            /* display: block; */
            padding: 0.5rem 1rem;
            color: #fff;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
            -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .nav-link-side {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }
        }

        .nav-link-side:hover,
        .nav-link-side:focus {
            color: #fff;
            background-color: #003478;
            text-decoration: none;
            border-radius: 5px;
        }

        .nav-link-side.disabled {
            color: #748194;
            pointer-events: none;
            cursor: default;
        }

        li {
            display: list-item;
            color: #003478;
            text-align: -webkit-match-parent;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: var(--falcon-pagination-active-color);
            background-color: #003478;
            border-color: #003478;
        }

        .dropdown-indicator:after {
            content: "";
            display: block;
            position: absolute;
            right: 5 px;
            height: 0.4 rem;
            width: 0.4 rem;
            border-right: 1 px solid white;
            border-bottom: 1 px solid white;
            top: 50%;
            -webkit-transform: translateY(-50%) rotate(45deg);
            -ms-transform: translateY(-50%) rotate(45deg);
            transform: translateY(-50%) rotate(45deg);
            -webkit-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
            -webkit-transform-origin: center;
            -ms-transform-origin: center;
            transform-origin: center;
            -webkit-transition-property: border-color, -webkit-transform;
            transition-property: border-color, -webkit-transform;
            -o-transition-property: transform, border-color;
            transition-property: transform, border-color;
            transition-property: transform, border-color, -webkit-transform;
        }

        @media (min-width: 100px) {
            /* @media only screen and (max-width: 600px) and (min-width: 400px)  {  */
            .navbar-vertical.navbar-expand-xl {
                max-width: 350px;
                top: 0;
                height: 100%;
                margin: 0;
            }

            .navbar-vertical.navbar-expand-xl .navbar-collapse {
                margin-top: 50px;
                width: 100%;
                /* height: 100%; */
                background: #1A7FE5;
            }

            .navbar-vertical.navbar-expand-xl .navbar-vertical-content {
                width: 100%;
                height: 100%;
                padding: 0.5rem 0 0 0;
            }

            .navbar-vertical {
                position: absolute;
                background: #1A7FE5;
                max-width: 350px;
            }

            .navbar-vertical-content {
                background: #1A7FE5;
                width: 350px;
            }

            .navbar-nav {
                background: #1A7FE5;
                width: 350px;
            }

            .egumis-m {
                margin-left: 350px;
            }

            .navbar-vertical .navbar-collapse .navbar-vertical-content {
                padding: 0 1rem;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                max-height: 100%;
            }
        }

        @media only screen and (max-width: 1024px) {
            .egumis-m {
                margin-left: 0px;
            }

            .navbar-vertical {
                position: absolute;
                background: #1A7FE5;
                max-width: 100%;
            }

            .navbar-vertical.navbar-expand-xl {
                max-width: 100%;
                top: 40px;
                height: auto;
                margin: 0;

            }

            .navbar-vertical.navbar-expand-xl .navbar-collapse {
                width: 100%;
                height: auto;
                background: #003478;
            }

            .navbar-vertical.navbar-expand-xl .navbar-vertical-content {
                width: 100%;
                height: auto;
                padding: 0.5rem 0 0 0;
            }

            .navbar-vertical {
                position: absolute;
                background: #1A7FE5;
                max-width: 100%;
            }

            .navbar-vertical-content {
                background: #1A7FE5;
                width: 100%;
            }
        }

        .form-check-input:checked {
            background-color: #1A7FE5;
            border-color: #1A7FE5;
        }

    </style>
    <?php
        use Illuminate\Support\Facades\Auth;
    ?>

    <main class="main" id="top">
        <nav class="navbar navbar-expand p-3" style="box-shadow: 0px 2px 2px 1px lightgrey; background-image: url('/assets/img/header.png'); z-index: 2;">

            <div class="col-3 text-center" style="filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));">
                <img src="/assets/img/IOS-eGUMIS 1024px 1.png" alt="EGUMIS" style="width: 127px; height:127px">
            </div>

            <div class="col">
                <h1 class="text-white">PORTAL PELAPORAN eGUMIS MOBILE APPS</h1>
                <h4 class="text-white">JABATAN AKAUNTAN NEGARA MALAYSIA (JANM)</h4>
            </div>
        </nav>
        <div class="container-fluid ps-0" data-layout="container">
            @include('layouts.side-bar')
            <div class="row">
                <div class="content py-5" style="background: white">
                    <div class="egumis-m">
                        <div class="container">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="/vendors/popper/popper.min.js"></script>
    <script src="/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="/vendors/anchorjs/anchor.min.js"></script>
    <script src="/vendors/is/is.min.js"></script>
    <script src="/vendors/chart/chart.min.js"></script>
    <script src="/vendors/echarts/echarts.min.js"></script>
    <script src="/vendors/fullcalendar/main.min.js"></script>
    <script src="/assets/js/flatpickr.js"></script>
    <script src="/vendors/fontawesome/all.min.js"></script>
    <script src="/vendors/lodash/lodash.min.js"></script>
    <script src="/vendors/list.js/list.min.js"></script>
    <script src="/assets/js/theme.js"></script>

    @yield('scripts')
</body>



</html>