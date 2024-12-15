@extends('landing.layout')

@section('content')
<div class="container-wrap">
    <div class="container vh-100 d-flex align-items-center">
        <div class="row">
            <div class="col-md-6">
                <br>
                <h2>Perhitungan Pembuatan Gerabah</h2>
                <p class="text-justify">
                Metode numerik perhitungan gerabah adalah pendekatan matematis yang digunakan untuk menganalisis dan memprediksi sifat fisik serta perilaku material gerabah (keramik) selama proses pembentukan, pengeringan, dan pembakaran. Metode ini melibatkan penggunaan algoritma dan teknik komputasi untuk menyelesaikan persamaan yang menggambarkan fenomena fisik, seperti distribusi suhu, tekanan, dan deformasi pada material gerabah.
            </p>
            <p class="text-justify">
                Dalam praktiknya, metode numerik seperti elemen hingga (finite element method) atau metode beda hingga (finite difference method) sering digunakan untuk mensimulasikan proses-proses tersebut. Dengan menggunakan metode ini, para peneliti dan insinyur dapat mengoptimalkan desain produk gerabah, meminimalkan cacat, dan meningkatkan kualitas akhir produk. Selain itu, metode numerik juga memungkinkan analisis yang lebih mendalam terhadap interaksi antara berbagai parameter proses, sehingga memberikan wawasan yang lebih baik dalam pengembangan material keramik.
            </p>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center" style="background-image: url({{ asset('landing/images/gb_reg.png') }}); min-height: 450px; background-size: cover; background-position: center;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <br><br>
                <p class="text-right">
                    <a href="{{ route('hitung.create') }}" class="btn btn-primary">Mulai Estimasi</a>
                </p>
                <h4 class="mb-4">Data Estimasi Terakhir</h4>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tanah Liat</th>
                            <th>Bahan Pengikat</th>
                            <th>Kayu Bakar</th>
                            <th>Action</th>
                            <!-- Tambahkan header kolom sesuai kebutuhan -->
                        </tr>
                    </thead>
                    <tbody>
                        @if($data->isEmpty())
                            <tr>
                                <td colspan="3" class="text-center">Tidak ada data ditemukan.</td>
                            </tr>
                        @else
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->b1 }} Kg</td>
                                    <td>{{ $item->b2 }} Kg</td>
                                    <td>{{ $item->b3 }} Ikat</td>
                                    <td align="center"><a href="{{ route('hitung.show', $item->id_up) }}" class="btn btn-info">Hasil</a></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection