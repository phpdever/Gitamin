@extends('layout.dashboard')

@section('body')
@include('dashboard.partials.navigation')

<div class="container">
    <div class="header row">
        <div class="col-sm-12">
            @if(isset($group))
                @include('groups.partials.menu')
            @endif
        </div>
    </div>

    @yield('content')
    @include('dashboard.partials.footer')
</div>
@endsection