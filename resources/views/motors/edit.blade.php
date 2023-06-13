<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>

<body>

    <body style="background: lightgray">

        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <form action="{{ route('motors.update', $motor->id) }}" method="POST">

                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label class="font-weight-bold">kode Kendaraan</label>
                                    <input type="text" class="form-control @error('kode_kendaraan') is-invalid @enderror" name="kode_kendaraan" value="{{ old('kode_kendaraan', $motor->kode_kendaraan) }}" placeholder="Masukkan kode Kendaraan">

                                    <!-- error message untuk title -->
                                    @error('kode_kendaraan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">jenis Kendaraan</label>
                                    <input type="text" class="form-control @error('jenis_kendaraan') is-invalid @enderror" name="jenis_kendaraan" value="{{ old('jenis_kendaraan', $motor->jenis_kendaraan) }}" placeholder="Masukkan jenis Kendaraan">

                                    <!-- error message untuk title -->
                                    @error('jenis_kendaraan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Nama Kendaraan</label>
                                    <input type="text" class="form-control @error('nama_kendaraan') is-invalid @enderror" name="nama_kendaraan" value="{{ old('nama_kendaraan', $motor->nama_kendaraan) }}" placeholder="Masukkan Nama Kendaraan">

                                    <!-- error message untuk title -->
                                    @error('nama_kendaraan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">jumlah Kendaraan</label>
                                    <input type="text" class="form-control @error('jumlah_penjualan') is-invalid @enderror" name="jumlah_penjualan" value="{{ old('jumlah_penjualan', $motor->jumlah_penjualan) }}" placeholder="Masukkan jumlah Penjualan">

                                    <!-- error message untuk title -->
                                    @error('jumlah_penjualan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('content');
        </script>
    </body>

</body>

</html>