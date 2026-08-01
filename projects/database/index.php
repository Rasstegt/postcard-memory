<?php 
include('header.php');
?>
  
  <form name="myForm" method="Post" action="process.php">
    <div id="wrapper">

    <div class="row">
        <label>Name*: </label>
        <input id="name" placeholder=" Your Name..." type="text" name="name"></input>
    </div>

    <div class="row">
        <label>Phone*: </label>
        <input id="number" placeholder=" 800-555-3535" type="phone" name="phone"></input>
    </div>

    <div class="row">
        <label>Email*: </label>
        <input id="email" placeholder=" example@domain.an" type="email" name="email"></input>
    </div>

    <div class="row">
        <label>Address*: </label>
        <input id="address" placeholder=" Your Address..." type="text" name="address"></input>
    </div>

    <div class="row">
        <label>City*: </label>
        <input id="city" placeholder=" Your City..." type="text" name="city"></input>
    </div>

    <div class="row">
        <label>Post Code*: </label>
        <input id="postal" placeholder=" L0L 1O1" type="postcode" name="postal" title="A1B 2C3 or A1B2C3"></input>
    </div>
    
    <div class="row">
        <label>Province: </label>
        <select name="province" id="province">
                    <option value="Ontario">Ontario</option>
                    <option value="Quebec">Quebec</option>
                    <option value="Manitoba">Manitoba</option>
                    <option value="British Columbia">British Columbia</option>
                    <option value="Saskatchewan">Saskatchewan</option>
                    <option value="Alberta">Alberta</option>
                    <option value="New-Brunswick">New-Brunswick</option>
                    <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                    <option value="Northwest Territories">Northwest Territories</option>
                    <option value="Nova Scotia">Nova Scotia</option>
                    <option value="Nunavut">Nunavut</option>
                    <option value="Prince Edward Island">Prince Edward Island</option>
                    <option value="Yukon">Yukon</option>
        </select>
    </div>
    <div class="row">
        <label>Ghost in Jar: </label>
        <input type="text" placeholder=" $10.00/each" id="productOne" name="productOne">
        </input>
    </div>

    <div class="row">
        <label>Imaginary Friend: </label>
        <input type="text" placeholder=" $20.00/each" id="productTwo" name="productTwo";>
        </input>
    </div>

    <div class="row">
        <label>The Meaning of Life: </label>
        <input type="text" placeholder=" $30.00/each" id="productThree" name="productThree">
        </input>
    </div>

<div class="row">
        <label>Delivery Time: </label>
        <select name="delivery" id="delivery">
            <option value="One Day">1 Day</option>
            <option value="Two Day">2 Days</option>
            <option value="Three Day">3 Days</option>
            <option value="Four Day">4 Days</option>
        </select>
</div>
<br/>
<div class="row">
    <input type="submit" value="Register"></input>
</div>

<div id="errors"></div>

</div>
</form>    
</body>
</html>



