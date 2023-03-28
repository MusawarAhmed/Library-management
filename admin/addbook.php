<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
    header('location:index.php');
}

?>
<?php 
@session_start();
error_reporting(0);
include('include/db.php');


if(isset($_POST['submit']))
{  
$bookisbn=$_POST['bookisbn'];
$bookname=$_POST['bookname'];
$bookgeneration=$_POST['bookgeneration'];
$bookprice=$_POST['bookprice'];
$bookauthor=$_POST['bookauthor'];
$bookcopyright=$_POST['bookcopyright'];
$bookpublisher=$_POST['bookpublisher'];
$bookeditionpages=$_POST['bookeditionpages'];
$sql=mysqli_query($con,"insert into add_book(book_ISBN,book_name,book_generation,book_price,book_author,book_copyright,book_publisher,book_edition_pages) values('$bookisbn','$bookname','$bookgeneration','$bookprice','$bookauthor','$bookcopyright','$bookpublisher','$bookeditionpages')");
if($sql)
{
echo "<script>alert('Book info added Successfully');</script>";

}
}


 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Header -->
<?php include("include/header.php");?>

</head>

<body id="page-top" >

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("include/sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-image:url(img/bg.jpg);background-size: cover;background-position: bottom;background-attachment: fixed;">

                <!-- Topbar -->
                <?php include("include/topnavbar.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-white">Dashboard</h1>
                    </div> -->

                    <!-- Content Row ------------------------------------------------------>
                        <div class="container" style="margin-top: 30px"> 
                            <div class="row justify-content-center">
                              
                              <form role="form" method="post" class="rounded p-2 w-50" style="background-color:rgba(0,0,0,0.30) !important;">
                                <div class="text-center p-1 text-white"><h3>Add Book Detail</h3></div>
                                <div class="form-group text-white">
                                    <label for="bookname">Book Name</label>
                                    <input type="text" class="form-control" name="bookname" placeholder="Enter Full Book Name"  required>
                                </div>
                                <div class="form-row text-white"> <!--form row-->
                                  <div class="form-group col-md-6 ">
                                    <label for="bookisbn">Book ISBN</label>
                                    <input type="text" maxlength="13" class="form-control" name="bookisbn" placeholder="Enter Book ISBN" required>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="bookgeneration">Book Generation</label>
                                    <input type="text" class="form-control" name="bookgeneration" placeholder="Enter Book Genderation" required>
                                  </div>
                                </div>
                                <div class="form-row text-white"> <!--form row-->
                                  <div class="form-group col-md-6">
                                    <label for="bookauthor">Book Author</label>
                                    <input type="text" class="form-control" name="bookauthor" placeholder="Enter Book Author" required>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="bookpublisher">Book Publisher</label>
                                    <input type="text" name="bookpublisher" class="form-control" placeholder="Enter Book Publisher" required>
                                  </div>
                                </div>
                                <div class="form-row text-white"> <!--form row-->
                                  <div class="form-group col-md-4 field">
                                    <label for="bookcopyright">Book Copyright</label>
                                    <input type="text" name="bookcopyright" class="form-control" placeholder="Enter Copyright" required>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="bookeditionpages">Book Edition Pages</label>
                                    <input type="text" class="form-control" name="bookeditionpages" placeholder="Book Edition Pages" required>
                                  </div>
                                  <div class="form-group col-md-4 ">
                                    <label for="bookprice">Book Price</label>
                                    <input type="number" class="form-control" name="bookprice" placeholder="Enter Book Price" required>
                                  </div>
                                </div>
                                <div class="float-right">
                                  <button type="clear" class="btn btn-danger">Cancle</button>
                                  <button type="submit" name="submit" class="btn btn-success">Add Book </button>
                                  <!-- <button type="button" class="btn btn-warning actions" disabled="disabled" >Update</button> -->
                                </div>

                                
                              </form>
                                
                                   
                            </div>
                        </div>  

                </div>
                <!-- /.container-fluid ---------------->

            </div>
            <!-- End of Main Content ------------------------------------>

            <!-- Footer -------->
            <?php include("include/footer.php"); ?>
            <!-- End of Footer ------>

        </div>
        <!-- End of Content Wrapper --------------------------------------------------->

    </div>
    <!-- End of Page Wrapper ------------------------------------------------------------------------->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    

    <?php include 'include/bottom-links.php'; ?>

</body>

</html>


