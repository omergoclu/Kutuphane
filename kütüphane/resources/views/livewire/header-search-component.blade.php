<div class="wrap-search center-section">
    <div class="wrap-search-form">
        <form action="{{route('kitaplar.search')}}" id="form-search-top" name="form-search-top">
            <input type="text" name="search" value="{{$search}}" placeholder="Kitap Ara...">
            <button form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            <div class="wrap-list-cate">
                <input type="hidden" name="kitaplar_kate" value="{{$kitaplar_kate}}" id="kitaplar_kate">
                <input type="hidden" name="kitaplar_kate_id" value="{{$kitaplar_kate_id}}" id="kitaplar_kate_id">
                <a href="#" class="link-control">{{str_split($kitaplar_kate,12)[0]}}</a>
                <ul class="list-cate">
                    <li class="level-0">Tüm Kategoriler</li>
                    @foreach($kategoris as $kategori)
                        <li class="level-1" data-id="{{$kategori->id}}">{{$kategori->KategoriAdi}}</li>
                    @endforeach
                </ul>
            </div>
        </form>
    </div>
</div>
