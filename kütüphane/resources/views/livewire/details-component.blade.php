<!--main area-->
<main id="main" class="main-site">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">home</a></li>
            <li class="item-link"><span>Detay</span></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
            <div class="wrap-product-detail">
                <div class="detail-media">
                    <div class="product-gallery">
                      <ul class="slides">
                        <img src="{{asset('assets/images/kitaplars')}}/{{$kitaplar->image}}"/>
                      </ul>
                    </div>
                </div>
                <div class="detail-info">
                <h2 class="product-name">{{$kitaplar->KitapAdi}}</h2>
                    <div class="wrap-price"><span class="product-price">{{$kitaplar->SatisFiyati}} TL</span></div>
                    <div class="wrap-butons">
                        <a href="#" class="btn add-to-cart" wire:click.prevent="kirala({{$kitaplar->id}})">Kitap Kirala</a>
                    </div>
                </div>
                <div class="advance-info">
                    <div class="tab-control normal">
                        <a href="#description" class="tab-control-item active">Kitap Detayları</a>
                    </div>
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="description">
                            <p>Kitap Adı : {{$kitaplar->KitapAdi}}</p>
                            <p>Barkod No : {{$kitaplar->BarkodNo}}</p>
                            <p>Sayfa Sayısı : {{$kitaplar->SayfaSayisi}}</p>
                            <p>Kitap Kategorisi : {{$kitaplar->kategori->KategoriAdi}}</p>
                            <p>Kitap Yazarı : {{$kitaplar->yazarlar->YazarAdi}} {{$kitaplar->yazarlar->YazarSoyadi}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end main products area-->
    </div><!--end row-->
</div><!--end container-->

</main>
<!--main area-->
