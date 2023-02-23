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
                    </select>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">No. Pengenalan: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-5 mb-2">
                    <input class="form-control textbox-n" name="identity_number" type="number" placeholder="Contoh: 770101037777" required/>
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
@endsection