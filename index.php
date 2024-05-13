<?php
    require_once('db_con_config.php');
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <title>Jūsu Airlines</title>
  <style>
    .Arrival {
      background-color: white;
      border: none;
      color: black;
      padding: 15px 80px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      position: absolute;
      top: 130px;
      left: 50px;
    }

    .Departure {
      background-color: white;
      border: none;
      color: black;
      padding: 15px 80px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      position: absolute;
      top: 130px;
      left: 260px;
    }

    .Ticketpurchase {
      background-color: white;
      border: none;
      color: black;
      padding: 15px 80px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      position: absolute;
      top: 130px;
      left: 500px;
    }

    .Aboutus {
      background-color: white;
      border: none;
      color: black;
      padding: 15px 80px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      position: absolute;
      top: 130px;
      left: 1650px;
    }

    .Login {
      background-color: white;
      border: none;
      color: black;
      width: 200px;
      height: 45px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      position: absolute;
      top: 10px;
      left: 1650px;
    }

    .Register {
      background-color: white;
      border: none;
      color: black;
      width: 200px;
      height: 45px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      position: absolute;
      top: 60px;
      left: 1650px;
    }

    .Profile {
      background-color: white;
      border: none;
      color: black;
      width: 150px;
      height: 30px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      margin: 4px 2px;
      cursor: pointer;
      position: absolute;
      top: 45px;
      left: 1050px;
    }

    .Tickets {
      background-color: white;
      border: none;
      color: black;
      width: 150px;
      height: 30px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      margin: 4px 2px;
      cursor: pointer;
      position: absolute;
      top: 45px;
      left: 1210px;
    }

    .Logout {
      background-color: white;
      border: none;
      color: black;
      width: 150px;
      height: 30px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      margin: 4px 2px;
      cursor: pointer;
      position: absolute;
      top: 45px;
      left: 1370px;
    }

    .FlightSearch {
      width: 1000px;
      height: 80px;
      font-size: 40px;
    }

    .Time {
      font-size: 20px;
    }

    .TimeInput {
      width: 200px;
      height: 30px;
      font-size: 20px;
    }

    .Arrivedfrom {
      font-size: 20px;
      top: 355px;
      left: 400px;
      position: absolute;
    }


    .table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      position: absolute;

      top: 505px;
      left: 30%;
      border: 1px solid black;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }



    .Arrived_from_input {
      width: 200px;
      height: 30px;
      font-size: 20px;
      top: 420px;
      left: 400px;
      position: absolute;
    }

    .Terminal {
      font-size: 20px;
      top: 355px;
      left: 800px;
      position: absolute;
    }

    .Terminal_input {
      width: 200px;
      height: 30px;
      font-size: 20px;
      top: 420px;
      left: 800px;
      position: absolute;
    }

    .Status {
      font-size: 20px;
      top: 355px;
      left: 1200px;
      position: absolute;
    }

    .Status_input {
      width: 200px;
      height: 30px;
      font-size: 20px;
      top: 420px;
      left: 1200px;
      position: absolute;
    }

    .Start_point {
      font-size: 60px;
      top: 200px;
      left: 20px;
      position: absolute;
    }

    .Start_point_input {
      width: 600px;
      height: 60px;
      font-size: 55px;
      top: 370px;
      left: 20px;
      position: absolute;
    }

    .Destination {
      font-size: 60px;
      top: 200px;
      left: 700px;
      position: absolute;
    }

    .Destination_input {
      width: 600px;
      height: 60px;
      font-size: 55px;
      top: 370px;
      left: 700px;
      position: absolute;
    }

    .Travel_date {
      width: 600px;
      height: 60px;
      font-size: 55px;
      top: 570px;
      left: 20px;
      position: absolute;
    }

    .First_class {
      width: 60px;
      height: 60px;
      font-size: 55px;
      top: 570px;
      left: 800px;
      position: absolute;
    }

    .First_class_label {
      width: 600px;
      height: 60px;
      font-size: 55px;
      top: 510px;
      left: 900px;
      position: absolute;
    }

    .Economy {
      width: 60px;
      height: 60px;
      font-size: 55px;
      top: 630px;
      left: 800px;
      position: absolute;
    }

    .Economy_label {
      width: 600px;
      height: 60px;
      font-size: 55px;
      top: 570px;
      left: 900px;
      position: absolute;
    }
	.E_mail
{
 width: 300px;
  height: 60px;
  font-size: 30px;
  top: 200px; 
   left: 700px; 
   position: absolute; 
}
.E_mail_input
{
width: 300px;
  height: 40px;
  font-size: 30px;
  top: 270px; 
  left: 700px; 
   position: absolute; 
}
.password
{
 width: 300px;
  height: 60px;
  font-size: 30px;
  top: 300px; 
   left: 700px; 
   position: absolute; 
}
.password_input
{
width: 300px;
  height: 40px;
  font-size: 30px;
  top: 370px; 
  left: 700px; 
   position: absolute; 
}
.Login_button
{
background-color: white;
  border: none;
  color: black;
  width: 150px;
  height: 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
  position: absolute; 
  top: 450px; 
  left: 850px; 
}
  </style>
