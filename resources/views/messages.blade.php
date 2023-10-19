<!-- MESSAGES ALERT / SUCCESS
===================================================================================== -->
@if (session()->has('message'))
    <p class="w-100 mx-auto text-center alert alert-success pb-1 pt-1">{{ session()->get('message') }}</p>
@endif

@if ($errors->any())
    <div class="alert alert-danger w-100 mx-auto text-center pb-1 pt-1">
        <ul class="p-0 m-0">
            @foreach ($errors->all() as $error)
                <li class="p-0 m-0" style="list-style-type: none">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif