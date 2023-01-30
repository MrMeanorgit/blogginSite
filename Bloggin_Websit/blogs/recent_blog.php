<?php include( $_SERVER["DOCUMENT_ROOT"].'/home_blog_data/homeBlog.php'); ?>
<?php foreach($posts as $post) {?>
<a href='blog.php?id=<?php echo $post['post-id'] ?>' target="_blank" class="recentBlog">
<div class="blogInHomePage">
    <div class="blogImage">
         <img src= <?php echo $post['post-image'];?> alt="React">          
    </div>
    <div class="flex-right">
        <span><?php echo $post['post-content']?></span>
    </div>               
</div>
    <div class="tag"><div class="textAlign"><span><?php echo $post['post-tag']?></span></div></div>
</a>
<?php } ?>