@extends('layouts.appho')

@section('title-block')Все сообщения@endsection
<div class="container">
    <div class="row">
        <div class="col-12">
@section('content')
    <h1>Все сообщения</h1>
    @foreach($Data as $el)
        <div class="um">
    <div class="a">
        <h3>{{ $el -> subject }}</h3>
        <p>{{$el->email}}</p>
        <p><small>{{ $el->created_at }}</small></p>
        <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-light">Детальнее</button></a>
    </div>
        </div>
    @endforeach
@endsection
    </div>
</div>
</div>

