@extends('layout.master')

@section('content')

<div class="card">
      <div class="card-header">
        @foreach($datapertanyaan as $dtptr)
        <h1 class="card-title"><b>Judul Pertanyaan: </b>{{ $dtptr->judul }}</h1><br><br>
        <p><b>Isi: </b>{{ $dtptr->isi }}</p>
        <p><b>Tanggal Dibuat: </b>{{ $dtptr->created_at }}</p>
        <p><b>Tanggal Diperbaharui: </b>{{ $dtptr->updated_at }}</p>
        @endforeach
      </div>
      <table class="table table-bordered" style="width: 80%">
        <thead>                  
          <tr>
            <th>No</th>
            <th>Jawaban</th>
            <th>Tanggal Dibuat</th>
            <th>Tanggal Diperbaharui</th>
          </tr>
        </thead>
        <tbody>
          @foreach($datajawaban as $key => $item)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $item->isi }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
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