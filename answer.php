<!DOCTYPE html>
<!-- ICD2O-Unit 6-03-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Random Coffee Image, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Joyce Nkengbeza" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Random Coffee Image, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Random Coffee Image, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">

      <?php
      // API URL for random coffee image
      $apiUrl = "https://coffee.alexflipnote.dev/random.json";

      // Fetch coffee image data
      $resultJSON = file_get_contents($apiUrl);

      if ($resultJSON === FALSE) {
        // Error if fetch fails
        echo "<div class='page-content'>Sorry, an error has occurred. Please try again later.</div>";
        return;
      }

      // Decode JSON data
      $jsonData = json_decode($resultJSON, true);

      // Get coffee image URL
      $coffeeImageUrl = $jsonData['file'];

      // Output image
      echo "<div class='page-content'>";
      echo "<p>Enjoy your randomly brewed coffee ☕</p>";
      echo "<img src='" . $coffeeImageUrl . "' alt='Random Coffee Image'>";
      echo "</div>";
      ?>

      <br />
      <div class="page-content-answer">
        <a href="./index.php">Return ...</a>
      </div>
    </main>
  </div>
</body>

</html>