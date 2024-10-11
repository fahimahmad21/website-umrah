@extends ('frontend.layout')

@section('content')
<div class="container">
    <div class="card mt-4" style="border-radius: 1rem !important;">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                @foreach($sliders as $slider)
                    <div class="carousel-item @if($loop->first) active @endif">
                        <img src="{{ Storage::url($slider->image) }}" class="d-block w-100" alt="{{$slider->title}}">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-3 mb-5">
            <div class="card card-umrah">
                <div class="card-body">
                    <span><i class='bx bx-dollar'></i></span>
                    <h4 class="text-center card-title mt-3">Harga Bersaing</h4>
                    <p class="card-text text-center mt-3">Dapatkan harga paket Umrah & Haji maupun komponen lainnya dengan penawaran harga terbaik dari kami. Harga kami jujur dan bersaing</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-5">
            <div class="card card-umrah">
                <div class="card-body">
                    <span><i class='bx bx-briefcase'></i></span>
                    <h4 class="text-center card-title mt-3">Pemesanan Mudah</h4>
                    <p class="card-text text-center mt-3">Pemesanan paket Umrah & Haji serta komponennya dengan sangat mudah. Hanya 3 langkah mudah kurang dari 5 menit, transaksi anda akan selesai.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-5">
            <div class="card card-umrah">
                <div class="card-body">
                    <span><i class='bx bxl-telegram'></i></span>
                    <h4 class="text-center card-title mt-3">Layanan Luas</h4>
                    <p class="card-text text-center mt-3">Kami tidak hanya melayani paket Umrah & Haji tapi kami juga melayani kebutuhan komponen lainnya seperti LA, Tiket, dan sebagainya.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-5">
            <div class="card card-umrah">
                <div class="card-body">
                    <span><i class='bx bxs-like'></i></span>
                    <h4 class="text-center card-title mt-3">Terpercaya</h4>
                    <p class="card-text text-center mt-3">Kami merupakan perusahaan travel resmi yang menjunjung tinggi amanah dan kepercayaan konsumen sebagai tanggung jawab kami dalam melayani konsumen.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <h3 class="mb-3" style="font-size: 2rem;">Paket Umrah</h3>
        @foreach ($umrah_packages as $umrah_package)
            <div class="col-lg-3 mb-5">
                <div class="card">
                    <img src="{{ Storage::url($umrah_package->thumbnail)}}" class="card-img-top" alt="{{$umrah_package->title}}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $umrah_package->title }}</h5>
                        <span class="text-black-50"> <i class='bx bx-calendar'></i> {{$umrah_package->tanggal}}</span>
                        <p class="card-text fs-4 text-success">{{ number_format($umrah_package->price, 0, '.', '.') }}</p>
                        <a href="{{route('paket.show', $umrah_package->slug)}}" class="mx-auto text-center btn d-block btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row mt-5">
        <h3 class="mb-3" style="font-size: 2rem;">Testimonial</h3>
        @foreach ($testimonials as $testimonial)
            <div class="col-lg-6 mb-3">
                <div class="card p-3">
                    <img class="mx-auto mt-3" src="{{ Storage::url($testimonial->profile) }}" style="object-fit: cover;width: 100px;height: 100px;border-radius: 100%;" alt="{{$testimonial->name}}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{$testimonial->name}}</h5>
                        <p class="card-text text-black-50">{{$testimonial->testi}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
