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
</style>
@section('content')

<h1 style="color: #003478;">LAPORAN GAGAL LOG MASUK/ SET SEMULA KATA LALUAN/ DAFTAR PENGGUNA MELALUI MOBILE APPS</h1>

<hr style="color: #003478;">


<div class="container-fluid">
    <div class="row mx-2 mb-2 mt-5">
        <div class="col-2 mb-2">
            <label class="col-form-label text-black">Tempoh:</label>
        </div>
        <div class="col-4 mb-2">
            <input placeholder="SILA PILIH" class="form-control textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
        </div>
        <div class="col-2 mb-2">
            <label class="col-form-label text-black">Nama Pengguna:</label>
        </div>
        <div class="col-4 mb-2">
            <input class="form-control" name="" type="text" placeholder="TAIP DI SINI" required/>
        </div>
    </div>
    <div class="row mx-2 mb-2">
        <div class="col-2 mb-2">
            <label class="col-form-label text-black">Jenis Status:</label>
        </div>
        <div class="col-4 mb-2">
            <select class="form-select" aria-label="Default select example" name="" required>
                <option selected>SILA PILIH</option>
                <option value="A">A</option>
                <option value="B">B</option>
            </select>        
        </div>       
        <div class="col-2 mb-2">
            <label class="col-form-label text-black">No. Pengenalan:</label>
        </div>
        <div class="col-4 mb-2">
            <input class="form-control" name="" type="number" placeholder="TAIP DI SINI" required/>       
        </div>
    </div>
    <div class="row mx-2 mb-2">
        <div class="col-2 mb-2">
            <label class="col-form-label text-black">Nama:</label>
        </div>
        <div class="col-4 mb-2">
            <input class="form-control" name="" type="text" placeholder="TAIP DI SINI" required/>        
        </div>
        <div class="col-2 mb-2">
            <label class="col-form-label text-black">E-mel:</label>
        </div>
        <div class="col-4 mb-2">
            <input class="form-control" name="" type="email" placeholder="TAIP DI SINI" required/>                
        </div>
    </div>

    <div class="card mt-6">
        <div class="card-body">
            <table id="laporan-gagal" class="table line-table mt-6" style="width:100%">
                <thead class="text-black">
                    <tr>
                        <th class="text-center">Bil.</th>
                        <th class="text-center">Nama Pengguna</th>
                        <th class="text-center">No. Pengenalan</th>
                        <th class="text-center">Nama Penuh</th>
                        <th class="text-center">E-mel</th> 
                        <th class="text-center">Status</th>
                        <th class="text-center">Tarikh/Masa</th> 
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
    $('#laporan-gagal').DataTable( {
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
        dom: 'Bfrtip',
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
        });
    });
</script>
@endsection