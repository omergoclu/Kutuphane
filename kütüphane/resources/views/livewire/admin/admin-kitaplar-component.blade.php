<div>
    <style >
        nav svg{
            height:20px;

        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                TÜM KİTAPLAR
                            </div>
                        </div>
                        <div class="col-md-6">
                                <a href="{{route('admin.addkitaplar')}}" class="btn btn-success pull-right">Yeni Kitap Ekle</a>
                            </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>RESİM</th>
                                <th>KİTAP ADI</th>
                                <th>KİTAP URL</th>
                                <th>BARKOD NO</th>
                                <th>SAYFA SAYISI</th>
                                <th>SATIŞ FİYATI</th>
                                <th>KATEGORİSİ</th>
                                <th>YAZARI</th>
                                <th>KİRALANDI MI</th>
                                <th>İŞLEMLER</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kitaplars as $kitaplar)
                            <tr>
                                <td>{{$kitaplar->id}}</td>
                                <td> <img src="{{asset('assets/images/kitaplars')}}/{{$kitaplar->image}}" width="60" /> </td>
                                <td>{{$kitaplar->KitapAdi}}</td>
                                <td>{{$kitaplar->Url}}</td>
                                <td>{{$kitaplar->BarkodNo}}</td>
                                <td>{{$kitaplar->SayfaSayisi}}</td>
                                <td>{{$kitaplar->SatisFiyati}}</td>
                                <td>{{$kitaplar->kategori->KategoriAdi}}</td>
                                <td>{{$kitaplar->yazarlar->YazarAdi}} {{$kitaplar->yazarlar->YazarSoyadi}}</td>
                                <td>{{$kitaplar->kiraliMi}}</td>
                                <td>
                                    <a href="{{route('admin.editkitaplar',['kitap_id'=>$kitaplar->id])}}"><i class="fa fa-edit fa-2x"></i></a>
                                    <a href="#" wire:click.prevent="deleteKitaplar({{$kitaplar->id}})" style="margin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        {{$kitaplars->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
