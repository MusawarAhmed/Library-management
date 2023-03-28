<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
    header('location:index.php');
}

?>
<?php

error_reporting(0);
include('include/db.php');

if(isset($_GET['del']))
      {
              mysqli_query($con,"delete from add_book where id = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted successfully !!";
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
                    <style type="text/css"> /*style*/
                      td{
                        vertical-align: middle;
                        text-align: center;
                      }
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
                                          <div class="text-center p-1"><h3>Issue Book</h3></div>
                                            <form>
                                          <table class="table table-hover table-bordered">
                                            <thead>
                                              <tr class="table-info text-center">
                                                <th scope="col">#</th>
                                                  <th scope="col">ISBN</th>
                                                  <th scope="col">Book Name</th>
                                                  <th scope="col">Book Author</th>
                                                  <th scope="col">Price</th>
                                                  <th scope="col">Copies</th>
                                                  <th scope="col">Action</th>
                                              </tr>
                                            </thead>
                                      <?php
                                      $sql=mysqli_query($con,"select * from add_book ORDER BY book_name");
                                      $cnt=1;
                                      while($row=mysqli_fetch_array($sql))
                                      {
                                        $id = $row['id'];
                                      ?>
                                            <tbody>
                                              <tr class="text-light table-list-row text-center " >
                                                <td><?php echo $cnt; ?></td>
                                                <td><?php echo $row['book_ISBN'];?></td>
                                                <td><?php echo $row['book_name'];?></td>
                                                <td><?php echo $row['book_author'];?></td>
                                                <td>Rs./- <?php echo $row['book_price'];?></td>
                                                <td><?php echo $row['book_edition_pages'];?></td>
                                                <td>
                                                  <a href="abcd.php?id=<?php echo $id; ?>" class="btn btn-primary btn-sm">Issue</a>
                                                  
                                                </td>
                                              </tr>
                                            </tbody>
                                                <?php $cnt=$cnt+1; } ?>

                                          </table>
                                          
                                          </form>
                                          
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



    <!-- <input type="radio" name="book" id="bookid" value="<?php echo $row['id'];?>" style="width: 20px;height: 20px;"> -->

</body>

</html>