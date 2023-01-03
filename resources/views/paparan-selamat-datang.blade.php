<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>PORTAL PELAPORAN eGUMIS MOBILE APPS</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/egumis_logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/egumis_logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/egumis_logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/egumis_logo.png">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../assets/js/config.js"></script>
    <script src="../../../vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="../../../vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="../../../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
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
    @include('sweetalert::alert')
    <style>
        body, html {
        height: 100%;
        margin: 0;
        background: url("../../../assets/img/bg-4.png") no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        }

        .splash {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100vh;
          background: url(../../../assets/img/c1.jpeg);
          z-index: 200;
          color: #fff;
          text-align: center;
          line-height: 90vh;
        }

        .text-primary{
            color: #003478 !important;
        }

        .btn-primary{
            background-color: #1A7FE5 !important;
            border-color: #1A7FE5 !important;
        }

        .btn-outline-primary{
            background-color: white;
            border-color: #1A7FE5 !important;
            color: #1A7FE5;
        }
        
        .btn-outline-primary:hover {
            color: #fff;
            background-color: #1A7FE5;
            border-color: #1A7FE5;
        }
        @keyframes fadeIn{
          to {
            opacity: 1;
          }
        }

        .fade-in {
          opacity: 0;
          animation: fadeIn 1s ease-in forwards;
        }
    </style>
        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
            @yield('content')
        </main>

    <body>

        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
            <div class="container-fluid">
                <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
                </script>
                
                <div class="container-fluid">
                    <div class="row min-vh-100 flex-center g-0">
                        <div class="col-lg-6 col-xxl-5 py-3 position-relative">
                            <div class="card fade-in">
                                <div class="card-body p-0">
                                    <div class="row g-0 h-100 d-flex flex-center">
                                        <div class="col-lg-8 d-flex flex-center">
                                            <div class="p-4 p-md-5 flex-grow-1">
                                                <div class="row flex-between-center">
                                                    <div class="text-center fade-in" style="filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));">
                                                        <img src="/assets/img/IOS-eGUMIS 1024px 1.svg" alt="EGUMIS" style="width: 142px; height:142px">
                                                    </div>
                                                    <div class="col mb-3">
                                                        <h2 class="text-primary text-center fade-in">SELAMAT DATANG</h2>
                                                        <h4 class="text-center fade-in" style='font-weight: bold;'>PORTAL PELAPORAN eGUMIS</h4>
                                                        <h6 class="text-center fade-in">Jabatan Akauntan Negara Malaysia (JANM)</h6>
                                                    </div>
                                                </div>       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--Container Fluid-->
        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->
    
        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="../../../vendors/popper/popper.min.js"></script>
        <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
        <script src="../../../vendors/anchorjs/anchor.min.js"></script>
        <script src="../../../vendors/is/is.min.js"></script>
        <script src="../../../vendors/fontawesome/all.min.js"></script>
        <script src="../../../vendors/lodash/lodash.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="../../../vendors/list.js/list.min.js"></script>
        <script src="../../../assets/js/theme.js"></script>
    </body>
</html>