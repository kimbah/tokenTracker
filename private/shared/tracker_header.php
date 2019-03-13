<?php 
    if(!isset($page_title)) { $page_title = 'Tracker Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Tokens - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/tracker.css'); ?>" />
  </head>

  <body>
    <header>
      <h1>Token Tracker</h1>
    </header>

    <nav>
      <ul>
        <li><a href="<?php echo url_for('/tracker/index.php'); ?>">Menu</a></li>
      </ul>
    </nav>