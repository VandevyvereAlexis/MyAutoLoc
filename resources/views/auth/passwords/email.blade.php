@extends('layouts.app')

@section('content')


    <!-- CONTAINER-FLUID 
    ============================================================= -->
    <div class="container-fluid">





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
                    <h1 class="card-header bg-transparent text-center border-0 mb-4"><span class="border-bottom border-secondary border-2 fs-1">{{ __('Réinitialiser le mot de passe') }}</span></h1>


                    <!-- CARD BODY -->
                    <div class="card-body my-2 rounded" id="card_body_login">


                        <!-- FORMULAIRE INSCRIPTION 
                        ============================================================= -->
                        <form method="POST" action="{{ route('password.email') }}">
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


                                <!-- BOUTON "CONNEXION" -->
                                <div class="col-11 my-3" style="width: 40rem">
                                    <button type="submit" class="btn btn-primary col-12">{{ __('Envoyer') }}</button>
                                </div>


                                <!-- LIEN RETOUR A LA CONNEXION  -->
                                <div class="col-11 mt-3 text-center" style="width: 40rem">
                                    <a class="text-dark " href="{{ route('login') }}">{{ __('- Retour à la connexion -') }}</span></a>
                                </div>


                            </div>

                        
                        </form>


                    </div>


                </div>


            </div>
        </div>


    </div>





    <!-- FOOTER
    ============================================================= -->
    @include('footer')





@endsection
