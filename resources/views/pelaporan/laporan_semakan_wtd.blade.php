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

<h1 style="color: #003478;">LAPORAN SEMAKAN WTD</h1>

<hr style="color: #003478;">

<div class="container-fluid">
    <form action="/carian-semakan-wtd" method="POST">
        @csrf
        <div class="row mx-2 mb-2 mt-5">
            <div class="col mb-2">
                <label class="col-form-label text-black">Tempoh:</label>
            </div>
            <div class="col-4 mb-2">
                <input value="{{$tempoh ?? ''}}" placeholder="SILA PILIH" class="form-control textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
            </div>
            <div class="col-2 mb-2">
                <label class="col-form-label text-black">Jenis Status:</label>
            </div>
            <div class="col-4 mb-2">
                <select class="form-select" aria-label="Default select example" name="status">
                    <option selected disabled>SILA PILIH</option>
                    {{-- <option value="{{$jenis_status ?? ''}}"></option> --}}
                    <option value="01">Deraf</option>
                    <option value="02">Pengesahan Dokumen 1</option>
                    <option value="03">Kuiri Dokumen 1</option>
                    <option value="04">Pengesahan Dokumen 2</option>
                    <option value="05">Kuiri Dokumen 2</option>
                    <option value="06">Baharu</option>
                    <option value="07">Selesai</option>
                    <option value="08">Kuiri</option>
                </select>     
            </div>
            {{-- <div class="col mb-2">
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
            </div> --}}
            </div>
        </div>
        <div class="row mx-2 mb-2 mt-2">
            <div class="col-2 mb-2">
                <label class="col-form-label text-black">No. Pengenalan:</label>
            </div>
            <div class="col-4 mb-2">
                <input value="{{$no_ic ?? ''}}" class="form-control" name="no_ic" type="number" placeholder="TAIP DI SINI"/>
            </div>
            <div class="col mb-2 text-end">
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
        <div class="row mx-2 mb-2 mt-2">
            <div class="col-2 mb-2">
                <label class="col-form-label text-black">No. Rujukan:</label>
            </div>
            <div class="col-4 mb-2">
                <input value="{{$no_rujukan ?? ''}}" class="form-control" name="no_rujukan" type="text" placeholder="TAIP DI SINI"/>
            </div>
        </div>
    

    <div class="card mt-6">
        <div class="card-body">
            {{-- <div class="table-responsive scrollbar"> --}}
                <table id="semakan-wtd" class="table line-table mt-6" style="width:100%">
                    <thead class="text-black">
                        <tr>
                            <th class="text-center">Bil</th>
                            <th class="text-center">No. Rujukan</th>
                            <th class="text-center">Nama Pengguna</th>
                            <th class="text-center">No. Pengenalan</th>
                            <th class="text-center">Amaun Tuntutan (RM)</th>
                            <th class="text-center">Tarikh Tuntutan</th> 
                            <th class="text-center">Jenis Status</th>
                            <th class="text-center">Tindakan</th> 
                            <th class="text-center">OS</th> 
                            <th class="text-center">Model</th> 
                        </tr>
                        <tbody>
                            @foreach ($semakan_wtd as $sw) 
                        <tr>
                            <td class="text-center">{{$sw->id}}</td>
                            <td class="text-center">{{$sw->file_refno}}</td>
                            <td class="text-center">{{$sw->name}}</td>
                            <td class="text-center">
                                {{$sw->new_ic_number}}
                                {{$sw->old_ic_number}}
                            </td>
                            <td class="text-center">{{$sw->claimAmount}}</td>
                            <td class="text-center">{{$sw->created_date}}</td>
                            <td class="text-center">{{$sw->status}}</td>
                            <td class="text-center">Tindakan</td>
                            <td class="text-center">Versi OS</td>
                            <td class="text-center">Versi Model</td>
                        </tr>
                    @endforeach
                        </tbody>
                    </thead>
                </table>
            {{-- </div> --}}
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
    var table = $('#semakan-wtd').DataTable( {
        scrollX: true,
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
        buttons: buttonConfig,
        stripeClasses: ['stripe-1','stripe-2'],
        buttons: [
                { 
                    extend: 'pdf', 
                    text: 'PDF <i class="fa fa-cloud-download" aria-hidden="true"></i>',
                    download: 'open',
                    pageSize: 'LEGAL',
                    orientation: 'landscape',
                    init: function(api, node, config) {
                    $(node).removeClass('btn-default')
                }
                },
                { 
                    extend: 'excel', 
                    text: 'EXCEL <i class="fa fa-cloud-download" aria-hidden="true"></i>',
                    download: 'open',
                }
            ]
        });
    });
</script>

<script>
    function updateDiv()
    {
    $( “#here” ). load(window. location. href + ” #here” );
    }
</script>
@endsection