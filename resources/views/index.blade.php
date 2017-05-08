@extends('layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Kogotok
            </div>

            <div class="links">
                <a href="{{ route('portfolio') }}">Portfolio</a>
                <a href="#">Services and Prices</a>
                <a id="special_offer" href="#">Special offer</a>
                <a href="{{ route('contacts') }}">Contacts</a>
            </div>
        </div>
    </div>
@stop