@extends('layout.master')

@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
         <form role="form" action="/pertanyaan" method="POST">
            {!! csrf_field() !!}
            <div class="card-body">
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Pertanyaan">
              </div>
              <div class="form-group">
                <label for="isi">Isi</label>
                <input type="text" class="form-control" id="isi" name="isi" height="100" placeholder="Masukkan Isi Pertanyaan">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
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