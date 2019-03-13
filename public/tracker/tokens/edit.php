<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
    redirect_to(url_for('/tracker/tokens/index.php'));
}

$id = $_GET['id'];

if(is_post_request()) {
    
    // Handle form values sent by new.php

    $token = [];
    $token['id'] = $id;
    $token['token'] = $_POST['token'] ?? '';
    $token['ticker'] = $_POST['ticker'] ?? '';
    $token['quantity'] = $_POST['quantity'] ?? '';
    $token['position'] = $_POST['position'] ?? '';
    $token['visible'] = $_POST['visible'] ?? '';

    $result = update_token($token);
    redirect_to(url_for('/tracker/tokens/show.php?id=' . $id));
    
} else {
    
    $token = find_token_by_id($id);
}

?>

<?php $page_title = 'Edit Token'; ?>
<?php include(SHARED_PATH . '/tracker_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/tracker/tokens/index.php'); ?>">&laquo; Back to List</a>

  <div class="token edit">
    <h1>Edit Token</h1>

    <form action="<?php echo url_for('/tracker/tokens/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt>Token Name</dt>
        <dd><input type="text" name="token" value="<?php echo h($token['token']); ?>" /></dd>
      </dl>
      <dl>
        <dt>Ticker</dt>
        <dd><input type="text" name="ticker" value="<?php echo h($token['ticker']); ?>" /></dd>
      </dl>
      </dl>
        <dt>Quantity</dt>
        <dd><input type="number" name="quantity" value="<?php echo h($token['quantity']); ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1"<?php if(($token['position']) == "1") { echo " selected"; } ?>>1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1"<?php if(($token['visible']) == "1") { echo " checked"; } ?> />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Token" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/tracker_footer.php'); ?>
