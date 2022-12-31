<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700&display=swap" rel="stylesheet">


  <title>Document</title>
</head>

<body>
  <?php
  include("./admin/config/config.php");
  include("./pages/header.php");
  include("./pages/main.php");
  include("./pages/footer.php");
  ?>
</body>
<!-- xu ly thanh toan paypal -->
<script
  src="https://www.paypal.com/sdk/js?client-id=Ad1HsnqxEC4twDdI83cteupIjkoGOVadSwydWLNwDWzTvsiNhpO2rwwMvCEV3Yo-U68NCgPLkubLFYau&currency=USD">
</script>
<script>
paypal.Buttons({
  // Sets up the transaction when a payment button is clicked
  createOrder: (data, actions) => {
    let tongtien = document.getElementById('tongtien').value;
    return actions.order.create({
      purchase_units: [{
        amount: {
          value: tongtien // Can also reference a variable or function
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
      alert(
        `Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
      window.location.replace('http://localhost:8080/shopping/content.php?quanly=camon&thanhtoan=paypal');
      // When ready to go live, remove the alert and show a success message within this page. For example:
      // const element = document.getElementById('paypal-button-container');
      // element.innerHTML = '<h3>Thank you for your payment!</h3>';
      // Or go to another URL:  actions.redirect('thank_you.html');
    });
  },
  onCancel: function(data) {
    window.location.replace('http://localhost:8080/shopping/content.php?quanly=thanhtoan');
  }
}).render('#paypal-button');
</script>

</html>