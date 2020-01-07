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
                    <div>
                        <table border="1">
                            <tr>
                                <th align="center">&nbsp;Organization Name&nbsp;</th>
                                <th align="center">&nbsp;Status&nbsp;</th>
                                <th align="center">&nbsp;Default&nbsp;</th></tr>
                            @foreach($organizations as $org)                            
                                <tr>
                                    <td align="center">
                                        <a href="/organizations/{{ $org->id }}">{{ $org->name }}</a>
                                    </td>
                                    <td align="center">
                                        @if($org->status === 1)
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                    </td>
                                    <td align="center">
                                        @if ($org->is_default === 1)
                                            True
                                        @else
                                            False
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection