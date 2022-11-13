<?php include("./includes/header.php")?>
        <div class="mainBody">
            <div class="recent">
                <span>
                    Recent Blogs
                <span>
            </div>
            <?php ini_set('display_errors', 1); include('./blogs/recent_blog.php')?>
        </div>

<?php include('./includes/footer.php'); ?>