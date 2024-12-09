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
                    <div class="card-header text-center">Estimasi Produksi Gerabah</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('hitung.store') }}"> 
                            @csrf
                            <div class="mb-3">
                                <label for="b1" class="form-label">{{ __('Jumlah Tanah Liat') }}</label>
                                <input id="b1" type="number" class="form-control @error('b1') is-invalid @enderror" name="b1" value="{{ old('b1') }}" required autocomplete="b1" autofocus>

                                @error('b1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="b2" class="form-label">{{ __('Jumlah Bahan Pengikat') }}</label>
                                <input id="b2" type="number" class="form-control @error('b2') is-invalid @enderror" name="b2" value="{{ old('b2') }}" required autocomplete="b2">

                                @error('b2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="b3" class="form-label">{{ __('Jumlah Kayu Bakar') }}</label>
                                <input id="b3" type="number" class="form-control @error('b3') is-invalid @enderror" name="b3" value="{{ old('b3') }}" required autocomplete="b3">
                                @error('b3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="mb-0 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Hitung') }}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection