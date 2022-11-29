<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Section - Manage Posts</title>
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
                    <a href="create.php" class="btn btn-big">Add Post</a>
                    <a href="index.php" class="btn btn-big">Manage Post</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Manage Posts</h2>

                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                        <?php foreach ($posts as $key => $post): ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $post['title'] ?></td>
                                <td>Obed</td>
                                <td> <a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a></td>
                                <td> <a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">Delete</a></td>

                                <?php if ($post['published']): ?>
                                    <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">Unpublish</a></td>
                                <?php else: ?>
                                    <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">Publish</a></td>
                                <?php endif; ?>
                                
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