<!-- MESSAGES ALERT / SUCCESS
===================================================================================== -->
<div class="container-fluid text-center mt-5 mb-0">

    @if (session()->has('message'))
        <p class="alert alert-success">{{ session()->get('message') }}</p>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger m-0 pt-2 pb-0">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
