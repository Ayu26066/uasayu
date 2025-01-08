<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan Sepatu Trie Wahyu Ningsih</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            min-width: 200px;
            background-color: blue; /* Mengatur warna latar belakang sidebar menjadi biru */
            padding: 15px;
            color: white; /* Mengatur warna teks menjadi putih */
        }
        .sidebar h4 {
            color: white; /* Mengatur warna judul sidebar menjadi putih */
        }
        .sidebar .nav-link {
            color: white; /* Mengatur warna teks link menjadi putih */
        }
        .sidebar .nav-link:hover {
            color: #f8f9fa; /* Mengatur warna teks link saat hover */
            background-color: rgba(255, 255, 255, 0.2); /* Mengatur latar belakang saat hover */
        }
        .content {
            flex-grow: 1;
            padding: 15px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            background-color: yellow; /* Mengatur warna latar belakang header menjadi kuning */
            padding: 10px; /* Menambahkan padding untuk header */
            border-radius: 5px; /* Menambahkan sudut melengkung */
        }
        .header h1 {
            color: green; /* Mengatur warna judul menjadi hijau */
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4>Menu</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('brands.index') }}">Merek</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}">Kategori</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('sizes.index') }}">Ukuran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('colors.index') }}">Warna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('transactions.index') }}">Transaksi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li>
        </ul>
    </div>
    <div class="content">
        <div class="container">
            <div class="header">
                <h1>Penjualan Sepatu Trie Wahyu Ningsih</h1>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
