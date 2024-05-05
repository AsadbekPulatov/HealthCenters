<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">BIZ NIMA QILAMIZ</h4>
            </div>
            <h1 class="display-3 mb-4">Bizning xizmatlarmiz.</h1>
            <p class="mb-0"></p>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($services as $item)
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="{{ asset('storage/'.$item->image) }}" class="img-fluid rounded-top w-100"
                                 alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">{{ $item->name }}</h5>
                                <p class="mb-4">{{ \Illuminate\Support\Str::limit($item->description) }}</p>
                                <p>Narkaz: {{ $item->health_services->name }}</p>
                                <p>Narxi: {{ $item->price }} so'm</p>
                                <a href="{{ route('service.single', $item->id) }}"
                                   class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Ko'proq o'qish</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @if(request()->routeIs('index'))
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('service') }}">Barcha
                        xizmatlar</a>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Services End -->
