<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
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
    
<style>
    body, html {
      height: 100%;
      margin: 0;
    }

    .bg {
      /* The image used */
      background-image: url("../assets/img/bg-4.jpg");

      /* Full height */
      width: 100%;
      height: 100%; 

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

      input[type="email"]::placeholder { 
            /* Firefox, Chrome, Opera */
            text-align: center;
        }
        input[type="email"]:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            text-align: center;
        }
        input[type="email"]::-ms-input-placeholder {   
            /* Microsoft Edge */
            text-align: center;
        }
        .text-primary{
            color: #1A7FE5 !important;
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

        /* .title {
          left: 220px;
          top: 150px;
        }

        .login {
          right: 400px;
          top: 150px;
        }

        .logo {
          right: 150px;
          top: 150px;
        } */

        .half-container{
          float: left;
          width: 50%;
          margin-right: auto;
          margin-left: auto;
          padding: 50px;
      }

</style>
</head>
<body>

<div class="bg">
  <div class="half-container">
  {{-- <div class="split left"> --}}
    <div class="background-image">
      <div class="text-center" style="filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));">
        <img src="/assets/img/IOS-eGUMIS 1024px 1.svg" alt="EGUMIS" style="width: 242px; height:242px">
      </div>

      <div class="text-center">
        <h4 style='font-weight: bold;'>PORTAL PELAPORAN eGUMIS MOBILE APPS</h4>
        <h5 style='font-weight: bold;'>Jabatan Akauntan Negara Malaysia (JANM)</h5>
      </div>

      {{-- <div class="half-container"> --}}
        {{-- <div class="row"> --}}
          {{-- <div class="col-6 col-md-4"> --}}
            <form method="POST" action="/myLogin">
              @csrf
              <div class="form-check mx-7 my-3">
                  <div id="nric">
                      <input class="form-control text-center" type="email" name="email"  placeholder="Emel" required/>
                  </div>
              </div>
              <div class="form-check mx-7 my-3">
                  <div>
                      <input class="form-control text-center" type="password" name="password"  placeholder="Kata Laluan" required autocomplete="current-password"/>
                  </div>
              </div>
              <div class="form-check mx-7 my-3">
              <div>
                  <button class="btn btn-primary d-block w-100 mt-3" type="submit">Log Masuk</button>
              </div>
              <div style="text-align: right;">
                {{-- <a class="text-primary" href="/lupa-katalaluan">Lupa Kata Laluan</a> --}}
                <a class="text-primary" data-toggle="modal" data-target="#exampleModalCenter">Lupa Kata Laluan</a>
              </div>
            </form>

            <!-- Button trigger modal -->
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
              Launch demo modal
            </button> --}}

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/login">
                      @method('PUT')
                      @csrf
                      <div class="row mx-2 mb-2 mt-5">
                        <div class="col mb-2">
                            <input placeholder="Alamat Emel" class="form-control textbox-n" type="email"/>
                            <button type="submit" class="btn btn-primary d-block w-100 mt-3">Hantar</button>
                        </div>                      
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          {{-- </div> --}}
        {{-- </div>  --}}
    </div>
  {{-- </div> --}}
</div>

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>