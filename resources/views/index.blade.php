@extends('include.header')

@section('content')
    @if (session('success'))
        {{ session('success') }}
    @endif

@include('include.nav')
@include('include.hero')
@include('include.about2')
@include('include.cities')
@include('include.contact')

@include('include.footer')
</body>
	
    </html>

    @endsection