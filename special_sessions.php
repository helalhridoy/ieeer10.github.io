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

    <section  class="special_sessions">
      <div class="container">
        <div class="card">
          <div class="card-header">Keynote Session</div>
          <div class="card-content">
            <p>Date: November 25, 2023</p>
            <p>Time: 10:00 AM - 11:30 AM</p>
            <p>Location: Main Hall</p>
            <p>Speaker: John Doe</p>
          </div>
        </div>

        <div class="card">
          <div class="card-header">Workshop</div>
          <div class="card-content">
            <p>Date: November 25, 2023</p>
            <p>Time: 1:00 PM - 3:00 PM</p>
            <p>Location: Workshop Room</p>
            <p>Presenter: Jane Smith</p>
          </div>
        </div>

        <div class="card">
          <div class="card-header">Panel Discussion</div>
          <div class="card-content">
            <p>Date: November 26, 2023</p>
            <p>Time: 9:00 AM - 10:30 AM</p>
            <p>Location: Panel Room</p>
            <p>Panelists: John Doe, Jane Smith, Mark Johnson</p>
          </div>
        </div>

        <!-- Add more cards for other special sessions -->

      </div>


    </section>


    <?php
    include('footer.php');
    ?>

  </div>

  <?php
  include('scripts.php');
  ?>
</body>

</html>