@extends('layouts.base')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://www.ksia.or.kr/plugin/DataTables-1.10.15/media/css/jquery.dataTables.css">
<link rel="stylesheet" href="https://www.ksia.or.kr/plugin/DataTables-1.10.15/extensions/Buttons/css/buttons.dataTables.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

{{-- <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.2.0/css/dataTables.dateTime.min.css"> --}}
<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables_themeroller.css" rel="stylesheet" data-semver="1.9.4" data-require="datatables@*" />
<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.css" rel="stylesheet" data-semver="1.9.4" data-require="datatables@*" />
<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/demo_table_jui.css" rel="stylesheet" data-semver="1.9.4" data-require="datatables@*" />
<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/demo_table.css" rel="stylesheet" data-semver="1.9.4" data-require="datatables@*" />
<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/demo_page.css" rel="stylesheet" data-semver="1.9.4" data-require="datatables@*" />
<link data-require="jqueryui@*" data-semver="1.10.0" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/css/smoothness/jquery-ui-1.10.0.custom.min.css" />
<script data-require="jqueryui@*" data-semver="1.10.0" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.js" data-semver="1.9.4" data-require="datatables@*"></script>
<link href="style.css" rel="stylesheet" />



<style>
    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
    .btn-datatable {
        background: green;
    }
    .calendar-icon {
        padding-right: 150px;
        background: url("/assets/img/calendar.png") no-repeat right;
        background-size: 20px;
    }
</style>
@section('content')

<h1 style="color: #003478;">AUDIT TRAIL</h1>

<hr style="color: #003478;">


<div class="container-fluid">
    <div class="row mx-2 mb-2 mt-5">
        <div class="col-2 mb-2">
            <label class="col-form-label text-black">Tempoh:</label>
        </div>
        <div class="col-4 mb-2">
            <input placeholder="SILA PILIH" class="form-control textbox-n" id="idTempoh" id=" " type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
        </div>
    </div>
    <div class="row mx-2 mb-2">
        <div class="col-2 mb-2">
            <label class="col-form-label text-black">Jenis Pengguna:</label>
        </div>
        <div class="col-4 mb-2">
            <select class="form-select" aria-label="Default select example" id="idJenisPengguna" id="myInput" onclick="SearchData()" name="" required>
                <option selected>SILA PILIH</option>
                <option value="A">Muzzamir</option>
                <option value="B">Kuala Lumpur</option>
                <option value="C">Linux</option>
                <option value="D">Windows</option>
                <option value="E">Android 11</option>
            </select>
        </div>
    </div>
    <div class="row mx-2 mb-2">
        <div class="col-2 mb-2">
            <label class="col-form-label text-black">Nama Pengguna:</label>
        </div>
        <div class="col-4 mb-2">
            <input class="form-control" name="" type="text" placeholder="TAIP DI SINI" id="myInput" onclick="SearchData()" required/>
        </div>
        <div class="col-2 mb-2">
            <button class="btn btn-secondary" type="submit" id="" onclick="SearchData()">Cari
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
            </button>
        </div>
    </div>
    
    <div class="card mt-6">
        <div class="card-body">
            <table id="laporan-audit-trail" class="table line-table mt-6 stripe" style="width:100%">
                <thead class="text-black">
                    <tr>
                        <th class="text-center">Bil.</th>
                        <th class="text-center">Nama Pengguna</th>
                        <th class="text-center">Alamat IP</th>
                        <th class="text-center">OS</th>
                        <th class="text-center">Model</th> 
                        <th class="text-center">Log Masuk</th>
                        <th class="text-center">Log Keluar</th> 
                        <th class="text-center">Tempoh Masa</th> 
                    </tr>
                    <tbody id="myAuditTrail">
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Windows</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Muzammir</td>
                            <td>Kuala Lumpur</td>
                            <td>Linux</td>
                            <td>Android 11</td>
                            <td>$320,800</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                        </tr>
                    </tbody>
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
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>

{{-- <script src="https://cdn.datatables.net/datetime/1.2.0/js/dataTables.dateTime.min.js"></script> --}}




<script>
    var buttonConfig = [];
    var exportTitle = "ExportTableData"
    buttonConfig.push({extend:'copyHtml5',title: exportTitle});
    buttonConfig.push({extend:'copyHtml5',title: exportTitle,className: 'btn-success'});
    buttonConfig.push({extend:'copyHtml5',title: exportTitle,className: 'btn-warning'});	

    $.fn.dataTable.Buttons.defaults.dom.button.className = 'button'
    $(document).ready(function() {
        var table = $('#laporan-audit-trail').DataTable({
            "bInfo" : false,
            "language": {
                "sLengthMenu": "PAPAR _MENU_ REKOD",
                search: "",
                searchPlaceholder: "Carian",
                "emptyTable": "Tiada maklumat yang dipaparkan",
                "zeroRecords": "Tiada pencarian yang dijumpai",
                "paginate": {
                "previous": "Kembali",
                "next": "Seterusnya",
                }
            },
            dom: 'lfBrtip',
            buttons: buttonConfig,
            // dom: 'Bfrtip',
            // Specify multiple classes to be used - for table striped color
            stripeClasses: ['stripe-1','stripe-2'],
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
                },
            ]
        });
            $('#myInput').on('keyup change', function () {
            table.search(this.value).draw();
        });

        // $("#datepicker_from").datepicker({
        //     showOn: "button",
        //     buttonImage: "images/calendar.gif",
        //     buttonImageOnly: false,
        //     "onSelect": function(date) {
        //     minDateFilter = new Date(date).getTime();
        //     oTable.fnDraw();
        //     }
        // }).keyup(function() {
        //     minDateFilter = new Date(this.value).getTime();
        //     oTable.fnDraw();
        // });

        // window.d = new DateTime(document.getElementById('test'), {
        //     format: 'D MMM YYYY HH:mm'
        // });
        // $(".datepicker").datepicker( {
        // maxDate:0,
        // changeMonth: true,
        // changeYear: true,
        // dateFormat: 'yy-mm-dd',
        // onClose: function(selectedDate) {
        //     table.fnDraw();}});
    //     $('#btnSearch').click(function (){
    //        table.search(this.value).draw();
    //    });
        
    });

        // Date range filter
        minDateFilter = "";
        maxDateFilter = "";

        $.fn.dataTableExt.afnFiltering.push(
        function(oSettings, aData, iDataIndex) {
            if (typeof aData._date == 'undefined') {
            aData._date = new Date(aData[0]).getTime();
            }

            if (minDateFilter && !isNaN(minDateFilter)) {
            if (aData._date < minDateFilter) {
                return false;
            }
            }
        return true;
    });
