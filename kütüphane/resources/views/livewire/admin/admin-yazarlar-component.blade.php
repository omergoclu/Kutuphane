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
                                TÜM YAZARLAR
                            </div>
                        </div>
                        <div class="col-md-6">
                                <a href="{{route('admin.addyazarlar')}}" class="btn btn-success pull-right">Yeni Yazar Ekle</a>
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
                                <th>YAZAR ADI</th>
                                <th>YAZAR SOYADI</th>
                                <th>YAŞI</th>
                                <th>DOĞUM TARİHİ</th>
                                <th>ÖLÜM TARİHİ</th>
                                <th>İŞLEMLER</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($yazarlars as $yazarlar)
                            <tr>
                                <td>{{$yazarlar->id}}</td>
                                <td>{{$yazarlar->YazarAdi}}</td>
                                <td>{{$yazarlar->YazarSoyadi}}</td>
                                <td>{{$yazarlar->Yasi}}</td>
                                <td>{{$yazarlar->DogumTarihi}}</td>
                                <td>{{$yazarlar->OlumTarihi}}</td>
                                <td>
                                    <a href="{{route('admin.edityazarlar',['yazar_id'=>$yazarlar->id])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                    <a href="#" wire:click.prevent="deleteYazarlar({{$yazarlar->id}})" style="margin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        {{$yazarlars->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
