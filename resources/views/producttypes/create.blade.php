@extends('layouts.main')
@section('content')

<div class="main-panel" style="margin-top: 5em;">
    <form action="{{ route('store.productytypes')}}" method="POST">
        @csrf

        <table id="product-types-table">
            <tbody>

        <label for="product-name">Product Name:</label>
        <input type="text" name="product" id="product-name" placeholder="Enter product name">
                <!-- Existing rows (if any) can be placed here -->
            </tbody>
        </table>


        <button type="button" id="add-category">Add Product Type</button>

        <input type="submit" value="Submit">
    </form>

    <script>
        document.getElementById('add-category').addEventListener('click', function() {
            var table = document.getElementById('product-types-table');
            var row = document.createElement('tr');

            var productNameInput = document.createElement('input');
            productNameInput.type = 'text';
            productNameInput.name = 'product_name[]'; // Change this to the appropriate name
            row.appendChild(productNameInput);

            var categoryInput = document.createElement('input');
            categoryInput.type = 'text';
            categoryInput.name = 'category[]';
            row.appendChild(categoryInput);

            var removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.innerHTML = 'Remove';
            removeButton.addEventListener('click', function() {
                row.parentNode.removeChild(row);
            });
            row.appendChild(removeButton);

            table.querySelector('tbody').appendChild(row);
        });
    </script>
</div>

@endsection
