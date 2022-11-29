<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
 adminOnly();
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Section - Manage Users</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../assets/css/style.css">

        <link rel="stylesheet" href="../../assets/css/admin.css">

        <link rel="stylesheet" href="../../assets/icons/css/all.css">
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
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Users</a>
                    <a href="index.php" class="btn btn-big">Manage Users</a>
                </div>
                <div class="content">

                    <h2 class="page-title">Manage Users</h2>
                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                            
                        <?php foreach($admin_users as $key => $user): ?>
                            <tr>
                                <td><?php echo $key +1; ?></td>
                                <td><?php echo $user['username']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">Edit</a> </td>
                                <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">Delete</a> </td>
                            </tr>
                        <?php endforeach; ?>

                            
                        </tbody>
                    </table>
                    
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
        <script src="../../assets/js/scripts.js"></script>
    </body>
</html>