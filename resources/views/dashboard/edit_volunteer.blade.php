@extends('master')
@section('konten')
<div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="my-3">Form Edit Data Volunteer</h2>
          <form action="{{route('v.u', $dt->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('patch')
            
            <div class="row mb-3">
              <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
              <div class="col-sm-10">
                <input type="file" name="gambar" id="gambar">
              </div>
            </div>
            <div class="row mb-3">
              <img src="{{ asset('img/' . $dt->gambar ) }}" height="10%" width="50%" alt="" srcset="">
            </div>
            <div class="row mb-3">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama"
                @if (old('nama'))
                    value="{{ old('nama') }}"        
                @else
                    value="{{ $dt->nama }}"
                @endif
                >
              </div>
            </div>
            <div class="form-group row"> 
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update Data</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

@endsection