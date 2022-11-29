<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Section - Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/style.css">

        <link rel="stylesheet" href="../assets/css/admin.css">

        <link rel="stylesheet" href="../assets/icons/css/all.css">
    </head>
    <body>
       <?php include(ROOT_PATH . "/app/includes/adminHeader.php");?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- left sidebar -->
            <?php include(ROOT_PATH . "/app/includes/adminSidebar.php");?>
             <!-- // left sidebar -->

             <!-- Admin Content -->
             <div class="admin-content">
                

                <div class="content">

                    <h2 class="page-title">Dashboard</h2>

                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                    
                    
                </div>

             </div>
             <!-- // Admin Content -->
          
        </div>

        <!-- // Page Wrapper -->

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Ckeditor -->
        <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>

        <!-- Custom Script -->
        <script src="../assets/js/scripts.js"></script>
    </body>
</html>