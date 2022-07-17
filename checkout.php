<?=template_header('Place Order')?>
<body>
        <h1 style="position: relative; text-align:center; top: 30px;">Checkout Details</h1>
        <div class="container-contact">
            <form action="getdetails.php" method="post">
              <input type="text" id="name" name="name" placeholder="Name of Recepient" required>
          
              <input type="text" id="email" name="email" placeholder="Email" required>
          
              <input type="text" id="Phone" name="phone" placeholder="Phone Number" required>

              <input type="text" id="address" name="address" placeholder="Address" required>

              <h4>Payment Method</h4><br>

              <input type="radio" id="cod" name="payment_method" value="cod">

              <label for="COD">Cash on Delivery</label><br>

              <input type="radio" id="gcash" name="payment_method" value="gcash">

              <label for="gcash">GCash</label><br>

              <br>
          
              <button style="padding-left: 25px; padding-right: 25px; padding-top: 10px; padding-bottom: 10px; background-color: rgb(0, 223, 148); font-family: Outfit; font-size: 16px; border-radius: 12px; border: none; cursor: pointer;">Submit</button>
            </form>
          </div>
</body>
<?=template_footer()?>