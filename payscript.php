<?php

 $apiKey = "rzp_test_81YDLboSg3X6rh";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form class="center" action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $_POST['payment'] * 100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'OID'.rand(10,1000).'END';?>"//Replace with the order_id generated by you in the backend.
    data-buttontext="Payment Online"
    data-name="AppK"
    data-description="Watch Shop"
    data-image="image/watch.jpg"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#00FF00"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

<!DOCTYPE html>
<html>
<head>
<style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
  border: 3px solid green; 
}
</style>
</head>
</html>