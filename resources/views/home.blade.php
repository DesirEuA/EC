
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div id="text"style="position: absolute;top:400px;left: 150px">
                    <a href="/top" style="text-decoration: none"><h1 style="font-size:80px;color:white; font-family: fantasy">
                            View products</h1></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
