<?php
include("navbar.php");
include ("baglanti.php");
$client = $_GET['name'];
$sql = "SELECT * FROM responses WHERE client = '$client'";
$results = $conn->query($sql);
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Müşteri</th>
      <th scope="col">Müşteri Linki</th>
      <th scope="col">İstek Atılan Site</th>
      <th scope="col">Cevap</th>
    </tr>
  </thead>
<?php
$i = 0;
$count= 0;
foreach($results as $result){
if($result['req_status'] == 200){
    $count = $count +1;
}
$i++;
?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $result['client'] ?></td>
      <td><?php echo $result['commented_link'] ?></td>
      <td><?php echo $result['backlink_site'] ?></td>
      <td><?php echo $result['req_status'] ?></td>
    </tr>
  </tbody>
<?php } ?>
</table>
<p>Success count: <?php echo $count ?></p>