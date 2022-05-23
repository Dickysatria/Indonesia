@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Kecamatan</h1>
  </div>

  <div class="col-lg-8">
  <form method="post" action="{{ route('kecamatan.store') }}" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="kecamatan" class="form-label">Nama</label>
      <input type="text" class="form-control" id="kecamatan"
      name="kecamatan">
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
    <div class="mb-3">
        <label for="Kabupaten" class="form-tabel">Kabupaten</label>
        <select class="form-select" name="kabupaten_id">
            @foreach($kabupatens as $kabupaten)
            @if(old('kabupaten_id') == $kabupaten->id)
               <option value="{{ $kabupaten->id }}" selected>{{ $kabupaten->kabupaten }}</option>
               @else
               <option value="{{ $kabupaten->id }}">{{ $kabupaten->kabupaten }}</option>
               @endif
            @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Create Kecamatan</button>
  </form>
</div>
<script>
    const name = document.querySelector('#name');

    name.addEventListener('change', function(){
        fetch('kecamatan/id' + name.value)
        .then(response => response.json())
        .then(data => id.value = data.id)
    });
</script>
@endsection
