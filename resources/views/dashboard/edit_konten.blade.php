@extends('master')
@section('konten')
<div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="my-3">Form Edit Data Konten</h2>
          <form action="{{route('k.u', $konten->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="row mb-3">
              <label for="gmbr" class="col-sm-2 col-form-label">Gambar</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="gmbr" name="gmbr" 
                @if (old('gmbr'))
                    value="{{ old('gmbr') }}"        
                @else
                    value="{{ $konten->gmbr }}"
                @endif
                >
              </div>
            </div>
            <div class="row mb-3">
              <label for="title" class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" 
                @if (old('title'))
                    value="{{ old('title') }}"        
                @else
                    value="{{ $konten->title }}"
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