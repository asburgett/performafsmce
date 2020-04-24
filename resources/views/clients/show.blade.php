@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $client->name }}&nbsp;<a href="/clients/{{ $client->id }}/edit">&vellip;</a><br>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <table border="1">
                            <tr><td>Id</td><td>{{ $client->id }}</td></tr>
                            <tr><td>Name</td><td>{{ $client->name }}</td></tr>
                            <tr><td>Unique Name</td><td>{{ $client->unique_name }}</td></tr>
                            <tr><td>Status</td><td>{{ $client->status }}</td></tr>
                            <tr><td>Mailing Address</td><td>{{ $client->account_manager_id }}</td></tr>
                            <tr><td>Account Mgr</td><td>{{ $client->account_manager_id }}</td></tr>
                            <tr><td>Service Mgr</td><td>{{ $client->service_manager_id }}</td></tr>
                            <tr><td>Sale Rep</td><td>{{ $client->sales_rep_id }}</td></tr>
                            <tr><td>User 1</td><td>{{ $client->user_1 }}</td></tr>
                            <tr><td>User 2</td><td>{{ $client->user_2 }}</td></tr>
                            <tr><td>User 3</td><td>{{ $client->user_3 }}</td></tr>
                            <tr><td>User 4</td><td>{{ $client->user_4 }}</td></tr>
                            <tr><td>User 5</td><td>{{ $client->user_5 }}</td></tr>
                            <tr><td>Date Opened</td><td>{{ $client->created_at }}</td></tr>
                            <tr><td>Date Modified</td><td>{{ $client->updated_at }}</td></tr>
                        </table>
                    </div>
                    <div>
                        @foreach($client->clientSites as $client_site)
                            <a href="/clientsites/{{ $client_site->id }}">{{ $client_site->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection