<?php 
    include "includes/header.php";
    $_SESSION['url'] = $_SERVER['REQUEST_URI']; 
    $user->session_check();

 ?>

          
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="page-container">
        <?php include "includes/sidebar.php"; ?>
        <?php include "includes/top-nav.php"; ?>

        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left">Dashboard</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="index.html">Home</a></li>
                            <li><span>Dashboard</span></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="main-content-inner">
            <!-- MAIN CONTENT GOES HERE -->
        </div>
    </div>
      
    </div>
    <?php include "includes/offset.php"; ?>
          
    </div>
<?php include "includes/footer.php"; ?>