<x-guest-layout>
<main id="main" class="main-site left-sidebar">
<div class="container">
    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">Anasayfa</a></li>
            <li class="item-link"><span>Üye Ol</span></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
            <div class=" main-content-area">
                <div class="wrap-login-item">
                    <div class="register-form form-item ">
                        <x-jet-validation-errors class="mb-4" />
                        <form class="form-stl" action="{{route('register')}}" name="frm-login" method="POST" >
                            @csrf
                            <fieldset class="wrap-title">
                                <h3 class="form-title">Üye Olun</h3>
                                <h4 class="form-subtitle">Öğrenci Bilgileri</h4>
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-reg-lname">Adınız</label>
                                <input type="text" id="frm-reg-lname" name="name" :value="name" required autofocus autocomplete="name">
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-reg-lname">Soyadınız</label>
                                <input type="text" id="frm-reg-lname" name="lastName" :value="lastName" required autofocus autocomplete="LastName">
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-reg-lname">Yaşınız</label>
                                <input type="text" id="frm-reg-lname" name="Yasi"  :value="Yasi" required autofocus autocomplete="Yasi">
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-reg-lname">Adresiniz</label>
                                <input type="text" id="frm-reg-lname" name="Adres" :value="Adres" required autofocus autocomplete="Adres">
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-reg-email">Mail Adresiniz</label>
                                <input type="email" id="frm-reg-email" name="email" required :value="email">
                            </fieldset>
                            <fieldset class="wrap-input item-width-in-half left-item ">
                                <label for="frm-reg-pass">Şifreniz</label>
                                <input type="password" id="frm-reg-pass" name="password"  required autocomplete="new-password">
                            </fieldset>
                            <fieldset class="wrap-input item-width-in-half ">
                                <label for="frm-reg-cfpass">Tekrar Şifreniz</label>
                                <input type="password" id="frm-reg-cfpass" name="password_confirmation" required autocomplete="new-password">
                            </fieldset>
                            <input type="submit" class="btn btn-sign" value="Register" name="register">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</x-guest-layout>
