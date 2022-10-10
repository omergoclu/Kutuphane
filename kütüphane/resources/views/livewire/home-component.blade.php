<div>
    <style >
        .panel-body{
            display:inline-block;

        }
    </style>
@auth
    @if(Auth::user()->utype==='ADM')
        <div class="container" style="padding:30px 0">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        İstatistikler
                    </div>
                    <div class="panel-body">
                        <div class="col-md-10">
                            <div class="card" style="width: 20rem;">
                                <div class="card-body">
                                    <h4 class="card-title">En çok kitap kiralayan Öğrenci : </h4>
                                    @foreach($users as $user)
                                        <h2 class="card-text">{{$user->name}} {{$user->lastName}} </h2>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-10">
                            <div class="card" style="width: 20rem;">
                                <div class="card-body">
                                    <h4 class="card-title">Toplam kiralanan kitap sayısı : </h4>
                                        <h2 class="card-text">{{$kiras}} </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-10">
                            <div class="card" style="width: 20rem;">
                                <div class="card-body">
                                    <h4 class="card-title">Toplam Kitap sayısı : </h4>
                                        <h2 class="card-text">{{$kitaplars}} </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-10">
                            <div class="card" style="width: 20rem;">
                                <div class="card-body">
                                    <h4 class="card-title">Toplam Yazar sayısı : </h4>
                                        <h2 class="card-text">{{$yazarlars}} </h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @else
            <h1></h1>
        @endif
@else
@endif
</div>


