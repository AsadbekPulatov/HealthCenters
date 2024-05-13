<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Nega bizni tanlaysiz?</h4>
            </div>
            <h1 class="display-3 mb-4">Nega Bizni Tanlaysiz?</h1>
            <p class="mb-0"></p>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($features as $item)
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s" style="display: flex; flex-wrap: wrap;">
                    <div class="row-cols-1 feature-item p-4" style="width: 100%;">
                        <div class="col-12">
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">{{ $item->name }}</h5>
                                <p class="mb-0">{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
