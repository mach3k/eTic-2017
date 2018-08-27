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
                   
                   <div class="box-body table-responsive no-padding">
                      <a href="{{route('empresa.index')}}" class="btn btn-primary">Ver empresas</a>
                   </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
