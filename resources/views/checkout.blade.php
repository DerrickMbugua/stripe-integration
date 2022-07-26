<!DOCTYPE html>
<html>
  <head>
    <title>Buy cool new product</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.51/jquery.min.js"></script>
  </head>
  <body>
    <section>
      <div class="product">
        <img src="https://i.imgur.com/EHyR2nP.png" alt="The cover of Stubborn Attachments" />
        <div class="description">
          <h3>Stubborn Attachments</h3>
          <h5>$20.00</h5>
        </div>
      </div>
      <form action="/checkout-session" method="POST" class="require-validation" data-cc-on-file="false"
      data-stripe-publishable-key="{{ env('STRIPE_KEY')}}">
        @csrf
        <button type="submit" id="checkout-button">Checkout</button>
      </form>
    </section>
  </body>
</html>
