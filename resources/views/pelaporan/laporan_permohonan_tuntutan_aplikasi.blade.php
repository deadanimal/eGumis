@extends('layouts.base')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

<style>
    .button {
        background-color: #1A7FE5;
        border: none;
        border-radius: 5px;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .button:hover {
        background-color: #1A7FE5;
        color: white;
    }
</style>
@section('content')

<h1 style="color: #003478;">LAPORAN PERMOHONAN TUNTUTAN MELALUI APLIKASI MUDAH ALIH</h1>

<hr style="color: #003478;">

<div class="container-fluid">
    <div class="row mx-2 mb-2 mt-5">
        <div class="col-1 mb-2">
            <label class="col-form-label text-black">Tempoh:</label>
        </div>
        <div class="col-4 mb-2">
            <input placeholder="SILA PILIH" class="form-control textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
        </div>
        <div class="col-1 mb-2">
            <label class="col-form-label text-black">No. Pengenalan:</label>
        </div>
        <div class="col-4 mb-2">
            <input class="form-control" name="" type="number" placeholder="TAIP DI SINI" required/>
        </div>
    </div>
    <div class="row mx-2 mb-2">
        <div class="col-1 mb-2">
            <label class="col-form-label text-black">No. Rujukan:</label>
        </div>
        <div class="col-4 mb-2">
            <input class="form-control" name="" type="number" placeholder="TAIP DI SINI" required/>      
        </div>       
        <div class="col-1 mb-2">
            <label class="col-form-label text-black">Jenis Status:</label>
        </div>
        <div class="col-4 mb-2">
            <input class="form-control" name="" type="text" placeholder="TAIP DI SINI" required/>        
        </div>
        <div class="col-2 mb-2">
            <button class="btn btn-secondary">Cari
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
            </button>
        </div>
    </div>

    <div class="card mt-6">
        <div class="card-body">
            <table id="tuntutan-aplikasi" class="table line-table mt-6" style="width:100%">
                <thead class="text-black">
                    <tr>
                        <th class="text-center">Bil.</th>
                        <th class="text-center">No. Rujukan</th>
                        <th class="text-center">Nama Penuh</th>
                        <th class="text-center">No. Pengenalan</th>
                        <th class="text-center">Amaun Tuntutan (RM)</th> 
                        <th class="text-center">Tarikh Tuntutan</th>
                        <th class="text-center">Status</th> 
                        <th class="text-center">Tindakan</th> 
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
    var buttonConfig = [];
    var exportTitle = "ExportTableData"
    buttonConfig.push({extend:'copyHtml5',title: exportTitle});
    buttonConfig.push({extend:'copyHtml5',title: exportTitle,className: 'btn-success'});
    buttonConfig.push({extend:'copyHtml5',title: exportTitle,className: 'btn-warning'});	

    $.fn.dataTable.Buttons.defaults.dom.button.className = 'button'
    $(document).ready(function() {
    var table = $('#tuntutan-aplikasi').DataTable( {
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
        // Specify multiple classes to be used - for table striped color
        stripeClasses: ['stripe-1','stripe-2'],
        dom: 'lfBrtip',
        buttons: buttonConfig,
        buttons: [
                { 
                    extend: 'pdf',
                    text: 'PDF <img src="./assets/img/cloud-computing.png">',
                    download: 'open',
                    init: function(api, node, config) {
                    $(node).removeClass('btn-default')
                } 
                },
                { 
                    extend: 'excel',
                    text: 'EXCEL <img src="./assets/img/cloud-computing.png">',
                    download: 'open', 
                }
            ]
    } );
} );
</script>
    
@endsection