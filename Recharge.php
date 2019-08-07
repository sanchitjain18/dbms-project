<!DOCTYPE html>
<html>
<style>
body 
{
  font-family: Arial;
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div.container {
    box-sizing: border-box;
    border-radius: 5px;
    width:50%;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>

<h1>Card Payment</h1>
<p>Debit/Credit Card payment option</p>

<div class="container">
  <form action="Thanks.php">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name on Card">

    <label for="lname">Card Number</label>
    <input type="text" id="lname" name="lastname" placeholder="16 digit Card  Number">

    <label for="country">Bank</label>
    <select id="country" name="country">
      <option value="australia">Canara Bank</option>
      <option value="canada">SBI</option>
      <option value="usa">Axis Bank</option>
      <option value="usa">PNB</option>
      <option value="usa">Bank of Baroda</option>
    </select>
  
  	 <label for="lname">Expiration Date</label>
    <input type="date" id="edate" name="edate" placeholder="mm / yy">
    
    <label for="lname">cvv</label>
    <input type="text" id="cvv" name="cvv">
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
