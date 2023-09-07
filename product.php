<?php

$products = [
["img/001.jpg","welcom To Ecoin1"],
["img/001.jpg","welcom To Ecoin2"],
["img/001.jpg","welcom To Ecoin3"],
["img/001.jpg","welcom To Ecoin4"],
["img/001.jpg","welcom To Ecoin5"],
["img/001.jpg","welcom To Ecoin6"],
["img/001.jpg","welcom To Ecoin7"],
["img/001.jpg","welcom To Ecoin8"]
];
?>
<div class="container">
    <div class="row">
    <?php
foreach($products as $value):

?>
<div class="card" style="width: 18rem;">
  <img src="<?= $value[0] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"><?= $value[1] ?></p>
  </div>
</div>

<?php
endforeach;

?>
</div>
</div>




