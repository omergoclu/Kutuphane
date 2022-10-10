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
    @if($kiras->count()>0)
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                TÜM KİRALANAN KİTAPLAR
                            </div>
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
                                <th>ÖGRENCİ ADI SOYADI</th>
                                <th>KİRALANAN KİTAP RESMİ</th>
                                <th>KİRALANAN KİTAP ADI</th>
                                <th>ALIM TARİHİ</th>
                                <th>TESLİM TARİHİ</th>
                                <th>DURUMU</th>
                                <th>İŞLEMLER</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kiras as $kira)
                            <tr>
                                <td>{{$kira->id}}</td>

                                <td>{{$kira->user->name}} {{$kira->user->lastName}}</td>
                                <td> <img src="{{asset('assets/images/kitaplars')}}/{{$kira->kitaplar->image}}" width="60" /> </td>
                                <td>{{$kira->kitaplar->KitapAdi}}</td>
                                <td>{{$kira->AlimTarihi}}</td>
                                <td>{{$kira->TeslimTarihi}}</td>
                                <td>{{$kira->durum}}
                                </td>
                                <td>
                                    <a href="#" wire:click.prevent="deleteKira({{$kira->id}})" style="margin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                @if($kira->durum==='Edilmedi')
                                    <a href="#" class="btn btn-info" wire:click.prevent="teslimEt({{$kira->id}},{{$kira->kitap_id}})" style="margin-left:10px;">Geri Al</a>
                                @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        {{$kiras->links()}}
                    </div>
                </div>
            </div>
        </div>
    @else
        <h3 class="alert alert-warning">Kiralanan Kitap Yok</h3>
    @endif
    </div>
</div>
</div>
