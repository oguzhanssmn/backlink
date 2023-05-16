<?php
include("navbar.php");
include ("baglanti.php");
$sql = "SELECT * FROM backlink_sites";
$results = $conn->query($sql);
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Link</th>
      <th scope="col">PostID</th>
      <th scope="col">Düzenle</th>
    </tr>
  </thead>
<?php
$i = 0;
foreach($results as $result){
$i++;
?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $result['link'] ?></td>
      <td><?php echo $result['post_id'] ?></td>
      <td><a href="edit_site.php?id=<?php echo $result['id']?>"><i class="las la-pen"></i></a></td>
      
    </tr>
  </tbody>
<?php } ?>
</table>