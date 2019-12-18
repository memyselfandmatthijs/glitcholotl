<div class="header">
  <h1>Glitcholotl</h1>

  <div class="right">
  <?php
    if (isset( $_SESSION['user_id'])) {
      echo "<a href='/logout'>logout</a>";
    } else {
      echo "<a href='/login'>login</a>";
    }
  ?>
  </div>
</div>