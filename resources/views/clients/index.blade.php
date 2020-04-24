@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Clients - Home&nbsp;<a href="/clients/create">&vellip;</a>
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
                                <th align="center">&nbsp;Client&nbsp;</th>
                                <th align="center">&nbsp;Status&nbsp;</th>
                            </tr>
                        @foreach($clients as $client)
                            <tr>
                                <td align="center">
                                    <a href="/clients/{{ $client->id }}">{{ $client->name }}</a>
                                </td>
                                <td align="center">
                                    {{ $client->status === 1 ? 'Active' : 'Inactive' }}
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