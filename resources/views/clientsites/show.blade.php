@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <table>
                        <tr><td>Client:</td><td><a href="/clients/{{ $clientsite->client->id }}">{{ $clientsite->client->name }}</a></td><td></td></tr>
                        <tr><td>Client Site:&nbsp;</td><td>{{ $clientsite->name }}</td><td><a href="/clientsites/{{ $clientsite->id }}/edit">...</a></td></tr>
                    </table>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div></div>
                    <div>Locations:<br>
                        @foreach($clientsite->locations as $location)
                            <a href="/locations/{{ $location->id }}">{{ $location->name }}</a><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection