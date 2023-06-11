<?php
session_start();
@include('./components/Header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/payment.css">
  <link rel="stylesheet" href="./dist/output.css">
  <title>Woodcraft - Checkout</title>
</head>

<body>
  <section class="payment">
    <?php if (isset($_SESSION['total']) && $_SESSION['total'] != 0) {
      $amount = strval(number_format($_SESSION['total'] / 15502, 2, '.', ''));
      $order_id = $_SESSION['order_id'];
    ?>
      <h5>Total Payment <?php echo "Rp. " . $_SESSION['total']; ?></h5>
      <hr>
      <div id="paypal-button-container"></div>
    <?php } else { ?>
      <h5>You Don't Have Any Order</h5>
      <hr>
    <?php } ?>
  </section>
  <script src="https://www.paypal.com/sdk/js?client-id=AZc7gISngCVfWIqTNzlMZRSCsd7cte4sTB4ZrK7JEJHUGO9CEALMKj4mzo5ZIe2i6DRAiOhJouUWqxXF&currency=USD"></script>

  <script>
    paypal.Buttons({
      // Sets up the transaction when a payment button is clicked
      createOrder: (data, actions) => {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '<?php echo $amount; ?>' // Can also reference a variable or function
            }
          }]
        });
      },
      // Finalize the transaction after payer approval
      onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
          // Successful capture! For dev/demo purposes:
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

          const transaction = orderData.purchase_units[0].payments.captures[0];
          alert('Transaction ' + transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
          window.location.href = "actions/complete_payment.php?transaction_id=" + transaction.id + "&order_id=<?php echo $order_id; ?>";
          // When ready to go live, remove the alert and show a success message within this page. For example:
          // const element = document.getElementById('paypal-button-container');
          // element.innerHTML = '<h3>Thank you for your payment!</h3>';
          // Or go to another URL:  actions.redirect('thank_you.php');
        });
      }
    }).render('#paypal-button-container');
  </script>
</body>

</html>