<?php
session_start();
if (isset($_SESSION['admin_name'])) {
    header('location:dashboard.php');
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
                        <div class="container" style="margin-top: 40px"> 
                            <div class="row justify-content-center">
                              
                              <form role="form" method="post" action="check-login.php" class="rounded p-2 w-50" style="background-color:rgba(0,0,0,0.30) !important;">
                                <div class="text-center p-1 text-white"><h3>Admin Login</h3></div>
                                <div class="form-group text-white">
                                    <label for="email">email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="form-group text-white">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
                                </div>
                                <div class="float-right">
                                  <button type="submit" name="submit" class="btn btn-success ">Login</button>
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