<!DOCTYPE html>
<html lang="en">

<?php
include('head.php');
?>
<header>
  <?php
  include("header.php");
  ?>
</header>

<body>

  <div class="container-fluid mainbody">

    <section id="coming-soon">
      <div class="bgimg">
        <div class="topleft">
          <p>IEEE CS BDC</p>
        </div>
        <div class="middle">
          <h1>COMING SOON</h1>
          <hr>
          <p id="demo"></p>
        </div>
        <div class="bottomleft">
          <p>Thank You for your patience</p>
        </div>
      </div>
    </section>

   
    <?php
    include('footer.php');
    ?>

  </div>
  <script>
    var countDownDate = new Date("May 15, 2023 15:37:25").getTime();
    var x = setInterval(function () {
      var now = new Date().getTime();
      var distance = countDownDate - now;

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>
  <?php
  include('scripts.php');
  ?>
 
</body>

</html>