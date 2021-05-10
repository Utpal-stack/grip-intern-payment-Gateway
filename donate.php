<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Donate</title>
</head>
<body>
<img class="bg"src="image/Charities.jpg"alt="..."> 
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="#"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav">
  <a type="button" href="payment.php" class="btn btn-info" style="margin-left : 8px; ">Home</a>
  <a type="button" href="https://www.thesparksfoundationsingapore.org/about/vision-mission-and-values/" class="btn btn-success" style="margin-left : 8px; ">About us</a>
  <a type="button" href="donate.php" class="btn btn-danger" style="margin-left : 8px;   ">Donate</a>
  <form style="margin-left:220%; "><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_H98O6Li5oRl0fI" async> </script> </form>

  </div>
</div>
</nav>
 
  <div id="content" class="container" >
    <div class="row">
      <div class="col"></div>
      <div class="col-8">
        <br>
       
        <h1 class="cover-heading" style="font-family:Ravie; color:red" > Donate</h1>
        <img src="image/donate.png" style="height: 60px;width: 70px;margin-left:25%;">
        <p class="lead"style="font-family:Gadugi">A small amount of your donation can save someone's life.<br>
        </p>
        <p class="lead">
        <form style=" margin-top:10px; "><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_H98O6Li5oRl0fI" async> </script> </form>
        </p>
      </div>
      <div class="col"></div>
    </div>
  </div>
</body>
</html>
<style>
.bg{
    width:100%;
    height: 100%;
    position:absolute;
    z-index:-1;
    opacity: 0.9;
    background-attachment: fixed;
}
#content {
 
      margin-top:7%;
      justify-content:right;
      background-color: black;
      width: 330px;
      height: 350px;
     
      color: white;
    }
.footer-widget{
    color: #dcdcdc;
    font-size: 13.5px;
}
</style>