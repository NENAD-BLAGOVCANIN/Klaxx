@extends('layouts.app')

@section('title', 'Update listing images')

@section('content')


<style>
    .listing-image{
        max-height: 350px;
        object-fit: cover
    }
</style>

    <div class="container py-5">
        <h2><b>Listing Images</b></h2>

        <form action="#" method="POST" id="imageUploadForm" enctype="multipart/form-data">
            @csrf

            <div class="row py-5">
                @foreach ($existingImages as $image)
                    <div class="col-md-3">
                        <img src="{{ $image->image_path }}" class="w-100 h-100 rounded shadow-sm listing-image"
                            alt="">
                    </div>
                @endforeach

                <div class="col-md-3">
                    <input type="file" id="imageInput" name="image" style="display: none;">
                    <label for="imageInput" class="custom-file-label d-none">Choose Image</label>
                    <button type="button" id="uploadButton" class="btn btn-secondary h-100"><i
                            class="fa fa-plus m-0"></i></button>
                </div>

            </div>

        </form>

        <form method="POST" action="/listings/{{ $listing_id }}/publish">
            @csrf
            <button type="submit" class="btn btn-primary mt-4">Publish Listing</button>
        </form>

    </div>

    <script>
        document.getElementById('uploadButton').addEventListener('click', function() {
            document.getElementById('imageInput').click();
        });
        document.getElementById('imageInput').addEventListener('change', function() {
            document.getElementById('imageUploadForm').submit();
        });
    </script>

@endsection
