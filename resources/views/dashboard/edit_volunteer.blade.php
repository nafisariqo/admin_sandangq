@extends('master')
@section('konten')
<div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="my-3">Form Edit Data Volunteer</h2>
          <form action="{{route('v.u', $volunteer->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="row mb-3">
              <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="gambar" name="gambar" 
                @if (old('gambar'))
                    value="{{ old('gambar') }}"        
                @else
                    value="{{ $volunteer->gambar }}"
                @endif
                >
              </div>
            </div>
            <div class="row mb-3">
              <label for="description" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="description" name="description"
                @if (old('description'))
                    value="{{ old('description') }}"        
                @else
                    value="{{ $konten->description }}"
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