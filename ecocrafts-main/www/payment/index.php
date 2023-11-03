<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - DailyUI #002: Credit Card Checkout</title>
  <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Electrolize|PT+Mono" rel="stylesheet"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="align-center">
  <div class="card">
    <header>
    <h3 class="card-title">Payment Details</h3>
    <img width="128" alt="Visa Inc. logo"             src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/128px-Visa_Inc._logo.svg.png" class="logo"/>
    </header>
    
    <form action="" class="form">
      <div class="card-number">
      <label for="number">Card Number</label>
      <input id="number" type="text" size="40" placeholder="1234 1234 1234 1234" maxlength="16" required/>
      </div>
      
      <div class="card-name">
      <label for="name">Name</label>
      <input id="name" type="text" size="40" required placeholder="Your Name"/>
      </div>
      
      <div class="input-row">
      <div class="select-date">
      <label for="date">Expiration</label>
      <select name="" id="date">
        <option value="00"></option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
      <select name="" id="date">
        <option value="0000"></option>
        <option value="2017">2023</option>
        <option value="2018">2024</option>
        <option value="2019">2025</option>
        <option value="2020">2026</option>
        <option value="2021">2027</option>
        <option value="2021">2028</option>
        <option value="2021">2029</option>
        <option value="2021">2030</option>
      </select>
      </div>
      
      <div class="card-cvc">
      <label for="cvc">CVV</label>
      <input id="cvc" type="number" size="5" placeholder="123" maxlength="3" required/>
      </div>
        
      <button class="buy-button">Complete Purchase</button>
      </div>
    </form>
    
  </div>
</div>
<!-- partial -->
  
</body>
</html>
