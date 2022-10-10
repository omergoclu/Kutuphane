<div>
    <div class="container" style="padding:30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Profiliniz
                </div>
                <div class="panel-body">
                    <div class="col-md-8">
                        <p><b>Adınız : </b>{{$user->name}}</p>
                        <p><b>Soyadınız : </b>{{$user->lastName}}</p>
                        <p><b>Yaşınız : </b>{{$user->Yasi}}</p>
                        <p><b>Adresiniz : </b>{{$user->Adres}}</p>
                        <p><b>Email Adresiniz : </b>{{$user->email}}</p>
                        <a href="{{route('user.editprofil')}}" class="btn btn-info ">Profilimi Düzenle</a>
                        <a href="{{route('user.changepassword')}}" class="btn btn-info ">Şifremi Değiştir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


