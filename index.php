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
          <h2>Submit a model</h2>
        </div>
        <form action="" method="post" class="w3-container">
          <div class='w3-row-padding'> <!-- First name -->
            <div class='w3-quarter'>
              <p>First Name</p>
            </div>
            <div class='w3-threequarter'>
              <input class="w3-input" type="text" name="first" placeholder="John" required>
          </div>
          <div class='w3-row-padding'> <!-- Last Name -->
            <div class='w3-quarter '>
              <p>
                Last Name
              </p>
            </div>
            <div class='w3-threequarter'>
              <input class="w3-input" type="text" name="last" placeholder="Doe" required>
            </div>
          </div>
          <div class='w3-row-padding'> <!-- Address -->
            <div class='w3-quarter'>
              <p>
                Address (This will be used if you win any prizes, optional if you dont want any)
              </p>
            </div>
            <div class='w3-threequarter'>
              <input class="w3-input" type="text" name="first" placeholder="123 S Horse St" required>
            </div>
          </div>
          <div class='w3-row-padding'> <!-- Experience Level -->
            <div class='w3-quarter'>
              <p>
                Experience Level
              </p>
            </div>
            <div class='w3-threequarter'>
              <select class="w3-select" name="option" required>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Beginner</option>
                <option value="2">Intermediate</option>
                <option value="3">Expert</option>
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


              <textarea name="desc" rows="2" class="w3-input" placeholder="Whats so cool about your horse?" required></textarea>
            </div>
          </div>
          <div class='w3-row-padding'> <!-- Painting plan -->
            <div class='w3-quarter'>
              <p>
                Painting Plan
              </p>
            </div>
            <div class='w3-threequarter'>
              <textarea name="plan" rows="2" class="w3-input" placeholder="How do you plan on doing this?"></textarea>
            </div>
          </div>

          <p> All submissions have to pay an entery fee. This fee is to be payed to $pay, and is of $ammount. By clicking submit you are awknowledging this and are aware that failure to pay that fee will result in your submission not being counted. You will also not be able to change anything about this once it is submitted so be sure that your data above is correct!</p>
          <input type="submit" class="w3-btn w3-dark-gray" value="Submit" name="submit">
        </form>
    </div>

    <br>

    <!-- Footer -->
    <footer class="w3-container w3-theme-dark w3-padding-16">
      <h3>NaMoPaiMo</h3>
      <p>Ryan Buxton 2017</p>
      <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
        <span class="w3-text w3-theme-light w3-padding">Go To Top</span> 
        <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
        <i class="fa fa-chevron-circle-up"></i></span></a>
      </div>
    </footer>
  </body>
</html>
