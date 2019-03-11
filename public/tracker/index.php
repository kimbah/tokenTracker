<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Tracker Menu'; ?>

<?php include(SHARED_PATH . '/tracker_header.php'); ?>

<div id="content">
    <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li><a href=<?php echo url_for('tracker/tokens/index.php'); ?>>Tokens</a></li>
        </ul>
    </div>
</div>

  <?php include(SHARED_PATH . '/tracker_footer.php'); ?>