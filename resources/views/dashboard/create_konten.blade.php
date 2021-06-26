@extends('master')
@section('konten')
<div class="container-fluid">

<div class="container">
<div class="row">
<div class="col-8">
    <h2 class="my-3">Form Add Data Konten</h2>
    <form action="{{route('k.s')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="row mb-3">
    <label for="title" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" name="title">
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="description" name="description">
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

@endsection