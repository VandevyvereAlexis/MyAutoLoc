<!-- MESSAGES ALERT / SUCCESS
===================================================================================== -->
<div class="container-fluid col-11 mx-auto mt-3 ps-0" style="list-style-type: none; text-decoration: none; z-index: -1; margin-left: 20rem">
    <div class="row">
        <div class="col px-0">

            @if (session()->has('message'))
                <p class="w-100 mx-auto text-center alert alert-success pb-1 pt-1" style="z-index: -1">{{ session()->get('message') }}</p>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger w-100 mx-auto text-center pb-1 pt-1" style="z-index: -1">
                    <ul class="p-0 m-0">
                        @foreach ($errors->all() as $error)
                            <li class="p-0 m-0" style="list-style-type: none">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>
</div>
