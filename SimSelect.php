<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
}
</style>
</head>
<body>

<h2>SIM Selection</h2>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Airtel</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Vodafone</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Idea</button>
  <button class="tablinks" onclick="openCity(event, 'Delhi')">Jio</button>
</div>

<div id="London" class="tabcontent">
  <h3>Airtel</h3>
  <p>Register if you are new</p><a href="SignUPAirtel.php"></a>
  <p>LogIn if already registered</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Vodafone</h3>
    <p>Register if you are new</p><a href="SignUPVodafone.php"></a>
  <p>LogIn if already registered</p>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Idea</h3>
  <p>Register if you are new</p><a href="SignUPIdea.php"></a>
  <p>LogIn if already registered</p>
</div>

<div id="Delhi" class="tabcontent">
  <h3>Jio</h3>
  <p>Register if you are new</p><a href="SignUPJio.php"></a>
  <p>LogIn if already registered</p>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
