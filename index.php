<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Booking Web</title>
  </head>
  <body>
    <!-- Header -->
    <nav>
      <div class="nav__logo">Luan&Kien</div>
      <ul class="nav__links">
        <li class="link"><a href="#">Home</a></li>
        <li class="link"><a href="#">Book</a></li>
        <li class="link"><a href="#">Blog</a></li>
        <li class="link"><a href="#">Contact Us</a></li>
      </ul>
    </nav>
    <header class="section__container header__container">
      <div class="header__image__container">
        <div class="header__content">
          <h1>Enjoy Your Dream Vacation</h1>
          <p>Book Hotels, Flights and stay packages at lowest price.</p>
        </div>
        <div class="booking__container">
          <form>
            <div class="form__group">
              <div class="input__group">
                <input type="text" />
                <label>Location</label>
              </div>
              <p>Where are you going?</p>
            </div>
            <div class="form__group">
              <div class="input__group">
                <input type="text" />
                <label>Check In</label>
              </div>
              <p>Add date</p>
            </div>
            <div class="form__group">
              <div class="input__group">
                <input type="text" />
                <label>Check Out</label>
              </div>
              <p>Add date</p>
            </div>
            <div class="form__group">
              <div class="input__group">
                <input type="text" />
                <label>Guests</label>
              </div>
              <p>Add guests</p>
            </div>
          </form>
          <button class="btn"><i class="ri-search-line"></i></button>
        </div>
      </div>
    </header>
    <section class="section__container popular__container">
      <h2 class="section__header">Popular Hotels</h2>
      <div class="popular__grid">
        <!-- PHP -->
        <?php
        
        $filename = 'Hotel.csv';
       
        if (($handle = fopen($filename, "r")) !== false) {
            // Đọc từng dòng của tệp CSV
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                // $data là một mảng chứa các giá trị từng cột của dòng hiện tại
                $name = $data[0];
                $price = $data[3];
                $address = $data[1];
  
                echo '<div class="popular__card">';
                echo '<img src="assets/hotel-' . rand(1, 12) . '.jpg" alt="popular hotel" />';
                echo '<div class="popular__content">';
                echo '<div class="popular__card__header">';
                echo '<h4>' . $name . '</h4>';
                echo '<h4>$' . $price . '</h4>';
                echo '</div>';
                echo '<p>' . $address . '</p>';
                echo '</div>';
                echo '</div>';
            }
  
            // Đóng tệp CSV
            fclose($handle);
        }
        ?>
      </div>
    </section>
<!-- Footer -->
    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h3>Luan&Kien</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, enim commodi placeat quod ullam exercitationem amet temporibus illum accusamus deserunt quisquam unde itaque praesentium reprehenderit, doloribus repellendus dolore sint ea.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. In mollitia pariatur velit nam, ipsam, autem magni explicabo eos error placeat ipsum dolores illum architecto maxime suscipit amet natus modi expedita.
          </p>
        </div>
        <div class="footer__col">
          <h4>Company</h4>
          <p>About Us</p>
          <p>Our Team</p>
          <p>Blog</p>
          <p>Book</p>
          <p>Contact Us</p>
        </div>
        <div class="footer__col">
          <h4>Legal</h4>
          <p>FAQs</p>
          <p>Terms & Conditions</p>
          <p>Privacy Policy</p>
        </div>
        <div class="footer__col">
          <h4>Resources</h4>
          <p>Social Media</p>
          <p>Help Center</p>
          <p>Partnerships</p>
        </div>
      </div>
      <div class="footer__bar">
      Luan&Kien © 2023 
      </div>
    </footer>
  </body>
</html>
