<?php include('header.php'); 
    error_reporting(0);
?>


<div id="wrapper">
<?php
 $name = $_POST['name'];
 $number = $_POST['phone'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $city = $_POST['city'];
 $postal = trim($_POST['postal']);
 $province = $_POST['province'];
 $a = $_POST['productOne'];
 $b = $_POST['productTwo'];
 $c = $_POST['productThree'];
 $delivery = $_POST['delivery'];

 $postReg = "/[A-Za-z][0-9][A-Za-z][0-9][A-Za-z][0-9]{1}?$/";
 $postRege = "/[A-Za-z][0-9][A-Za-z]\s[0-9][A-Za-z][0-9]{1}?$/";
 $phoneReg = "/(\d{3})(\d{3})(\d{4})$/";
 $phoneRege = "/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/";
 $errors = "";


 if($name == "") {
    $errors .= "Name is required <br>";
 } 
 
 if((preg_match($phoneReg, $number, $matched) && $number < 9999999999 && $number > 100000000) || preg_match($phoneRege, $number, $matched)) {
    $number = $matched[1].'-'.$matched[2].'-'.$matched[3];
    } else {
    $errors .= 'We are not going to call you on a date. Your Number(xxx-xxx-xxxx) <br>'; }

  if($email == '') {
    $errors .= 'We don`t send spam. Email please <br>';
  } 

  if ($address == '') {
    $erorrs .= "We don`t need to stalk you. Address. Please <br>";
  }
  
  if($city == '') {
    $errors .= 'We need to send it to somewhere, where? City!!! <br>';
  }

  if (!preg_match($postReg, $postal) && !preg_match($postRege, $postal)) { 
    $errors .= 'You must have a postal code written somewhere and formatted as L0L 1O1 <br>';
  }

  if(($a == '' || $a < 0) && ($b == '' || $b < 0) && ($c == '' || $c < 0)) {
    $errors .= 'What are you here for? Purchase something <br>';
  } 

    if($a == "" ) {
    $a = 0; 
    } else if (is_numeric($a)) {    
    $a = $a; 
    } else {
    $errors .= "Jars are counted using numeric values.. <br>";
    }

    if($b == "" || $b < 0) {
    $b = 0; 
    } else if (is_numeric($b)) {    
    $b = $b; 
    } else {
    $errors .= "Specify how many friends would you like to get in numbers <br>";
    }

    if($c == "" || $c < 0) {
    $c = 0; 
    } else if (is_numeric($c)) {    
    $c = $c; 
    } else {
    $errors .= "Specify. Using. Number. The Meaning of Life <br>";
    }

    if ($errors == '') {

    switch($delivery){
    case "One Day": $delivered = 30;break;
    case "Two Day": $delivered = 25;break;
    case "Three Day": $delivered = 20; break;
    case "Four Day": $delivered = 15; break;
    }

    switch($province){
        case "Ontario": $tax = 13;break;
        case "Manitoba": $tax = 14; break;
        case "Alberta": $tax = 5; break;
        case "British Columbia": $tax = 12; break;
        case "New-Brunswick": $tax = 15; break;
        case "Newfoundland and Labrador": $tax = 15; break;
        case "Northwest Territories": $tax = 5; break;
        case "Nova Scotia": $tax = 15; break;
        case "Nunavut": $tax = 5; break;
        case "Prince Edward Island": $tax = 15; break;
        case "Quebec": $tax = 14.975; break;
        case "Saskatchewan": $tax = 11; break;
        case "Yukon": $tax = 5; break;
    }

    $j = $a * 10;
    $i = $b * 20;
    $k = $c * 30;
    $subtotal = $j + $i + $k + $delivered;
    $taxes = $subtotal * ($tax / 100); 
    $total = $taxes + $subtotal;
    $taxes = $subtotal * ($tax / 100);

    echo "<div class='row'>
        <label> Name: </label> 
        <div class='input'>
        $name
        </div>
        </div>";
    echo "<div class='row'>
        <label> Phone: </label> 
        <div class='input'>
        $number
        </div>
        </div>";
    echo "<div class='row'>
    <label> Email: </label>
        <div class='input'>
        $email
        </div>
        </div>";
    echo "<div class='row'>
    <label> Delivery Address: </label> 
        <div class='input'>";
    echo strtoupper($address).", ";
    echo strtoupper($city).", ";
    echo strtoupper($province).", ";
    echo strtoupper($postal);
    echo "</div>
        </div>";
    echo "<div class='row'>
        <label> $a Ghost in Jar $10.00 </label>
        <div class='input'> 
        $j
        </div>
        </div>";
    echo "<div class='row'>
        <label> $b Imaginary Friend $20.00 </label>
        <div class='input'>
        $i
        </div>
        </div>";
    echo "<div class='row'>
        <label> $c The Meaning of Life $30.00 </label>
        <div class='input'>
        $k
        </div>
        </div>";
    echo "<div class='row'>
    <label> Shipping Charges: </label>
        <div class='input'>
        $delivered
        </div>
        </div>";
    echo "<div class='row'>
    <label> Sub Total: </label>
        <div class='input'>
        $subtotal
        </div>
        </div>";
    echo "<div class='row'>
        <label> Taxes $tax%: </label>
        <div class='input'>
        $taxes
        </div>
        </div>";
    echo "<div class='row'>
        <label> Total: </label>
        <div class='input'>
        $total
        </div>
        </div>";    

    $sql = "INSERT INTO 
            `order` (`order_id`, `name`, `phone`, `email`, `address`, `city`, `province`,  `postal`, `ghost`, `friend`, `life`, `delivery`, `order_time`) 
            VALUES
            (NULL, '$name', '$number', '$email', '$address', '$city', '$province', '$postal', '$a', '$b', '$c', '$delivery', CURRENT_TIMESTAMP)";

        if($db->query($sql)) {
            echo "<div id='row'>
            <h1> Order has been placed</h1>
            </div>";
        } else {
        echo "Could not insert into DB: ".$db->error; }

    } else {
        echo "<div id='errors'> $errors </div>";
        echo "<div id='row'>
        <a href='javascript:history.go(-1)'><input type='submit' value='Go Back'></input></a>
        </div>
        ";
    }
    ?>
</div>
<?php include('footer.php') ?>