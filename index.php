<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php"); 

$posts = array();
$postsTitle = 'Recent Posts';



if (isset($_GET['t_id'])) {
    $posts = getPostsByTopic($_GET['t_id']);
    $postsTitle = "You searched for posts  under'" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
    $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
    $posts = searchPosts($_POST['search-term']);
} else {
    $posts = getPublishedPosts();
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TechStack | Blog</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <!-- Custom styling -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Font awesome offline -->
        <link rel="stylesheet" href="assets/icons/css/all.css">
    </head>
    <body>
        <!-- header file here -->
        <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Post slider -->
            <div class="post-slider">
                <h1 class="slider-title">Trending Posts</h1>
                <i class="fas fa-chevron-left prev"></i>
                <i class="fas fa-chevron-right next"></i>

                <div class="post-wrapper">

                    <?php foreach($posts as $post): ?>
                        <div class="post">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
                            <div class="post-info">
                                <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                                <i class="far fa-user"> <?php echo $post['username']; ?></i>
                                &nbsp;
                                <i class="far fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                            </div>
                        </div>
                     <?php endforeach; ?> 
                   </div>
                </div>
                <!-- // Post Slider -->

                <!-- Content -->
            <div class="content clearfix">

            <!-- Main Content -->
            <div class="main-content">
                <h1 class="recent-post-title"><?php echo $postsTitle; ?></h1>
                  <?php foreach($posts as $post): ?>
                    <div class="post clearfix">
                    <img src="<?php echo BASE_URL . '/assets/images' . $post['image']; ?>" alt="" class="slider-image">
                        <div class="post-preview">
                            <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                            <i class="far fa-user"><?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="far calender"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                            <p class="preview-text">
                               <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                            </p>
                            <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                        </div>
                    </div>
                  <?php endforeach; ?>

                
            </div>
            <!-- // Main Content -->

                


                <div class="sidebar">

                    <div class="section search">
                        <h2 class="section-title">Search</h2>
                        <form action="index.php" method="post">
                            <input type="text" name="search-term" class="text-input" placeholder="Search">
                        </form>
                    </div>


                    <div class="section topics">
                        <h2 class="section-title">Topics</h2>
                        <ul>
                        <?php foreach ($topics as $key => $topic): ?>
                            <li><a href=" "><?php echo $topic['name']; ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>

                </div>

            </div>

            <!-- // Content -->

        </div>
        <!-- // Page Wrapper -->

        <!-- footer -->
        <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

        <!-- // footer -->

         <!-- JQuery -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

         <!-- Slick Carousel-->

         <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

         <!-- Custom Script -->

         <script src="assets/js/scripts.js"></script>
    </body>
</html>