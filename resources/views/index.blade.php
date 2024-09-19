@extends('include.header')

@section('content')
    @if (session('success'))
        {{ session('success') }}
    @endif

@include('include.nav2')
@include('include.hero')
@include('include.about')
@include('include.cities')
@include('include.contact')

@include('include.footer')
</body>
	
    </html>

    @endsection