<div>
    <div class="container" style="padding:30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-heading">
                Şifre Değiştir
            </div>
            <div class="panel-body">
                @if(Session::has('password_success'))
                    <div class="alert alert-success" role="alert">{{Session::get('password_success')}}</div>
                @endif
                @if(Session::has('password_error'))
                    <div class="alert alert-danger" role="alert">{{Session::get('password_error')}}</div>
                @endif
                <form class="form-horizontal" wire:submit.prevent="changePassword">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Eski Şifreniz</label>
                        <div class="col-md-4">
                            <input type="password" placeholder="Eski Şifreniz" class="form-control input-md" name="eski_sifre" wire:model="current_password" />
                            @error('current_password') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Yeni Şifreniz</label>
                        <div class="col-md-4">
                            <input type="password" placeholder="Yeni Şifreniz" class="form-control input-md" name="sifre" wire:model="password" />
                            @error('password') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Tekrar Şifre</label>
                        <div class="col-md-4">
                            <input type="password" placeholder="Tekrar Şifre" class="form-control input-md" name="tekrar_sifre" wire:model="password_confirmation" />
                            @error('password_confirmation') <p class="text-danger">{{$message}}</p> @enderror

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
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
