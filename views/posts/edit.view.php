<h1>helll</h1>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Create a Post</h1>

<form method="POST">
  <label>Title:
    <input name="title" value="<?= $post["title"] ?? "" ?>"/>
    <?php if (isset($errors["title"])) {?>
    <p class="invalid-date"><?= $errors["title"] ?></p>
    <?php } ?>
  </label>
  
  <label>Category ID:
    <select name="category_id">
    <option value="1"<?=$post["category_id"] == 1 ? "selected" : "" ?>>sport</options>
    <option value="2"<?=$post["category_id"] == 2 ? "selected" : "" ?>>music</options>
    <option value="3"<?=$post["category_id"] == 3 ? "selected" : "" ?>>food</options>
    </select>
    <?php if (isset($errors["title"])) {?>
    <p class="invalid-date"><?= $errors["title"] ?></p>
    <?php } ?>
  </label>
  <button>Save</button>
</form>
