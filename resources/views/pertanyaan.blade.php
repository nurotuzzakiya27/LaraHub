@extends('layout.master')

@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Pertanyaan</h3>
      </div>

              
      <!-- /.card-header -->
      <div class="card-body">
        <a href="/pertanyaan/create" class="btn btn-info">Tambah Pertanyaan</a>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th width="40%">Actions</th>
          </tr>
          </thead>
          <tbody>
          @foreach($row_pertanyaan as $key => $row) 
          <tr>
            <td> {{ $key + 1 }}</td>
            <td> {{ $row->judul }} </td>
            <td> {{ $row->isi }} </td>
            <td>
              <a href="/pertanyaan/{{ $row->id }}"  class="btn btn-primary">Detail</a>
              <a href="/pertanyaan/{{ $row->id }}/edit"  class="btn btn-success">Edit</a>
              <a href="/jawaban/{{ $row->id }}"  class="btn btn-warning">Tambah Jawaban</a>
              <a href="/pertanyaan/{{ $row->id }}/delete"  class="btn btn-danger">Delete</a>
            </td>
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