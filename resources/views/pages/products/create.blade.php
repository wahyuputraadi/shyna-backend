@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products.store') }}" method="POST">@csrf
                <div class="form-grup">
                    <label for="name" class="form-control-label">Nama Barang</label>
                    <input type="text" name="name" value="((old('name')))" class="form-control @error('name') is-invalid @enderror">
                </div>
                <div class="form-grup">
                    <label for="type" class="form-control-label">Type Barang</label>
                    <input type="text" name="name" value="((old('type')))" class="form-control @error('name') is-invalid @enderror">
                </div>
                <div class="form-grup">
                    <label for="description" class="form-control-label">Description</label>
                    
                </div>
            </form>
        </div>
    </div>
@endsection)