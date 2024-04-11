<?php

function getNews($conn)
{
  try {
    $sql = $conn->query("SELECT * FROM news");
    return $sql->fetchAll();
  } catch (PDOException $e) {
    echo "Database query failed: " . $e->getMessage();
    exit;
  }
}

function newsContent($image, $imageAlt, $title, $readTime, $info, $type, $authorImage, $authorName, $date, $counter)
{
  return '
              <div class="col">
                <div class="item">
                  <a class="item-link" href="#"></a>
                  <div class="img-container">
                    <a class="news-tag news-tag-' . $counter . '" href="#">' . $type . '</a>
                    <img src="' . $image . '" alt="">
                  </div>

                  <div class="content">
                    <h3 class="heading-' . $counter . '">
                      ' . $title . '
                      <span class="read-time">' . $readTime . '</span>
                    </h3>

                    <p>
                      ' . $info . '
                    </p>

                    <a class="btn btn-bespoke" href="#">Read More</a>

                    <div class="user">
                      <div class="avatar">
                        <img src="' . $authorImage . '" alt="">
                      </div>

                      <div class="details">
                        <strong>Posted by ' . $authorName . '</strong>
                        <br>
                        ' . $date . '
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  ';
}

include "db-con.php";

foreach(getNews($conn) as $news) {
  echo newsContent(
    $news["image"],
    $news["image_alt"], 
    $news["title"], 
    $news["read_time"], 
    $news["info"],
    $news['type'], 
    $news["author_image"], 
    $news["author_name"], 
    $news["date"], 
    $news["counter"]);
}

?>