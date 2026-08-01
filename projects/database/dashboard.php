<?php
include('config.php');
session_start();

    $sql = "SELECT * FROM `order`;";
    $result = $db ->query($sql);

    if(!isset($_SESSION['user_id']) || !isset($_SESSION['role'])){
    	header('location: index.php');
    }
        if($_SESSION['role'] != 1){
        	header('location: index.php');
        }

include('header.php');
?>

<div class="formData">
<?php 
    if($result->num_rows > 0) {
    ?>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Post Code</th>
                <th>Province</th>
                <th>Ghost in Jar</th>
                <th>Imaginary Friend</th>
                <th>The Meaning of Life</th>
                <th>Delivery</th>
                <th>Order Placed</th>
            </tr>
        </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()){ ?>
               <tr>
                    <td><?php echo $row['order_id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['province']; ?></td>
                    <td><?php echo $row['postal']; ?></td>
                    <td><?php echo $row['ghost']; ?></td>
                    <td><?php echo $row['friend']; ?></td>
                    <td><?php echo $row['life']; ?></td>
                    <td><?php echo $row['delivery']; ?></td>
                    <td><?php echo $row['order_time']; ?></td>
                    <td><a href="delete.php?id=<?php echo $row['order_id']; ?>">Delete</a></td>
             </tr>
                <?php }   ?>
            </tbody>
        </table>
    
    <?php 
        } else {
            echo "<p>No data to display</p>";
        }  ?>
</div>
<?php include('footer.php'); ?>