<style>
    #wrapper {
    padding-left: 250px;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 0;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 250px;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #000;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 0;
}

#page-content-wrapper {
    padding: 20px;
    position: relative;
    width: 100%;
}

#wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0;
}
    /* .sidebar{
        position: -webkit-sticky;
        position: sticky;
        top: 0;
    } */


    /* Fixed sidenav, full height */
    /* .sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
    } */
    /* Style the sidenav links and the dropdown button */
    /* .sidenav a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
    } */

    /* On mouse-over */
    /* .sidenav a:hover, .dropdown-btn:hover {
    color: #f1f1f1;
    } */

    /* Add an active class to the active dropdown button */
    /* .active {
    background-color: green;
    color: white;
    } */
    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    /* .dropdown-container {
    display: none;
    background-color: #262626;
    padding-left: 8px;
    } */

    /* Optional: Style the caret down icon */
    /* .fa-caret-down {
    float: right;
    padding-right: 8px;
    } */

    /* uncomment sini */
    /* sidebar wrapper for mobile-view */
    .sidebar-wrapper {
        max-width: 400px;
        margin-bottom: 50px;
    }

    /* @media (max-width:991px) {
	.sidebar-wrapper {
		width: 100%;
		max-width: 992px;
		margin-bottom: 0
	    }
    } */
    @media screen (min-width:320px)
    {
	.sidebar-wrapper {
		width: 50%;
		min-width: 320px;
        /* max-width: 480px; */
		margin-bottom: 0;
	    }
    }

    .sidebar-wrapper>ul li {
        font-size: 1.8rem;
        font-weight: 500;
    }  
    
    .sidebar-wrapper nav>ul>li {
        border-top: 1px solid #e9e7e7;
        font-weight: 500;
    }

    .sidebar-wrapper nav>ul>li:first-child {
	    border: 0;
    }

    .sidebar-wrapper nav>ul>li>a {
        color: #1f1a17;
        display: block;
        padding: 20px 20px;
    }
    .sidebar-wrapper nav>ul>li>a:hover {
        color: #fff;
        background: #ed145b;
    }
    /* sidebar wrapper for mobile-view */

    .sidebar li.submenu{ 
        list-style: none;
        margin: 0; 
        padding: 0; 
        padding-left: 1rem; 
        padding-right: 1rem;
    }

    .nav li.active {
        border-bottom: 1px solid #338ecf;
        background: #eee
    }

    li.list-group-item a:hover {
        background-color: transparent;
    }

    li.list-group-item.active a {
        color: #fff;
    }

    li.list-group-item.active a:hover {
        background-color: transparent;
    }

    .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
        background-color: #a8a8a8;
    }

    
    .stripe-2 {
      background-color: #fff !important;
    }
    .stripe-1 {
      background-color: #d8e4f4 !important;
    }

    .switch {
        position: relative;
        width: 200px;
        height: 45px;
        text-align: center;
    }

    .switch input {
        appearance: none;
        width: 200px;
        height: 45px;
        background: #fff;
        outline: none;
    }

    .switch input::before,
    .switch input::after {
        z-index: 2;
        position: absolute;
        top: 56%;
        transform: translateY(-50%);
        font-weight: bolder;
    }

    .switch input::before {
        content: "Express";
        font-size: 12px;
        left: 25px;
    }

    .switch input::after {
        content: "Non-Express";
        font-size: 12px;
        right: 20px;
    }

    .switch input:checked {
        background: #fff;
    }

    .switch label {
        z-index: 1;
        position: absolute;
        top: 10px;
        bottom: 1px;
    }

    .switch input:checked::before {
        color: #fff;
        transition: color 0.5s;
    }
    
    .switch input:checked::after {
        color: #003478;
        transition: color 0.5s;
    }

    .switch input:checked+label {
        left: 10px;
        right: 100px;
        background: #003478;
        transition: left 0.5s, right 0.4s 0.2s;
    }

    .switch input:not(:checked) {
        background: #fff;
        transition: background 0.2s;
    }

    .switch input:not(:checked)::before{
        color: #003478;
        transition: color 1s;
    }

    .switch input:not(:checked)::after {
        color: #fff;
        transition: color 1s 0.2s;
    }

    .switch input:not(:checked) +label {
        left: 90px;
        right: 10px;
        background: #003478;
        transition: left 0.4s 0.2s, right 0.4s, background 0.2s;
    }

    .modal {
        position: fixed;
        top: 0;
        right: 0;
        z-index: 10000 !important
            /* width: 100vw;
        height: 100vh; */
    }

    .modal-content {
        z-index: 20000 !important
    }

    .navbar-vertical .navbar-nav .nav-item .nav-link.dropdown-indicator:after {
        border-color: white;
    }

    .navbar-vertical .navbar-nav .nav-item .nav-link:hover.dropdown-indicator:after,
    .navbar-vertical .navbar-nav .nav-item .nav-link:focus.dropdown-indicator:after {
        border-color: white;
    }

    .info-sidebar {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        line-height: 13px;
        color: white;
        line-height:  25px;
    }

    /* .profil-icon {
        width: 33.07px;
        height: 33.07px;
    } */
    .profil-bg {
        height: 59.17px;
        width: 59.17px;
    }

    .c1 {
        border-radius: 4px;
        background: #003478;
    }

    /* Screen Resolution Sidebar
    @media screen and (min-width: 320px){
        body {
            width: 100%;
        }
    } */

