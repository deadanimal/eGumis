@extends('layouts.base')

<style>
    .wrapper {
        text-align: center;
        display: inline-block;
        position: absolute;
    }
</style>
@section('content')
<h1 style="color: #003478;">PENGURUSAN PENGGUNA</h1>

<hr style="color: #003478;">

<div class="card mt-6">
    <div class="card-body">
        <h2 style="color: #003478;">Daftar Pengguna</h2>
        <form action="/pengurusan-pengguna/daftar-pengguna" method="POST">
            @csrf
            <div class="row mx-2 mb-2 mt-5">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">Jenis Pengguna: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-5 mb-2">
                    <select class="form-select categoryFilter" aria-label="Default select example" name="jenis_pengguna" required>
                        <option selected>SILA PILIH</option>
                        <option value="BWTD">BWTD</option>
                        <option value="BPTM">BPTM</option>
                    </select>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">Nama Pengguna: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-5 mb-2">
                    <input placeholder="Contoh: Ahmad bin Muhammad" class="form-control textbox-n" name="full_name" type="text" onkeyup="this.value = this.value.toUpperCase();" required/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">ID Pengguna: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-5 mb-2">
                    <input placeholder="Contoh: ahmad" class="form-control textbox-n" name="username" type="text" required/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">Jenis Pengenalan: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-5 mb-2">
                    <select class="form-select categoryFilter" data-column-index='2' aria-label="Default select example" name="identity_type" required>
                        <option selected>SILA PILIH</option>
                        <option value="NOMBOR KP BARU">NOMBOR KP BARU</option>
                        <option value="NOMBOR KP LAMA">NOMBOR KP LAMA</option>
                        <option value="NOMBOR TENTERA">NOMBOR TENTERA</option>
                        <option value="NOMBOR POLIS">NOMBOR POLIS</option>
                        <option value="NOMBOR PASPORT">NOMBOR PASPORT</option>
                        <option value="NOMBOR SIJIL KELAHIRAN">NOMBOR SIJIL KELAHIRAN</option>
                        <option value="NOMBOR PENDAFTARAN SYARIKAT/FIRMA">NOMBOR PENDAFTARAN SYARIKAT/FIRMA</option>
                    </select>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">No. Pengenalan: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-5 mb-2">
                    <input class="form-control textbox-n" name="old_ic_number" type="text" placeholder="Contoh: 770101037777" required/>
                    <input class="form-control textbox-n" name="no_tentera" type="text" placeholder="Contoh: 770101037777" required/>
                    <input class="form-control textbox-n" name="no_polis" type="text" placeholder="Contoh: 770101037777" required/>
                    <input class="form-control textbox-n" name="no_pasport" type="text" placeholder="Contoh: 770101037777" required/>
                    <input class="form-control textbox-n" name="no_sijil_kelahiran" type="text" placeholder="Contoh: 770101037777" required/>
                    <input class="form-control textbox-n" name="no_pendaftaran_syarikat_firma" type="text" placeholder="Contoh: 770101037777" required/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">E-mel: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-5 mb-2">
                    <input placeholder="Contoh: egumis@anm.gov.my" class="form-control textbox-n" name="email" type="email" required/>
                </div>
            </div>
            <div class="mx-2 mb-2 mt-2 text-end">
                {{-- <div class="col-10 mb-2 text-end"> --}}
                    <button class="btn btn-secondary" type="submit">Simpan</button>
            </div>
        </form>
        <div class="mx-2 mb-2 mt-2 text-end">
            <form action="/pengurusan-pengguna/daftar-pengguna" method="GET">
                @csrf
                {{-- <div class="col-10 mb-2 text-end"> --}}
                    <button class="btn btn-primary" type="submit">Batal</button>
                {{-- </div> --}}
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
    $('#laporan-audit-trail').DataTable({
            "bInfo" : false,
            "language": {
                "sLengthMenu": "PAPAR _MENU_ REKOD",
                search: "",
                searchPlaceholder: "Carian",
                "emptyTable": "Tiada maklumat yang dipaparkan",
                "zeroRecords": "Tiada pencarian yang dijumpai",
                "paginate": {
                "previous": "Kembali",
                "next": "Seterusnya"
                }
            },
            dom: 'lfBrtip',
            // dom: 'Bfrtip',
            // Specify multiple classes to be used - for table striped color
            stripeClasses: ['stripe-1','stripe-2'],
            buttons: [
                { extend: 'pdf', 
                    className: 'btn btn-primary', 
                    text: 'PDF <img src="./assets/img/cloud-computing.png">',
                    download: 'open',
                },
                { extend: 'excel', 
                className: 'btn btn-primary',
                text: 'EXCEL <img src="./assets/img/cloud-computing.png">',
                download: 'open',
                },
            ]
        });
    });
</script>


<script>
    $('input[type=checkbox]').change(function(){
    if($(this).is(':checked')){
    $('input[type=checkbox]').attr('disabled',true);
        $(this).attr('disabled','');
    }
    else{
    $('input[type=checkbox]').attr('disabled','');
    }
    });
</script>

<script>
    $(document).ready(function () {
        $('.2').hide();
        $('.3').hide();
        $('.4').hide();
        $('.5').hide();
        $('.6').hide();
        $('.7').hide();
    });

    function button1() {
        $('.1').show();
        $('.2').hide();
        $('.3').hide();
        $('.4').hide();
        $('.5').hide();
        $('.6').hide();
        $('.7').hide();
    }
    function button2() {
        $('.2').show();
        $('.1').hide();
        $('.3').hide();
        $('.4').hide();
        $('.5').hide();
        $('.6').hide();
        $('.7').hide();
    }
    function button3() {
        $('.3').show();
        $('.1').hide();
        $('.2').hide();
        $('.4').hide();
        $('.5').hide();
        $('.6').hide();
        $('.7').hide();
    }
    function button4() {
        $('.4').show();
        $('.1').hide();
        $('.2').hide();
        $('.3').hide();
        $('.5').hide();
        $('.6').hide();
        $('.7').hide();
    }
    function button5() {
        $('.5').show();
        $('.1').hide();
        $('.2').hide();
        $('.3').hide();
        $('.4').hide();
        $('.6').hide();
        $('.7').hide();
    }
    function button6() {
        $('.6').show();
        $('.1').hide();
        $('.2').hide();
        $('.3').hide();
        $('.4').hide();
        $('.5').hide();
        $('.7').hide();
    }
    function button7() {
        $('.7').show();
        $('.1').hide();
        $('.2').hide();
        $('.3').hide();
        $('.4').hide();
        $('.5').hide();
        $('.6').hide();
    }


</script>
@endsection