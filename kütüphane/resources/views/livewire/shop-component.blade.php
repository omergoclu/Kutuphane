<main id="main" class="main-site left-sidebar">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Anasayfa</a></li>
                <li class="item-link"><span>Kitaplar</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="row">
                    <ul class="product-list grid-products equal-container">
                        @foreach($kitaplars as $kitaplar)
                        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="product product-style-3 equal-elem ">
                                <div class="product-thumnail">
                                <a href="{{route('kitaplar.details',['Url'=>$kitaplar->Url])}}" title="{{$kitaplar->Url}}">
                                    <figure><img src="{{asset('assets/images/kitaplars')}}/{{$kitaplar->image}}" alt="{{$kitaplar->KitapAdi}}"></figure>
                                </a>
                                </div>
                                <div class="product-info">
                                <a href="{{route('kitaplar.details',['Url'=>$kitaplar->Url])}}" class="product-name"><span>{{$kitaplar->KitapAdi}}</span></a>
                                <div class="wrap-price"><span class="product-price"></span>{{$kitaplar->SatisFiyati}}</div>
                                    <a href="#" class="btn add-to-cart" wire:click.prevent="kirala({{$kitaplar->id}})">Kitabı Kirala</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="wrap-pagination-info">
                    {{$kitaplars->links()}}
                    <!-- <ul class="page-numbers">
                        <li><span class="page-number-item current" >1</span></li>
                        <li><a class="page-number-item" href="#" >2</a></li>
                        <li><a class="page-number-item" href="#" >3</a></li>
                        <li><a class="page-number-item next-link" href="#" >Next</a></li>
                    </ul>
                    <p class="result-count">Showing 1-8 of 12 result</p> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
            <div class="widget mercado-widget categories-widget">
                <h2 class="widget-title">Tüm Kategoriler </h2>
                <div class="widget-content">
                    <ul class="list-category">
                        @foreach($kategoris as $kategori)
                            <li class="category-item">
                                <a href="#" data-id="{{$kategori->id}}" class="cate-link">{{$kategori->KategoriAdi}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
			</div>
        </div>
    </div>
</main>
