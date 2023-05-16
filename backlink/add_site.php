<?php

include ("navbar.php");
include ("baglanti.php");
?>

<div class="container col-6">
        
        <form action="add_site.php" method="POST">
            <div class="form-group mb-4 mt-5">
              <label for="">Link</label>
              <input type="text" class="form-control" name="link" aria-describedby="emailHelp" ,
              placeholder="Wp Comment Linki">
            </div>
            <div class="form-group mb-4">
              <label for="">PostID</label>
              <input type="text" class="form-control" name="post_id" placeholder="Post ID">
            </div>
            <button type="submit" class="btn btn-primary float-end mt-2">Submit</button>
        </form>
      
</div>

<?php
if(!empty($_POST['link']) && !empty($_POST['post_id'])){

    $link = $_POST['link'];
    $post_id = $_POST['post_id'];


    $sql_insert = "INSERT INTO backlink_sites(link,post_id) VALUES('$link', '$post_id')";
    mysqli_query($conn, $sql_insert);

    header('Location: add_site.php');
    exit();
}
?>