</style>
<script>
    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
    if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
    }
</script>

<script>
    var btn = document.getElementById('btn')

    function leftClick() {
        btn.style.left = '0'
    }

    function rightClick() {
        btn.style.left = '110px'
    }
</script>

<!--Submenu Collapse-->
<script>
    document.addEventListener("DOMContentLoaded", function(){
    document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); 
// DOMContentLoaded  end
</script>

<!--Active Sidebar-->
<script>
    $(".nav a").on("click", function() {
    $(".nav").find(".active").removeClass("active");
    $(this).parent().addClass("active");
    });
</script>

{{-- <script>
    $(document).ready(function() {
    $.each($('#navbar').find('li'), function() {
        $(this).toggleClass('active', 
            window.location.pathname.indexOf($(this).find('a').attr('href')) > -1);
    }); 
});
</script> --}}

<script>
    $(".menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
    



<nav class="sidebar navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>

    <div class="sidebar-wrapper">
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            {{-- <div class="navbar-vertical-content scrollbar" id="checklim"> --}}
                <div class="navbar-vertical-content scrollbar perfect-scrollbar">
                {{-- <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav"> --}}
                    <ul class="nav flex-column mt-3" id="nav_accordion">
                            <div class="col text-center">
                                <p class="info-sidebar mt-3">Selamat Datang!</p>
                            </div>
                            <div class="card">
                                <div class="card-body c1" style="background: #003478">
                                    <div class="image mb-4" style="display: flex; justify-content: center;">
                                        <img src="/assets/img/user.png" class="rounded" width="64px" height="64px">
                                    </div>
                                    <div class="col text-center">
                                        <p class="info-sidebar mb-3">{{ Auth::user()->full_name }}</p>

                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                                LOG KELUAR</i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                                
                                <span class="switch mt-4">
                                    <form action="" method="">
                                        @csrf
                                        {{-- <input type="checkbox" id="switcher"> --}}
                                        <input type="checkbox">
                                        <label for="switcher"></label>
                                    </form>
                                </span>
                            
                            

                            {{-- <li class="nav-item has-submenu">
                                <a class="nav-link" href="/pengurusan-pengguna/daftar-pengguna"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                </svg>  PENGURUSAN PENGGUNA</a>
                                <ul class="submenu collapse">
                                    <li>
                                        <a class="nav-link" href="/pengurusan-pengguna/daftar-pengguna"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg> DAFTAR PENGGUNA</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="/pengurusan-pengguna/senarai-pengguna"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                        </svg> SENARAI PENGGUNA</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item has-submenu">
                                <a class="nav-link" href="/audit_trail"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                </svg> AUDIT TRAIL</a>
                                <ul class="submenu collapse">
                            <li><a class="nav-link" href="/audit_trail">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                </svg> LAPORAN AUDIT TRAIL</a></li>
                            <li><a class="nav-link" href="/audit_trail/log_audit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                </svg> LOG AUDIT</a></li>
                            <li><a class="nav-link" href="/audit_trail/log_akses"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                </svg> LOG AKSES</a> </li>
                                </ul>
                            </li>
                            
                            <li class="nav-item has-submenu">
                                <a class="nav-link" href="/pelaporan"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                </svg> PELAPORAN</a>
                                <ul class="submenu collapse">
                                    <li>
                                        <a class="nav-link" href="/pelaporan"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                            <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                            <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                            </svg> LAPORAN SEMAKAN WTD</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="/pelaporan/laporan_gagal_log_masuk"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                            <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                            <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                            </svg> LAPORAN GAGAL LOG MASUK/ SET SEMULA KATA LALUAN/ DAFTAR PENGGUNA MELALUI MOBILE APPS</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="/pelaporan/laporan_permohonan_tuntutan_aplikasi"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                            <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                            <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                            </svg> LAPORAN PERMOHONAN TUNTUTAN MELALUI APLIKASI MUDAH ALIH</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="/pelaporan/laporan_permohonan_wtd"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                            <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                            <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                            </svg> LAPORAN PERMOHONAN TUNTUTAN WTD MENGIKUT NEGERI</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="/pelaporan/laporan_tempoh_penggunaan_aplikasi"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                            <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                            <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                            </svg> LAPORAN TEMPOH PENGGUNAAN APLIKASI</a>
                                    </li>
                                </ul>
                            </li> --}}
                        
                            {{-- test sidebar  --}}
                            {{-- test sidebar --}}

                            <li class="nav-item mx-3 mx-md-0 mt-3">
                                <a class="nav-link py-0 {{ Request::is('pengurusan-pengguna/daftar-pengguna/*') ? 'active-main' : '' }}"
                                    href="/pengurusan-pengguna/daftar-pengguna" role="button" data-bs-toggle="collapse"
                                    aria-expanded="{{ Request::is('/pengurusan-pengguna/daftar-pengguna') ? 'true' : 'false' }}"
                                    aria-controls="/pengurusan-pengguna/daftar-pengguna">
                                    <div class="d-flex align-items-center nav-link-side px-0">
                                        <span class="px-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                        </svg> PENGURUSAN PENGGUNA</span>
                                    </div>
                                </a>
                                <ul class="nav-item collapse {{ Request::is('pengurusan-pengguna/daftar-pengguna/*') || Request::is('pengurusan-pengguna/daftar-pengguna') ? 'show' : 'false' }} my-1"
                                    id="pengurusan-pengguna/daftar-pengguna" style="list-style: none;">
                                    <li class="nav-item has-submenu">
                                        <a class="nav-link {{ Request::is('/pengurusan-pengguna/daftar-pengguna/*') ? 'active' : '' }} py-0"
                                            href="/pengurusan-pengguna/daftar-pengguna">
                                            <div class="d-flex align-items-center nav-link-side">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                                </svg>
                                                <span class="px-0 {{ Request::is('/pengurusan-pengguna/daftar-pengguna') ? 'text-dark' : '' }}">&nbsp; DAFTAR PENGGUNA</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::is('pengurusan-pengguna/senarai-pengguna/*') ? 'active' : '' }} py-0"
                                            href="/pengurusan-pengguna/senarai-pengguna">
                                            <div class="d-flex align-items-center nav-link-side">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                                    </svg>
                                                <span class="px-0 {{ Request::is('/pengurusan-pengguna/senarai-pengguna') ? 'text-dark' : '' }}">&nbsp; SENARAI PENGGUNA</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item mx-3 mx-md-0 mt-3">
                                <a class="nav-link py-0 {{ Request::is('audit_trail/*') ? 'active-main' : '' }}"
                                    href="/audit_trail" role="button" data-bs-toggle="collapse"
                                    aria-expanded="{{ Request::is('audit_trail') ? 'true' : 'false' }}"
                                    aria-controls="audit_trail">
                                    <div class="d-flex align-items-center nav-link-side px-0">
                                        <span class="px-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                        </svg> AUDIT TRAIL</span>
                                    </div>
                                </a>
                                <ul class="nav-item collapse {{ Request::is('audit_trail/*') || Request::is('audit_trail') ? 'show' : 'false' }} my-1"
                                    id="audit_trail" style="list-style: none;">
                                    <li class="nav-item has-submenu">
                                        <a class="nav-link {{ Request::is('/audit_trail') ? 'active' : '' }} py-0"
                                            href="/audit_trail">
                                            <div class="d-flex align-items-center nav-link-side">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                                </svg>
                                                <span class="px-0 {{ Request::is('/audit_trail') ? 'text-dark' : '' }}">&nbsp; LAPORAN AUDIT TRAIL</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::is('/audit_trail/log_audit/*') ? 'active' : '' }} py-0"
                                            href="/audit_trail/log_audit">
                                            <div class="d-flex align-items-center nav-link-side">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                                    </svg>
                                                <span class="px-0 {{ Request::is('/audit_trail/log_audit') ? 'text-dark' : '' }}">&nbsp; LOG AUDIT</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::is('/audit_trail/*') ? 'active' : '' }} py-0"
                                            href="/audit_trail/log_akses">
                                            <div class="d-flex align-items-center nav-link-side">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                                </svg>
                                                <span class="px-0 {{ Request::is('/audit_trail') ? 'text-dark' : '' }}">&nbsp; LOG AKSES</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item mx-3 mx-md-0 mt-3">
                                <a class="nav-link py-0 {{ Request::is('pelaporan/*') ? 'active-main' : '' }}"
                                    href="/pelaporan" role="button" data-bs-toggle="collapse"
                                    aria-expanded="{{ Request::is('pelaporan') ? 'true' : 'false' }}"
                                    aria-controls="pelaporan">
                                    <div class="d-flex align-items-center nav-link-side px-0">
                                        <span class="px-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                        </svg> PELAPORAN</span>
                                    </div>
                                </a>
                                <ul class="nav-item collapse {{ Request::is('pelaporan/*') || Request::is('pelaporan') ? 'show' : 'false' }} my-1"
                                    id="pelaporan" style="list-style: none;">
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::is('/pelaporan') ? 'active' : '' }} py-0"
                                            href="/pelaporan">
                                            <div class="d-flex align-items-center nav-link-side">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                                </svg>
                                                <span class="px-0 {{ Request::is('/pelaporan') ? 'text-dark' : '' }}">&nbsp; LAPORAN SEMAKAN WTD</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::is('/pelaporan') ? 'active' : '' }} py-0"
                                            href="/pelaporan/laporan_gagal_log_masuk">
                                            <div class="d-flex align-items-center nav-link-side">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                                </svg>
                                                <span style="text-align: justify" class="px-0 {{ Request::is('/pelaporan') ? 'text-dark' : '' }}">
                                                    LAPORAN GAGAL LOG MASUK/ <br>
                                                    SET SEMULA KATA LALUAN/ <br> 
                                                    DAFTAR PENGGUNA MELALUI MOBILE APPS <br>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::is('/pelaporan') ? 'active' : '' }} py-0"
                                            href="/pelaporan/laporan_permohonan_tuntutan_aplikasi">
                                            <div class="d-flex align-items-center nav-link-side">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                                </svg>
                                                <span class="px-0 {{ Request::is('/pelaporan') ? 'text-dark' : '' }}">LAPORAN
                                                PERMOHONAN <br>
                                                TUNTUTAN MELALUI APLIKASI MUDAH ALIH</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::is('/pelaporan') ? 'active' : '' }} py-0"
                                            href="/pelaporan/laporan_permohonan_wtd">
                                            <div class="d-flex align-items-center nav-link-side">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                                </svg>
                                                <span class="px-0 {{ Request::is('/pelaporan') ? 'text-dark' : '' }}">LAPORAN
                                                PERMOHONAN <br>
                                                TUNTUTAN WTD MENGIKUT NEGERI</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::is('/pelaporan') ? 'active' : '' }} py-0"
                                            href="/pelaporan/laporan_tempoh_penggunaan_aplikasi">
                                            <div class="d-flex align-items-center nav-link-side">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                                </svg>
                                                <span class="px-0 {{ Request::is('/pelaporan') ? 'text-dark' : '' }}">LAPORAN
                                                TEMPOH <br> 
                                                PENGGUNAAN APLIKASI</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul> 
                        {{-- <li class="nav-item">
                            <a class="nav-link {{ Request::is('/peranan') ? 'active' : '' }} py-0"
                                href="/peranan">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span
                                        class="px-0 {{ Request::is('/peranan') ? 'text-dark' : '' }}">PERANAN SUB-ADMIN</span>
                                </div>
                            </a>
                        </li>    --}}

                        
            </div>
        </div> 
    </div>
