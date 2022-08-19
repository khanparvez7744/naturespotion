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
  <style>
      body{
      overflow-x:hidden;    
      }
      .w-auto{
          width:auto;
      }
  </style>
       <section>
           <div class="row">
               <img src="images/Banner-Honey-2.jpg" alt="" class="img-fluid">
           </div>
       </section>
        <section class="py-2 py-sm-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-9 col-sm-11 mx-auto">
            
                        
                        <form method="post" action="batch-report-result.php" id="form1" class="ng-pristine ng-valid border p-5 bg-white" _lpchecked="1">
  <div class="row mb-3">
    <label for="ContentPlaceHolderMain_txtBatchNumber" class="col-sm-5 col-form-label fs-22">Batch Number<span class="text-danger">*</span></label>
    <div class="col-sm-7">
      <input type="text" class="form-control registerinput" name="search" autocomplete="off" id="ContentPlaceHolderMain_txtBatchNumber">
    </div>
  </div>
  <div class="row mb-3">
    <label for="ContentPlaceHolderMain_txtName" class="col-sm-5 col-form-label fs-22" >Name</label>
    <div class="col-sm-7">
      <input class="form-control" name="c_name" type="text" maxlength="50" id="ContentPlaceHolderMain_txtName" class="form-control registerinput">
    </div>
  </div>
  <div class="row mb-3">
    <label for="ContentPlaceHolderMain_txtPhone" class="col-sm-5 col-form-label fs-22">Phone Number</label>
    <div class="col-sm-7">
      <input name="c_mobile" type="text" maxlength="10" id="ContentPlaceHolderMain_txtPhone" class="form-control registerinput">
    </div>
  </div>
   <div class="row">
       <div class="col-sm-12 text-center">
  <button  type="submit" name="submit" value="Check Purity Report" onclick="return ApisCheckBatch();" id="ContentPlaceHolderMain_sbmtbtn" class="btn btn-brown2 mt-3 mb-3 sbmtbtn py-1 w-auto">Check Purity Report</button>
   </div>
   </div>
</form>
                        
                        
                    </div>
                </div>
            </div>
        </section>
    
     <script>
         function ApisCheckBatch() {
             txtBatchNumber = document.getElementById("ContentPlaceHolderMain_txtBatchNumber");
             txtBatchNumber.value = document.getElementById("ContentPlaceHolderMain_txtBatchNumber").value.trim();

             txtName = document.getElementById("ContentPlaceHolderMain_txtName");
             txtName.value = document.getElementById("ContentPlaceHolderMain_txtName").value.trim();

             txtPhoneNumber = document.getElementById("ContentPlaceHolderMain_txtPhone");
             txtPhoneNumber.value = document.getElementById("ContentPlaceHolderMain_txtPhone").value.trim();


             if (txtName.value != "") {
                 var _letters = /^[A-Za-z\s]+$/;
                 if (txtName.value.match(_letters)) {
                     //return true;
                 }
                 else {
                     alert("Please provide name in alphabets only");
                     txtName.focus();
                     return false;
                 }
             }


             if (txtPhoneNumber.value != "") {
                 
                 if (!isNaN(txtPhoneNumber.value)) {
                     //alert('111');
                    // return true;
                 }
                 else {
                     alert("Please provide phone number in numeric format only");
                     txtPhoneNumber.focus();
                     return false;
                 }
             }


            if (txtBatchNumber.value.length > 10) {
                alert("Please provide the correct Batch Number");
                txtBatchNumber.focus();
                return false;
            }

            if (txtBatchNumber.value == "" && txtBatchNumber.value == ("Batch Number")) {
                alert("Please provide the correct Batch Number");
                txtBatchNumber.focus();
                return false;
            }
            else {

                var letters = /^[A-Za-z0-9]+$/;
                if (txtBatchNumber.value.match(letters)) {
                    return true;
                }
                else {
                    alert("Please provide the correct Batch Number");
                    txtBatchNumber.focus();
                    return false;
                }
            }

            
        }
     </script>        
  <?php include('footer.php') ?>