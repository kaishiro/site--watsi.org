<?php $docroot = $_SERVER['DOCUMENT_ROOT']; ?>

<?php include "$docroot/bin/functions.php" ?>

<?php include "$docroot/templates/head.php" ?>

  <header class="header">
    <div class="header__inner"> 

      <?php include_block('logo'); ?>
      
      <?php include_block('nav-toggle'); ?>
      
      <?php include_block('nav--primary'); ?>
      
    </div>
  </header>
  
  <div class="body">
    <div class="body__inner"> 

      <div class="placard placard--reset">
        <h3 class="placard__heading">Sign Up</h3>

        <div class="placard__outer">
          <div class="placard__inner">
            <form class="form form--register">
              <div class="form__item">
                <label class="form__label" for="name">Name</label>
                <input class="form__input form__input--text" id="name" type="text" placeholder="First and Last"/>
              </div>
              <div class="form__item">
                <label class="form__label" for="email">Email</label>
                <input class="form__input form__input--text" id="email" type="text" placeholder="Email Address"/>
              </div>
              <div class="form__item">
                <label class="form__label" for="password">Password</label>
                <input class="form__input form__input--text" id="password" type="password" placeholder="Your Password"/>
              </div>
              <div class="form__item">
                <div class="form__copy">
                  We request your credit card info to enable easy checkout.<br />
                  You won't be charged until you make a donation.
                </div>
              </div>
              <div class="form__item form__item--card">
                <label class="form__label icon-lock-circled" for="card">Card Number</label>
                <input class="form__input form__input--text" id="card" type="text" placeholder="4242 4242 4242 4242"/>
              </div>
              <div class="form__item form__item--expiration">
                <label class="form__label" for="expiration">Expiration</label>
                <input class="form__input form__input--text" id="expiration" type="text" placeholder="MM/YY"/>
              </div>
              <div class="form__item form__item--cvv">
                <label class="form__label icon-help-circled" for="cvv">CVV</label>
                <input class="form__input form__input--text" id="cvv" type="text" placeholder="123"/>
              </div>
              <div class="form__item">
                <div class="form__copy form__copy--right">
                  Already have an account? <a class="form__link" href="/donors/sign_in">Log in</a>
                </div>
              </div>
              <div class="form__item">
                <input class="form__submit" type="submit" value="Sign Up" />
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>

  <footer class="footer">
    <div class="footer__inner"> 
      
      <?php include_block('nav--about'); ?>

      <?php include_block('mailing-list'); ?>
      
      <?php include_block('copyright'); ?>
      
      <?php include_block('links'); ?>

    </div>
  </footer>

  <?php include_block('scripts'); ?>
  
</body>

</html>
