@extends('master')
@section('konten')
<div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="my-3">Form Edit Data Volunteer</h2>
          <form action="{{route('v.u', $volunteer->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('patch')
            <input type="hidden" name="id" value="{{$volunteer->id}}"/>
            <div class="row mb-3">
              <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
              <div class="col-sm-10">
                <input type="file" name="file" onchange="previewFile(this)" />
                <img id="previewImg" src="{{ asset('public/img')}}/{{ $volunteer->gambar}}" alt="Profile Image" style="max-width:130px;margin-top:20px;"/>
                {{-- @if (old('gambar'))
                    value="{{ old('gambar') }}"        
                @else
                    value="{{ $volunteer->gambar }}"
                @endif --}}
                
              </div>
            </div>
              {{-- <div class="col-sm-10"> --}}
                {{-- <img id="gambar" src="{{ asset('\public\img')}}/{{ $volunteer->gambar}}" style="max-width:130px;margin-top:20px;"/> --}}
                {{-- <img src="{{ asset('img/' . $volunteer->gambar ) }}" style="max-width:130px;margin-top:20px;"/> --}}
                {{-- <img src="/public/img/{{ $volunteer->gambar}}" style="max-width:130px;margin-top:20px;"/>
              </div> --}}
            <div class="row mb-3">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama"
                @if (old('nama'))
                    value="{{ old('nama') }}"        
                @else
                    value="{{ $volunteer->nama }}"
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