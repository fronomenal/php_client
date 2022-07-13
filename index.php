<?php
    include_once("./components/head.php");
    include_once("./components/index-header.php");
?>

<div class="container-sm">
    <form class="" action="/pages/list.php" method="POST">
      <div class="mb-3">
        <label for="usrNum" class="form-label">Number of Users</label>
        <input type="number" max="180" min="1" name="count" class="form-control" id="usrNum" placeholder="90" required>
        <div class="form-text">Enter the number of users you want to request.</div>
      </div>
      <div class="form-group">
          <div class="mb-3 col-auto">
            <label for="color1" class="form-label">Accent Color One</label>
            <input type="color" id="color1" name="c1" value="#e829ab">
          </div>
          <div class="mb-3 col-auto">
            <label for="color2" class="form-label">Accent Color Two</label>
            <input type="color" id="color2" name="c2" value="#0d6e76">
          </div>
      </div>
      <button type="submit" class="btn btn-primary" name="sent">Submit</button>
    </form>
</div>

<?php
    include_once("./components/footer.php")
?>
