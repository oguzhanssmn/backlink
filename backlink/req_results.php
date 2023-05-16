<?php
include("navbar.php");
include ("baglanti.php");

$sql = "SELECT * FROM responses GROUP BY client";
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
      <th scope="col">İncele</th>
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
      <td><?php echo $result['client'] ?></td>
      <td><?php echo $result['commented_link'] ?></td>
      <td><?php echo $result['backlink_site'] ?></td>
      <td><?php echo $result['req_status'] ?></td>
      <td><a href="result_details.php?name=<?php echo $result['client']?>">
      <i class="la-2x la la-eye text-warning "></i></a></td>
    </tr>
  </tbody>
<?php } ?>
</table>