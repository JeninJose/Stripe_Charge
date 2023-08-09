@include('layouts/header')
<div class="container mt-5">
    <h2 class="text-center">Stripe Charge Example</h2>
    <h2 class="text-center">Login</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row offset-sm-3 col-sm-6 mt-5">

        <form action="/auth/login" method="post">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            @csrf

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>
@include('layouts/footer')