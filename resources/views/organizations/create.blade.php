@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Organizations - New</div>
                <form method="POST" action="/organizations">
                    @csrf
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="field">
                            <label class="label" for="name">Name</label>
                            <div class="control">
                                <input class="input @error('title') is-danger @enderror" type="text" name="name" id="name" required>
                                @error('title')
                                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection