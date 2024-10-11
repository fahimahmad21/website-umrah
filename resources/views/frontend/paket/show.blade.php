@extends ('frontend.layout')

@section('content')
<div class="container">

<div class="row justify-content-center mt-5">
    <div class="col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route ('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('paket') }}">Paket Umrah</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$umrah_package->title}}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row justify-content-center mt-2">
    <div class="col-lg-10">
        <div class="card px-3 py-3">
            <img class="rounded" src="{{ Storage::url($umrah_package->thumbnail)}}" alt="{{$umrah_package->title}}">
            <hr>
            <h5 class="text-success">
                Daftar Hotel
            </h5>
            <ul class="list-group">
                @foreach($umrah_package->hotels as $hotel)
                    <li class="list-group-item d-flex justify-content-between align-items-start">

                        <div style="column-gap: 1rem;" class="d-flex align-items-center">
                            <img width="100" height="100" class="rounded img-fluid" src="{{ Storage::url($hotel->image)}}"
                                alt="{{$hotel->title}}">
                            {{$hotel->title}}
                        </div>
                        <span class="badge bg-primary rounded-pill p-2">{{$hotel->kota}}</span>
                    </li>
                @endforeach
            </ul>
            <hr>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                            aria-controls="flush-collapseOne">
                            <h5 class="text-success">Itinery</h5>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="collapse-inner align-left output-itinerary">
                                {!! $umrah_package->itenary !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                            <h5 class="text-success">Fasilitas</h5>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">{{$umrah_package->fasilitas}}</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            <h5 class="text-success">Persyaratan Peserta</h5>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">{{$umrah_package->persyaratan}}.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFor" aria-expanded="false"
                            aria-controls="flush-collapseFor">
                            <h5 class="text-success">Syarat & Ketentuan</h5>
                        </button>
                    </h2>
                    <div id="flush-collapseFor" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">{{$umrah_package->syarat}}.</div>
                    </div>
                </div>
            </div>
            <hr>

            <a href="#" class="btn btn-primary">Booking Sekarang</a>
        </div>
    </div>
</div>
</div>
@endsection