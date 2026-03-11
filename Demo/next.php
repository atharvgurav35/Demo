<?php
if(isset($_POST['submit']))
{

$customer = $_POST['customer_name'];
$mobile = $_POST['mobile_number'];
$flat = $_POST['flat_no'];

$area = $_POST['area'];
$rate = $_POST['rate'];

$mseb = $_POST['mseb'];
$society = $_POST['society'];
$club = $_POST['clubhouse'];

$stamp = $_POST['stamp_duty'];
$maint = $_POST['maintenance'];
$reg = $_POST['registration'];

$carpet = $area * 0.733;
$agreement = $area * $rate;

$total_dev = $agreement + $mseb + $society + $club;

$gst = $agreement * 0.13;

$total = $total_dev + $stamp + $maint + $reg + $gst;
?>

<!DOCTYPE html>
<html>
<head>

<title>Cost Sheet</title>

<style>

body{
font-family: Arial;
text-align:center;
}

table{
border-collapse:collapse;
width:500px;
margin:auto;
}

th,td{
border:1px solid black;
padding:10px;
}

th{
background:red;
color:white;
}

.total{
background:#ffcccc;
font-weight:bold;
}

button{
margin-top:20px;
padding:10px 20px;
font-size:16px;
}

@media print{
button{
display:none;
}
}

</style>

</head>

<body>
<hr>
<h2>GANGA FERNHILL PHASE</h2>
<h3>UNDRI</h3>
<hr>
<p style="text-align:left; margin:auto; font-size:16px;" >
Customer Name: <?php echo $customer; ?><br>
Mobile Number: <?php echo $mobile; ?><br>
Flat: <?php echo $flat; ?>
</p>

<h3 style = "background:grey;padding :10px;">COSTSHEET DETAILS & CALCULATIONS</h3>

<table>

<tr>
<th>Type</th>
<th>1 BHK</th>
</tr>

<tr>
<td>Area</td>
<td><?php echo $area; ?></td>
</tr>

<tr>
<td>Rate</td>
<td><?php echo $rate; ?></td>
</tr>

<tr>
<td>Carpet Area</td>
<td><?php echo $carpet; ?></td>
</tr>

<tr>
<td>Agr. Cost</td>
<td><?php echo $agreement; ?></td>
</tr>

<tr>
<td>MSEB</td>
<td><?php echo $mseb; ?></td>
</tr>

<tr>
<td>Society Formation</td>
<td><?php echo $society; ?></td>
</tr>

<tr>
<td>Club House Charges</td>
<td><?php echo $club; ?></td>
</tr>

<tr class="total">
<td>Total Amount Paid to Developer</td>
<td><?php echo $total_dev; ?></td>
</tr>

<tr>
<td>Stamp Duty</td>
<td><?php echo $stamp; ?></td>
</tr>

<tr>
<td>Maintenance</td>
<td><?php echo $maint; ?></td>
</tr>

<tr>
<td>Registration</td>
<td><?php echo $reg; ?></td>
</tr>

<tr>
<td>GST</td>
<td><?php echo $gst; ?></td>
</tr>

<tr class="total">
<td>Total Cost</td>
<td><?php echo $total; ?></td>
</tr>

</table>


</body>
</html>

<?php
}?>
<hr>

<h3 style="text-align:left;">Note :</h3>

<ul style="text-align:left; width:80%; margin:auto; font-size:16px;">
<li>Cheque Should Be drawn In favor of " Meenamani Ganga Builder LLP"</li>

<li>1% TDS will be applicable For agreement Value more than 50Lac</li>

<li>GST 12% on Agreement Cost, GST 18% on Maintenance Cost</li>

<li>Rates are subject to change without prior notice.</li>

<li>Govt. Taxes May vary as per Govt. Policies and are to be paid as per actual.</li>

<li>Rates are calculated after giving 200/- per sqft GST Discount</li>

<li>Legal Charges Of Rs.10000/- to be paid at the time of Agreement Registration</li>
</ul>
<button onclick="window.print()">Download / Print</button>

