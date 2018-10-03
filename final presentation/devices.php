<?php
  $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  if($db_connection->connect_error) echo 'not working';
  $sql = "SELECT * from devices;";
    $result = $db_connection->query($sql);
  if($result->num_rows > 0) {
    
    echo '<div class="columns">';  
    while($row = $result->fetch_assoc()) {
      echo '<div class="column">';
      echo '<div class="tile" style="display:inline-block; width: 80%;">';
      echo '<div class="card">';
      echo '<div class="card-content">';
      echo '<div class="media">';
      echo '<div class="media-content">';
      echo '<p class="title is-4">'.$row['device_name'].'</p>';
      echo '<p class="subtitle is-6">'.$row['device_ip'].'</p>';
      echo '<a class="button" href="/view.php?device_id='.$row['device_id'].'">View Data</a>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
    echo "</div>";
  }
?>
