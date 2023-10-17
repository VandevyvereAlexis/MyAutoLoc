@extends('layouts.app')

@section('content')


    <!-- CONTAINER-FLUID 
    ============================================================= -->
    <div class="container-fluid mt-5">





        <!-- MESSAGES ALERTE SUCCESS/DANGER
        ============================================================= -->
        @include('messages')





        <!-- GAUCHE ( FORMULAIRE INSCRIPTION )
        ============================================================= -->
        <div class="row align-items-center justify-content-center" id="row_login">
            <div class="col-md-6 col-sm-11 d-flex justify-content-center" id="left_login">


                <!-- CARD 
                ============================================================= -->
                <div class="card col-md-10 col-sm-12 border-0 border-secondary">


                    <!-- CARD HEADER -->
                    <h1 class="card-header bg-transparent text-center border-0"><span class="border-bottom border-secondary border-2">{{ __('Connexion') }}</span></h1>

                    <!-- CARD BODY -->
                    <div class="card-body my-2 rounded" id="card_body_login">


                        <!-- FORMULAIRE INSCRIPTION 
                        ============================================================= -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf


                            <!-- ( ADRESSE E-MAIL - MOT DE PASSE ) -->
                            <div class="row justify-content-center">


                                <!-- E-MAIL -->
                                <div class="col-11 mb-4" style="width: 40rem">
                                    <label for="email" class="col-form-label ms-2 pb-1"><small>{{ __('_Adresse e-mail_') }}</small></label>
                                    <input id="email" type="email" class="form-control border-secondary p-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Adresse e-mail..." autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- MOT DE PASSE -->
                                <div class="col-11 mb-5" style="width: 40rem">
                                    <label for="password" class="col-form-label ms-2 pb-1"><small>{{ __('_Mot de passe_') }}</small></label>
                                    <input id="password" type="password" class="form-control border-secondary p-3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot de passe...">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- CHECKBOX + PASSWORD OUBLIE -->
                                <div class="col-11 mb-3 d-flex justify-content-between border-bottom border-secondary" style="width: 40rem">

                                    <!-- CHECKBOX -->
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input border" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label ms-1 mt-1" for="remember"><small>{{ __('Rester connecté') }}</small></label>
                                    </div>

                                    <!-- PASSWORD OUBLIE -->
                                    @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}"><small>{{ __('Oublié ?') }}</small></a>
                                    @endif

                                </div>


                                <!-- BOUTON "CONNEXION" -->
                                <div class="col-11 mt-3 mb-2" style="width: 40rem">
                                    <button type="submit" class="btn btn-primary col-12">{{ __('Connexion') }}</button>
                                </div>


                                <!-- LIEN INSCRIPTION -->
                                <div class="col-11 mt-3 text-center" style="width: 40rem">
                                    <p>Pas encore de compte MyAutoLoc ? <a href="{{ route('register') }}">S'inscrire</a></p>
                                </div>


                            </div>


                        </form>


                    </div>


                </div>


            </div>


            <!-- DROITE (IMAGE)
            ============================================================= -->
            <div class="col-md-6 border-right p-0" id="right_login">
                <img class="py-2 pe-2" src="./images/fond.jpg" alt="Land-Rover">
            </div>


        </div>


    </div>





    <!-- FOOTER
    ============================================================= -->
    @include('footer')





@endsection
