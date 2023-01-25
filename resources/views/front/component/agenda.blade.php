<h4 class="widget_title">Kegiatan Terdekat</h4>
        <div class="row">
            @foreach ($mainagendas as $mainagenda)
            <div class="col-md-6 home-col-border scroll-element js-scroll slide-left" style="background-image:url({{asset('/storage/agendas/'.$mainagenda->image)}})">
                <div class="bottom-left black-transfaran-bg">
                    <h4>{{$mainagenda->title}}</h4>
                    <!-- {!! Str::limit($mainagenda->content, 200) !!} -->
                </div>
            </div>
            @endforeach
            <div class="col-md-6 home-widget-agenda scroll-element js-scroll slide-right">
                @foreach ($agendas as $agenda)
                <div class="row agenda-list">
                    <div class="col-3 col-agenda-list-left text-black">
                        <div class="date-left">{{date('d', strtotime($agenda->start_date))}}</div>
                        <div>{{ date('M Y', strtotime($agenda->start_date)) }}</div>
                    </div>
                    <div class="col-9 col-agenda-list-right">
                        <a href="{{route('agenda.agenda.show',['agenda'=>$agenda])}}"><h5><b>{{$agenda->title}}</b></h5>
                        <div class="agendas-time">
                            Mulai: <b>{{date('l, d M Y', strtotime($agenda->start_date))}}</b> pukul <b>{{ date('H.i A', strtotime($agenda->start_time)) }}</b><br>
                            Sampai: <b>{{date('l, d M Y', strtotime($agenda->end_date))}}</b> pukul <b>{{ date('H.i A', strtotime($agenda->end_time)) }}</b><br>
                            Lokasi: <b>{{$agenda->location}}</b>
                        </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>