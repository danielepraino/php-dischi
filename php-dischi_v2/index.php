<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="node_modules/@fortawesome/fontawesome-free/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/main.css">
    <title>php-dischi</title>
  </head>
  <body>
    <div class="container">
      <nav>
        <div class="nav-container">
          <div class="logo">
            <h2>Album viewer <i class="fas fa-compact-disc"></i><i class="fas fa-music"></i></h2>
          </div>
          <div class="nav-select">
            <div class="filter-generic">
              <span>Ordina album per:</span>
              <select class="generic-select">
                <option value="0" selected disabled>Seleziona</option>
                <option value="release">data di uscita (1->9)</option>
                <option value="alphabetic">ordine alfabetico (A->Z)</option>
              </select>
            </div>
            <div class="filter-band">
              <span>Ordina album per artista:</span>
              <select class="band-select">
                <option value="0" selected disabled>Seleziona</option>
              </select>
            </div>
          </div>
        </div>
      </nav>
      <div class="albums-container">
      </div>
    </div>

    <script src="public/js/script.js" charset="utf-8"></script>
  </body>
</html>
