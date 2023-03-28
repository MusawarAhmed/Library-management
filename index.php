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
        <!-- <?php //include("include/sidebar.php"); ?> -->
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

                    <!-- Content Row -->
                    <style type="text/css">
                        .login-icon{
                            font-size:200px;
                        }
                        .ref-link{
                            text-decoration: none;
                            color: black;
                        }
                        .ref-link:hover{
                            color: black;
                        }
                        .cc{
                            height: 500px;
                            justify-content: center;
                        }
                    .RR:hover{
                            background-color: #f0f0f1 !important;
                            cursor: pointer;
                        }
                    </style>
                    <div class="">
                            <div class="container">
    
                            <div class="row align-content-center text-center cc">
                                    <div class="col col-lg-3 rounded-left bg-light RR Librarian p-1">
                                      <a href="librarian" class="ref-link"><i class="fa fa-user-circle login-icon " aria-hidden="true"></i></a>
                                    <h1><u><a href="librarian" class="ref-link">Librarian</a></u></h1>
                                    </div>
                                    <div class="col col-lg-3 rounded-right bg-light RR border-left border-dark p-1">
                                      <a href="admin" class="ref-link"><i class="fa fa-user-circle login-icon " aria-hidden="true"></i></a>
                                    <h1><u><a href="admin" class="ref-link">Admin</a></u></h1>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4"> </div>

                        <div class="col-lg-6 mb-4"> </div>

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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'include/bottom-links.php'; ?>

</body>

</html>