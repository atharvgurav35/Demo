<!DOCTYPE html>
<html>
<head>
<style>

body{
font-family: Arial;
}

form{
width:300px;
margin:50px auto;
}

input{
width:100%;
padding:8px;
margin:5px 0;
}

button{
width:100%;
padding:8px;
background:red;
color:white;
border:none;
}

</style>
</head>

<body>

<form method="POST" action="next.php">

<input type="text" name="customer_name" placeholder="Customer Name"><br>
<input type="tel" name="mobile_number" placeholder="Mobile Number"><br>
<input type="text" name="flat_no" placeholder="Flat No"><br>

<input type="number" name="area" placeholder="Area"><br>
<input type="number" name="rate" placeholder="Rate"><br>

<input type="number" name="mseb" placeholder="MSEB"><br>
<input type="number" name="society" placeholder="Society"><br>
<input type="number" name="clubhouse" placeholder="Clubhouse"><br>

<input type="number" name="stamp_duty" placeholder="Stamp Duty"><br>
<input type="number" name="maintenance" placeholder="Maintenance"><br>
<input type="number" name="registration" placeholder="Registration"><br>

<button type="submit" name="submit">Submit</button>

</form>

</body>
</html>