<?php
use App\Models\Product;
$products = Product::all();
?>

<div>
    @foreach($products as $product)
        <div class="product">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
        </div>
    @endforeach
</div>
