@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Barang</strong>
            <p>
                <small>{{ $items->name }}</small>
            </p>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products.update', $items->id ) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-grup">
                    <label for="name" class="form-control-label">Nama Barang</label>
                    <input type="text" 
                    name="name" 
                    value="{{ old('name') ? old('name'): $items->name }}" 
                    class="form-control @error('name') is-invalid @enderror">
                    @error('name') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-grup">
                    <label for="type" class="form-control-label">Type Barang</label>
                    <input type="text" name="type" value="{{ old('type') ? old('type') : $items->type }}" class="form-control @error('type') is-invalid @enderror">
                    @error('type') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-grup">
                    <label for="description" class="form-control-label">Deskripsi Barang</label>
                    <textarea name="description" class="cekeditor form-control @error('description') is-invalid @enderror">{{ old('description') ? old('description') : $items->description }}</textarea>
                    @error('description') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-grup">
                    <label for="price" class="form-control-label">Price</label>
                    <input type="number" name="price" value="{{ old('price') ? old('price') : $items->price }}" class="form-control @error('price') is-invalid @enderror">
                    @error('price') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-grup">
                    <label for="quantity" class="form-control-label">Quantity</label>
                    <input type="number" name="quantity" value="{{ old('quantity') ? old('quantity') : $items->quantity }}" class="form-control @error('quantity') is-invalid @enderror">
                    @error('quantity') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <p>
                    <div class="form-grup">
                        <button class="btn btn-primary btn-block" type="submit">
                            Ubah Barang
                        </button>
                    </div>
                </p>
            </form>
        </div>
    </div>
@endsection)