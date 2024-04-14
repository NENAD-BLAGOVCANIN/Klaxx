@extends('layouts.app')

@section('title', 'Update listing images')

@section('content')


    <div class="container py-5">
        <h2><b>Listing Images</b></h2>

        <form action="#" method="POST">@csrf

            <label class="my-3 text-muted">Please write detailed descriptions of your product or service</label>
            <textarea name="description" class="form-control bg-gray-200" rows="10"></textarea>

            <button type="submit" class="btn btn-primary mt-4">Save and continue</button>

        </form>

    </div>


@endsection
