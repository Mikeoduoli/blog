<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 

if (isset($_GET['id'])) {
     $post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Font awesome offline -->
    <link rel="stylesheet" href="assets/icons/css/all.css">
    <title><?php echo $post['title']; ?> | ObedDesign</title>
</head>
<body>
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!-- Page-wrapper -->
    <div class="page-wrapper">

    <!-- Content -->
    <div class="content clearfix">

        <!-- Main Content -->
        <div class="main-content single">
            <h1 class="post-title"><?php echo $post['title']; ?></h1>

            <div class="post-content">
            <?php echo html_entity_decode($post['body']); ?>

            </div>

        </div>
    </div>
    </div>

    <!-- // Main Content -->

    <!-- Sidebar -->
    <div class="sidebar single">

        <div class="section popular">
            <h2 class="section-title">Popular</h2>

            <?php foreach ($posts as $p): ?>
                <div class="post clearfix">
                    <img src="<?php echo BASE_URL . '/assets/images' . $p['image']; ?>" alt="">
                    <a href="" class="title">
                        <?php echo $p['title']; ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="section topics">
            <h2 class="section-title">Topics</h2>
            <ul>
              <?php foreach ($topics as $topic): ?>
                <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
              <?php endforeach; ?>    
                
            </ul>
        </div>
    </div>

    <!-- // Sidebar -->

    <!-- // Content -->
    
    </div>

    <!-- //Page Wrapper -->

    <!-- FOOTER -->

    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
</body>
</html>