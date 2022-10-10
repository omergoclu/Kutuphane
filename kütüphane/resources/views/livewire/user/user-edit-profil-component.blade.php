
<div>
    <div class="container" style="padding:30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Profil Düzenleme
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('user.profil')}}" class="btn btn-success pull-right">Profilim</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form wire:submit.prevent="updateProfil">
                        <div class="col-md-8">
                            <p><b>Adınız : </b><input type="text" class="form-control" wire:model="name"></p>
                            <p><b>Soyadınız : </b><input type="text" class="form-control" wire:model="lastName"></p>
                            <p><b>Yaşınız : </b><input type="text" class="form-control" wire:model="Yasi"></p>
                            <p><b>Adresiniz : </b><input type="text" class="form-control" wire:model="Adres"></p>
                            <p><b>Email Adresiniz : </b><input type="text" class="form-control" wire:model="email"></p>
                            <button type="submit" class="btn btn-info pull-right">Güncelle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


