<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="row-col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Kategori Düzenleme
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.kategoris')}}" class="btn btn-success pull-right">Tüm Kategoriler</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="updateKategori">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Kategori Adi</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Kategori Adi" class="form-control input-md" wire:model="KategoriAdi">
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

