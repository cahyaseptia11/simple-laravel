<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
</head>

<body>   
    <div class="container p-4">
        <center>
            <h1>Dealer Motor Barokah</h1>
        </center>
            <a href="{{ route('motors.create') }}" class="btn btn-md btn-success mb-3">Tambah Data</a>
            <a href="/home" class="btn btn-md btn-warning mb-3" style="float:right; width : 100px;">Kembali</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kode Kendaraan</th>
                        <th scope="col">Jenis Kendaraan</th>
                        <th scope="col">Nama Kendaraan</th>
                        <th scope="col">Jumlah Penjualan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($motors as $motor)
                    <tr>        
                        <td class="px-6 py-3 leading-6 text-center whitespace-nowrap">{{ ++$i }}</td>
                        <td>{{ $motor->kode_kendaraan }}</td>
                        <td>{{ $motor->jenis_kendaraan }}</td>
                        <td>{{ $motor->nama_kendaraan }}</td>
                        <td>{{ $motor->jumlah_penjualan }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus ?');" action="{{ route('motors.destroy', $motor->id) }}" method="POST">                              
                                <a href="{{ route('motors.edit', $motor->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>            
                        </td>                                           
                    </tr>
                </tbody>                                                             
                @empty
                <div class="alert alert-danger">
                    Data Post belum Tersedia.
                </div>
                @endforelse
            </table>      
            <div class="page">
                {{ $motors->links() }}
            </div>                                                                  
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if(session()->has('success'))

        toastr.success('{{ session('
            success ') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

        toastr.error('{{ session('
            error ') }}', 'GAGAL!');

        @endif
    </script>
</body>

</html>