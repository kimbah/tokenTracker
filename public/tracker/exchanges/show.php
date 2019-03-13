<?php require_once('../../../private/initialize.php'); ?>

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0
?>

<?php $page_title = 'Show Exchanges'; ?>
<?php include(SHARED_PATH . '/tracker_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/tracker/exchanges/index.php'); ?>">&laquo; Back to List</a>

  <div class="exchange show">

    Page ID: <?php echo h($id); ?>

  </div>

</div>

<?php include(SHARED_PATH . '/tracker_footer.php'); ?>
