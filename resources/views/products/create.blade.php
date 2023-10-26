@extends('layouts.main')
@section('content')

<div class="main-panel" style="margin-top: 5em;">
    <form action="{{ route('customers.store') }}" method="post" class="col-md-4">
        @csrf
       

        <div class="mb-3">
            <label for="customer_firstname" class="form-label">First Name:</label>
            <input type="text" name="customer_firstname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="customer_lastname" class="form-label">Last Name:</label>
            <input type="text" name="customer_lastname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="customer_location" class="form-label">Location:</label>
            <input type="text" name="customer_location" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="customer_phonenumber" class="form-label">Phone Number:</label>
            <input type="text" name="customer_phonenumber" class="form-control" required>
            @error('customer_phonenumber')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Bootstrap CSS from CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyL/K6ZLsO8Jez/2S9R6RDI6SOWJUc8BA" crossorigin="anonymous">

<!-- Bootstrap JS and Popper.js from CDN (place them before the closing </body> tag) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXF8fvrUj04SeSojL3p68DY/Z9pCkM6In1U6" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyL/K6ZLsO8Jez/2S9R6RDI6SOWJUc8BA" crossorigin="anonymous"></script>

@endsection
