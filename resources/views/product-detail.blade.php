@include('layouts/header')

<div class="container my-3">
    <h3 class="text-center">{{ $product->name }}</h3>

    <p>{{ $product->description }}</p>

    <h4>&#x20B9;&nbsp;{{ $product->price }}</h4>
    <form id="stripe-payment-form" method="POST" action="/payment/charge">
        @csrf
        <input id="amount" name="amount" type="hidden" value="{{ $product->price }}">
        <!-- Stripe Form -->
        <label>Card Holder Name : </label>
        <input id="card-holder-name" type="text">
        <br />
        <br />
        <!-- Stripe Elements Placeholder -->
        <div id="card-element"></div>
        <br />
        <button type="button" id="card-button" data-secret="{{ $intent->client_secret }}">
            Pay Now
        </button>

        <div class="text-center" style="margin-top:10%">
            <a href="{{ url ('/product') }}" role="button" class="btn btn-primary">Back to products page</a>
        </div>
    </form>
</div>




<script src="https://js.stripe.com/v3/"></script>

<script>
const stripe = Stripe(
    'pk_test_51NcAwPSFutXlAyZv9g0ducFKnPVrpiFzDl75ARCjv3jcpymv2NW8Kd31BIa8vQfnUCFJ27XrqngJ3swsLphPgGYZ00PPjuOBde'
);

const elements = stripe.elements();
const cardElement = elements.create('card');

cardElement.mount('#card-element');
</script>

<script>
const cardHolderName = document.getElementById('card-holder-name');
const cardButton = document.getElementById('card-button');

cardButton.addEventListener('click', async (e) => {
    e.preventDefault();

    const {
        paymentMethod,
        error
    } = await stripe.createPaymentMethod(
        'card', cardElement, {
            billing_details: {
                name: cardHolderName.value
            }
        }
    );

    if (error) {
        alert(error.message);
        console.log(error);
        // Display "error.message" to the user...
    } else {
        // The card has been verified successfully...
        console.log(paymentMethod);
        handlePaymentResponse(paymentMethod.id);

    }
});


function handlePaymentResponse(paymentMethod) {
    var form = document.getElementById('stripe-payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'payment_method');
    hiddenInput.setAttribute('value', paymentMethod);
    form.appendChild(hiddenInput);
    form.submit();
}
</script>

@include('layouts/footer')