<?php
    if(!( $db = mysqli_connect('localhost', 'root', 'usbw', 'main')))
    {
        die('Failed to connect to MySQL Database "main"');
    }

    $query = "SELECT * FROM FlightList";
    $sql = mysqli_query($db, $query);
    $row[$i]=mysqli_fetch_array($sql);
?>
<?php
    while ($data = mysqli_fetch_array($sql))
    {
        echo "<td width=\"100\">".$row[$i]['FlightNr']."</td>
              <td width=\"500\">".$row[$i]['StartPoint']."</td>
              <td width=\"500\">".$row[$i]['EndPoint']."</td>
              <td width=\"500\">".$row[$i]['DepartureDate']."</td>
              <td width=\"500\">".$row[$i]['DepartureTime']."</td>";
        
        
        
    }

?>