<?php include 'bin/functions.php' ?>

<?php include 'templates/head.php' ?>

  <header class="header">
    <div class="header__inner"> 

      <?php include_block('logo'); ?>
      
      <?php include_block('nav-toggle'); ?>
      
      <?php include_block('nav--primary'); ?>
      
    </div>
  </header>

  <?php include_block('hero--teethy'); ?>

  <div class="body">
    <div class="body__inner"> 
      <section class="profiles">
        <header class="profiles__heading">
          New Patients
        </header>
    
        <div class="profiles__body">

          <?php include_block('profile--ab4b0095f403-rahel'); ?>
          
          <?php include_block('profile--3947121e4eea-reaska'); ?>
                 
          <?php include_block('profile--c2561a4f3817-edith'); ?>
        
        </div>

        <footer class="profiles__footer">
          <a class="profiles__link"  href="/fund-treatments">
            View All Patients
          </a>
        </footer>

      </section>

      <?php include_block('nav--info'); ?>
      
      <?php include_block('press'); ?>

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
