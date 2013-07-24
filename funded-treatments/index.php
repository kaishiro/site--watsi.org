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
          <a class="profiles__link" href="/fund-treatments">View Fundraising Patients</a>
        </header>
    
        <div class="profiles__body">

          <?php include_block('profile--f7baac6d052e-sopheak'); ?>
          
          <?php include_block('profile--e25bbb75f5c7-srors'); ?>
                 
          <?php include_block('profile--1f1d661563df-khumbha'); ?>
          
          <?php include_block('profile--f7baac6d052e-sopheak'); ?>
          
          <?php include_block('profile--e25bbb75f5c7-srors'); ?>
                 
          <?php include_block('profile--1f1d661563df-khumbha'); ?>
          
          <?php include_block('profile--f7baac6d052e-sopheak'); ?>
          
          <?php include_block('profile--e25bbb75f5c7-srors'); ?>
                 
          <?php include_block('profile--1f1d661563df-khumbha'); ?>
          
          <?php include_block('profile--f7baac6d052e-sopheak'); ?>
          
          <?php include_block('profile--e25bbb75f5c7-srors'); ?>
                 
          <?php include_block('profile--1f1d661563df-khumbha'); ?>
        
        </div>

        <footer class="profiles__footer">
          
          <div class="pagination">
            <ul class="pagination__list">
              <li class="pagination__item pagination__item--first pagination__item--active">
                <a class="pagination__link"><span class="pagination__copy">1</span></a>
              </li>                
              <li class="pagination__item">
                <a class="pagination__link"><span class="pagination__copy">2</span></a>
              </li>                
              <li class="pagination__item">
                <a class="pagination__link"><span class="pagination__copy">3</span></a>
              </li>                
              <li class="pagination__item">
                <a class="pagination__link"><span class="pagination__copy">4</span></a>
              </li>                
              <li class="pagination__item">
                <a class="pagination__link"><span class="pagination__copy">5</span></a>
              </li>                
              <li class="pagination__item pagination__item--next">
                <a class="pagination__link"><span class="pagination__copy">Next</span></a>
              </li>                
              <li class="pagination__item pagination__item--last">
                <a class="pagination__link"><span class="pagination__copy">Last</span></a>
              </li>                
            </ul>          
          </div>

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
