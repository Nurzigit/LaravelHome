@extends('layouts.appho')

@section('title-block'){{$data->subject}}@endsection
<div class="container">
    <div class="row">
        <div class="col-12">
            @section('content')
                <center>
                <h1>{{$data->subject}}</h1>
                </center>
                    <div class="um">

                        <div class="a mt-5">
                            <center>
                                <img src="/storage/{{ $data->images }}" height="500" width="800" alt="">
                            </center>
                        <center>
                            <p class="mt-5">{{ $data->message }}</p>
                            <p>{{ $data->email }}</p>
                            <p><small>{{ $data->created_at }}</small></p>
                            <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-dark">Редактировать</button></a>
                            <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
                        </center>
                        </div>
                    </div>

            @endsection
        </div>
    </div>
</div>


