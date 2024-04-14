@extends('layouts.app')

@section('title', 'Update listing images')

@section('content')


    <div class="container py-5">
        <h2><b>Listing Images</b></h2>

        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="file" name="image">


            <button type="submit" class="btn btn-primary mt-4">Save and continue</button>

        </form>

    </div>


@endsection
