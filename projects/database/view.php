<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myawesomestore";

    $db = new mysqli($servername, $username, $password, $dbname);

    if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }

    $sql = "SELECT `ID`, `name`, `email`, `phone`, `tickets`, `cost` from order_data;";

    $result = $db->query($sql);
	
    
?>
<?php 
include('header.php');
include('session.php');

	if($result->num_rows > 0){
   
   ?>
  
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Tickets</th>
                    <th>Cost</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = $result->fetch_assoc()){
                        /*echo '<pre>';
                        print_r($row);
                        echo '</pre>';*/
                ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['tickets']; ?></td>
                    <td>$<?php echo $row['cost']; ?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    <?php 
        }
        else{
            echo "<p>No data to display</p>";
        }
    ?>
  
</body>
</html>








