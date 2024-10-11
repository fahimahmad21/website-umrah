@extends ('frontend.layout')

@section('content')
<div class="container">

    <nav aria-label="breadcrumb" style="margin-top: 50px;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Paket Umrah</li>
        </ol>
    </nav>

    <div class="row justify-content-center" style="margin-top: 50px;">
        <h3 style="font-size: 2rem;margin-bottom: 1.5rem;">Paket Umrah</h3>

        @foreach ($umrah_packages as $umrah_package)
            <div class="col-lg-3 mb-5">
                <div class="card">
                    <img src=" {{ Storage::url($umrah_package->image) }} " class="card-img-top" alt="{{$umrah_package->title}}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $umrah_package->title }}</h5>
                        <span class="text-black-50"> <i class='bx bx-calendar'></i> {{ $umrah_package->tanggal }}</span>
                        <p class="card-text fs-4 text-success">IDR {{ number_format($umrah_package->price, 0, '.', '.') }}</p>
                        <a href="{{ route('paket.show', $umrah_package->slug) }}" class="mx-auto text-center btn d-block btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection
