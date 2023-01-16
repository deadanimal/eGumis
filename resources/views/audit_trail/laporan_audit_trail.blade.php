@extends('layouts.base')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://www.ksia.or.kr/plugin/DataTables-1.10.15/media/css/jquery.dataTables.css">
<link rel="stylesheet" href="https://www.ksia.or.kr/plugin/DataTables-1.10.15/extensions/Buttons/css/buttons.dataTables.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

{{-- <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.2.0/css/dataTables.dateTime.min.css"> --}}
{{-- <link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables_themeroller.css" rel="stylesheet" data-semver="1.9.4" data-require="datatables@*" />
<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.css" rel="stylesheet" data-semver="1.9.4" data-require="datatables@*" />
<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/demo_table_jui.css" rel="stylesheet" data-semver="1.9.4" data-require="datatables@*" />
<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/demo_table.css" rel="stylesheet" data-semver="1.9.4" data-require="datatables@*" />
<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/demo_page.css" rel="stylesheet" data-semver="1.9.4" data-require="datatables@*" />
<link data-require="jqueryui@*" data-semver="1.10.0" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/css/smoothness/jquery-ui-1.10.0.custom.min.css" />
<script data-require="jqueryui@*" data-semver="1.10.0" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.js" data-semver="1.9.4" data-require="datatables@*"></script>
<link href="style.css" rel="stylesheet" /> --}}



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
                <input placeholder="SILA PILIH" class="form-control textbox-n" data-column-index='7' id="idTempoh" id="min" name="min" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
            </div>
        </div>
        <div class="row mx-2 mb-2">
            <div class="col-2 mb-2">
                <label class="col-form-label text-black">Jenis Pengguna:</label>
            </div>
            <div class="col-4 mb-2">
                <select class="form-select categoryFilter" data-column-index='2' aria-label="Default select example" id="idJenisPengguna" id="myInput" name="" required>
                    <option selected>SILA PILIH</option>
                    <option value="BWTD">BWTD</option>
                    <option value="BPTM">BPTM</option>
                </select>
            </div>
        </div>
        <div class="row mx-2 mb-2">
            <div class="col-2 mb-2">
                <label class="col-form-label text-black">Nama Pengguna:</label>
            </div>
            <div class="col-4 mb-2">
                <input class="form-control" data-column-index='1' name="" type="text" placeholder="TAIP DI SINI" id="myInput" required/>
            </div>
            <div class="col-2 mb-2">
                <button class="btn btn-secondary filter-button" type="submit" id="">Cari
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
                        <th class="text-center">Papar</th> 

                    </tr>
                    <tbody id="myAuditTrail">
                    {{-- @foreach ($audit_trail as $at)  --}}
                        {{-- <tr>
                            <td>{{$at->id}}</td>
                            <td>{{$at->full_name}}</td>
                            <td>{{$at->ip_address}}</td>
                            <td>Windows</td>
                            <td>Nokia 3310</td>
                            <td>2022-11-22</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
                            <td>1 Jam</td>
                        </tr> --}}
                        {{-- @endforeach --}}
                        <tr>
                            <td>ID</td>
                            <td>FULL NAME</td>
                            <td>IP ADDRESS</td>
                            <td>Windows</td>
                            <td>ABC</td>
                            <td>2022-11-22</td>
                            <td>2022-12-25</td>
                            <td>1 Jam</td>
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
    });
</script>

<script>
        var minDate, maxDate;

        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = minDate.val();
                var max = maxDate.val();
                var date = new Date( data[7] ); // use data for the 'tempoh' column
        
                    if (
                        ( min === null && max === null ) ||
                        ( min === null && date <= max ) ||
                        ( min <= date   && max === null ) ||
                        ( min <= date   && date <= max )
                    ) {
                        return true;
                    }
                    return false;
            }
        );
 
    $(document).ready(function() {
        // Create date inputs
        minDate = new DateTime($('#min'), {
            format: 'YYYY-MM-D'
        });
        maxDate = new DateTime($('#max'), {
            format: 'YYYY-MM-D'
        });
    
        // DataTables initialisation
        var table = $('#laporan-audit-trail').DataTable();
    
        // Refilter the table
        $('#min, #max').on('change', function () {
            table.draw();
        });
    });
</script>

{{-- <script>
    $("document").ready(function () {

      $("#laporan-audit-trail").dataTable({
        "searching": true
      });

      //Get a reference to the new datatable
      var table = $('#laporan-audit-trail').DataTable();

      //Take the category filter drop down and append it to the datatables_filter div. 
      //You can use this same idea to move the filter anywhere withing the datatable that you want.
      $("#filterTable_filter.dataTables_filter").append($("#categoryFilter"));
      
      //Get the column index for the Category column to be used in the method below ($.fn.dataTable.ext.search.push)
      //This tells datatables what column to filter on when a user selects a value from the dropdown.
      //It's important that the text used here (Category) is the same for used in the header of the column to filter
      var categoryIndex = 0;
      $("#laporan-audit-trail th").each(function (i) {
        if ($($(this)).html() == "Category") {
          categoryIndex = i; return false;
        }
      });

      //Use the built in datatables API to filter the existing rows by the Category column
      $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
          var selectedItem = $('#categoryFilter').val()
          var category = data[categoryIndex];
          if (selectedItem === "" || category.includes(selectedItem)) {
            return true;
          }
          return false;
        }
      );

      //Set the change event for the Category Filter dropdown to redraw the datatable each time
      //a user selects a new filter.
      $("#categoryFilter").change(function (e) {
        table.draw();
      });

      table.draw();
    });
</script> --}}








    
@endsection