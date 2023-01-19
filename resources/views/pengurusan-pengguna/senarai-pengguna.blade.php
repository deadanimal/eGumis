@extends('layouts.base')

@section('content')

<h1 style="color: #003478;">PENGURUSAN PENGGUNA</h1>

<hr style="color: #003478;">
<div class="card mt-6">
    <div class="card-body">
        <h2 style="color: #003478;">Senarai Pengguna</h2>
        <form action="" method="POST">
            @csrf
            <div class="row mx-2 mb-2 mt-5">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">Jenis Pengguna:</label>
                </div>
                <div class="col-5 mb-2">
                    <select class="form-select categoryFilter" data-column-index='2' aria-label="Default select example"  name="jenis_pengguna" required>
                        <option selected>SILA PILIH</option>
                        <option value="BWTD">SEMUA</option>
                        <option value="BPTM">BPTM</option>
                    </select>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">Nama:</label>
                </div>
                <div class="col-5 mb-2">
                    <input class="form-control textbox-n" data-column-index='7'  name="tempoh" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">Nama Pengguna:</label>
                </div>
                <div class="col-5 mb-2">
                    <input class="form-control textbox-n" data-column-index='7'  name="tempoh" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">No. Pengenalan:</label>
                </div>
                <div class="col-5 mb-2">
                    <input class="form-control textbox-n" data-column-index='7'  name="tempoh" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">E-mel:</label>
                </div>
                <div class="col-5 mb-2">
                    <input class="form-control textbox-n" data-column-index='7'  name="tempoh" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required/>
                </div>
                <div class="col-2 mb-2 text-end">
                    <button class="btn btn-secondary" type="submit">Cari  &nbsp;
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </form>
        <form action="" method="POST">
            <div class="row mx-2 mb-2 mt-5">
                <div class="col-10 mb-2">
                    <button class="btn btn-secondary" type="submit">Tambah  &nbsp;
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="card-body">
        <table id="senarai-pengguna" class="table line-table mt-6 stripe" style="width:100%">
            <thead class="text-black">
                <tr>
                    <th class="text-center">Bil.</th>
                    <th class="text-center">Nama Pengguna</th>
                    <th class="text-center">No. Pengenalan</th>
                    <th class="text-center">Nama Penuh</th>
                    <th class="text-center">E-mel</th> 
                    <th class="text-center">Jenis Pengguna</th>
                    <th class="text-center">Status</th> 
                </tr>
                <tbody id="myAuditTrail">
                {{-- @foreach ($audit_trail as $at)  --}}
                    {{-- <tr>
                        <td>{{$at->id}}</td>
                        <td>{{$at->full_name}}</td>
                        <td>{{$at->ip_address}}</td>
                        <td>{{$at->ip_address}}</td>
                        <td>{{$at->ip_address}}</td>
                        <td>{{$at->date_logged_in}}</td>
                        <td>{{$at->date_logged_out}}</td>
                        <td>{{$at->requested_time}}</td>
                        <td>{{$at->requested_url}}</td>
                    </tr> --}}
                {{-- @endforeach --}}
                </tbody>
            </thead>
        </table>
    </div>
    
</div>

<!--JavaScript-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"></script>

<script>
    $(document).ready(function() {
        var table = $('#senarai-pengguna').DataTable({
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
                "next": "Seterusnya",
                }
            },
            dom: 'lfBfrtip',
            // dom: 'Bfrtip',
            // dom: 'frit',

            // Specify multiple classes to be used - for table striped color
            stripeClasses: ['stripe-1','stripe-2'],
        });
    });
</script>

@endsection