<?php

include ("baglanti.php");

$sql = "SELECT * FROM backlink_sites";
$results = $conn->query($sql);

if (isset($_POST["link"])){

  
  $link = $_POST['link'];
  $keyword = $_POST['keyword'];
  $mail = $_POST['mail'];
  $content = $_POST['content'];
  
  // $link = 'a';
  // $keyword = 'b';
  // $mail = 'c';
  // $content = 'd';
  
  foreach($results as $result){
    
    $req_link =$result['link'];
    $post_id =$result['post_id'];
    
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => $req_link,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_POSTFIELDS => array(
      'comment' => '<a href="'.$link.'">'.$keyword.'<a> '.$content.': '.$link,
      'author' => '<a href="'.$link.'">'.$keyword.'<a>',
      'email' => $mail,
      'comment_post_ID' => $post_id,
      'comment_parent' => '0',
      'url' => $link),
  ));
  curl_exec($curl);
  $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
  curl_close($curl);
  
  $sql_insert = "INSERT INTO responses(client,commented_link,backlink_site,req_status) VALUES('$keyword', '$link', '$req_link', '$httpcode')";
  mysqli_query($conn, $sql_insert);
  
}
}
header("Location: req_results.php");
exit();