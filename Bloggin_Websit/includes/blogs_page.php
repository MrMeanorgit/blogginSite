<?php include("./header1.php");?>
        <div class="mainBody">
            <div class="recent">
                <span>All My Blogs<span>
            </div>
            <?php ini_set( 'error_reporting', E_ALL );
            ini_set( 'display_errors', true ); include( $_SERVER["DOCUMENT_ROOT"].'/blogs/recent_blog.php') ?>
        </div>

<?php include('./footer1.php'); ?>