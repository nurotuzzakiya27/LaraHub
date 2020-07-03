@extends('layout.master')

@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit Pertanyaan</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
          @foreach($datapertanyaan as $data)
         <form role="form" action="/pertanyaan/{{ $data->id }}" method="POST">
            {!! csrf_field() !!}
            {!! method_field('PUT') !!}
            <div class="card-body">
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $data->judul }}" placeholder="Masukkan Judul Pertanyaan">
              </div>
              <div class="form-group">
                <label for="isi">Isi</label>
                <input type="text" class="form-control" id="isi" name="isi" value="{{ $data->isi }}" height="100" placeholder="Masukkan Isi Pertanyaan">
              </div>
            </div>
            @endforeach
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