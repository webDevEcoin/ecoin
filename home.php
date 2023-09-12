<?php
include "inc/header.php";
$data = ["img/001.jpg","img/002.jpg","img/003.jpg"];
?>

<!-- <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <?php
    $i  = 0;
      foreach($data as $img):
        $active = ($i ==0)?"active":"";
        $i = 4;
    ?>
    <div class="carousel-item <?php echo $active ?>">
      <img src="<?php  echo $img  ?>" class="d-block w-100" alt="...">
    </div>
    <?php
endforeach;
?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
<?php


echo "<pre>";
print_r($_GET);
echo "</pre>";

//echo @$_GET['page'];
$p  = (isset($_GET['page']))?$_GET['page']:'home';
//echo $p;
//if($p=='product') include 'product.php';
include_once $p.'.php';
/* switch($p):
     case "product":
        include 'product.php';
      break; 
      case "about":
        include 'about.php';
      break; 
      case "contact":
        include 'contact.php';
      break; 
      default:
          break;

endswitch;   */  


include "inc/footer.php";
?>