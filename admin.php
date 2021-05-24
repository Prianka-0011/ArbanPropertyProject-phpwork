<!------ Php code start---------->
<?php
$conn=mysqli_connect('localhost','root','','arbandatabase');
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
if(isset($_POST['submit']))
{
    $Name=$_POST['Name'];
    $Category=$_POST['Category'];
    //image 
    $Heading1Img=$_FILES['Heading1Img'];
    $Heading2Img=$_FILES['Heading2Img'];
    $FeaturesImg=$_FILES['FeaturesImg'];
    
    $Heading1ImgFileName=$Heading1Img['name'];
    $Heading1ImgError=$Heading1Img['error'];
    $Heading1ImgTmp=$Heading1Img['tmp_name'];
    $Heading1ImgFileExt=explode('.',$Heading1ImgFileName);
    $Heading1ImgCheck=strtolower(end($Heading1ImgFileExt));
    $Heading1ImgFileStored=array('png','jpg','jepg');
    
    if (in_array($Heading1ImgCheck,$Heading1ImgFileStored))
    {
        $Heading1ImgDestination='upload/'.$Heading1ImgFileName;
        move_uploaded_file($Heading1ImgTmp,$Heading1ImgDestination);
    }
    $Heading2ImgFileName=$Heading2Img['name'];
    $Heading2ImgError=$Heading2Img['error'];
    $Heading2ImgTmp=$Heading2Img['tmp_name'];
    $Heading2ImgFileExt=explode('.',$Heading2ImgFileName);
    $Heading2ImgCheck=strtolower(end($Heading2ImgFileExt));
    $Heading2ImgFileStored=array('png','jpg','jepg');

    if (in_array($Heading2ImgCheck,$Heading2ImgFileStored))
    {
        $Heading2ImgDestination='upload/'.$Heading2ImgFileName;
        move_uploaded_file($Heading2ImgTmp,$Heading2ImgDestination);
    }

    $FeaturesImgFileName=$FeaturesImg['name'];
    $FeaturesImgError=$FeaturesImg['error'];
    $FeaturesImgTmp=$Heading2Img['tmp_name'];
    $FeaturesImgFileExt=explode('.',$FeaturesImgFileName);
    $FeaturesImgCheck=strtolower(end($FeaturesImgFileExt));
    $FeaturesImgFileStored=array('png','jpg','jepg');

    if (in_array($FeaturesImgCheck,$FeaturesImgFileStored))
    {
        $FeaturesImgDestination='upload/'.$FeaturesImgFileName;
        move_uploaded_file($FeaturesImgTmp,$FeaturesImgDestination);
    }
    //Galary Images
    $Galary1=$_FILES['Galary1'];
    $Galary2=$_FILES['Galary2'];
    $Galary3=$_FILES['Galary3'];
    $Galary4=$_FILES['Galary4'];
    $Galary5=$_FILES['Galary5'];
    $Galary6=$_FILES['Galary6'];
    $Galary7=$_FILES['Galary7'];
    $Galary8=$_FILES['Galary8'];



    $Galary1FileName=$Galary1['name'];
    $Galary1Error=$Galary1['error'];
    $Galary1Tmp=$Galary1['tmp_name'];
    $Galary1FileExt=explode('.',$Galary1FileName);
    $Galary1Check=strtolower(end($Galary1FileExt));
    $Galary1FileStored=array('png','jpg','jepg');

    if (in_array($Galary1Check,$Galary1FileStored))
    {
        $Galary1Destination='upload/'.$Galary1FileName;
        move_uploaded_file($Galary1Tmp,$Galary1Destination);
    }
    $Galary2FileName=$Galary2['name'];
    $Galary2Error=$Galary2['error'];
    $Galary2Tmp=$Galary2['tmp_name'];
    $Galary2FileExt=explode('.',$Galary2FileName);
    $Galary2Check=strtolower(end($Galary2FileExt));
    $Galary2FileStored=array('png','jpg','jepg');

    if (in_array($Galary2Check,$Galary2FileStored))
    {
        $Galary2Destination='upload/'.$Galary2FileName;
        move_uploaded_file($Galary2Tmp,$Galary2Destination);
    }
    $Galary3FileName=$Galary3['name'];
    $Galary3Error=$Galary3['error'];
    $Galary3Tmp=$Galary3['tmp_name'];
    $Galary3FileExt=explode('.',$Galary3FileName);
    $Galary3Check=strtolower(end($Galary3FileExt));
    $Galary3FileStored=array('png','jpg','jepg');

    if (in_array($Galary3Check,$Galary3FileStored))
    {
        $Galary3Destination='upload/'.$Galary3FileName;
        move_uploaded_file($Galary3Tmp,$Galary3Destination);
    }
    $Galary4FileName=$Galary4['name'];
    $Galary4Error=$Galary4['error'];
    $Galary4Tmp=$Galary4['tmp_name'];
    $Galary4FileExt=explode('.',$Galary4FileName);
    $Galary4Check=strtolower(end($Galary4FileExt));
    $Galary4FileStored=array('png','jpg','jepg');

    if (in_array($Galary4Check,$Galary4FileStored))
    {
        $Galary4Destination='upload/'.$Galary4FileName;
        move_uploaded_file($Galary4Tmp,$Galary4Destination);
    }
    $Galary5FileName=$Galary5['name'];
    $Galary5Error=$Galary5['error'];
    $Galary5Tmp=$Galary5['tmp_name'];
    $Galary5FileExt=explode('.',$Galary5FileName);
    $Galary5Check=strtolower(end($Galary5FileExt));
    $Galary5FileStored=array('png','jpg','jepg');

    if (in_array($Galary5Check,$Galary5FileStored))
    {
        $Galary5Destination='upload/'.$Galary5FileName;
        move_uploaded_file($Galary5Tmp,$Galary5Destination);
    }
    $Galary6FileName=$Galary6['name'];
    $Galary6Error=$Galary6['error'];
    $Galary6Tmp=$Galary6['tmp_name'];
    $Galary6FileExt=explode('.',$Galary6FileName);
    $Galary6Check=strtolower(end($Galary6FileExt));
    $Galary6FileStored=array('png','jpg','jepg');

    if (in_array($Galary6Check,$Galary6FileStored))
    {
        $Galary6Destination='upload/'.$Galary6FileName;
        move_uploaded_file($Galary6Tmp,$Galary6Destination);
    }
    $Galary7FileName=$Galary7['name'];
    $Galary7Error=$Galary7['error'];
    $Galary7Tmp=$Galary7['tmp_name'];
    $Galary7FileExt=explode('.',$Galary7FileName);
    $Galary7Check=strtolower(end($Galary7FileExt));
    $Galary7FileStored=array('png','jpg','jepg');

    if (in_array($Galary7Check,$Galary7FileStored))
    {
        $Galary7Destination='upload/'.$Galary7FileName;
        move_uploaded_file($Galary7Tmp,$Galary7Destination);
    }
    $Galary8FileName=$Galary8['name'];
    $Galary8Error=$Galary8['error'];
    $Galary8Tmp=$Galary8['tmp_name'];
    $Galary8FileExt=explode('.',$Galary8FileName);
    $Galary8Check=strtolower(end($Galary8FileExt));
    $Galary8FileStored=array('png','jpg','jepg');

    if (in_array($Galary8Check,$Galary8FileStored))
    {
        $Galary8Destination='upload/'.$Galary8FileName;
        move_uploaded_file($Galary8Tmp,$Galary8Destination);
    }
    
    $SubTitle=$_POST['SubTitle'];
    $Size=$_POST['Size'];
    $Price=$_POST['Price'];
    $Heading1=$_POST['Heading1'];
    $Heading2=$_POST['Heading2'];
    $Heading1Desc=$_POST['Heading1Desc'];
    $Heading2Desc=$_POST['Heading2Desc'];
    $PropertyLocation=$_POST['PropertyLocation'];
    $PropertySize=$_POST['PropertySize'];
    $ReferenceNo=$_POST['ReferenceNo'];
    $PermitNo=$_POST['PermitNo'];
    $BedNo=$_POST['BedNo'];
    $BathNo=$_POST['BathNo'];
    $ParkingNo=$_POST['ParkingNo'];
    $PropertyDesc=$_POST['PropertyDesc']; 

    //new add
    $SubHeading1=$_POST['SubHeading1'];
    $SubHeading2=$_POST['SubHeading2'];
    $BedNo2=$_POST['BedNo2'];
    $2BedSize=$_POST['2BedSize'];
    $2BedPrice=$_POST['2BedPrice'];
    $BedNo3=$_POST['BedNo3'];
    $BedNo3=$_POST['BedNo3'];
    $3BedPrice=$_POST['3BedPrice'];
    
    // if(!empty($Name) && !empty($Category) &&!empty($Category) && !empty($Heading1Img) && !empty($Heading2Img) && !empty($FeaturesImg) && !empty($SubTitle) && !empty($Size) && !empty($Price) && !empty($Heading1) && !empty($Heading2) && !empty($Heading1Desc) && !empty($Heading2Desc) && !empty($PropertyLocation) && !empty($PropertySize) && !empty($ReferenceNo) && !empty($PermitNo) && !empty($BedNo) && !empty($BathNo) && !empty($ParkingNo) && !empty($PropertyDesc) )
    // {

    // } 
    $query="INSERT INTO projecct(Name,Category,SubTitle,Heading1,Heading2,Heading1Desc,Heading2Desc,PropertyLocation,PropertySize,ReferenceNo,PermitNo,BedNo,BathNo,ParkingNo,
    PropertyDesc,Price,Size,Heading1Img,Heading2Img,FeaturesImg,Galary1,Galary2,Galary3,Galary4,Galary5,Galary6,Galary7,Galary8
)
     VALUE('$Name','$Category','$SubTitle','$Heading1','$Heading2','$Heading1Desc','$Heading2Desc','$PropertyLocation','$PropertySize',
     '$ReferenceNo','$PermitNo','$BedNo','$BathNo','$ParkingNo','$PropertyDesc','$Price','$Size',' $Heading1ImgDestination','$Heading2ImgDestination',' $FeaturesImgDestination','$Galary1Destination','$Galary2Destination','$Galary3Destination',
     '$Galary4Destination','$Galary5Destination','$Galary6Destination','$Galary7Destination','$Galary8Destination')";
     
     $createquery=mysqli_query($conn,$query);
     echo $createquery;
     if($createquery)
     {
         echo "Your Data has been successfully";
         header('Location:admin.php');
     }
     else{
         echo "Faild Please Try again";
     }
}
?>
<!------ Php code end ---------->

