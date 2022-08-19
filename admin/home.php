<?php
 require_once '../conn.php';
?>
<?php
if(isset($_POST['ans_submit'])){
	$ans= $_POST['admin_ans'];
	$id= $_POST['cus_id'];
	$sql ="UPDATE customer_quary set adm_ans = '$ans' where id='$id'";
	$result= $conn ->query($sql);
	
	$sql ="SELECT * FROM customer_quary where id='$id'";
    $result=$conn->query($sql);
    $data = $result->fetch_row();
$to = "$data[3]";
$from       = 'Naturs potion <no-reply@sociapainfluencer.com>';   #sender email address
$fromname   = 'Naturs potion';
$subject = "'You\'ve recived answer of your question from naturs potion";
$headers = "From: ".$fromname." <".$from."> \r\n";
// $headers   .= "Reply-To: ". $email . "\r\n";
$headers   .= "MIME-Version: 1.0\r\n";
$headers   .= "Content-type: text/html; charset=utf-8\r\n";
$headers   .= "X-Mailer: PHP". phpversion() ."\r\n" ;
	
		
		$msg  = "<table style='max-width:600px;width: 100%;'>\r\n\n";
        $msg .= "<tr><td>Your asked question</td><td>:</td><td>".$data[4]."</td></tr>\r\n\n";
        $msg .= "<tr><td>Answer</td><td>:</td><td>".$data[5]."</td></tr>\r\n\n";
        $msg .= "-----------------------------------------\r\n";
        mail($to,$subject,$msg,$headers);
}
if(isset($_POST['delete_quary'])){
	$id= $_POST['cus_id'];
	$sql ="UPDATE customer_quary set is_delete = '1' where id='$id'";
	$result= $conn ->query($sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>home</title>
	<style>
table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}
</style>

</head>
<body>
<!-- updatee section -->
<section class="info" id="isw">
<div>
  <h1 class="text-uppercase text-center up info mt-5">Customer Question's</h1>
</div>
<hr class="w-50 mx-auto">
<div class="table-responsive container-fluid">
<table id="tbval">
<tr>
<th>Id</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Query</th>
<th>Answer it</th>
<th>Status</th>
</tr>
<?php
$sql="SELECT * FROM customer_quary where is_delete='0' and (adm_ans IS NULL)";
$result= $conn->query($sql);
$k=1;
while ($data = $result->fetch_assoc()) {
	// code...
	?>
<tr>
	<form method="post">
<td><?php echo $k; ?></td>
<td><?php echo $data['cus_name'];?></td>
<td><?php echo $data['cus_phone'];?></td>
<td><?php echo $data['cus_email'];?></td>
<td><?php echo $data['cus_quary'];?></td>
<td><textarea name="admin_ans"></textarea><button type="submit" class="btn btn-primary" style="" name="ans_submit">Submit</button></td>
<td><button type="submit" class="btn btn-primary" name="delete_quary">Delete</button></td>
<input type="hidden" name="cus_id" value="<?php echo $data['id']; ?>">
</form>
</tr>
<?php	
$k++;
}
?>
</table>
</div>
</section>
  <!-- these links for bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- !bootstrap link -->
</body>
</html>