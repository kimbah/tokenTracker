<?php

require_once('../../../private/initialize.php'); 

?>

<?php
    $token_set = find_all_tokens();
    $token_count = mysqli_num_rows($token_set) + 1;
    mysqli_free_result($token_set);

?>


<?php $page_title = 'Create Token'; ?>
<?php include(SHARED_PATH . '/tracker_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/tracker/tokens/index.php'); ?>">&laquo; Back to List</a>

  <div class="token new">
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
            <?php
              for($i=1; $i <= $token_count; $i++) {
                echo "<option value=\"{$i}\"";
                if($page["position"] == $i) {
                  echo " selected";
                }
                echo ">{$i}</option>";
              }
            ?>
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