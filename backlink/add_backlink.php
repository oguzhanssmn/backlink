<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backlink Ekle</title>
</head>
<body>
<?php include ("navbar.php"); ?>
    <div class="container col-6">
        
        <form action="req.php" method="POST">
            <div class="form-group mb-4 mt-5">
              <label for="">Link</label>
              <input type="text" class="form-control" name="link" aria-describedby="emailHelp" ,
              placeholder="Sitenizin Linki">
            </div>
            <div class="form-group mb-4">
              <label for="">Keyword</label>
              <input type="text" class="form-control" name="keyword" placeholder="Linklenecek Keyword">
            </div>
            <div class="form-group mb-4">
              <label for="">E-mail</label>
              <input type="text" class="form-control" name="mail" placeholder="Mail Zort">
            </div>
            <div class="form-group mb-2">
              <label for="">İçerik</label>
              <textarea name="content" placeholder="Yorum İçeriğini Yazın"
               cols="20" rows="5" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary float-end mt-2">Submit</button>
        </form>
        
    </div>
  
</body>
</html>