</nav>

    {{-- <div class="gap"> --}}
        {{-- <nav class="sidebar navbar navbar-vertical navbar-expand-xl navbar-light">
            <ul class="nav flex-column mt-3" id="nav_accordion">
                <div class="col text-center">
                    <p class="info-sidebar mb-3">Selamat Datang!</p>
                </div>
                <div class="card">
                    <div class="card-body" style="background: #003478">
                        <div class="image mb-4" style="display: flex; justify-content: center;">
                            <img src="/assets/img/org-tua.jpeg" class="rounded" width="155">
                        </div>
                        <div class="col text-center">
                            <p class="info-sidebar mb-3">MOHD ALI BIN ABU</p>

                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    LOG KELUAR</i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
        
                    <span class="switch mt-4">
                        <form action="" method="">
                            @csrf
                            <input type="checkbox" id="switcher">
                            <label for="switcher"></label>
                        </form>
                    </span>

                <li class="nav-item has-submenu">
                    <a class="nav-link" href="/pengurusan-pengguna/daftar-pengguna"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg>  PENGURUSAN PENGGUNA</a>
                    <ul class="submenu collapse">
                        <li>
                            <a class="nav-link" href="/pengurusan-pengguna/daftar-pengguna"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg> DAFTAR PENGGUNA</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/pengurusan-pengguna/senarai-pengguna"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                            </svg> SENARAI PENGGUNA</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-submenu">
                    <a class="nav-link" href="/audit_trail"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg> AUDIT TRAIL</a>
                    <ul class="submenu collapse">
                <li><a class="nav-link" href="/audit_trail">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                    </svg> LAPORAN AUDIT TRAIL</a></li>
                <li><a class="nav-link" href="/audit_trail/log_audit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                    </svg> LOG AUDIT</a></li>
                <li><a class="nav-link" href="/audit_trail/log_akses"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                    </svg> LOG AKSES</a> </li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="/pelaporan"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg> PELAPORAN</a>
                    <ul class="submenu collapse">
                        <li>
                            <a class="nav-link" href="/pelaporan"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                </svg> LAPORAN SEMAKAN WTD</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/pelaporan/laporan_gagal_log_masuk"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                </svg> LAPORAN GAGAL LOG MASUK/ SET SEMULA KATA LALUAN/ DAFTAR PENGGUNA MELALUI MOBILE APPS</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/pelaporan/laporan_permohonan_tuntutan_aplikasi"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                </svg> LAPORAN PERMOHONAN TUNTUTAN MELALUI APLIKASI MUDAH ALIH</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/pelaporan/laporan_permohonan_wtd"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                </svg> LAPORAN PERMOHONAN TUNTUTAN WTD MENGIKUT NEGERI</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/pelaporan/laporan_tempoh_penggunaan_aplikasi"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                </svg> LAPORAN TEMPOH PENGGUNAAN APLIKASI</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav> --}}
    {{-- </div> --}}
    