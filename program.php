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

    <section id="program_info">
      <!-- <div class="container">
        <h1>Conference Schedule</h1>

        <div class="card technical">
          <div class="card-header">Technical Session-D1A1</div>
          <div class="card-time">9:00 AM - 10:00 AM</div>
          <div class="card-content">Number of Papers for Presentations: 5</div>
        </div>

        <div class="card technical">
          <div class="card-header">Technical Session-D1B1</div>
          <div class="card-time">9:00 AM - 10:00 AM</div>
          <div class="card-content">Number of Papers for Presentations: 5</div>
        </div>

        <div class="card technical">
          <div class="card-header">Technical Session-D1C1</div>
          <div class="card-time">9:00 AM - 10:00 AM</div>
          <div class="card-content">Number of Papers for Presentations: 5</div>
        </div>

        <div class="card technical">
          <div class="card-header">Technical Session-D1D1</div>
          <div class="card-time">9:00 AM - 10:00 AM</div>
          <div class="card-content">Number of Papers for Presentations: 5</div>
        </div>

        <div class="card keynote">
          <div class="card-header">Keynote Session-1</div>
          <div class="card-time">10:00 AM - 10:45 AM</div>
        </div>

        <div class="card keynote">
          <div class="card-header">Keynote Session-2</div>
          <div class="card-time">10:45 AM - 11:30 AM</div>
        </div>

        <div class="card">
          <div class="card-header">Opening Ceremony</div>
          <div class="card-time">11:30 AM - 12:00 PM</div>
        </div>

        <div class="card keynote">
          <div class="card-header">Keynote Session-3</div>
          <div class="card-time">12:00 PM - 1:00 PM</div>
        </div>

        <div class="card poster">
          <div class="card-header">Poster Session 1</div>
          <div class="card-time">1:00 PM - 2:30 PM</div>
          <div class="card-content">Number of Posters: 25</div>
        </div>

        <div class="card technical">
          <div class="card-header">Technical Session-D1A2</div>
          <div class="card-time">2:30 PM - 4:00 PM</div>
          <div class="card-content">Number of Papers for Presentations: 8</div>
        </div>

        <div class="card technical">
          <div class="card-header">Technical Session-D1B2</div>
          <div class="card-time">2:30 PM - 4:00 PM</div>
          <div class="card-content">Number of Papers for Presentations: 8</div>
        </div>

        <div class="card technical">
          <div class="card-header">Technical Session-D1C2</div>
          <div class="card-time">2:30 PM - 4:00 PM</div>
          <div class="card-content">Number of Papers for Presentations: 8</div>
        </div>

        <div class="card technical">
          <div class="card-header">Technical Session-D1D2</div>
          <div class="card-time">2:30 PM - 4:00 PM</div>
          <div class="card-content">Number of Papers for Presentations: 8</div>
        </div>

        <div class="card invited-talk">
          <div class="card-header">Invited Talk-1</div>
          <div class="card-time">4:00 PM - 4:30 PM</div>
        </div>

        <div class="card invited-talk">
          <div class="card-header">Invited Talk-2</div>
          <div class="card-time">4:30 PM - 5:00 PM</div>
        </div>

        <div class="card">
          <div class="card-header">November 26, 2023</div>
        </div>

        <div class="card invited-talk">
          <div class="card-header">Invited Talk-3 and Technical Session-D2A1</div>
          <div class="card-time">9:00 AM - 10:30 AM</div>
          <div class="card-content">Number of Papers for Presentations: 5</div>
        </div>

        <div class="card technical">
          <div class="card-header">Technical Session-D2B1</div>
          <div class="card-time">9:00 AM - 10:30 AM</div>
          <div class="card-content">Number of Papers for Presentations: 5</div>
        </div>

        <div class="card invited-talk">
          <div class="card-header">Invited Talk-4 and Technical Session-D2C1</div>
          <div class="card-time">9:00 AM - 10:30 AM</div>
          <div class="card-content">Number of Papers for Presentations: 5</div>
        </div>
        <div class="card invited-talk">
          <div class="card-header">Invited Talk-5 and Technical Session-D2D1</div>
          <div class="card-time">9:00 AM - 10:30 AM</div>
          <div class="card-content">Number of Papers for Presentations: 5</div>
        </div>

        <div class="card keynote">
          <div class="card-header">Keynote Session-4</div>
          <div class="card-time">10:30 AM - 11:15 AM</div>
        </div>

        <div class="card keynote">
          <div class="card-header">Keynote Session-5</div>
          <div class="card-time">11:15 AM - 12:00 PM</div>
        </div>

        <div class="card technical">
          <div class="card-header">Technical Session-D2A2</div>
          <div class="card-time">12:00 PM - 1:00 PM</div>
          <div class="card-content">Number of Papers for Presentations: 5</div>
        </div>

        <div class="card technical">
          <div class="card-header">Technical Session-D2B2</div>
          <div class="card-time">12:00 PM - 1:00 PM</div>
          <div class="card-content">Number of Papers for Presentations: 5</div>
        </div>

        <div class="card technical">
          <div class="card-header">Technical Session-D2C2</div>
          <div class="card-time">12:00 PM - 1:00 PM</div>
          <div class="card-content">Number of Papers for Presentations: 5</div>
        </div>

        <div class="card technical">
          <div class="card-header">Technical Session-D2D2</div>
          <div class="card-time">12:00 PM - 1:00 PM</div>
          <div class="card-content">Number of Papers for Presentations: 5</div>
        </div>

        <div class="card poster">
          <div class="card-header">Poster Session 2</div>
          <div class="card-time">1:00 PM - 2:30 PM</div>
          <div class="card-content">Number of Posters: 25</div>
        </div>

        <div class="card technical">
          <div class="card-header">Technical Session-D2A3</div>
          <div class="card-time">2:30 PM - 4:00 PM</div>
          <div class="card-content">Number of Papers for Presentations: 8</div>
        </div>

        <div class="card technical">
          <div class="card-header">Technical Session-D2B3</div>
          <div class="card-time">2:30 PM - 4:00 PM</div>
          <div class="card-content">Number of Papers for Presentations: 8</div>
        </div>

        <div class="card technical">
          <div class="card-header">Technical Session-D2C3</div>
          <div class="card-time">2:30 PM - 4:00 PM</div>
          <div class="card-content">
            Number of Papers for Presentations: 8</div>
        </div>
        <div class="card technical">
          <div class="card-header">Technical Session-D2D3</div>
          <div class="card-time">2:30 PM - 4:00 PM</div>
          <div class="card-content">Number of Papers for Presentations: 8</div>
        </div>

        <div class="card keynote">
          <div class="card-header">Keynote Session-6</div>
          <div class="card-time">4:00 PM - 4:45 PM</div>
        </div>

        <div class="card closing">
          <div class="card-header">Closing and Award Ceremony</div>
          <div class="card-time">6:00 PM - 7:00 PM</div>
        </div>

        <div class="card galadinner">
          <div class="card-header">Gala Dinner</div>
          <div class="card-time">7:00 PM - 9:00 PM</div>
        </div>
      </div> -->

      <div class="container">
        <h1>Conference Schedule</h1>
        <div class="card">
            <div class="card-header">November 26, 2023</div>
          </div>
        <div class="card-container">

         
          <div class="card technical">
            <div class="card-header">Technical Session-D1A1</div>
            <div class="card-time">November 25, 2023</div>
            <div class="card-content">Time: 9:00 AM - 10:00 AM</div>
            <div class="card-content">Number of Papers for Presentations: 5</div>
          </div>

          <!-- Repeat the above card structure for the next two cards -->

          <div class="card keynote">
            <div class="card-header">Keynote Session-1</div>
            <div class="card-time">November 25, 2023</div>
            <div class="card-content">Time: 10:00 AM - 10:45 AM</div>
          </div>

          <div class="card opening">
            <div class="card-header">Opening Ceremony</div>
            <div class="card-time">November 25, 2023</div>
            <div class="card-content">Time: 11:30 AM - 12:00 PM</div>
          </div>

          <!-- Repeat the above card structure for the remaining sessions -->

        </div>

        <div class="card-container">
          <div class="card poster">
            <div class="card-header">Poster Session 1</div>
            <div class="card-time">November 25, 2023</div>
            <div class="card-content">Time: 1:00 PM - 2:30 PM</div>
            <div class="card-content">Number of Posters: 25</div>
          </div>

          <!-- Repeat the above card structure for the next two cards -->

        </div>

        <div class="card-container">
          <div class="card technical">
            <div class="card-header">Technical Session-D1A2</div>
            <div class="card-time">November 25, 2023</div>
            <div class="card-content">Time: 2:30 PM - 4:00 PM</div>
            <div class="card-content">Number of Papers for Presentations: 8</div>
          </div>

          <!-- Repeat the above card structure for the next two cards -->

          <div class="card invited-talk">
            <div class="card-header">Invited Talk-1</div>
            <div class="card-time">November 25, 2023</div>
            <div class="card-content">Time: 4:00 PM - 4:30 PM</div>
          </div>

          <div class="card invited-talk">
            <div class="card-header">Invited Talk-2</div>
            <div class="card-time">November 25, 2023</div>
            <div class="card-content">Time: 4:30 PM - 5:00 PM</div>
          </div>
        </div>

        <!-- Repeat the above card-container structure for the remaining sessions -->

        <div class="card">
          <div class="card-header">November 26, 2023</div>
        </div>


        <div class="card-container">
          <div class="card invited-talk">
            <div class="card-header">Invited Talk-3 and Technical Session-D2A1</div>
            <div class="card-time">November 26, 2023</div>
            <div class="card-content">Time: 9:00 AM - 10:30 AM</div>
            <div class="card-content">Number of Papers for Presentations: 5</div>
          </div>

          <!-- Repeat the above card structure for the next two cards -->

          <div class="card keynote">
            <div class="card-header">Keynote Session-4</div>
            <div class="card-time">November 26, 2023</div>
            <div class="card-content">Time: 10:30 AM - 11:15 AM</div>
          </div>

          <div class="card technical">
            <div class="card-header">Technical Session-D2A2</div>
            <div class="card-time">November 26, 2023</div>
            <div class="card-content">Time: 12:00 PM - 1:00 PM</div>
            <div class="card-content">Number of Papers for Presentations: 5</div>
          </div>
        </div>

        <div class="card-container">
          <div class="card poster">
            <div class="card-header">Poster Session 2</div>
            <div class="card-time">November 26, 2023</div>
            <div class="card-content">Time: 1:00 PM - 2:30 PM</div>
            <div class="card-content">Number of Posters: 25</div>
          </div>

          <!-- Repeat the above card structure for the next two cards -->

        </div>

        <div class="card-container">
          <div class="card technical">
            <div class="card-header">Technical Session-D2A3</div>
            <div class="card-time">November 26, 2023</div>
            <div class="card-content">Time: 2:30 PM - 4:00 PM</div>
            <div class="card-content">Number of Papers for Presentations: 8</div>
          </div> <!-- Repeat the above card structure for the next two cards -->

          <div class="card keynote">
            <div class="card-header">Keynote Session-6</div>
            <div class="card-time">November 26, 2023</div>
            <div class="card-content">Time: 4:00 PM - 4:45 PM</div>
          </div>

          <div class="card closing">
            <div class="card-header">Closing and Award Ceremony</div>
            <div class="card-time">November 26, 2023</div>
            <div class="card-content">Time: 6:00 PM - 7:00 PM</div>
          </div>
        </div>

        <div class="card-container">
          <div class="card galadinner">
            <div class="card-header">Gala Dinner</div>
            <div class="card-time">November 26, 2023</div>
            <div class="card-content">Time: 7:00 PM - 9:00 PM</div>
          </div>
        </div>
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