</script>

<script>
    $(document).on("change", "#datepicker .created_on", function() {
  var dataVal = $(this).datepicker('getDate');//get date from datepicker
  dataVal= $.datepicker.formatDate("d/m/y", dataVal);//set format date like in the rows
  //console.log(dataVal, typeof dataVal);
  if (dataVal != '') {
    $("tr:not('#table-header')").hide();//hide all rows
    //show rows with the same date selected
    $("label:contains('" +  dataVal + "')").each(function(){
      $(this).closest('tr').show();
    });
  }  
});

</script>

{{-- <script>
    // Date range filter
    minDateFilter = "";
        maxDateFilter = "";

        $.fn.dataTableExt.afnFiltering.push(
        function(oSettings, aData, iDataIndex) {
            if (typeof aData._date == 'undefined') {
            aData._date = new Date(aData[0]).getTime();
            }

            if (minDateFilter && !isNaN(minDateFilter)) {
            if (aData._date < minDateFilter) {
                return false;
            }
            }

        

        return true;
    });
        
</script> --}}

{{-- <script>
    $(document). ready(function () {
    $('#laporan-audit-trail'). DataTable();
    $('. mydatetimepicker'). dtDateTime();
    });
    </script> --}}

{{-- <script>
     codeListTable = $("#codeListTable").DataTable();
        new $.fn.dataTable.Buttons( codeListTable, {
            buttons: [
                {
                extend:    'copy',
                text:      '<i class="fa fa-files-o"></i> Copy',
                titleAttr: 'Copy',
                className: 'btn btn-default btn-sm'
                },
                {
                extend:    'csv',
                text:      '<i class="fa fa-files-o"></i> CSV',
                titleAttr: 'CSV',
                className: 'btn btn-default btn-sm',
                exportOptions: {
                    columns: ':visible'
                }
                },
                {
                extend:    'excel',
                text:      '<i class="fa fa-files-o"></i> Excel',
                titleAttr: 'Excel',
                className: 'btn btn-default btn-sm',
                exportOptions: {
                    columns: ':visible'
                }
                },
                {
                extend:    'pdf',
                text:      '<i class="fa fa-file-pdf-o"></i> PDF',
                titleAttr: 'PDF',
                className: 'btn btn-default btn-sm',
                exportOptions: {
                    columns: ':visible'
                }
                },               
                {
                extend:    'print',
                text:      '<i class="fa fa-print"></i> Print',
                titleAttr: 'Print',
                className: 'btn btn-default btn-sm',
                exportOptions: {
                    columns: ':visible'
                }
                },  
            ]
        } );
        codeListTable.buttons().container().appendTo('#tableActions');
</script> --}}

