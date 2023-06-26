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
    <head>
    <meta charset="utf-8">
    <title>CEK GUDANG - UPDATE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    </head>
</head>
<body>
        <div class="card border-dark m-lg-5">
            <div class="card-header">
                Update
            </div>
            <div class="card-body">
                <form action="{{route('updateStok')}}" method="post">
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
                        <input type="text" readonly class="form-control-plaintext" name="namaBarang" id="Nama Barang" value="{{$data->namaBarang}}" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="supplier" class="col-sm-2 col-form-label">Id Barang</label>
                        <div class="col-sm-10">
                        <select name="id_barang" id="">
                        @foreach($barang as $s)
                        <option value="{{$s->id}}"
                        @if($s->id == $data->id_barang)
                        selected
                        @endif
                        >{{$s->nama_barang}}
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