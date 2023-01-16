<style>
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


    .sidebar li .submenu{ 
        list-style: none; 
        margin: 0; 
        padding: 0; 
        padding-left: 1rem; 
        padding-right: 1rem;
    }

    .nav li.active {
    border-bottom: 3px solid #338ecf;
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
        height: 50px;
    }

    .switch input {
        appearance: none;
        width: 200px;
        height: 50px;
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
        left: 20px;
    }

    .switch input::after {
        content: "Non-Express";
        right: 20px;
    }

    .switch input:checked {
        background: #fff;
    }

    .switch label {
        z-index: 1;
        position: absolute;
        top: 10px;
        bottom: 4px;
    }

    .switch input:checked::after,
    .switch input:checked::before {
        color: #fff;
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
        transition: color 0.5s;
    }

    .switch input:not(:checked)::after {
        color: #fff;
        transition: color 0.5s 0.2s;
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
    }

    /* .profil-icon {
        width: 33.07px;
        height: 33.07px;
    } */
    .profil-bg {
        height: 59.17px;
        width: 59.17px;
    }
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
    



{{-- <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>

    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar" id="checklim">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                        <div class="col text-center">
                            <p class="info-sidebar mb-3">Selamat Datang!</p>
                        </div>
                        <div class="card">
                            <div class="card-body" style="background: #003478">
                                <div class="image mb-4" style="display: flex; justify-content: center;">
                                    <img src="/assets/img/org-tua.jpeg" class="rounded" width="155" >
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
                            <input type="checkbox" id="switcher">
                            <label for="switcher"></label>
                        </span>

                        <div class="sidenav">
                            <button class="dropdown-btn">Dropdown 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                                    <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                                  </svg>
                            </button>
                            <div class="dropdown-container">
                              <a href="#">Link 1</a>
                              <a href="#">Link 2</a>
                              <a href="#">Link 3</a>
                            </div>
                        </div>
                    
                          

                        <li class="nav-item mx-3 mx-md-0 mt-4">
                            <a class="nav-link py-0 dropdown-indicator {{ Request::is('audit_trail/*') ? 'active-main' : '' }}"
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
                                id="audit_trail">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/audit_trail') ? 'active' : '' }} py-0"
                                        href="/audit_trail">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <input type="radio"> <span class="px-0 {{ Request::is('/audit_trail') ? 'text-dark' : '' }}">&nbsp; LAPORAN AUDIT TRAIL</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/audit_trail/log_audit/*') ? 'active' : '' }} py-0"
                                        href="/audit_trail/log_audit">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <input type="radio"> <span class="px-0 {{ Request::is('/audit_trail/log_audit') ? 'text-dark' : '' }}">&nbsp; LOG AUDIT</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/audit_trail/*') ? 'active' : '' }} py-0"
                                        href="/audit_trail/log_akses">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <input type="radio"> <span class="px-0 {{ Request::is('/audit_trail') ? 'text-dark' : '' }}">&nbsp; LOG AKSES</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item mx-3 mx-md-0 mt-4">
                            <a class="nav-link py-0 dropdown-indicator {{ Request::is('pelaporan/*') ? 'active-main' : '' }}"
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
                                id="pelaporan">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/pelaporan') ? 'active' : '' }} py-0"
                                        href="/pelaporan">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <input type="radio"><span class="px-0 {{ Request::is('/pelaporan') ? 'text-dark' : '' }}">&nbsp; LAPORAN SEMAKAN WTD</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/pelaporan') ? 'active' : '' }} py-0"
                                        href="/pelaporan/laporan_gagal_log_masuk">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <input type="radio"> <span class="px-0 {{ Request::is('/pelaporan') ? 'text-dark' : '' }}">LAPORAN GAGAL
                                            LOG MASUK/ SET SEMULA KATA LALUAN/ DAFTAR PENGGUNA MELALUI MOBILE APPS</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/pelaporan') ? 'active' : '' }} py-0"
                                        href="/pelaporan/laporan_permohonan_tuntutan_aplikasi">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <input type="radio"><span class="px-0 {{ Request::is('/pelaporan') ? 'text-dark' : '' }}">&nbsp; LAPORAN
                                            PERMOHONAN TUNTUTAN MELALUI APLIKASI MUDAH ALIH</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/pelaporan') ? 'active' : '' }} py-0"
                                        href="/pelaporan/laporan_permohonan_wtd">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <input type="radio"><span class="px-0 {{ Request::is('/pelaporan') ? 'text-dark' : '' }}">&nbsp; LAPORAN
                                            PERMOHONAN TUNTUTAN WTD MENGIKUT NEGERI</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/pelaporan') ? 'active' : '' }} py-0"
                                        href="/pelaporan/laporan_tempoh_penggunaan_aplikasi">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <input type="radio"><span class="px-0 {{ Request::is('/pelaporan') ? 'text-dark' : '' }}">&nbsp; LAPORAN
                                            TEMPOH PENGGUNAAN APLIKASI</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul> 
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/peranan') ? 'active' : '' }} py-0"
                            href="/peranan">
                            <div class="d-flex align-items-center nav-link-side">
                                <span
                                    class="px-0 {{ Request::is('/peranan') ? 'text-dark' : '' }}">PERANAN SUB-ADMIN</span>
                            </div>
                        </a>
                    </li>   

                    
        </div>
    </div> 
</nav> --}}


<nav class="sidebar navbar navbar-light navbar-vertical navbar-expand-xl">
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
                    <input type="checkbox" id="switcher">
                    <label for="switcher"></label>
                </span>

                <li class="nav-item has-submenu">
                    <a class="nav-link" href="/audit_trail"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                      </svg> AUDIT TRAIL</a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="/audit_trail">  <input type="radio"> LAPORAN AUDIT TRAIL</a></li>
                        <li><a class="nav-link" href="/audit_trail/log_audit"> <input type="radio"> LOG AUDIT</a></li>
                        <li><a class="nav-link" href="/audit_trail/log_akses"> <input type="radio"> LOG AKSES</a> </li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="/pelaporan"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                      </svg> PELAPORAN</a>
                    <ul class="submenu collapse">
                        <li>
                            <a class="nav-link" href="/pelaporan"> <input type="radio">LAPORAN SEMAKAN WTD</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/pelaporan/laporan_gagal_log_masuk"> <input type="radio">LAPORAN GAGAL LOG MASUK/ SET SEMULA KATA LALUAN/ DAFTAR PENGGUNA MELALUI MOBILE APPS</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/pelaporan/laporan_permohonan_tuntutan_aplikasi"> <input type="radio">LAPORAN PERMOHONAN TUNTUTAN MELALUI APLIKASI MUDAH ALIH</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/pelaporan/laporan_permohonan_wtd"> <input type="radio">LAPORAN PERMOHONAN TUNTUTAN WTD MENGIKUT NEGERI</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/pelaporan/laporan_tempoh_penggunaan_aplikasi"> <input type="radio">LAPORAN TEMPOH PENGGUNAAN APLIKASI</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/peranan">PERANAN SUB-ADMIN</a>
                </li>
            </ul>
</nav>