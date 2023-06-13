<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">    
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">    
    

</head>

<body>            
    <div class="box-3"  style="margin: 0 326px">        
        <div class="card border-0 shadow-sm rounded">
            <div class="card-body">
                <form action="{{ route('motors.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label class="font-weight-bold col-md-4 col-form-label text-md-end">kode Kendaraan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('kode_kendaraan') is-invalid @enderror" name="kode_kendaraan" value="{{ old('kode_kendaraan') }}" placeholder="">
                        </div>
                        
                        <!-- error message untuk title -->
                        @error('kode_kendaraan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="font-weight-bold col-md-4 col-form-label text-md-end">jenis Kendaraan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('jenis_kendaraan') is-invalid @enderror" name="jenis_kendaraan" value="{{ old('jenis_kendaraan') }}" placeholder="">
                        </div>
                        
                        <!-- error message untuk title -->
                        @error('jenis_kendaraan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label class="font-weight-bold col-md-4 col-form-label text-md-end">Nama Kendaraan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('nama_kendaraan') is-invalid @enderror" name="nama_kendaraan" value="{{ old('nama_kendaraan') }}" placeholder="">
                        </div>                                    
                        <!-- error message untuk title -->
                        @error('nama_kendaraan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label class="font-weight-bold col-md-4 col-form-label text-md-end">jumlah Kendaraan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('jumlah_penjualan') is-invalid @enderror" name="jumlah_penjualan" value="{{ old('jumlah_penjualan') }}" placeholder="">
                        </div>                                   
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
    
</body>

</html>