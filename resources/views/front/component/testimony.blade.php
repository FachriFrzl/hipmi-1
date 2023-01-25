<div class="row align-items-center">
    <div class="col-md-20 scroll-element js-scroll slide-left">
        <div id="testimonipendaftar" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($testimonies as $testimony)
            <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}}">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4 class="mb-50">Success Story</h4>
                    <h3 class="mb-40"><b>{{ $testimony->name }}</b></h3>
                    <h4 class="mb-40">{{ $testimony->title }}</h4>
                    {!! $testimony->content  !!}
                    <button class="btn-light mt-30">VIEW STORY</button>
                </div>
                <div class="col-md-6 home-col-border scroll-element js-scroll slide-left" style="background-image:url({{asset('/storage/testimonies/'.$testimony->image)}})">

                </div>
            </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonipendaftar" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonipendaftar" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
</div>
