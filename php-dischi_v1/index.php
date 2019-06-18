<?php
  include "albumDatabase.php";
?>

<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/main.css">
    <title>php-dischi</title>
  </head>
  <body>
    <div class="container">
      <div class="albums-container">
        <?php
        foreach ($albumArr as $idAlbum => $album) {
          ?>
          <div class="album">
            <div class="cover">
              <img src="<?php echo $album["img"];?>" alt="<?php echo $album["title"];?>">
            </div>
            <div class="info">
              <h3><?php echo $album["title"];?></h3>
              <p>
                <span><?php echo $album["band"];?><br></span>
                <?php echo $album["release"];?>
              </p>
            </div>
          </div>
        <?php }
        ?>
      </div>
    </div>

    <script src="public/js/script.js" charset="utf-8"></script>
  </body>
</html>
