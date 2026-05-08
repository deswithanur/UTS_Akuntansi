@extends('layouts.app')

@section('content')

<!-- HEADER -->

<div class="header">

    <h1>Dashboard Akuntansi</h1>

    <p>
        Aplikasi Sistem Informasi Akuntansi berbasis Laravel
        untuk pengelolaan transaksi dan laporan keuangan perusahaan.
    </p>

</div>

<!-- INFO BOX -->

<div class="row mb-4">

    <div class="col-md-4">

        <div class="info-box">

            <h2>12</h2>

            <p>Total Modul Sistem</p>

        </div>

    </div>

    <div class="col-md-4">

        <div class="info-box">

            <h2>Laravel</h2>

            <p>Framework Web</p>

        </div>

    </div>

    <div class="col-md-4">

        <div class="info-box">

            <h2>MySQL</h2>

            <p>Database Sistem</p>

        </div>

    </div>

</div>

<!-- MENU CARD -->

<div class="row g-4">

    <div class="col-md-4">

        <div class="menu-card">

            <h4>Data Perkiraan</h4>

            <p>
                Mengelola data akun dan kode perkiraan perusahaan.
            </p>

            <a href="/perkiraan" class="btn-menu">
                Buka Menu
            </a>

        </div>

    </div>

    <div class="col-md-4">

        <div class="menu-card">

            <h4>Jurnal Umum</h4>

            <p>
                Mengelola transaksi jurnal umum perusahaan.
            </p>

            <a href="/jurnal_umum" class="btn-menu">
                Buka Menu
            </a>

        </div>

    </div>

    <div class="col-md-4">

        <div class="menu-card">

            <h4>Buku Besar</h4>

            <p>
                Menampilkan seluruh transaksi buku besar.
            </p>

            <a href="/buku_besar" class="btn-menu">
                Buka Menu
            </a>

        </div>

    </div>

    <div class="col-md-4">

        <div class="menu-card">

            <h4>Saldo Akun</h4>

            <p>
                Menampilkan saldo akun perusahaan.
            </p>

            <a href="/saldo_akun" class="btn-menu">
                Buka Menu
            </a>

        </div>

    </div>

    <div class="col-md-4">

        <div class="menu-card">

            <h4>Data Pelanggan</h4>

            <p>
                Mengelola data pelanggan perusahaan.
            </p>

            <a href="/pelanggan" class="btn-menu">
                Buka Menu
            </a>

        </div>

    </div>

    <div class="col-md-4">

        <div class="menu-card">

            <h4>Data Pemasok</h4>

            <p>
                Mengelola data pemasok perusahaan.
            </p>

            <a href="/pemasok" class="btn-menu">
                Buka Menu
            </a>

        </div>

    </div>

    <div class="col-md-4">

        <div class="menu-card">

            <h4>Faktur Penjualan</h4>

            <p>
                Mengelola transaksi faktur penjualan.
            </p>

            <a href="/faktur_penjualan" class="btn-menu">
                Buka Menu
            </a>

        </div>

    </div>

    <div class="col-md-4">

        <div class="menu-card">

            <h4>Faktur Pembelian</h4>

            <p>
                Mengelola transaksi faktur pembelian.
            </p>

            <a href="/faktur_pembelian" class="btn-menu">
                Buka Menu
            </a>

        </div>

    </div>

    <div class="col-md-4">

        <div class="menu-card">

            <h4>Laporan Keuangan</h4>

            <p>
                Menampilkan laporan keuangan perusahaan.
            </p>

            <a href="/laporan_keuangan" class="btn-menu">
                Buka Menu
            </a>

        </div>

    </div>

</div>

@endsection
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UTS Sistem Informasi Akuntansi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins', sans-serif;
            background:#eef2ff;
        }

        /* SIDEBAR */

        .sidebar{
            width:250px;
            height:100vh;
            position:fixed;
            left:0;
            top:0;
            background:#1e293b;
            padding:30px 20px;
            overflow-y:auto;
        }

        .logo{
            text-align:center;
            color:white;
            margin-bottom:40px;
        }

        .logo h2{
            font-size:28px;
            font-weight:bold;
        }

        .logo p{
            font-size:13px;
            color:#cbd5e1;
        }

        .menu a{
            display:block;
            text-decoration:none;
            color:#e2e8f0;
            padding:14px 15px;
            border-radius:12px;
            margin-bottom:12px;
            transition:0.3s;
            font-size:15px;
        }

        .menu a:hover{
            background:#3b82f6;
            color:white;
            transform:translateX(5px);
        }

        /* CONTENT */

        .content{
            margin-left:250px;
            padding:35px;
        }

        /* HEADER */

        .header{
            background:linear-gradient(135deg,#3b82f6,#6366f1);
            border-radius:25px;
            padding:40px;
            color:white;
            margin-bottom:35px;
            box-shadow:0 10px 25px rgba(0,0,0,0.1);
        }

        /* INFO BOX */

        .info-box{
            background:white;
            border-radius:20px;
            padding:25px;
            text-align:center;
            box-shadow:0 5px 15px rgba(0,0,0,0.08);
            transition:0.3s;
        }

        .info-box:hover{
            transform:translateY(-7px);
        }

        .info-box h2{
            font-size:35px;
            color:#3b82f6;
            font-weight:bold;
        }

        .info-box p{
            color:gray;
            margin-top:10px;
        }

        /* MENU CARD */

        .menu-card{
            background:white;
            border-radius:25px;
            padding:30px;
            box-shadow:0 5px 15px rgba(0,0,0,0.08);
            transition:0.3s;
            height:100%;
            border:1px solid #e2e8f0;
        }

        .menu-card:hover{
            transform:translateY(-8px);
        }

        .menu-card h4{
            color:#1e293b;
            margin-bottom:15px;
            font-weight:bold;
        }

        .menu-card p{
            color:#64748b;
            font-size:14px;
            margin-bottom:25px;
        }

        .btn-menu{
            background:#3b82f6;
            color:white;
            text-decoration:none;
            padding:12px 20px;
            border-radius:12px;
            transition:0.3s;
            display:inline-block;
        }

        .btn-menu:hover{
            background:#2563eb;
            color:white;
        }

    </style>

</head>

<body>

    <!-- SIDEBAR -->

    <div class="sidebar">

        <div class="logo">
            <h2>SIA UTS</h2>
            <p>Sistem Informasi Akuntansi</p>
        </div>

        <div class="menu">

            <a href="/perkiraan">📘 Data Perkiraan</a>
            <a href="/jurnal_umum">📝 Jurnal Umum</a>
            <a href="/jurnal_detail">📄 Jurnal Detail</a>
            <a href="/buku_besar">📚 Buku Besar</a>
            <a href="/saldo_akun">💰 Saldo Akun</a>
            <a href="/pelanggan">👤 Pelanggan</a>
            <a href="/pemasok">🏢 Pemasok</a>
            <a href="/faktur_penjualan">🧾 Faktur Penjualan</a>
            <a href="/faktur_pembelian">🛒 Faktur Pembelian</a>
            <a href="/pembayaran">💳 Pembayaran</a>
            <a href="/neraca_saldo">📊 Neraca Saldo</a>
            <a href="/laporan_keuangan">📈 Laporan Keuangan</a>

        </div>

    </div>

    <!-- CONTENT -->

    <div class="content">

        @yield('content')

    </div>

</body>
</html>