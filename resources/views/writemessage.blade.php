@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Send message</div>
                    <form action="{{ url('socket')}}" method="POST">
                        <input type="text" name="message" >
                        <input type="submit" value="send">
                        <!-- <input type="hidden" name="_token" value="{!! csrf_token() !!}">
             -->        </form>
                </div>
            </div>
        </div>
    </div>

@endsection