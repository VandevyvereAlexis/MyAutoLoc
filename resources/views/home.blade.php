@extends('layouts.app')

@section('content')

    @include('messagehome')
    @include('messages')




    <video class="position-absolute col-6" src="/videos/fond_1.mp4" style="height: 100vh; width: 100%" autoplay loop muted></video>
        <!-- FOOTER
        ============================================================= -->
        @include('footer')

@endsection
