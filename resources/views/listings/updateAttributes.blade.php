@extends('layouts.app')

@section('title', 'Update listing attributes')

@section('content')


    <div class="container py-5">
        <h2><b>Listing Details</b></h2>

        <form method="post" action="#">
            @csrf
            <div class="row py-4">
                @foreach ($categoryAttributes as $attribute)
                    <div class="col-md-4 py-3">
                        <label for="{{ $attribute->attribute->name }}" class="pb-2">{{ $attribute->attribute->name }}</label>
                        <input type="text" name="attribute_{{ $attribute->attribute->id }}" required
                            value="{{ old($attribute->attribute->name) }}" class="form-control">
                    </div>
                @endforeach
            </div>


            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>


    </div>


@endsection
