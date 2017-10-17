<!DOCTYPE html>
<html>
<head>
<title>Online Cash Register</title>
<link type="text/css" rel="stylesheet" href="css/style.css"> 
</head>

<body>
 
  
<form method="post">
<div class="main">
<h1>Online Cash Register</h1>
<h3>Price:</h3>
<input type="text" id="priceNumber" name="priceNumber" /><br>
    
<br>
    
<h3>Cash:</h3>
<input type="text" id="cashNumber" name="cashNumber" /><br><br>
<input type="submit" id="submit" name="submit" value="Submit" />
<?php
    if(isset($_REQUEST['submit'])) {
        $priceNumber = $_REQUEST['priceNumber'];
        $cashNumber = $_REQUEST['cashNumber'];
        echo money_format("Your change is &#36;%i", $cashNumber - $priceNumber);
    }
    
?>
</div>
</form>

    
 
</body>
</html>