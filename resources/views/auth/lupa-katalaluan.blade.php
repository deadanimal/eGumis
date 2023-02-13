@extends('layouts.login-base')

@section('content')
    <div class="container-fluid">
      <div class="card mt-10" style="text-align:center; width: 18rem;">
        <div class="card-body">
          <form method="POST" action="/hantar-lupa-katalaluan">
            @method('POST')
            @csrf
            <div class="row mx-2 mb-2 mt-5">
              <div class="col mb-2">
                  <input placeholder="Alamat Emel" class="form-control textbox-n" type="email"/>
                  <button type="submit" class="btn btn-primary d-block w-100 mt-3">Hantar</button>
              </div>                      
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection