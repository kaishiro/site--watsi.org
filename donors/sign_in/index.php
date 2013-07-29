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

      <div class="placard placard--login">
        <h3 class="placard__heading">Log In</h3>
        <div class="placard__outer">
          <div class="placard__inner">
            <form class="form form--login">
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
                  Don't have an account? <a class="form__link" href="/registration">Sign Up</a>
                </div>
              </div>
              <div class="form__item">
                <input class="form__submit" type="submit" value="Log In" />
              </div>
              <div class="form__item">
                <div class="form__copy">
                  <a class="form__link" href="/donors/password/new">Forgot Password?</a>
                </div>
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
