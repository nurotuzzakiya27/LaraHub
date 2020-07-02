@extends('layout.master')

@section('content')

<div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <table class="table table-bordered">
        <thead>                  
          <tr>
            <th>#</th>
            <th>Isi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $key => $item)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $item->isi }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <!-- /.card-header -->
      <div class="card-body">
         <form action="{{ route('jawabanStore',[$row_jawaban]) }}" method="POST">
          {!! csrf_field() !!}
            <div class="form-group">
              <label for="isi">Isi</label>
              <input type="text" class="form-control" id="isi" name="isi" placeholder="Masukkan jawaban">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
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