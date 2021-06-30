@extends('master')

@section('konten')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Table</h1>

  <div class="row">
    <div class="col-md-12">
        <a href="/create_konten" class="btn btn-primary mb-3">Add Data</a>
    </div>
  </div>
</div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4 mx-3">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Volunteer</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Nama</th>
              <th>Action</th>
            </tr>
          </thead>
          @foreach ($volunteer as $no => $data)
          <tr>
            <td>{{$no+1}}</td>
            <td>
              <a href="{{ asset($data->gambar) }}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a>
            </td>
            <td>{{$data->nama}}</td>
            <td>
              <a href="{{route('v.e', $data->id)}}" class="btn btn-warning mb-3">Edit Data</a>
              <a href="#" data-id="{{ $data->id }}" class="btn btn-danger mb-3 swal-confirm">
                <form action="{{ route('v.d', $data->id) }}" id="delete{{ $data->id }}" method="POST">
                  @csrf
                  @method('delete')
                </form>
                Delete
              </a>
            </td>
          </tr>
      @endforeach
          <tfoot>
            <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Nama</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>


@endsection