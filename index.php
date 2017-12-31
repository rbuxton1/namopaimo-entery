<html>
  <title>NaMoPaiMo</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <body>
    <!-- Header -->
    <header class="w3-container w3-theme w3-padding" id="myHeader">
      <div class="w3-center">
        <h4>National Model Painting Month</h4>
        <h1 class="w3-xxxlarge w3-animate-bottom">NaMoPaiMo</h1>
      </div>
    </header>

    <br>

    <!-- Body -->
    <div class="w3-center">
      <div class="w3-card-4">
        <div class="w3-container w3-green">
          <h2>2018 Registration</h2>
        </div>
        <form action="" method="post" class="w3-container">
          <div class='w3-row-padding'> <!-- First name -->
            <div class='w3-quarter'>
              <p>First Name</p>
            </div>
            <div class='w3-threequarter'>
              <input class="w3-input" type="text" name="first" placeholder="Darcy" maxlength="20" required>
          </div>
          <div class='w3-row-padding'> <!-- Last Name -->
            <div class='w3-quarter '>
              <p>
                Last Name
              </p>
            </div>
            <div class='w3-threequarter'>
              <input class="w3-input" type="text" name="last" placeholder="Dog" maxlength="25" required>
            </div>
          </div>
          <div class='w3-row-padding'> <!-- Email -->
            <div class='w3-quarter '>
              <p>
                Email
              </p>
            </div>
            <div class='w3-threequarter'>
              <input class="w3-input" type="text" name="email" placeholder="darcy@dog.com" maxlength="100" required>
            </div>
          </div>
          <div class='w3-row-padding'> <!-- Address Line 1-->
            <div class='w3-quarter'>
              <p>
                Address
              </p>
            </div>
            <div class='w3-threequarter'>
              <input class="w3-input" type="text" name="address" placeholder="123 S Horse St" maxlength="300">
            </div>
          </div>
          <div class='w3-row-padding'> <!-- Address Line 2 (Country)-->
            <div class='w3-quarter'>
              <p>
                Country
              </p>
            </div>
            <div class='w3-threequarter'>
              <input class="w3-input" type="text" name="country" placeholder="USA" maxlength="50" required>
            </div>
          </div>
          <div class='w3-row-padding'> <!-- Experience Level -->
            <div class='w3-quarter'>
              <p>
                Experience Level
              </p>
            </div>
            <div class='w3-threequarter'>
              <select class="w3-select" name="level" required>
                <option value="" disabled selected>Choose your option</option>
                <option value="First Time Painter">First Time Painter</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced Amateur">Advanced Amateur</option>
                <option value="Professional">Professional</option>
              </select>
            </div>
          </div>
          <div class='w3-row-padding'> <!-- Model Description -->
            <div class='w3-quarter'>
              <p>
                Model Description
              </p>
            </div>
            <div class='w3-threequarter'>
              <textarea name="desc" rows="2" class="w3-input" placeholder="Make / Mold / Scale" maxlength="250" required></textarea>
            </div>
          </div>
          <div class='w3-row-padding'> <!-- Painting plan / medium-->
            <div class='w3-quarter'>
              <p>
                Mediums Used?
              </p>
            </div>
            <div class='w3-threequarter'>
              <textarea name="medium" rows="3" class="w3-input" placeholder="Medium" maxlength="250" required></textarea>
            </div>
          </div>
          <div class='w3-row-padding'> <!-- Painting plan / colors -->
            <div class='w3-quarter'>
              <p>
                Colors Planed to be Used?
              </p>
            </div>
            <div class='w3-threequarter'>
              <textarea name="color" rows="3" class="w3-input" placeholder="Color" maxlength="50" required></textarea>
            </div>
          </div>
          <div class='w3-row-padding'> <!-- Goals / Challenges -->
            <div class='w3-quarter'>
              <p>
                Personal Goals or challenges
              </p>
            </div>
            <div class='w3-threequarter'>
              <textarea name="data" rows="3" class="w3-input" placeholder="(Optional)" maxlength="500"></textarea>
            </div>
          </div>
          <br>
          <div class='w3-row-padding'> <!-- entry fee payed?-->
            <div class='w3-quarter'>
              <p>
                Entry fee paid? <i>($2 entry fee, optional but very much appreciated. PayPal: NaMoPaiMo@gmail.com)</i>
              </p>
            </div>
            <div class='w3-threequarter w3-container'>
              <select class="w3-select" name="fee" required>
                <option value="" disabled selected>Choose your option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>
          </div>
          <input type="submit" class="w3-btn w3-dark-gray" value="Submit" name="submit">
        </form>
        <?php
          include("../../config.php");

          if(isset($_POST["submit"])) {
            $first = mysqli_real_escape_string($db, $_POST['first']);
            $last = mysqli_real_escape_string($db, $_POST['last']);
            $email = mysqli_real_escape_string($db, $_POST['email']);
            $address = mysqli_real_escape_string($db, $_POST['address']);
            $country = mysqli_real_escape_string($db, $_POST['country']);
            $level = mysqli_real_escape_string($db, $_POST['level']);
            $desc = mysqli_real_escape_string($db, $_POST['desc']);
            $medium = mysqli_real_escape_string($db, $_POST['medium']);
            $color = mysqli_real_escape_string($db, $_POST['color']);
            $data = mysqli_real_escape_string($db, $_POST['data']);
            $fee = mysqli_real_escape_string($db, $_POST['fee']);

            $stmt = "INSERT INTO `user`(`id`, `first`, `last`, `email`, `address`, `country`, `level`, `desc`, `mediums`, `color`, `extra`, `paid`) VALUES (NULL, '$first', '$last', '$email', '$address', '$country', '$level', '$desc', '$medium', '$color', '$data', '$fee')";
            $result = mysqli_query($db,$stmt);

            unset($_POST['first']);
            unset($_POST['last']);
            unset($_POST['email']);
            unset($_POST['address']);
            unset($_POST['country']);
            unset($_POST['level']);
            unset($_POST['desc']);
            unset($_POST['medium']);
            unset($_POST['color']);
            unset($_POST['data']);
            unset($_POST['fee']);
            unset($_POST['submit']);
            unset($_POST);
            $_POST = array();

            header("Location: complete.php");
          }
        ?>
    </div>

    <br>

    <!-- Footer -->
    <footer class="w3-container w3-theme-dark w3-padding-16">
      <h3>NaMoPaiMo</h3>
      <p>
        Ryan Buxton 2017<br>
        <i><a href="http://www.github.com/rbuxton1/namopaimo-entry">Heres how it works</a></i>
      </p>
      <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
        <span class="w3-text w3-theme-light w3-padding">Go To Top</span> 
        <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
        <i class="fa fa-chevron-circle-up"></i></span></a>
      </div>
    </footer>
  </body>
</html>
