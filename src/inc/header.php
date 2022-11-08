<?php
require_once __DIR__ . '/../../src/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fatandcap.000webhostapp.com/DIYerSeeker/public/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="/../DIYerSeeker/css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/../DIYerSeeker/css/bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="/../DIYerSeeker/js/jquery.min.js"></script>
  <script type="text/javascript" src="/../DIYerSeeker/js/fatc.js"></script>
  <title><?= $title ?? 'Home' ?></title>
</head>
<body>
  <header class="top">

  </header>
<nav>
<div class="navbar">
      <i class="fa fa-bars" aria-hidden="true"></i>
      <div class="logo"><a href="fatcap"><img src="/../DIYerSeeker/image/main-logo.PNG"></a></div>
      <div class="nav-links">
          <div class="sidebar-logo">
            <span class="logo-name"><a href="fatcap"><img src="/../DIYerSeeker/image/main-logo.PNG"></a></span>
            <i class="fa fa-close"  aria-hidden="true"></i>
          </div>
          <ul class="links">
          <li><a href="issue-content-search">Home</a></li>
          <li><a href="#">Car Issue Category</a>
            <i class='fa fa-caret-down ts-arrow arrow'></i>
              <ul class="ts-sub-menu sub-menu">
                <?php
                $sql = 'SELECT *
                FROM merge_table';
                  $statement = db()->prepare($sql);
                  $statement->execute();
                  $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                    foreach($result as $issue){ 
                            $content= $issue['main_issue'];
                          $linkContent = APP_URL . "/fatcap-content?content=$content"; 
                         echo  '<li><a href="'. $linkContent .'">' .$content. '</a></li>';
                         } ?>
                </ul>
            </li>            
            <li><a href="#">About Us</a></li> 
            <li><a href="#">Contact Us</a></li>         
          </ul>
      </div>
    </div>
  </nav>
<?php flash() ?>

