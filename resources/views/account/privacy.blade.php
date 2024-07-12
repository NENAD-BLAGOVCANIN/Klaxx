@extends('account.base')

@section('title', 'Privacy Settings')

@section('accountContent')


    <div class="card mb-3">
        <div class="card-body d-flex justify-content-between">
            <strong class="d-block fs-5 fw-medium">Account Visibility</strong>
            <span class="text-muted py-2 medium">
                {{ auth()->user()->visibility }}
            </span>

        </div>
        <div class="card-footer">
            @if (auth()->user()->visibility == 'public')
                <form action="/account/privacy/set-visibility" method="POST">
                    @csrf

                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="visibility" value="private">

                    <button class="btn btn-primary" type="submit">
                        Change to private
                    </button>
                </form>
            @else
                <form action="/account/privacy/set-visibility" method="POST">
                    @csrf

                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="visibility" value="public">

                    <button class="btn btn-primary" type="submit">
                        Change to public
                    </button>
                </form>
            @endif
        </div>

    </div>

@endsection
