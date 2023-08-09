@include('layouts/header')
<div class="container my-3">

    <h1 class="text-center">Payment Response</h1>
     <h4>Payment Status :: {{ $paymentStatus }}</h4>
<div class="text-center" style="margin-top:20%">
     <a href="{{ url ('/product') }}" role="button" class="btn btn-primary">Back to products page</a>
</div>
</div>

@include('layouts/footer')