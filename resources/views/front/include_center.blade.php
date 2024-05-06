<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Sog'lomlashtirish markazlari</h4>
            </div>
            <h1 class="display-3 mb-4">SOG'LOMLASHTIRISH MARKAZLARI</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($centers as $item)
                <?php
                $comments = $item->comments;
                $star = 0;
                if (isset($comments)) {
                    foreach ($comments as $comment) {
                        $star += $comment->rating;
                    }
                    if (count($comments) == 0){
                        $star = 0;
                    } else
                    $star /= count($comments);
                }
                ?>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item rounded">
                        <div class="blog-img">
                            <img src="{{ asset('storage/'.$item->image) }}" class="img-fluid w-100" alt="Image" style="height: 300px;">
                        </div>
                        <div class="blog-centent p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-star text-primary"></i> {{ $star }} </p>
                                <a href="#" class="text-muted"><span
                                        class="fa fa-comments text-primary"></span> {{ count($comments) }}
                                    Izohlar</a>
                            </div>
                            <a href="#" class="h4">{{ $item->name }}</a>
                            <p class="my-4">{{ \Illuminate\Support\Str::limit($item->description) }}</p>
                            <a href="{{ route('center.single', $item->id) }}"
                               class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Batafsil ma'lumot</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
