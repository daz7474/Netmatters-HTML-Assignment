<?php

$pdo = null;

try {
    $env = parse_ini_file(".env");
    $host = $env["DB_HOST"];
    $dbname = $env["DB_NAME"];
    $username = $env["DB_USERNAME"];
    $password = $env["DB_PASSWORD"];

    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log("Connection error: " . $e->getMessage());
}

function getNews($pdo)
{
  try {
    $sql = $pdo->query("SELECT * FROM news");
    return $sql->fetchAll();
  } catch (PDOException $e) {
    echo "Database query failed: " . htmlspecialchars($e->getMessage());
    exit;
  }
}

function newsContent($image, $imageAlt, $title, $readTime, $info, $button, $type, $authorImage, $authorName, $date, $counter)
{
  return '
              <div class="col">
                <div class="item">
                  <a class="item-link" href="#"></a>
                  <div class="img-container">
                    <a class="news-tag news-tag-' . htmlspecialchars($counter) . '" href="#">' . htmlspecialchars($type) . '</a>
                    <img src="' . htmlspecialchars($image) . '" alt="' . htmlspecialchars($imageAlt) . '">
                  </div>

                  <div class="content">
                    <h3 class="heading-' . htmlspecialchars($counter) . '">
                      ' . htmlspecialchars($title) . '
                      <span class="read-time">' . htmlspecialchars($readTime) . '</span>
                    </h3>

                    <p>' . htmlspecialchars($info) . '</p>
                    <a class="btn btn-' . htmlspecialchars($button) . '" href="#">Read More</a>

                    <div class="user">
                      <div class="avatar">
                        <img src="' . htmlspecialchars($authorImage) . '" alt="">
                      </div>

                      <div class="details">
                        <strong>Posted by ' . htmlspecialchars($authorName) . '</strong>
                        <br>
                        ' . htmlspecialchars($date) . '
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  ';
}

if ($pdo instanceof PDO) {
  foreach (getNews($pdo) as $news) {
      echo newsContent(
          $news["image"],
          $news["image_alt"],
          $news["title"],
          $news["read_time"],
          $news["info"],
          $news["button"],
          $news['type'],
          $news["author_image"],
          $news["author_name"],
          $news["date"],
          $news["counter"]
      );
  }
} else {
  echo "Failed to get news items.";
}

?>