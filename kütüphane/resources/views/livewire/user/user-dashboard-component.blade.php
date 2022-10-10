<div>
    <div class="container" style="padding:30px 0">
        <div class="row">
            @if(Session::has('message'))
                <div class="alert alert-warning" role="alert">{{Session::get('message')}}</div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    Kiraladığınz Kitap
                </div>

                    <div class="panel-body">
                    @if($kiras->count()>0)
                        <div class="col-md-8">
                            @foreach($kiras as $kira)
                            @if($kira->durum==='Edilmedi')
                            <div class="row">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{asset('assets/images/kitaplars')}}/{{$kira->kitaplar->image}}" width="60" />
                                    <div class="card-body">
                                        <h5 class="card-title">Kitap Adı : {{$kira->kitaplar->KitapAdi}}</h5>
                                        <p class="card-text">Teslim Tarihi : {{$kira->TeslimTarihi}}</p>
                                        <p class="card-text">Durumu : {{$kira->durum}}</p>
                                        @if($kira->durum==='Edilmedi')
                                            <a href="#" wire:click.prevent="teslimEt({{$kira->id}},{{$kira->kitap_id}})" class="btn btn-info">Teslim Et</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            {{$kiras->links()}}
                        </div>
                    @else
                        <h3 class="product-name">Kiraladığınız kitap yok <br><br></h3>
                        <a class="btn btn-info" href="/kitaplar">Hemen Kirala</a>
                    @endif
                    </div>
            </div>
        </div>
    </div>
</div>


