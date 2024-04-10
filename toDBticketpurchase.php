<?php 
    //servername => localhost
    //username  => root
    //password => usbw
    //database name => main
    $conn = mysqli_connect("localhost", "root", "usbw", "main");

    if($conn === false)
    {
        die("ERROR: Could not connect to the database".mysqli_connect_error());
    }

    $_StartPoint = $_REQUEST['Start_point_input'];
    $_EndPoint = $_REQUEST['Destination_input'];
    $_DepartureDate = $_REQUEST['TravelDate'];
    $_DepartureTime = $_REQUEST['Time'];

    $sql = "";

    if(mysqli_query($conn, $sql))
    {

    }
    else
    {
        echo "ERROR: $sql error.".mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
