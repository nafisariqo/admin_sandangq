@extends('master')
@section('konten')
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="my-3">Form Add Data Volunteer</h2>
          <form action="{{route('v.s')}}" method="post" enctype="multipart/form-data">
           {{ csrf_field() }}
            <div class="row mb-3">
              <label for="title" class="col-sm-4 col-form-label">Upload Gambar</label>
              <div class="col-sm-10">
                <input type="file" id="gambar" name="gambar">
              </div>
            </div>
            <div class="row mb-3">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
            </div>
            <div class="form-group row"> 
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add Data</button>
                <button type="reset" class="btn btn-secondary">Reset Data</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection