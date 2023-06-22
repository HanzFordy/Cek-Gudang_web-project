<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        />
        <link rel="stylesheet" href="app.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg" style="background-color: #6610f2;">
                <div class="container-fluid">
                    <b><a class="navbar-brand" href="#" style="font-family: sans-serif">Cek<b style="color: white">GUDANG</b></a></b>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse d-flex justify-content-end"
                        id="navbarNavDropdown"
                    >
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    aria-current="page"
                                    href="#"
                                    style="color: white; display: flex;"
                                    >Home</a
                                >
                            </li>
                            <li class="nav-item dropdown" >
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                    style="color: white"
                                >
                                    Halo, {{auth()->user()->name}}
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Profile</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('actionlogout')}}"
                                            >Log Out</a
                                        >
                                    </li>
                    </div>
                </div>
            </nav>
        </header>
        <div class="card border-dark m-lg-5">
            <div class="card-header">
                Supplier
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <a class="btn btn-success d-flex justify-content-center" href="{{  route('tambahsupplier')  }}"><i class="fa fa-plus"></i> Tambah Supplier</a>
                        <tr>
                            <th style="text-align: center;">Id Supplier</th>
                            <th style="text-align: center;">Nama</th>
                            <th style="text-align: center;">Alamat</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supplier as $supplier)
                        <tr>
                            <td style="text-align:center">{{ $supplier->id }}</td>
                            <td style="text-align: center;">{{ $supplier->nama }}</td>
                            <td style="text-align: center;">{{ $supplier->alamat }}</td>
                            <td style="text-align: center;"><a href="/ubahsupplier/{{$supplier->id}}" class="btn btn-warning btn-sm"><i
                                        class="fa fa-pencil"></i>update</a>
                                <a href="/hapussupplier/{{$supplier->id}}" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Anda yakin ingin hapus?');"><i class="fa fa-pencil"></i>delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card border-dark m-lg-5">
            <div class="card-header">
                Barang
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Id Barang</th>
                            <th style="text-align: center;">Nama Barang</th>
                            <th style="text-align: center;">Tipe Barang</th>
                            <th style="text-align: center;">Id Supplier</th>
                            <th style="text-align: center;">Stok</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                        <a class="btn btn-success d-flex justify-content-center" href="{{  route('tambahBarang')  }}"><i class="fa fa-plus"></i> Tambah Barang</a>
                    </thead>
            <tbody>
            @foreach ($barang as $barang)
            <tr>
            <td style="text-align:center">{{ $barang->id }}</td>
            <td style="text-align: center;">{{ $barang->nama_barang }}</td>
            <td style="text-align: center;">{{ $barang->tipe_barang }}</td>
            <td style="text-align: center;">{{ $barang->id_supplier }}</td>
            <td style="text-align: center;">{{ $barang->stok }}</td>
            <td style="text-align: center;"><a href="/ubahBarang/{{$barang->id}}" class="btn btn-warning btn-sm"><i
                        class="fa fa-pencil"></i>update</a>
                <a href="/hapusBarang/{{$barang->id}}" class="btn btn-danger btn-sm"
                    onclick="return confirm('Anda yakin ingin hapus?');"><i class="fa fa-pencil"></i>delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
            </div>
        </div>
    </body>
</html>
