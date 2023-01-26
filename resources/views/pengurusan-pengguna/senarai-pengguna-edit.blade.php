@extends('layouts.base')

<style>
    /* .slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
    .slider.round {
    border-radius: 34px;
    }

    .slider.round:before {
    border-radius: 50%;
    } */
</style>

@section('content')

<h1 style="color: #003478;">PENGURUSAN PENGGUNA</h1>

<hr style="color: #003478;">
<div class="card mt-6">
    <div class="card-body">
        <h2 class="mb-4" style="color: #003478;">Maklumat Pengguna</h2>
        <h4>Maklumat Akaun</h4>
        <hr>

        <form action="/pengurusan-pengguna/senarai-pengguna/simpan-kemaskini/{id}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mx-2 mb-2 mt-5">
                <div class="col-2 mb-2">
                    <label class="col-form-label text-black">Nama Pengguna: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-4 mb-2">
                    <input class="form-control" type="text" readonly/>
                </div>
                <div class="col-2 mb-2">
                    <label class="col-form-label text-black">Entiti Pengguna: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-4 mb-2">
                    <input class="form-control" name="" type="text" placeholder="TAIP DI SINI" required/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-2 mb-2">
                    <label class="col-form-label text-black">Keaktifan: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-4 mb-2">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                    </div>
                </div>
            </div>

            <h4 class="mt-5">Maklumat Diri</h4>
            <hr>

            <div class="row mx-2 mb-2 mt-5">
                <div class="col-2 mb-2">
                    <label class="col-form-label text-black">Nama Penuh: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-4 mb-2">
                    <input class="form-control" value="" type="text" placeholder="TAIP DI SINI" required/>
                </div>
                <div class="col-2 mb-2">
                    <label class="col-form-label text-black">E-mel: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-4 mb-2">
                    <input class="form-control" name="" type="text" placeholder="TAIP DI SINI" required/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-2 mb-2">
                    <label class="col-form-label text-black">Jenis Pengenalan: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-4 mb-2">
                    <select class="form-select categoryFilter" data-column-index='2' aria-label="Default select example" name="identity_type" required>
                        <option selected>SILA PILIH</option>
                        <option value="NOMBOR KP BARU">NOMBOR KP BARU</option>
                        <option value="NOMBOR KP LAMA">NOMBOR KP LAMA</option>
                    </select>                
                </div>
                <div class="col-2 mb-2">
                    <label class="col-form-label text-black">No. Pengenalan: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-4 mb-2">
                    <input class="form-control" name="" type="number" placeholder="TAIP DI SINI" required/>
                </div>
            </div>

            <h4 class="mt-5">Maklumat Perhubungan</h4>
            <hr>

            <div class="row mx-2 mb-2 mt-2">
                <div class="col-2 mb-2">
                    <label class="col-form-label text-black">Alamat 1: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-4 mb-2">
                    <input class="form-control" value="" type="text" readonly/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-2 mb-2">
                    <label class="col-form-label text-black">Alamat 2:</label>
                </div>
                <div class="col-4 mb-2">
                    <input class="form-control" value="" type="text" readonly/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-2 mb-2">
                    <label class="col-form-label text-black">Poskod: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-4 mb-2">
                    <input class="form-control" value="" type="text" readonly/>
                </div>
                <div class="col-2 mb-2">
                    <label class="col-form-label text-black">Bandar: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-4 mb-2">
                    <input class="form-control" name="" type="text" readonly/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-2 mb-2">
                    <label class="col-form-label text-black">Negara: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-4 mb-2">
                    <input class="form-control" value="" type="text" readonly/>
                </div>
                <div class="col-2 mb-2">
                    <label class="col-form-label text-black">Negeri: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-4 mb-2">
                    <input class="form-control" name="" type="text" readonly/>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col-2 mb-2">
                    <label class="col-form-label text-black">Nombor Tel Bimbit: <span style="color: #FF0000">&#42;</span><span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-4 mb-2">
                    <input class="form-control" value="" type="text" readonly/>
                    <small>Masukkan salah satu maklumat untuk dihubungi (no. tel. bimbit atau no. tel. pejabat/rumah)</small>
                </div>
                <div class="col-2 mb-2">
                    <label class="col-form-label text-black">Nombor Tel Pejabat: <span style="color: #FF0000">&#42;</span><span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-4 mb-2">
                    <input class="form-control" name="" type="text" readonly/>
                    <small>Masukkan salah satu maklumat untuk dihubungi (no. tel. bimbit atau no. tel. pejabat/rumah).</small>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="col mb-2 text-end">
                    <form action="">
                        <button class="btn btn-primary" href="/pengurusan-pengguna/senarai-pengguna">Kembali</button>
                    </form>
                    <button class="btn btn-secondary" type="submit">Simpan</button>
                </div>
            </div>
        </form>



    </div>
</div>
@endsection