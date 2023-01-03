<style>
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
        transition: background 0.4s;
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
        transition: left 0.4s 0.2s, right 0.5s, background 0.35s;
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

{{-- <script>
    $('.nav-item a').addClass("active");
</script> --}}
{{-- <script 
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
</script> --}}

{{-- <script>
    $('.card li').click(function(e){
    // find/remove all active classes from each a
    $('.mainNav > a').removeClass('active');

    // add active selected a
    $(this).addClass('active').siblings().removeClass("active");
    e.preventDefault();
    });
</script> --}}



<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
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

                        <li class="nav-item mx-3 mx-md-0 mt-4">
                            <a class="nav-link py-0 dropdown-indicator {{ Request::is('audit_trail/*') ? 'active-main' : '' }}"
                                href="/audit_trail" role="button" data-bs-toggle="collapse"
                                aria-expanded="{{ Request::is('audit_trail') ? 'true' : 'false' }}"
                                aria-controls="audit_trail">
                                <div class="d-flex align-items-center nav-link-side px-0">
                                    <span class="px-3"><span class="fas fa-home"></span>AUDIT TRAIL</span>
                                </div>
                            </a>
                            <ul class="nav-item collapse {{ Request::is('audit_trail/*') || Request::is('audit_trail') ? 'show' : 'false' }} my-1"
                                id="audit_trail">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/audit_trail') ? 'active' : '' }} py-0"
                                        href="/audit_trail">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0 {{ Request::is('/audit_trail') ? 'text-dark' : '' }}">LAPORAN AUDIT TRAIL</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/audit_trail/log_audit/*') ? 'active' : '' }} py-0"
                                        href="/audit_trail/log_audit">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0 {{ Request::is('/audit_trail/log_audit') ? 'text-dark' : '' }}">LOG AUDIT</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/audit_trail') ? 'active' : '' }} py-0"
                                        href="/audit_trail/log_akses">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span
                                                class="px-0 {{ Request::is('/audit_trail') ? 'text-dark' : '' }}">LOG AKSES</span>
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
                                    <span class="px-3"><span class="fas fa-home"></span>PELAPORAN</span>
                                </div>
                                </a>
                            <ul class="nav-item collapse {{ Request::is('pelaporan/*') || Request::is('pelaporan') ? 'show' : 'false' }} my-1"
                                id="pelaporan">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/pelaporan') ? 'active' : '' }} py-0"
                                        href="/pelaporan">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0 {{ Request::is('/pelaporan') ? 'text-dark' : '' }}">LAPORAN SEMAKAN WTD</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/pelaporan') ? 'active' : '' }} py-0"
                                        href="/pelaporan/laporan_gagal_log_masuk">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0 {{ Request::is('/pelaporan') ? 'text-dark' : '' }}">LAPORAN GAGAL
                                            LOG MASUK/ SET SEMULA KATA LALUAN/ DAFTAR PENGGUNA MELALUI MOBILE APPS</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/pelaporan') ? 'active' : '' }} py-0"
                                        href="/pelaporan/laporan_permohonan_tuntutan_aplikasi">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0 {{ Request::is('/pelaporan') ? 'text-dark' : '' }}">LAPORAN
                                            PERMOHONAN TUNTUTAN MELALUI APLIKASI MUDAH ALIH</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/pelaporan') ? 'active' : '' }} py-0"
                                        href="/pelaporan/laporan_permohonan_wtd">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0 {{ Request::is('/pelaporan') ? 'text-dark' : '' }}">LAPORAN
                                            PERMOHONAN TUNTUTAN WTD MENGIKUT NEGERI</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/pelaporan') ? 'active' : '' }} py-0"
                                        href="/pelaporan/laporan_tempoh_penggunaan_aplikasi">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0 {{ Request::is('/pelaporan') ? 'text-dark' : '' }}">LAPORAN
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
                                    class="px-0 {{ Request::is('/peranan') ? 'text-dark' : '' }}">PERANAN SUBADMIN</span>
                            </div>
                        </a>
                    </li>   

                    
        </div>
    </div> 
</nav>

