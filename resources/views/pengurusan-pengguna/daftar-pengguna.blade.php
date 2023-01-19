@extends('layouts.base')

@section('content')
<h1 style="color: #003478;">PENGURUSAN PENGGUNA</h1>

<hr style="color: #003478;">

<div class="card mt-6">
    <div class="card-body">
        <h2 style="color: #003478;">Daftar Pengguna</h2>
        {{-- <table id="laporan-audit-trail" class="table line-table mt-6 stripe" style="width:100%">
            <thead class="text-black">
                <tr>
                    <th class="text-center">Bil.</th>
                    <th class="text-center">Nama Pengguna</th>
                    <th class="text-center">Bahagian Pengurusan Teknologi Maklumat (BPTM)</th>
                    <th class="text-center">Bahagian Wang Tidak Dituntut (BWTD)</th>
                    <th class="text-center">Peranan</th>
                    <th class="text-center">Tindakan</th>
                </tr>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Muzzamir</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Sila Pilih
                                </label>
                            </div>
                        </td>
                        <td>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                  Sila Pilih
                                </label>
                              </div>
                        </td>
                        <form action="/" method="POST" enctype="multipart/form-data">
                            @csrf
                        <td>
                            <div class="col-auto">
                                <select class="form-select form-control" name="nama">
                                    <option selected disabled="">Sila Pilih</option>
                                    <option value="admin">Admin</option>
                                    <option value="sub-admin">Sub-Admin</option>
                                 </select>
                            </div>
                        </td>
                        <td><button name="sah" value="1" type="submit" class="btn btn-secondary">Simpan</button>
                        </td>
                        </form>
                    </tr>
                </tbody>
            </thead>
        </table> --}}
        <form action="" method="POST">
            @csrf
            <div class="row mx-2 mb-2 mt-5">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">Jenis Pengguna: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-5 mb-2">
                    <input placeholder="SILA PILIH" class="form-control textbox-n" data-column-index='7'  name="tempoh" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">Nama Pengguna: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-5 mb-2">
                    <input placeholder="Contoh: Ahmad bin Muhammad" class="form-control textbox-n" data-column-index='7'  name="tempoh" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">ID Pengguna: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-5 mb-2">
                    <input placeholder="Contoh: ahmad" class="form-control textbox-n" data-column-index='7'  name="tempoh" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">Jenis Pengenalan: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-5 mb-2">
                    <input class="form-control textbox-n" data-column-index='7'  name="tempoh" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">No. Pengenalan: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-5 mb-2">
                    <input class="form-control textbox-n" data-column-index='7'  name="tempoh" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" placeholder="Contoh: 770101037777" required/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">Emel: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-5 mb-2">
                    <input placeholder="Contoh: egumis@anm.gov.my" class="form-control textbox-n" data-column-index='7'  name="tempoh" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2 text-end">
                <div class="col-10 mb-2 text-end">
                    <button class="btn btn-secondary" type="submit">Simpan</button>
                </div>
                </form>
                <form action="/peranan">
                    <div class="col-10 mb-2 text-end">
                        <button class="btn btn-primary" type="submit">Batal</button>
                    </div>
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