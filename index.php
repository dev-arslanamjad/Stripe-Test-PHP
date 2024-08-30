<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Stripe Payment Test!</title>
</head>

<body>
    <div class="container text-center">
        <h1>Stripe Payment Test!</h1>
    </div>

    <div class="container d-flex justify-content-center">
        <form action="checkout.php" method="post">
            <h3>Glorious Shade</h3>
            <span>slim mart</span>
            <p>Quantity : 4</p>
            <input type="hidden" name="product" value="Glorious Shade">
            <input type="hidden" name="model" value="slim mart">
            <input type="hidden" name="price" value="300">
            <input type="hidden" name="quantity" value="4">
            <p>
                <strong>300$</strong>
            </p>
            <button class="btn btn-primary">Pay Now with Stripe</button>
        </form>
    </div>
</body>

</html>