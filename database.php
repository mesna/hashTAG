<?php
      $host = "localhost";
      $user = "test";
      $pass = "t3st3r123";
      $db = "test";

      // Create connection
    $conn = new mysqli($host, $user, $pass, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT ID, Postitus FROM MM_POST";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<div class='saadudandmed'>";
          echo "Anonüümne arvamus: " . $row["Postitus"]. "<br>";
          echo "</div>";
        }
      } else {
        echo "Ole esimene postitaja!";
    }
    $conn->close();
  ?>