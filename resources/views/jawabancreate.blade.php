@extends('layout.master')

@section('content')

<div class="card">
      <div class="card-header">
        @foreach($datapertanyaan as $dtptr)
        <h3 class="card-title"><b>Judul Pertanyaan: </b>{{ $dtptr->judul }}</h3>
        @endforeach
      </div>
      <!-- /.card-header -->
      <div class="card-body">
         <form action="{{ route('jawabanStore',[$row_jawaban]) }}" method="POST">
          {!! csrf_field() !!}
            <div class="form-group">
              <label for="isi">Tambah Jawaban</label>
              <input type="text" class="form-control" id="isi" name="isi" placeholder="Masukkan jawaban">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </form>
      </div>
      <!-- /.card-body -->
      <table class="table table-bordered" style="width: 80%">
        <thead>                  
          <tr>
            <th>No</th>
            <th>Jawaban</th>
          </tr>
        </thead>
        <tbody>
          @foreach($datajawaban as $key => $item)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $item->isi }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
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