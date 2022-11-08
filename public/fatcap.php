<?php
require_once __DIR__ . '/../src/bootstrap.php';
require_once __DIR__ . '/../src/reauth.php';
?>
<?php view('header', ['title' => 'FatCap Troubleshoot Car Issue']) ?>
<section class="main-container">
      <div class="car-holder">
        <div class="car-container">
          <img src="/../DIYerSeeker/public/image/car.png" class="car">
          <img src="/../DIYerSeeker/public/image/wheel1.png" class="wheel1">
          <img src="/../DIYerSeeker/public/image/wheel2.png" class="wheel2"> 
      </div> 
      <div class="background-stuff">
        <div class="bg"></div>
        <div class="bg bg-2"></div>
        <div class="bg bg-3"></div>
        <div class="ground"> </div>
      </div>
      </div>
    </div> 
     <div class="gear-container">
  <i id="gear1" class="fa fa-cog spin" aria-hidden="true"></i>
  <i id="gear2" class="fa fa-cog spin-back" aria-hidden="true"></i>
  <i id="gear3" class="fa fa-cog spin" aria-hidden="true"></i>
</div>
</section>
<?php view('footer') ?>






