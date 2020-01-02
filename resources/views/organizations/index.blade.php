@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Organizations - Home&nbsp;<a href="/organizations/create">(new)</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div>
                        @foreach($organizations as $org)                            
                            <a href="/organizations/{{ $org->id }}">{{ $org->name }}</a><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection