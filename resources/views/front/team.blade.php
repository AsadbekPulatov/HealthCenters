<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">JAMOAMIZ BILAN TANISHING</h4>
            </div>
            <h1 class="display-3 mb-4">Professional shifokorlar</h1>
            <p class="mb-0"></p>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($doctors as $item)
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <div class="team-img rounded-top h-100">
                            <img src="{{ asset('storage/'.$item->image) }}" class="img-fluid rounded-top w-100" alt=""
                            style="height: 300px;">
                        </div>
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5>{{ $item->name }}</h5>
                            <p class="mb-0">{{ $item->position }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
