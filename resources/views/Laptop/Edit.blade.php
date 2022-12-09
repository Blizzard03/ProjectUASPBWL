@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Edit Laptop</h3>
          <div class="card-tools">
            <a href="{{ route('Laptop.index') }}" class="btn btn-sm btn-danger">
              Tutup
            </a>
          </div>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="form-group">
              <label for="nama_Laptop">Nama Laptop</label>
              <input type="text" name="nama_Laptop" id="nama_Laptop" class="form-control">
            </div>
            <div class="form-group">
              <label for="slug_Laptop">Slug Laptop</label>
              <input type="text" name="slug_Laptop" id="slug_Laptop" class="form-control">
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Update</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection