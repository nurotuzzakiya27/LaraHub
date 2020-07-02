@extends('layout.master')

@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Jawaban</th>
          </tr>
          </thead>
          <tbody>
          @foreach($row_pertanyaan as $key => $row) 
          <tr>
            <td> {{ $key + 1 }}</td>
            <td> {{ $row->judul }} </td>
            <td> {{ $row->isi }} </td>
            <form action="/jawaban/{{ $row->id }}" method="GET">
              <td><button type="submit" class="btn btn-primary">Jawaban</button></td>
            </form>
          </tr>
          @endforeach
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
@endsection

@push('scripts')
<script src="{{ asset('/adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush