<!-- loader starts-->
<div class="loader-wrapper">
    <div class="loader-index"><span></span></div>
    <svg>
    <defs></defs>
    <filter id="goo">
        <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
        <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
    </filter>
    </svg>
</div>
<!-- loader ends-->
<!-- tap on top starts-->
<div class="tap-top">
    <i data-feather="chevrons-up"></i>
</div>
<!-- tap on tap ends-->

<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start -->
    <?php include "src/views/components/header.php" ?>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php include "src/views/components/sidebar.php" ?>
        <!-- Page Sidebar Ends-->
        <!-- Page Content -->
        <?php include "src/routes/routes.php" ?>
        <!-- Page Content End -->
        <!-- Footer -->
        <?php include "src/views/components/footer.php" ?>
        <!-- Footer End -->
    </div>
</div>
<!-- page-wrapper End-->

<script src="public/assets/js/scrollbar/simplebar.js"></script>
<script src="public/assets/js/scrollbar/custom.js"></script>