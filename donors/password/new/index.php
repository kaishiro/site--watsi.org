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
        <h3 class="placard__heading">Reset My Password</h3>
        <div class="placard__outer">
          <div class="placard__inner">
            <form class="form form--reset">
              <div class="form__item">
                <label class="form__label" for="email">Email</label>
                <input class="form__input form__input--text" id="email" type="text" placeholder="Email Address"/>
              </div>
              <div class="form__item">
                <input class="form__submit" type="submit" value="Reset My Password" />
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
