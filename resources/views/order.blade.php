@extends('layout')

@section('content')
<style>
    .wrapper {
        max-width: 600px;
        margin: 30px auto;
        padding: 25px 30px;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        border: 1px solid #e6e6e6;
    }

    .form-title {
        text-align: center;
        margin-bottom: 25px;
        color: #1494aa;
        font-size: 28px;
        font-weight: 700;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #2c2c2c;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #1494aa;
        outline: none;
        box-shadow: 0 0 6px rgba(20, 148, 170, 0.5);
    }

    .btn {
        width: 100%;
        padding: 12px 15px;
        border: none;
        border-radius: 8px;
        font-size: 18px;
        font-weight: 600;
        cursor: pointer;
        background-color: #1494aa;
        color: white;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #107e8f;
    }

    .alert {
        padding: 12px;
        margin-bottom: 20px;
        border-radius: 8px;
        color: white;
        font-size: 15px;
    }

    .alert-success {
        background-color: #28a745;
    }

    .alert-danger {
        background-color: #dc3545;
    }

    ul {
        padding-left: 20px;
    }
    
    li {
        margin-bottom: 8px;
    }

    .form-description {
        text-align: center;
        margin-bottom: 20px;
        color: #6c757d;
        font-size: 16px;
    }

    .form-control::placeholder {
        color: #bbb;
    }
</style>

<div class="wrapper">
    <h1 class="form-title">Buat Pesanan</h1>

    @if (session('success'))
    <div class="alert alert-success">
        <p>{{ session('success') }} Pesanan Anda berhasil dibuat, terima kasih!</p>
        <!-- Tombol Arahkan ke Halaman Semua Pesanan -->
        <a href="{{ route('posts.index') }}" class="btn">Lihat Semua Pesanan</a>
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

    <form method="POST" action="{{ url('posts') }}" class="form">
        @csrf
        <!-- Form Fields -->
        <div class="form-group">
            <label for="nama">Nama</label>
            <input name="nama" type="text" placeholder="Masukkan nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input name="phone" type="text" placeholder="Masukkan nomor telepon" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input name="alamat" type="text" placeholder="Masukkan alamat" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="appatizer">Appetizer</label>
            <input name="appatizer" type="text" placeholder="Masukkan appetizer" class="form-control">
        </div>
        <div class="form-group">
            <label for="mainc">Main Course</label>
            <input name="mainc" type="text" placeholder="Masukkan main course" class="form-control">
        </div>
        <div class="form-group">
            <label for="dessert">Dessert</label>
            <input name="dessert" type="text" placeholder="Masukkan dessert" class="form-control">
        </div>
        <div class="form-group">
            <label for="drink">Drink</label>
            <input name="drink" type="text" placeholder="Masukkan drink" class="form-control">
        </div>
        <button type="submit" class="btn">Pesan</button>
    </form>
</div>
@endsection
