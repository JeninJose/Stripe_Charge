@include('layouts/header')
<div class="container my-3">

    <h1 class="text-center">Products</h1>
    <div class="row mt-5">
        @foreach ($products as $product)
        <div class="col-sm-4 product-wrapper border border-primary p-2 m-2">
            <h4 class="product-name"><b>{{ $product->name }}</b></h4>
            <h5 class="product-price">&#x20B9;&nbsp;{{ $product->price }}</h5>
            <a role="button" class="btn btn-sm btn-primary" style="float:right"
                href="{{ url ('product/detail', ['id' => $product->id]) }}">Buy Now</a>
        </div>
        @endforeach
    </div>
</div>

@include('layouts/footer')