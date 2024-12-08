<!-- resources/views/auth/login.blade.php -->
@extends('landing.layout')

@section('content')
<div class="container-wrap">
    <div class="container vh-100 d-flex align-items-center">
        <div class="row">
            <div class="col-md-6" style="background-image: url({{ asset('landing/images/gbhit.jpg') }}); min-height: 350px; background-size: cover; background-position: center;">
            </div>
            <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    Hasil Estimasi Produksi Gerabah
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center">Jumlah Bahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bahan 1</td>
                                <td>{{ $data->b1 }}</td>
                            </tr>
                            <tr>
                                <td>Bahan 2</td>
                                <td>{{ $data->b2 }}</td>
                            </tr>
                            <tr>
                                <td>Bahan 3</td>
                                <td>{{ $data->b3 }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">Jumlah Produk Yang Dihasilkan</td>
                            </tr>
                            <tr>
                                <td>Produk 1</td>
                                <td>{{ $data->p1 }}</td> <!-- Pastikan ini adalah kolom yang benar -->
                            </tr>
                            <tr>
                                <td>Produk 2</td>
                                <td>{{ $data->p2 }}</td> <!-- Pastikan ini adalah kolom yang benar -->
                            </tr>
                            <tr>
                                <td>Produk 3</td>
                                <td>{{ $data->p3 }}</td> <!-- Pastikan ini adalah kolom yang benar -->
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">{{ $data->comment }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <p class="text-center"><a href="{{ route('hitung.index') }}" class="btn btn-primary"> Kembali </a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection