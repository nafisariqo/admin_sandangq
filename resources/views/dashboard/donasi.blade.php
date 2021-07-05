@extends('master')

@section('konten')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Table</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Donasi</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>News</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Resi</th>
              <th>Action</th>
            </tr>
          </thead>
          @foreach ($donasi as $no => $data)
          <tr>
            <td>{{$no+1}}</td>
            <td>{{$data->news}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->resi}}</td>
            <td>
              
              <a href="#" data-id="{{ $data->id_donasi }}" class="btn btn-danger mb-12 swal-confirm">
                <form action="{{ route('d.d', $data->id_donasi) }}" id="delete{{ $data->id_donasi }}" method="POST">
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
                <th>News</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Resi</th>
                <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
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