<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
    header('location:index.php');
}

?>
<?php

error_reporting(0);
include('include/db.php');


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
                    <style type="text/css"> /*style*/
                      .table-hover th,td{
                      padding: 3px !important;
                        }
                     .table-list-row{
                        background-color: rgb(0 0 0 / 20%) !important;
                       }
                      .table-list-row:hover{
                        background-color: rgb(0 0 0 / 30%) !important;
                        cursor: pointer;
                       }
                    </style> <!-- style end -->
                        <div class="">
                                  <!-- <div class="alert alert-danger alert-dismissible fade show w-75 m-auto" role="alert">
                                      <strong>Holy guacamole!</strong> <?php //echo $_SESSION['msg']; ?>
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div> -->
                                    <div class="row align-content-center justify-content-center text-light">
                                        <div class="col col-lg-10 Librarian mt-3 table-responsive-lg">
                                          <div class="text-center p-1"><h3>User Detail</h3></div>
                                            <table class="table table-hover table-bordered">
                                            <thead>
                                              <tr class="table-info text-center">
                                                
                                                  <th scope="col">ISBN</th>
                                                  <th scope="col">Book Name</th>
                                                  <th scope="col">Book Author</th>
                                                  <th scope="col">Price</th>
                                              </tr>
                                            </thead>
                                          <?php if(isset($_GET['id'])){
                                            $id=$_GET['id'];
                                            $sql=mysqli_query($con,"select * from add_book WHERE id = $id");

                                            while($row=mysqli_fetch_array($sql)){ ?>

                                        <tbody>
                                              <tr class="text-light table-list-row text-center " >
                                                
                                                <td><?php echo $row['book_ISBN'];?></td>
                                                <td><?php echo $row['book_name'];?></td>
                                                <td><?php echo $row['book_author'];?></td>
                                                <td>Rs./- <?php echo $row['book_price'];?></td>
                                                
                                              </tr>
                                            </tbody>
                                            <?php }

                                          } ?>
                                          </table>

                                          <form role="form" method="POST" class="rounded p-2 w-100" style="background-color:rgba(0,0,0,0.30) !important;">
                                            <!-- <div class="text-center p-1 text-white">
                                              <h3>Update Book Detail</h3></div> -->
                                            <?php 
                                            $sql=mysqli_query($con,"select * from add_book WHERE id = $id");
                                            $row=mysqli_fetch_array($sql);

                                             ?>
                                            
                                            <input type="text" value="<?php echo $row['book_ISBN'];?>" name="isbn" hidden="hidden">
                                            <input type="text" value="<?php echo $row['book_name'];?>" name="b-name" hidden="hidden">
                                            <input type="text" value="<?php echo $row['book_author'];?>" name="ba-name" hidden="hidden">
                                            <input type="text" value="<?php echo $row['book_edition_pages'];?>" name="copies" hidden="hidden">
                                            <input type="text" value="<?php echo $row['book_price'];?>" name="price" hidden="hidden">

                                            <div class="form-row text-white"> <!--form row-->
                                              <div class="form-group col-md-4">
                                                <label for="u-name">User name</label>
                                                <input type="text" class="form-control" value="" name="u-name" placeholder="Enter user name">
                                              </div>
                                              <div class="form-group col-md-4">
                                                <label for="u-cnic">User CNIC</label>
                                                <input type="text" name="u-cnic" value="" class="form-control" placeholder="Enter CNIC" required>
                                              </div>
                                              <div class="form-group col-md-4">
                                                <label for="bookprice">Return date</label>
                                                <input type="date" class="form-control" value="" name="r-date" placeholder="Enter Return date" required>
                                              </div>
                                            </div>
                                            <div class="w-100 text-right">
                                              <!-- <button type="submit" name="submit" class="btn btn-success">Save</button> -->
                                              <button type="clear" class="btn btn-danger btn-lg">Cancle</button>
                                              <button type="submit" name="issue" class="btn btn-success btn-lg" >ISSUE</button>
                                            </div>
                                            
                                          </form>

                                          <?php 
                                            if (isset($_POST['issue'])) {

                                              $isbn=$_POST['isbn'];
                                              $bname=$_POST['b-name'];
                                              $baname=$_POST['ba-name'];
                                              $price=$_POST['price'];
                                              $copies=$_POST['copies'];
                                              if ($copies>1) {
                                                $update_copies= --$copies;
                                              }else{
                                                $update_copies= "0";
                                              }
                                              if ($copies>1) {
                                                $issue_copies= "1";
                                              }else{
                                                $issue_copies= "0";
                                              }
                                              $u_name=$_POST['u-name'];
                                              $u_cnic=$_POST['u-cnic'];
                                              $i_date = date('Y-m-d H:i:s');
                                              $i_time=$_POST['i-date'];
                                              $r_date=$_POST['r-date'];


                                              $check_isbn=mysqli_query($con,"select * form add_book where book_ISBN = $isbn ");
                                              if () {
                                                // code...
                                              }

                                              $sql=mysqli_query($con,"insert into issue_books(book_ISBN,user_name,user_CNIC,book_name,book_author,book_price,book_copy,Issue_date,issue_time,due_date) values('$isbn','$u_name','$u_cnic','$bname','$baname','$price','$issue_copies','$i_date','$i_time','$r_date')");



                                            }

                                           ?>
                                        </div>
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