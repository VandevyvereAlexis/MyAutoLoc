<!-- MESSAGES ALERT / SUCCESS
===================================================================================== -->
<div class="container-fluid">
    @if (session()->has('message'))
        <p class="alert alert-success">{{ session()->get('message') }}</p>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>


<!-- MESSAGES ALERTE SUCCESS/DANGER -->
@include('messages')


