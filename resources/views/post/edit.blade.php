@extends('layout')

@section('content')

<style>
    .wrapper {
        max-width: 600px;
        margin: 30px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        font-family: 'Arial', sans-serif;
    }

    .form-title {
        text-align: center;
        margin-bottom: 20px;
        color: #1494aa;
        font-size: 28px;
        font-weight: bold;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #030303;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .form-control:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-blue {
        background-color: #007bff;
        color: white;
    }

    .btn-blue:hover {
        background-color: #0056b3;
    }

    .alert {
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        color: white;
        font-size: 14px;
    }

    .alert-success {
        background-color: #28a745;
    }

    .alert-danger {
        background-color: #dc3545;
    }
</style>

<div class="wrapper">
    <h1 class="form-title">Edit Pesanan</h1>
    
    @if (session('success'))
    <div class="alert alert-success">
        <p>{{ session('success') }}</p>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ url('posts', $post->id ) }}">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nama">Nama</label>
            <input name="nama" value="{{ $post->nama }}" type="text" placeholder="Masukkan nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input name="phone" value="{{ $post->phone }}" type="text" placeholder="Masukkan nomor telepon" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input name="alamat" value="{{ $post->alamat }}" type="text" placeholder="Masukkan alamat" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="appatizer">Appetizer</label>
            <input name="appatizer" value="{{ $post->appatizer }}" type="text" placeholder="Masukkan appetizer" class="form-control">
        </div>

        <div class="form-group">
            <label for="mainc">Main Course</label>
            <input name="mainc" value="{{ $post->mainc }}" type="text" placeholder="Masukkan main course" class="form-control">
        </div>

        <div class="form-group">
            <label for="dessert">Dessert</label>
            <input name="dessert" value="{{ $post->dessert }}" type="text" placeholder="Masukkan dessert" class="form-control">
        </div>

        <div class="form-group">
            <label for="drink">Drink</label>
            <input name="drink" value="{{ $post->drink }}" type="text" placeholder="Masukkan drink" class="form-control">
        </div>

        <button type="submit" class="btn btn-blue">Simpan Perubahan</button>
    </form>
</div>
@endsection