<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="row-col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Kitap Düzenleme
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.kitaplars')}}" class="btn btn-success pull-right">Tüm Kitaplar</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateKitaplar">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Kitap Adı</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Kitap Adı" class="form-control input-md" wire:model="KitapAdi">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Kitap Url</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Kitap Url" class="form-control input-md" wire:model="Url">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Barkod No</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Barkod No" class="form-control input-md"wire:model="BarkodNo">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Sayfa Sayısı</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Sayfa Sayısı" class="form-control input-md" wire:model="SayfaSayisi">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Satış Fiyatı</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Satış Fiyatı" class="form-control input-md" wire:model="SatisFiyati">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Resim</label>
                                <div class="col-md-4">
                                    <input type="file" placeholder="Image" class="input-file" wire:model="image">
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120" alt="">
                                        @else
                                            <img src="{{asset('assets/images/kitaplars')}}/{{$image}}" width="120" />
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Kategori</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="kategori_id">
                                        <option value="">Kategori Seçiniz</option>
                                        @foreach($kategoris as $kategori)
                                        <option value="{{$kategori->id}}">{{$kategori->KategoriAdi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Yazar</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="yazar_id">
                                        <option value="">Yazar Seçiniz</option>
                                        @foreach($yazarlars as $yazarlar)
                                        <option value="{{$yazarlar->id}}">{{$yazarlar->YazarAdi}} {{$yazarlar->YazarSoyadi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Güncelle</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

