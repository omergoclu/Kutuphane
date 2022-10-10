<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="row-col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Yeni Yazar Ekleme
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.yazarlars')}}" class="btn btn-success pull-right">Tüm Yazarlar</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="addYazarlar">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Yazar Adı</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Yazar Adı" class="form-control input-md" required  wire:model="YazarAdi">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Yazar Soyadı</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Yazar Soyadı" class="form-control input-md" required wire:model="YazarSoyadi">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Yaşı</label>
                                <div class="col-md-4">
                                    <input type="number" placeholder="Yaşı" class="form-control input-md" wire:model="Yasi">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Doğum Tarihi</label>
                                <div class="col-md-4">
                                    <input type="date" placeholder="Doğum Tarihi" class="form-control input-md" required wire:model="DogumTarihi">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Ölüm Tarihi </label>
                                <div class="col-md-4">
                                    <input type="date" placeholder="Ölüm Tarihi" class="form-control input-md" wire:model="OlumTarihi">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Ekle</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