<!DOCTYPE html>
<html lang="en">
<head>
<title>Arban</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<!------ Include the above in your HEAD tag ---------->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <a href="#" class="logo1"><img class="logo12" src="images/LOGO.png" alt=""></a>
            <a class="active" style="cursor: pointer;color:#fff;" data-toggle="modal"
                data-target="#exampleModalCenter">Create Project</a>
        </div>
        <div class="main">
            <nav class="navbar navbar-expand-lg custnav">
                <a class="navbar-brand font-weight-bold" href="#">Arban</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Logout </a>
                        </li>


                    </ul>
                </div>
            </nav>
            <div class="body">
                <!-- Button trigger modal -->
  
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form  method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select  id="" name="Category" class="form-control">
                                                    <option value="Buy">Buy</option>
                                                    <option value="Sale">Sale</option>
                                                    <option value="Rent">Rent</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sub Title</label>
                                                <input type="text"name="SubTitle" class="form-control">
                                            </div>
                                        </div>
                                     
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Size</label>
                                                <input type="text" name="Size" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label>Price</label>
                                             <input type="text"  name="Price" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Heading1</label>
                                                <input name="Heading1"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label>Heading1 Image</label>
                                                <input type="file" name="Heading1Img" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Heading2</label>
                                                <input name="Heading2" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                           
                                                <label>Headig2 Image</label>
                                                <input type="file" name="Heading2Img" class="form-control">
                                          
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Heading1 Description</label>
                                                <textarea  id=""name="Heading1Desc"  class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                           
                                                <label>Headig2 Decription</label>
                                                <textarea id="" name="Heading2Desc" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>              
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Features</label>
                                                <input type="file" name="FeaturesImg" class="form-control">
                                            </div>
                                        </div>
                                        
                                    </div>  
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Property Lcation</label>
                                                <input name="PropertyLocation" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                           
                                                <label>Property Size</label>
                                                <input name="PropertySize" type="text" class="form-control">
                                          
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Property Reference No</label>
                                                <input name="ReferenceNo" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                           
                                                <label>RERA Pemit No</label>
                                                <input name="PermitNo" type="text" class="form-control">
                                          
                                            </div>
                                        </div>
                                    </div>              
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Bed No</label>
                                                <input name="BedNo" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                           
                                                <label>Bath No</label>
                                                <input name="BathNo" type="text" class="form-control">
                                          
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Parking No</label>
                                                <input name="ParkingNo" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                                          
                                                <label>Description</label>
                                               <textarea name="PropertyDesc" id="" class="form-control"></textarea>                                      
                                            </div>
                                        </div>
                                    </div>  
                                   <!-- Galary Image-->  
                                   <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Galary1</label>
                                                <input   type="file" name="Galary1"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                                          
                                                <label>Galary2</label>
                                                <input  type="file" name="Galary2" class="form-control">                                    
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Galary3</label>
                                                <input type="file"  name="Galary3" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                                          
                                                <label>Galary4</label>
                                                <input type="file" name="Galary4" class="form-control">                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Galary5</label>
                                                <input type="file" name="Galary5" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                                          
                                                <label>Galary6</label>
                                                <input type="file" name="Galary6" class="form-control">                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Galary7</label>
                                                <input type="file" name="Galary7" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">                                          
                                                <label>Galary8</label>
                                                <input type="file" name="Galary8" class="form-control">                                    
                                            </div>
                                        </div>
                                    </div>
                                 
                                   
                                    <button class="btn btn-info" name="submit">Submit</button>                                                           
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--*************start header**************-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bccc7b239b.js" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/ Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">  </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>

</body>

</html> 