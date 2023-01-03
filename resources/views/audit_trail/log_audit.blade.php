@extends('layouts.base')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">


{{-- <style>

</style> --}}
@section('content')

<h1 style="color: #003478;">LOG AUDIT</h1>

<hr style="color: #003478;">


<div class="container-fluid">
    <div class="container">
        <div class="row mx-2 mb-2 mt-5">
            <div class="col-2 mb-2">
                <label class="col-form-label text-black">Jenis Audit:</label>
            </div>
            <div class="col-4 mb-2">
                <input class="form-control" name="" type="text" placeholder="TAIP DI SINI" required/>
            </div>
            <div class="col-2 mb-2">
                <label class="col-form-label text-black">ID Log Masuk:</label>
            </div>
            <div class="col-4 mb-2">
                <input class="form-control" name="" type="text" placeholder="TAIP DI SINI" required/>
            </div>
        </div>
        <div class="row mx-2 mb-2">
            <div class="col-2 mb-2">
                <label class="col-form-label text-black">Tarikh Audit:</label>
            </div>
            <div class="col-2 mb-2">
                <input placeholder="SILA PILIH" class="form-control textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
            </div>
            <div class="col-2 mb-2">
                <input placeholder="SILA PILIH" class="form-control textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
            </div>
            <div class="col-2 mb-2">
                <label class="col-form-label text-black">Nama:</label>
            </div>
            <div class="col-4 mb-2">
                <input class="form-control" name="" type="text" placeholder="TAIP DI SINI" required/>
            </div>
        </div>
    </div>

    <div class="card mt-6">
        <div class="card-body">
            <table id="log-audit" class="table line-table" style="width:100%">
                <thead class="text-black">
                    <tr>
                        <th class="text-center">Bil.</th>
                        <th class="text-center">Tarikh Audit</th>
                        <th class="text-center">ID Log Masuk - Nama Pengguna</th>
                        <th class="text-center">Jenis Audit</th>
                        <th class="text-center">Info Audit</th> 
                        <th class="text-center">Database Table</th>
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
        
    var table = $('#log-audit').DataTable( {
            lengthChange: false,
            "bInfo" : false,
            "language": {
                search: "",
                searchPlaceholder: "Carian",
                "emptyTable": "Tiada maklumat yang dipaparkan",
                "zeroRecords": "Tiada pencarian yang dijumpai",
                "paginate": {
                "previous": "Kembali",
                "next": "Seterusnya",
                }
            },
            dom: 'Bfrtip',
            buttons: [
                { extend: 'pdf', className: 'btn btn-primary' },
                { extend: 'excel', className: 'btn btn-primary' }
            ]
            // buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
            
        });
        
        table.buttons().container()
        .appendTo( '#example_wrapper .small-6.columns:eq(0)' );
    });
</script>
    
@endsection