<!--main area-->
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">home</a></li>
            <li class="item-link"><span>Kitaplar</span></li>
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

            <div class="banner-shop">
                <a href="#" class="banner-link">
                    <figure><img src="assets/images/shop-banner.jpg" alt=""></figure>
                </a>
            </div>

            <div class="wrap-shop-control">

                <h1 class="shop-title">Kitaplar</h1>

                <div class="wrap-right">

                    <div class="sort-item orderby ">
                        <select name="orderby" class="use-chosen" wire:model="sorting">
                            <option value="default" selected="selected">Default sorting</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </div>

                    <div class="sort-item product-per-page">
                        <select name="post-per-page" class="use-chosen" wire:model="pagesize" >
                            <option value="12" selected="selected">12 per page</option>
                            <option value="16">16 per page</option>
                            <option value="18">18 per page</option>
                            <option value="21">21 per page</option>
                            <option value="24">24 per page</option>
                            <option value="30">30 per page</option>
                            <option value="32">32 per page</option>
                        </select>
                    </div>

                    <div class="change-display-mode">
                        <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                        <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
                    </div>

                </div>

            </div><!--end wrap shop control-->
            @if($kitaplars->count()>0)
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
                                    <a href="#" class="btn add-to-cart" wire:click.prevent="kirala({{$kitaplar->id}})">Kitap Kirala</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            @else
                <p style="padding-top:30px;">Kitap Yok</p>
            @endif
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
        </div><!--end main products area-->

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
    </div>
</div>
</main>

