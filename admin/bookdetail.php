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
                                          <div class="text-center p-1"><h3>Book List</h3></div>
                                            
                                          <table class="table table-hover table-sm table-bordered">
                                            <thead>
                                              <tr class="table-info text-center">
                                                <th scope="col">#</th>
                                                <th scope="col">ISBN</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Generation</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Author</th>
                                                <th scope="col">Copyright</th>
                                                <th scope="col">Publisher</th>
                                                <th scope="col">Edition Pages</th>
                                                <th scope="col">Action</th>
                                              </tr>
                                            </thead>
                                      <?php
                                      $sql=mysqli_query($con,"select * from add_book");
                                      $cnt=1;
                                      while($row=mysqli_fetch_array($sql))
                                      {
                                        $id = $row['id'];
                                      ?>
                                            <tbody>
                                              <tr class="text-light table-list-row" >
                                                <th scope="row"><?php echo $cnt;?>.</th>
                                                <td><?php echo $row['book_ISBN'];?></td>
                                                <td><?php echo $row['book_name'];?></td>
                                                <td><?php echo $row['book_generation'];?></td>
                                                <td><?php echo $row['book_price'];?></td>
                                                <td><?php echo $row['book_author'];?></td>
                                                <td><?php echo $row['book_copyright'];?></td>
                                                <td><?php echo $row['book_publisher'];?></td>
                                                <td><?php echo $row['book_edition_pages'];?></td>
                                                <td>
                                                  <div class="visible-md visible-lg hidden-sm hidden-xs">

                                                    <a href="editbook.php?id=<?php echo $row['id']?>&isbn=<?php echo $row['book_ISBN']?>&bn=<?php echo $row['book_name']?>&bg=<?php echo $row['book_generation']?>&bp=<?php echo $row['book_price']?>&ba=<?php echo $row['book_author']?>&bc=<?php echo $row['book_copyright']?>&bpub=<?php echo $row['book_publisher']?>&be=<?php echo $row['book_edition_pages']?>" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"  data-target="" data-toggle=""><i class="fa fa-edit text-warning view_data"></i></a>
                                                             
                                                    <a href="bookdetail.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times text-danger"></i></a>
                                                  </div>
                                                </td>
                                                
                                              </tr>
                                            </tbody>
                                                <?php $cnt=$cnt+1; } ?>
                                          </table>
                                          
                                          
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