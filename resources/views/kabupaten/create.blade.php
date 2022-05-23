@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Kabupaten</h1>
  </div>

  <div class="col-lg-8">
  <form method="post" action="{{ route('kabupaten.store') }}" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="kabupaten" class="form-label">Nama</label>
      <input type="text" class="form-control" id="kabupaten"
      name="kabupaten">
    </div>
    <div class="mb-3">
        <label for="provinsi" class="form-tabel">Provinsi</label>
        <select class="form-select" name="provinsi_id">
            @foreach($provinsis as $provinsi)
            @if(old('provinsi_id') == $provinsi->id)
               <option value="{{ $provinsi->id }}" selected>{{ $provinsi->provinsi }}</option>
               @else
               <option value="{{ $provinsi->id }}">{{ $provinsi->provinsi }}</option>
               @endif
            @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Create Provinsi</button>
  </form>
</div>
@endsection
