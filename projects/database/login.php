<?php 
include('header.php');
include('config.php');
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['role']) && $_SESSION['role'] == 1){
	header('location: dashboard.php');
}
$errors = '';
if(!empty($_POST)){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(trim($username) == '' || trim($password) == ''){
		$errors .= 'Please enter a username/password';	  	
	}
	else{
		$sql = "SELECT * FROM `user_login` WHERE `username` = '$username' AND `password` = '$password'";
		
		$result = $db->query($sql);
		
		if($result->num_rows == 1){

			$row = $result->fetch_assoc();
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['role'] = $row['role'];
			$_SESSION['name'] = $row['name'];
			
			header('location: dashboard.php');
		}
		else{
			$errors .= "Username or Password not correct";
		}
			
	}
}
		
?>
  <form name="loginForm" method="post" action="login.php" >
  	<div id="wrapper">
  		<div class="row">
    		<label>Username</label>
    		<input id="username" placeholder="Username" type="text" name="username">
    	</div>
    	<div class="row">
    		<label>Password</label>
    		<input id="password" placeholder="Password" type="password" name="password">
    	</div>

    <br/><br/>

    <input type="submit" value="Log In">
    <p id="errors"><?php echo $errors; ?></p>
	</div>
  </form>  
<?php include('footer.php'); ?>