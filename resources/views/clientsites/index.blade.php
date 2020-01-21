@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Client Sites - Home&nbsp;<a href="/clientssites/create">(new)</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <table border="1">
                            <tr>
                                <th align="center">&nbsp;Client Site&nbsp;</th>
                                <th align="center">&nbsp;Status&nbsp;</th>
                            </tr>
                        @foreach($clientsites as $clientsite)
                            <tr>
                                <td align="center">
                                    <a href="/clientsites/{{ $clientsite->id }}">{{ $clientsite->name }}</a>
                                </td>
                                <td align="center">
                                    {{ $clientsite->status === 1 ? 'Active' : 'Inactive' }}
                                </td>
                            </tr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection