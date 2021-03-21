<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/save-order-and-pay" method="POST"> 
        @csrf
        <input type="hidden" name="user_email" value="mubarakolagoke@gmail.com"> 
        <input type="hidden" name="amount" value="100"> 
        <input type="hidden" name="cartid" value="12"> 
        <button type="submit" name="pay_now" id="pay-now" title="Pay now">Pay now</button>
    </form>
</body>
</html>