</head>

<body style="background-color:powderblue;">

  <body style="background-color:powderblue;">
     <! –– main screen pogas-->
    <h1 onclick="Refresh()" style="font-size: 50px">Airlines</h1>
    <button onclick="Arrival()" class="Arrival" id="Arrival">Arrival </button>
	<button onclick="Departure()" id="Departure"class="Departure">Departure </button>
	<button onclick="Ticketpurchase()" class="Ticketpurchase">Ticket purchase </button>
	<hr style="height: 62px; background-color: white;">
	<button class="Aboutus">About us </button>
	<button class="Login" onclick="Login()">Login </button>
	<button class="Register">Register</button>
	<button class="Profile" onclick="Profile()">Profile </button>
	<button class="Tickets">Tickets </button>
	<button class="Logout">Log Out </button>
	
	 <! ––Arrival un Departures pogas-->
	<h1 id="SearchFlight" style="display: none;">Search Flight:</h1>
	<input id="FlightSearch" class="FlightSearch" style=" display: none;" type="text" placeholder="Flight number, Destination, Airport name/code">  <! ––Lidojuma meklēšana-->
	
	<p class="Time" style="display: none;" id="Time">Time:    </p>                                <! ––laiks-->
	<input type="datetime-local"id="TimeInput" style=" display: none;" class="TimeInput">
	
	<p class="Arrivedfrom" style="display: none;" id="Arrived_from">Arrived from: </p>              <! ––No kurienes atlidoja-->
	<input type="text"id="Arrived_from_input" style=" display: none;" class="Arrived_from_input">
	
	<p class="Terminal" style="display: none;" id="Terminal">Terminal: </p>                     <! ––attiecīgais terminālis-->
	<input type="text"id="Terminal_input" style=" display: none;" class="Terminal_input">
	
	<p class="Status" style="display: none;" id="Status">Status: </p>                            <! ––Status-->
	<input type="text"id="Status_input" style=" display: none;" class="Status_input">
	
	 <! ––Ticket purchase pogas-->
	<p class="Start_point" style="display: none;" id="Start_point">Starting point: </p>          <! ––Sākumpunkta izvēle-->
	<input type="text"id="Start_point_input" style=" display: none;" class="Start_point_input">
	
	<p class="Destination" style="display: none;" id="Destination">Destination: </p>          <! ––Vietas izvēle-->
	<input type="text"id="Destination_input" style=" display: none;" class="Destination_input">
	
	<input type="datetime-local"id="Travel_date" style=" display: none;" class="Travel_date">   <! ––Ceļojuma laika izvēle-->
	
	 <! ––Pirmās klases vai ekonomiskas klases izvēle-->
	 
	<input type="radio"id="First_class" style=" display: none;" class="First_class"  name="fav_language" >
	 <p class="First_class_label" style=" display: none;" id="First_class_label"> First class</p>
	 <input type="radio"id="Economy" style=" display: none;" class="Economy"  name="fav_language">
	 <p class="Economy_label" style=" display: none;" id="Economy_label"> Economy</p>
	
	
	 <form action="login.php" method="POST">
	    <p class="E_mail" name="E_mail" id="E_mail" style=" display: none;"> E-mail:</p>
	    <input type="text" name="E_mail_input" id="E_mail_input" style=" display: none;" class="E_mail_input">

	    <p class="password" name="password" id="password" style=" display: none;"> Password:</p>
	    <input type="password" name="password_input" id="password_input" style=" display: none;" class="password_input">
	 
	 <button class="Login_button" id="Login_button" type="submit" style=" display: none;"> Login</button>
  </form>
  
  <table class="table" style="display: none;" id="Arrivaltable">

    <tr>
      <th>Flight Number</th>
      <th>Start Point</th>
      <th>Destination</th>
      <th>Arrival Date</th>
      <th>Arrival Time</th>
    </tr>
    <tr>
    <?php
      $query = "SELECT FlightNr, StartPoint, Destination, ArrivalDate, ArrivalTime FROM flightlist";
      $resultsql = mysqli_query($con, $query);
      for ($i=0; $i<mysqli_num_rows($resultsql); $i++)
      {
        $result[$i] = mysqli_fetch_array($resultsql);
      }

      for ($i=0; $i < count($result); $i++)
      {
        if($result[$i]['Destination'] == 'Riga')
        {
    ?>
          <td><?php echo $result[$i]['FlightNr']; ?></td>
          <td><?php echo $result[$i]['StartPoint']; ?></td>
          <td><?php echo $result[$i]['Destination']; ?></td>
          <td><?php echo $result[$i]['ArrivalDate']; ?></td>
          <td><?php echo $result[$i]['ArrivalTime']; ?></td>
    <?php
        }
      }
    ?>
    </tr>
  </table>

  <table class="table" style="display: none;" id="Departuretable">
    <tr>
      <th>Flight Number</th>
      <th>Start Point</th>
      <th>Destination</th>
      <th>Departure Date</th>
      <th>Departure Time</th>
    </tr>
    <tr>
    <?php
      $query = "SELECT FlightNr, StartPoint, Destination, DepartureDate, DepartureTime FROM flightlist";
      $resultsql = mysqli_query($con, $query);
      for ($i=0; $i<mysqli_num_rows($resultsql); $i++)
      {
        $result[$i] = mysqli_fetch_array($resultsql);
      }

      for ($i=0; $i < count($result); $i++)
      {
        if($result[$i]['StartPoint'] == 'Riga')
        {
    ?>
          <td><?php echo $result[$i]['FlightNr']; ?></td>
          <td><?php echo $result[$i]['StartPoint']; ?></td>
          <td><?php echo $result[$i]['Destination']; ?></td>
          <td><?php echo $result[$i]['DepartureDate']; ?></td>
          <td><?php echo $result[$i]['DepartureTime']; ?></td>
    <?php
        }
      }
    ?>
    </tr>
  </table>

  <button style=" display: none;" id="hiddenButtonContainer">brr</button>
  <picture>
    <img id="AD" src="airplane_picture.jpg" alt="Flowers" style="height:auto; width:auto;">
  </picture>

  <script>
    function Arrival() {
      document.getElementById("SearchFlight").style.display = "block";
      document.getElementById("FlightSearch").style.display = "block";
      document.getElementById("Time").style.display = "block";
      document.getElementById("TimeInput").style.display = "block";
      document.getElementById("Arrived_from").style.display = "block";
      document.getElementById("Arrivaltable").style.display = "block";
      document.getElementById("Arrived_from_input").style.display = "block";
      document.getElementById("Terminal").style.display = "block";
      document.getElementById("Terminal_input").style.display = "block";
      document.getElementById("Status").style.display = "block";
      document.getElementById("Status_input").style.display = "block";
	  
	  document.getElementById("E_mail").style.display = "none";
	 document.getElementById("E_mail_input").style.display = "none";
	  document.getElementById("password").style.display = "none";
	  document.getElementById("password_input").style.display = "none";
	  document.getElementById("Login_button").style.display = "none";

      document.getElementById("Start_point").style.display = "none";
      document.getElementById("Start_point_input").style.display = "none";
      document.getElementById("Destination").style.display = "none";
      document.getElementById("Destination_input").style.display = "none";
      document.getElementById("Travel_date").style.display = "none";
      document.getElementById("First_class").style.display = "none";
      document.getElementById("First_class_label").style.display = "none";
      document.getElementById("Economy").style.display = "none";
      document.getElementById("Economy_label").style.display = "none";
      document.getElementById("Departuretable").style.display = "none";
      document.getElementById("Arrival");
      var box = document.querySelector('.Arrival');
      box.style.backgroundColor = 'yellow';
      var box = document.querySelector('.Departure');
      box.style.backgroundColor = 'white';
      var box = document.querySelector('.Ticketpurchase');
      box.style.backgroundColor = 'white';
	    var box = document.querySelector('.Login');
      box.style.backgroundColor = 'white';
      const element = document.getElementById("AD");
      element.remove();
    }

    function Departure() {
      document.getElementById("SearchFlight").style.display = "block";
      document.getElementById("FlightSearch").style.display = "block";
      document.getElementById("Time").style.display = "block";
      document.getElementById("TimeInput").style.display = "block";
      document.getElementById("Arrived_from").style.display = "block";
      document.getElementById("Departuretable").style.display = "block";
      document.getElementById("Arrived_from_input").style.display = "block";
      document.getElementById("Terminal").style.display = "block";
      document.getElementById("Terminal_input").style.display = "block";
      document.getElementById("Status").style.display = "block";
      document.getElementById("Status_input").style.display = "block";
	  
	  document.getElementById("E_mail").style.display = "none";
	 document.getElementById("E_mail_input").style.display = "none";
	  document.getElementById("password").style.display = "none";
	  document.getElementById("password_input").style.display = "none";
	  document.getElementById("Login_button").style.display = "none";

      document.getElementById("Start_point").style.display = "none";
      document.getElementById("Start_point_input").style.display = "none";
      document.getElementById("Destination").style.display = "none";
      document.getElementById("Destination_input").style.display = "none";
      document.getElementById("Travel_date").style.display = "none";
      document.getElementById("First_class").style.display = "none";
      document.getElementById("First_class_label").style.display = "none";
      document.getElementById("Economy").style.display = "none";
      document.getElementById("Economy_label").style.display = "none";
      document.getElementById("Arrivaltable").style.display = "none";
      document.getElementById("Departure");
      var box = document.querySelector('.Departure');
      box.style.backgroundColor = 'yellow';
      var box = document.querySelector('.Arrival');
      box.style.backgroundColor = 'white';
      var box = document.querySelector('.Ticketpurchase');
      box.style.backgroundColor = 'white';
	    var box = document.querySelector('.Login');
      box.style.backgroundColor = 'white';
      const element = document.getElementById("AD");
      element.remove();

    }

    function Profile() {

    }

    function Ticketpurchase() {
      document.getElementById("Start_point").style.display = "block";
      document.getElementById("Start_point_input").style.display = "block";
      document.getElementById("Destination").style.display = "block";
      document.getElementById("Destination_input").style.display = "block";
      document.getElementById("Travel_date").style.display = "block";
      document.getElementById("First_class").style.display = "block";
      document.getElementById("First_class_label").style.display = "block";
      document.getElementById("Economy").style.display = "block";
      document.getElementById("Economy_label").style.display = "block";
	  
	  document.getElementById("E_mail").style.display = "none";
	 document.getElementById("E_mail_input").style.display = "none";
	  document.getElementById("password").style.display = "none";
	  document.getElementById("password_input").style.display = "none";
	  document.getElementById("Login_button").style.display = "none";
	  
      document.getElementById("SearchFlight").style.display = "none";
      document.getElementById("FlightSearch").style.display = "none";
      document.getElementById("Time").style.display = "none";
      document.getElementById("TimeInput").style.display = "none";
      document.getElementById("Arrived_from").style.display = "none";
      document.getElementById("Departuretable").style.display = "none";
      document.getElementById("Arrivaltable").style.display = "none";
      document.getElementById("Arrived_from_input").style.display = "none";
      document.getElementById("Terminal").style.display = "none";
      document.getElementById("Terminal_input").style.display = "none";
      document.getElementById("Status").style.display = "none";
      document.getElementById("Status_input").style.display = "none";
      var box = document.querySelector('.Ticketpurchase');
      box.style.backgroundColor = 'yellow';
      var box = document.querySelector('.Departure');
      box.style.backgroundColor = 'white';
      var box = document.querySelector('.Arrival');
      box.style.backgroundColor = 'white';
	   var box = document.querySelector('.Login');
      box.style.backgroundColor = 'white';
      const element = document.getElementById("AD");
      element.remove();
    }

    function Refresh() {
      function autoRefresh() {
        window.location = window.location.href;
      }
      setInterval('autoRefresh()', 5000);
    }
	function Login()
	{
	document.getElementById("E_mail").style.display = "block";
	 document.getElementById("E_mail_input").style.display = "block";
	  document.getElementById("password").style.display = "block";
	  document.getElementById("password_input").style.display = "block";
	  document.getElementById("Login_button").style.display = "block";
	
	 document.getElementById("Start_point").style.display = "none";
	  document.getElementById("Start_point_input").style.display = "none";
	   document.getElementById("Destination").style.display = "none";
	  document.getElementById("Destination_input").style.display = "none";
	  document.getElementById("Travel_date").style.display = "none";
	   document.getElementById("First_class").style.display = "none";
	document.getElementById("First_class_label").style.display = "none";
	  document.getElementById("Economy").style.display = "none";
	document.getElementById("Economy_label").style.display = "none";
	document.getElementById("SearchFlight").style.display = "none";
	 document.getElementById("FlightSearch").style.display = "none";
	  document.getElementById("Time").style.display = "none";
	  document.getElementById("TimeInput").style.display = "none";
	  document.getElementById("Arrived_from").style.display = "none";
	 document.getElementById("Departuretable").style.display = "none";
	 document.getElementById("Arrivaltable").style.display = "none";
	 document.getElementById("Arrived_from_input").style.display = "none";
	 document.getElementById("Terminal").style.display = "none";
	   document.getElementById("Terminal_input").style.display = "none";
	   document.getElementById("Status").style.display = "none";
	   document.getElementById("Status_input").style.display = "none";
	   var box = document.querySelector('.Login');
      box.style.backgroundColor = 'yellow';
	     var box = document.querySelector('.Departure');
      box.style.backgroundColor = 'white';
	var box = document.querySelector('.Arrival');
      box.style.backgroundColor = 'white';
	  var box = document.querySelector('.Ticketpurchase');
      box.style.backgroundColor = 'white';
	    const element = document.getElementById("AD");
     element.remove();
     
	}
  </script>

</body>

</html>