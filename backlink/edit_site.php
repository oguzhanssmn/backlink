<?php

include ("navbar.php");
include ("baglanti.php");
$id = $_GET["id"];
$sql = "SELECT * FROM backlink_sites WHERE id = '$id'";
$results = $conn->query($sql);
foreach ($results as $result){
?>

<div class="container col-6">
        
        <form action="edit_site.php" method="POST">
            <div class="form-group mb-4 mt-5">
              <label for="">Link</label>
              <input value="<?php echo $result["link"]?>"
              type="text" class="form-control" name="link" aria-describedby="emailHelp" ,
              placeholder="Sitenizin Linki">
            </div>
            <div class="form-group mb-4">
              <label for="">PostID</label>
              <input value="<?php echo $result["post_id"]?>"
              type="text" class="form-control" name="post_id" placeholder="Linklenecek Keyword">
            </div>
            <input type="hidden" name="update_id" value="<?php echo $id ?>">
            <button type="submit" class="btn btn-primary float-end mt-2">Submit</button>
        </form>
      
</div>

<?php
}

if(!empty($_POST['link'])){

    $update_id = $_POST['update_id'];
    $upt_link = $_POST['link'];
    $upt_id = $_POST['post_id'];
    $upt = "UPDATE backlink_sites SET link='$upt_link', post_id='$upt_id' WHERE id='$update_id'";
    $update = $conn->query($upt);

    header('Location: site_list.php');
    exit();
}
?>