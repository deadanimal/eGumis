@extends('layouts.base')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

{{-- <style>

</style> --}}
@section('content')

<h1 style="color: #003478;">LAPORAN TEMPOH PENGGUNAAN APLIKASI</h1>

<hr style="color: #003478;">


<div class="container-fluid">
    <div class="row mx-2 mb-2 mt-5">
        <div class="col mb-2">
            <label class="col-form-label text-black">Tempoh:</label>
        </div>
        <div class="col-3 mb-2">
            <input placeholder="SILA PILIH" class="form-control textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
        </div>
        <div class="col mb-2">
            <label class="col-form-label text-black">Status:</label>
        </div>
        <div class="col mb-2">
            <select class="form-select" aria-label="Default select example" name="" required>
                <option selected>SILA PILIH</option>
                <option value="A">A</option>
                <option value="B">B</option>
            </select>
        </div>
        <div class="col-2 mb-2">
            <button class="btn btn-secondary">Cari
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
            </button>
            <button class="btn" onClick="window.location.reload();">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                    <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                    <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                    </svg>
            </button>
        </div>
    </div>
    <div class="row mx-2 mb-2">
        <div class="col-2 mb-2">
            <label class="col-form-label text-black">Jenis Capaian:</label>
        </div>
        <div class="col-4 mb-2">
            <input class="form-control" name="" type="number" placeholder="TAIP DI SINI" required/>
        </div>
    </div>
    <div class="row mx-2 mb-2">
        <div class="col-2 mb-2">
            <label class="col-form-label text-black">Jenis OS:</label>
        </div>
        <div class="col-4 mb-2">
            <input class="form-control" name="" type="number" placeholder="TAIP DI SINI" required/>      
        </div>       
    </div>

    <div class="card mt-5">
        <div class="card-body">
            <table id="tempoh-penggunaan-aplikasi" class="table line-table mt-6" style="width:100%">
                <thead class="text-black">
                    <tr>
                        <th class="text-center">Bil.</th>
                        <th class="text-center">Tarikh</th>
                        <th class="text-center">Jenis Capaian</th>
                        <th class="text-center">ID Peranti</th>
                        <th class="text-center">Nama Model</th> 
                        <th class="text-center">Jenis OS</th>
                        <th class="text-center">Versi OS</th> 
                        <th class="text-center">Status</th> 
                    </tr>
                </thead>
            </table>
        </div>
    </div>

</div>
    
<!--JavaScript-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.0/css/buttons.dataTables.min.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>

<script>
    $(document).ready(function() {
    $('#tempoh-penggunaan-aplikasi').DataTable( {
        "bInfo" : false,
        "language": {
            search: "",
            searchPlaceholder: "Carian",
            "emptyTable": "Tiada maklumat yang dipaparkan",
            "zeroRecords": "Tiada pencarian yang dijumpai",
            "paginate": {
            "previous": "Kembali",
            "next": "Seterusnya"
            }
        },
        dom: 'Bfrtip',
        buttons: [
                { extend: 'pdf', className: 'btn btn-primary' },
                { extend: 'excel', className: 'btn btn-primary' }
            ]
    } );
} );
</script>
@endsection