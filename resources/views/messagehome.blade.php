<!-- MESSAGES CONNEXION -> HOME.BLADE
===================================================================================== -->
<div class="container-fluid mt-5 position-absolute mx-auto">
    <div class="row">
        <div class="col">

            @if (session())
                <!-- Vérifie si une session existe -->
                @if (session()->get('_previous') && str_contains(session()->get('_previous')['url'], 'login'))

                    <!-- Vérifie si la session précédente contient une clé "_previous" et si l'URL de la session précédente contient le mot "login" -->
                    <p class="mx-auto text-center alert alert-success py-1" style="background-color: rgba(143, 188, 143, 0.67); font-weight: 600">Vous êtes connecté</p>
                    <!-- Affiche un paragraphe avec une classe de style pour afficher le message de succès -->

                @endif
            @endif

        </div>
    </div>
</div>