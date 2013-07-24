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
      <section class="profiles profiles--listing">
        <header class="profiles__heading">
          <a class="profiles__link" href="/funded-treatments">View Fully Funded Patients</a>
        </header>
    
        <div class="profiles__body">

          <?php include_block('profile--ab4b0095f403-rahel'); ?>
          
          <?php include_block('profile--3947121e4eea-reaska'); ?>
                 
          <?php include_block('profile--c2561a4f3817-edith'); ?>
          
          <?php include_block('profile--ab4b0095f403-rahel'); ?>
          
          <?php include_block('profile--3947121e4eea-reaska'); ?>
                 
          <?php include_block('profile--c2561a4f3817-edith'); ?>
          
          <?php include_block('profile--ab4b0095f403-rahel'); ?>
          
          <?php include_block('profile--3947121e4eea-reaska'); ?>
        
        </div>

        <footer class="profiles__footer">
        </footer>

      </section>

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
