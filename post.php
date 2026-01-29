<?php
    require_once 'model.php';
    $post = getPost( $_GET['id'] );
    require 'view/post.php';
?>