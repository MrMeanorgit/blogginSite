<?php include( $_SERVER["DOCUMENT_ROOT"].'/home_blog_data/homeBlog.php'); ?>
<?php include('./header1.php'); ?>
<?php
    if(isset($_GET["id"])){
        $post = retunrPerticularData($_GET["id"]);
    }
?>
<div class="blog-alignment">
    <div class="container"><img src= <?php echo $post['post-image'];?>  alt="React"></div>
            
            <p class="align-text"><span class="first_letter"><?php echo $post['post-content'][0];?></span><?php echo substr($post['post-content'],1);?></p>
                
            
        </div>

<?php include('./footer1.php') ?>