<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: blue;
}

.dropdown-content {
    display: none;
    position:absolute;
    background-color: #f9f9f9;
    width: 100%;
    left: 0;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content .header {
    background: blue;
    padding: 16px;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
    background-color: #ccc;
    height: 250px;
}

.column a {
    float: none;
    color: black;
    padding: 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.accordion {
    background-color: #ccc;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    }
.column a:hover {
    background-color: #ddd;
}
    
.active, .accordion:hover {
    background-color: #aaa; 
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: #ccc;
    overflow: hidden;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<div class="navbar">
  <a href="SignUPAirtel.php">LogIN</a>
  <a href="Rr.php">News</a>
  <div class="dropdown">
    <button class="dropbtn">Brows Plans
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
      </div>   
      <div class="row">
        <div class="column">
          <h3>Unlimited Packs</h3>
          <a href="Recharge.php">1.4GB data/day, Unlimited Calls (Local+STD+National Roaming) and 100 Local+STD SMS/day <b>90 DAYS</b><br><b>Rs. 509</b> </a>
          <a href="Recharge.php">2GB data/day, Unlimited Calls (Local+STD+National Roaming) and 100 Local+STD SMS/day <b>82 DAYS</b><br><b>Rs. 499</b></a>
          <a href="Recharge.php">1.4GB data/day, Unlimited Calls (Local+STD+National Roaming) and 100 Local+STD SMS/day <b>82 DAYS</b><br><b> Rs. 448</b></a>
          <a href="Recharge.php">2GB data/day, Unlimited Calls (Local+STD+National Roaming) and 100 Local+STD SMS/day <b>28 DAYS</b><br><b> Rs. 249</b></a>
        </div>
        <div class="column">
          <h3>Smart Recharge</h3>
          <a href="Recharge.php">Enjoy 245 Talk time + Tariff at 30p/min On (Local/STD/LL) calls with 2 GB  <b>84 DAYS</b><br>  <b>Rs 245</b></a>
          <a href="Recharge.php">Enjoy 145 Talktime with Tariff of 30p/min on (Local/STD/LL ) and 1GB Data . <b>42 DAYS</b><br><b> Rs. 145</b></a>
          <a href="Recharge.php">Enjoy 95 Talk time + Tariff at 30p/min On (Local/STD/LL) calls with 500 MB . <b>28 DAYS</b><br><b> Rs. 95</b></a>
          <a href="Recharge.php">55 Talk time + Tariff at 1p/sec On (Local/STD/LL) calls with 200 MB Data . <b>28 DAYS</b><br><b> Rs. 65</b></a>
            <a href="Recharge.php">26.66 Talk time + 100 MB Data. <b>28 DAYS</b><br><b> Rs. 35<b></a>    
        </div>
        <div class="column">
          <h3>Data</h3>
            <a href="Recharge.php">6GB data. <b>28 DAYS</b><br><b >Rs. 175</b></a>
            <a href="Recharge.php">3GB data. <b>28 DAYS</b><br><b> Rs. 98</b></a>
        </div>
          <div class="column">
          <h3>Talktime</h3>
              <button class="accordion"><b>Full Talk-Time</b></button>
<div class="panel">
  <a href="Recharge.php">Rs5000 Talktime with lifetime validity & Outgoing validity for 28 days UNLIMITED/OG- <b>28 DAYS</b><br><b> Rs. 5000</b></a>
  <a href="Recharge.php">Rs1000 Talktime with lifetime validity & Outgoing validity for 28 days UNLIMITED/OG- <b>28 DAYS</b><br><b> Rs. 1000</b></a>
</div>

<button class="accordion"><b>Top-Up</b></button>
<div class="panel">
    <a href="Recharge.php">Rs.7.47 Main Account Talktime <b>UNLIMITED</b><br><b> Rs. 10</b></a>
    <a href="Recharge.php">Rs5000 Talktime with lifetime validity & Outgoing validity for 28 days UNLIMITED/OG- <b>28 DAYS</b><br><b >Rs. 5000</b></a>
  <a href="Recharge.php">Rs1000 Talktime with lifetime validity & Outgoing validity for 28 days UNLIMITED/OG- <b>28 DAYS</b><br><b> Rs. 1000</b></a>
</div>

          </div>
      </div>
    </div>
  </div> 
</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>

</body>
</html>
