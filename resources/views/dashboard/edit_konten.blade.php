@extends('master')
@section('konten')
<div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="my-3">Form Edit Data Konten</h2>
          <form method="post" action="{{route('k.u', $dt->id_konten)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('patch')
            <div class="row mb-3">
              <label for="gmbr" class="col-sm-2 col-form-label">Gambar</label>
              <div class="col-sm-10">
                <input type="file" id="gmbr" name="gmbr">
              </div>
            </div>
            <div class="row mb-3">
              <img src="{{ asset('img/' . $dt->gmbr ) }}" height="10%" width="50%" alt="" srcset="">
            </div>
            <div class="row mb-3">
              <label for="title" class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" 
                @if (old('title'))
                    value="{{ old('title') }}"        
                @else
                    value="{{ $dt->title }}"
                @endif
                >
              </div>
            </div>
            <div class="row mb-3">
              <label for="description" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                {{-- <input type="text" class="form-control" id="description" name="description" --}}
                <textarea name="description" id="description" class="form-control summernote"
                @if (old('description'))
                    value="{{ old('description') }}"        
                @else
                    value="{{ $dt->description }}"
                @endif
                >
              </textarea>
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

@push('text-field')
<script type="text/javascript">
  $(document).ready(function() {
    $('.summernote').summernote({
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  });
</script>
@endpush