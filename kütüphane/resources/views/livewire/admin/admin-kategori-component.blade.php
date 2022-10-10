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
                                TÜM KATEGORİLER
                            </div>
                        </div>
                        <div class="col-md-6">
                                <a href="{{route('admin.addkategori')}}" class="btn btn-success pull-right">Yeni Kategori Ekle</a>
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
                                <th>KATEGORİ ADI</th>
                                <th>İŞLEMLER</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategoris as $kategori)
                            <tr>
                                <td>{{$kategori->id}}</td>
                                <td>{{$kategori->KategoriAdi}}</td>
                                <td>
                                    <a href="{{route('admin.editkategori',['kategori_id'=>$kategori->id])}}"><i class="fa fa-edit fa-2x"></i></a>
                                    <a href="#" wire:click.prevent="deleteKategori({{$kategori->id}})" style="margin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        {{$kategoris->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
