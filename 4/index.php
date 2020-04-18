<?php
  include '../4/config.php';
  $ambildata1 = mysqli_query($con, "SELECT * FROM tb_foods INNER JOIN tb_categories ON tb_categories.id=tb_foods.category_id WHERE category_id = 1");
  $ambildata2 = mysqli_query($con, "SELECT * FROM tb_foods INNER JOIN tb_categories ON tb_categories.id=tb_foods.category_id WHERE category_id = 2")
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Muhammad Rizki Akbar">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="master.css">
    <title>Warung MRA - Warung Jaman Now</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Warung&nbsp<span>MRA</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <button type="button" class="btn btn-primary ml-3 mt-3 mb-3"><a href="tambah_kategori.php">Add Kategori</a></button>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-primary ml-3 mt-3 mb-3"><a href="tambah_makanan.php">Add Makanan</a></button>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <h3 class="h3 ml-3 mt-3">Makanan Berkuah</h3>
      <div class="row">
        <?php while($kuah = mysqli_fetch_assoc($ambildata1)) {?>
        <div class="col-md-5">
          <div class="card-deck">
            <div class="card-columns-fluid">
              <div class="card mt-5" style="width: 18rem;">
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $kuah['image'] ).'" class="card-img-top"/>'; ?>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $kuah['nama']; ?></h5>
                  <p class="card-text">Stok : <?= $kuah['stok']; ?></p>
                  <p class="card-text"><?= $kuah['deskripsi']; ?></p>
                  <a href="#" class="btn btn-block btn-primary">Beli</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
      <h3 class="h3 ml-3 mt-3">Makanan Kering</h3>
      <div class="row">
        <?php while($kering = mysqli_fetch_assoc($ambildata2)) {?>
        <div class="col-md-5">
          <div class="card-deck">
            <div class="card-columns-fluid">
              <div class="card mt-5" style="width: 18rem;">
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $kering['image'] ).'" class="card-img-top"/>'; ?>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $kering['nama']; ?></h5>
                  <p class="card-text">Stok : <?= $kering['stok']; ?></p>
                  <p class="card-text"><?= $kering['deskripsi']; ?></p>
                  <a href="#" class="btn btn-block btn-primary">Beli</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
