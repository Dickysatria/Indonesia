@extends('layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Home</h1>
  </div>
  <div class="table-responsive col-lg-6">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Provinsi</th>
          <th scope="col">Kabupaten</th>
          <th scope="col">Kecamatan</th>
          <th scope="col">Desa</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($datas as $data)
          <tr>
            <td>{{ $data->id}}</td>
            <td>{{ $data->provinsi}}</td>
            <td>{{ $data->kabupaten}}</td>
            <td>{{ $data->kecamatan}}</td>
            <td>{{ $data->desa}}</td>
          </tr>
          @endforeach

      </tbody>
    </table>
  </div>
@endsection
