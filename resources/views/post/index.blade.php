@extends('layout')

@section('content')

<style>
    .wrapper {
        margin: 20px auto;
        padding: 20px;
        max-width: 1200px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        font-family: 'Arial', sans-serif;
    }

    h1 {
        color: #0c4a55;
        font-size: 30px;
        margin-bottom: 30px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #194e36;
        color: rgb(219, 157, 64);
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    .btn {
        padding: 8px 16px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-edit {
        background-color: #4caf50;
        color: white;
    }

    .btn-edit:hover {
        background-color: #45a049;
    }

    .btn-delete {
        background-color: #f44336;
        color: white;
    }

    .btn-delete:hover {
        background-color: #e53935;
    }

    .btn-delete:focus, .btn-edit:focus {
        outline: none;
    }
</style>

<div class="wrapper">
    <h1 style="text-align: center; color: #9e6611;">Semua Pesanan</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Phone</th>
                <th>Alamat</th>
                <th>Appetizer</th>
                <th>Main Course</th>
                <th>Dessert</th>
                <th>Drink</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->nama }}</td>
            <td>{{ $post->phone }}</td>
            <td>{{ $post->alamat }}</td>
            <td>{{ $post->appatizer }}</td>
            <td>{{ $post->mainc }}</td>
            <td>{{ $post->dessert }}</td>
            <td>{{ $post->drink }}</td>

            <td>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-edit">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection