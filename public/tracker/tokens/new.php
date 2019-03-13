<?php

require_once('../../../private/initialize.php'); 

?>

<?php $page_title = 'Create Token'; ?>
<?php include(SHARED_PATH . '/tracker_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/tracker/tokens/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject new">
    <h1>Create Token</h1>

    <form action="<?php echo url_for('tracker/tokens/create.php'); ?>" method="post">
      <dl>
        <dt>Token Name</dt>
        <dd><input type="text" name="token" value="" /></dd>
      </dl>
      <dl>
        <dt>Ticker</dt>
        <dd><input type="text" name="ticker" value="" /></dd>
      </dl>
      <dl>
        <dt>Quantity</dt>
        <dd><input type="number" name="quantity" value="" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Token" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/tracker_footer.php'); ?>