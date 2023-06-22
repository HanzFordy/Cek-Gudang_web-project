<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Barang</title>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </head>
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
                Update
            </div>
            <div class="card-body">
                <form action="{{route('updateBarang')}}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="Id barang" class="col-sm-2 col-form-label">Id</label>
                        <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" name="id" id="Id barang" value="{{$data->id}}" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Nama Barang" name="id" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" name="nama_barang" id="Nama Barang" value="{{$data->nama_barang}}" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Tipe barang" class="col-sm-2 col-form-label">Tipe Barang</label>
                        <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" name="tipe_barang" id="Tipe barang" value="{{$data->tipe_barang}}" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="supplier" class="col-sm-2 col-form-label">Supplier</label>
                        <div class="col-sm-10">
                        <select name="id_supplier" id="">
                        @foreach($supplier as $s)
                        <option value="{{$s->id}}"
                        @if($s->id == $data->id_supplier)
                        selected
                        @endif
                        >{{$s->nama}}
                        </option>
                        @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-1">
                        <input type="text" class="form-control" name="stok" value="{{$data->stok}}" id="stok" required>
                        </div>
                    </div>
                    <div class="form-group text-right d-flex justify-content-end m-lg-5">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>    