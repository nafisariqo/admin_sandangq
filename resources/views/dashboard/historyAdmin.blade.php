@extends('master')
@section('konten')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Table</h1>

  <div class="row">
    <div class="col-md-12">
        <a href="/create_history" class="btn btn-primary mb-3">Add Data</a>
    </div>
  </div>
</div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4 mx-3">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data History Project</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Penjelasan</th>
              <th>Action</th>
            </tr>
          </thead>
          @foreach ($ds as $no => $data)
              <tr>
                <td>{{$no+1}}</td>
                <td>
                  <a href="{{ asset ('img/' . $data->image) }}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a>
                </td>
                <td>{{$data->penjelasan}}</td>
                <td>
                  <a href="#" data-id="{{ $data->id }}" class="btn btn-danger mb-3 swal-confirm">
                    <form action="{{ route('history.d', $data->id) }}" id="delete{{ $data->id }}" method="POST">
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
              <th>Penjelasan</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
@endsection

@push('page-scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
@endpush

@push('after-script')
<script>
  $(".swal-confirm").click(function(e) {
    id = e.target.dataset.id;
    swal({
      title: "Are you sure? " + id,
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if(willDelete) {
        swal('Your imaginary file has been deleted!', {
          icon: 'success',
        });
        $(`#delete${id}`).submit();
      } else {
        swal('Your imaginary file is safe!');
      }
    })
  })
</script>
@endpush