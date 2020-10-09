@extends('layouts.app')

@section('content')
{{--     Easy find commit --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Account') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                        <br/>
                        <br/>
                        <div class="form-group">
                            <label for="token">This is an access token without permission:</label>
                            <input type="text" class="form-control" id="fakeToken" value="{{ $noaccess_token }}" placeholder="Copied token to Clipboard!">
                        </div>

                        <div class="form-group">
                            <label for="token">Your Token:</label>
                            <input type="text" class="form-control" id="accessToken" value="{{ $access_token }}" placeholder="Copied token to Clipboard!">
                        </div>
                        <button class="btn btn-primary" onclick="copyToken()">Copy Your Token</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
