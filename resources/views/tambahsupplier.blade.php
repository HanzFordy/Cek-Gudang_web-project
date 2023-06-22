<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Supplier</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
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
                Tambah Supplier
            </div>
            <div class="card-body">
                <form action="{{route('simpansupplier')}}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="Nama" name="id" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" id="Nama Barang" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" id="alamat" required>
                        </div>
                    </div>
                    <div class="form-group text-right d-flex justify-content-end m-lg-5">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Tambah</button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>