{{-- <script>
    $(document).ready(function(){
      $("#auditTrail").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script> --}}

{{-- <script>
    function myFunction() {
        $("#auditTrail").on("keyup", function() {
            var i, dd,
                tempoh = document.getElementById("myTempoh").value.toLowerCase(),
                jenis_pengguna = document.getElementById("myJenisPengguna").value.toLowerCase(),
                nama_pengguna = document.getElementById("myNamaPengguna").value.toLowerCase(),
                ul = document.getElementById("myUL"),
                li = ul.getElementsByTagName("li");

                $("#myTable tr").filter(function() {
                for (i = 0; i < li.length; i++) {
                    dd = Array.from(li[i].getElementsByTagName("dd"), 
                            dd => dd.textContent.toLowerCase());
                    li[i].style.display = 
                        (dd[0].indexOf(tempoh) | dd[1].indexOf(jenis_pengguna) | dd[2].indexOf(nama_pengguna)) >= 0
                            ? "" : "none";
                    }
                });
        });
    }
</script> --}}

{{-- <script>
    var table = $('#laporan-audit-trail').DataTable();

    // #myInput is a <input type="text"> element
    $('#myInput').on('keyup change', function () {
        table.search(this.value).draw();
    });
</script> --}}

{{-- <script>
    const table = document.getElementById("myAuditTrail");
    // save all tr
    const tr = table.getElementsByTagName("tr");

    function SearchData() {
            var tempoh = document.getElementById("idTempoh").value.toUpperCase();
            var jenis_pengguna = document.getElementById("idJenisPengguna").value.toUpperCase();
            var nama_pengguna = document.getElementById("idNamaPengguna").value.toUpperCase();

            for (i = 1; i < tr.length; i++) {

            var rowTempoh = tr[i].getElementsByTagName("td")[0].textContent.toUpperCase();
            var rowJenisPengguna = tr[i].getElementsByTagName("td")[1].textContent.toUpperCase();
            var rowNamaPengguna = tr[i].getElementsByTagName("td")[2].textContent.toUpperCase();

            var isDisplay = true;

            if (tempoh != 'ALL' && jenis_pengguna != 'ALL') {
            if (rowTempoh == name && rowJenisPengguna == jenis_pengguna) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            } else if (rowJenisPengguna != '' || rowNamaPengguna != '') {
            if (tempoh != 'ALL') {
                if (rowTempoh == tempoh) {
                tr[i].style.display = "";
                } else {
                tr[i].style.display = "none";
                }
            }
            if (nama_pengguna != 'ALL') {
                if (rowNamaPengguna == nama_pengguna) {
                tr[i].style.display = "";
                } else {
                tr[i].style.display = "none";
                }
            }
        }

            }
    }

</script> --}}




    
@endsection