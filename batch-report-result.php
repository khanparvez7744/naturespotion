 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Nature's Potion">
  <meta name="keywords" content="Nature's Potion">
  <meta name="description" content="Nature's Potion">
  <meta name="author" content="Nature's Potion">
  <title>Nature Potion</title>
  <link rel="shortcut icon" type="image/png" href="images/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.theme.green.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-207353149-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-207353149-1');
</script>

<?php include('header.php') ?>
<?php
$search = $_POST['search']; 
//
$batch        = $_POST['search'];
$mobile      = $_POST['c_mobile'];
$customer        = $_POST['c_name'];
if(isset($_POST['submit']))
{
$sql = "INSERT INTO enquiry_info(batch_no,c_no,c_name)
VALUES ('".$batch."','".$mobile."','".$customer."')";
// dheeraj@apisindia.com,retail@apisindia.com
if ($conn->query($sql) === TRUE) {
$to 	    = 'dheeraj@apisindia.com,retail@apisindia.com';
$from       = 'no-reply@apisindia.com'; #sender email 
$fromname   = 'Nature Potion Honey';
$subject    = 'You\'ve been contacted by ' . $customer . '.';
$headers    = "From: ".$fromname." <".$from."> \r\n";
//$headers   .= "Reply-To: ". $email . "\r\n";
$headers   .= "MIME-Version: 1.0\r\n";
$headers   .= "Content-type: text/html; charset=utf-8\r\n";
// $headers   .= "X-Mailer: PHP". phpversion() ."\r\n" ;
$msg  = "<table style='max-width:600px;width: 100%;'>\r\n\n";
$msg .= "<tr><td>Batch Number</td><td>:</td><td>".$batch."</td></tr>\r\n\n";
$msg .= "<tr><td>Mobile</td><td>:</td><td>".$mobile."</td></tr>\r\n\n";
$msg .= "<tr><td>Name</td><td>:</td><td>".$customer."</td></tr></table>\r\n\n";
$msg .= "<p>You can contact ".$customer." via batch, ".$batch."</p>\r\n\n";
$msg .= "-----------------------------------------\r\n";
//  $checkmail =
mail($to, $subject, $msg, $headers);
// mail($to2, $subject2, $msg2, $headers2);
//print_r($msg);
#echo "--------------------------------";
#print_r($msg2);
// if($checkmail) {
//echo 'success';
// } else {
// echo 'incomplete';
// }
}
}
$sql = "select * from betch_no where batch_no like '%$search%'";
$result = $conn->query($sql);
if ($result->num_rows > 0){ ?>
<div class="row centerbtn justify-content-center">
<div class="col-xl-6 text-center px-sm-0 px-5">
<h2 id="ContentPlaceHolderMain_Label1" class="mb-sm-5 mb-4">Your batch of Nature's Potion Honey is 100% compliant on all FSSAI parameters. Please download your purity certificate.</h2>
<a class="btn btn-brown2 bg-brown border-0 fw-normal mb-sm-0 mb-2" href="generate-report-pdf.php?search=<?php echo $search;?>" target="_blank">Download Purity Certificate</a>
<a id="ContentPlaceHolderMain_HyperLink2" class="btn btn-brown2 bg-brown border-0 ms-0 ms-sm-4 fw-normal mb-sm-0 mb-2" href="pdf-certificate.php">Check Again</a>
</div>
</div>
<?php 
} else {?>
<div class="centerbtn">
<section>
<div class="container">
<div clas="row">
<div class="newinner col-sn-12 text-center">	
<h2 id="ContentPlaceHolderMain_Label1">Please enter correct batch code as mentioned on side panel of your Nature's Potoins Honey Jar. Valid for only packs manufactured post 1st June’21</h2>
<a href="pdf-certificate.php" id="ContentPlaceHolderMain_HyperLink2" class="btn btn-brown2 bg-brown border-0 fw-normal mt-5">Check Again</a>
</div>
<?php
}  
$conn->close();
?>
</div>
</div>
</div>
</div>
</section>  
<div class="clearfix"></div>
<div style=""></div>
<?php include('footer.php') ?>