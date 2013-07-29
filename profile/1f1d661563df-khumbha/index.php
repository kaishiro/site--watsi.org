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

      <div class="placard placard--profile" itemscope itemtype="http://schema.org/Person">
        <h3 class="placard__heading">Fund Treatment</h3>
        <div class="placard__share share">
          <ul class="share__list">
            <li class="share__item share__item--facebook">
              <a class="share__link icon-facebook-squared" href="http://www.facebook.com/sharer.php?s=100&p[url]=http://watsi.org/profile/1f1d661563df-khumbha&p[images][0]=https://d3w52z135jkm97.cloudfront.net/uploads/profile/image/523/profile_Khumbha-Site-Photo.jpg&p[title]=Khumbha&p[summary]=Khumbha Khumbha needs surgery to fix a forearm fracture he sustained after accidentally falling from 15 feet in the air." target="_blank"><span class="share__copy">Share</span></a>
            </li>
            <li class="share__item share__item--twitter">
              <a class="share__link icon-twitter-squared" href="http://twitter.com/share?url=https://watsi.org/profile/1f1d661563df-khumbha&text=Help me fund Khumbha's medical treatment! %23spreadthehealth via @watsi" target="_blank"><span class="share__copy">Tweet</span></a>
            </li>
          </ul>
        </div>
        <div class="placard__outer">
          <div class="placard__inner placard__inner--profile">
            <div class="profile profile--summary">
              <img class="profile__image" itemprop="image" src="/img/badge_Khumbha-Site-Photo.jpg" />
              <p class="profile__summary">
                Khumbha needs surgery to repair his fractured forearm so he can continue school.
              </p>
            </div>
          </div>
          <div class="placard__inner placard__inner--progress">
            <div class="progress progress--profile">
              <div class="progress__copy">
                Progress since July 26, 2013
              </div>
              <div class="progress__meter progress-bar">
                <div class="progress-bar__fill" style="width:11%;"></div>
              </div>
              <div class="progress__info">
                <span class="progress__percent">11%</span>
                <span class="progress__remaining">$885</span>
                <span class="progress__donors">3</span>
              </div>
            </div>
            <form class="form form--donate">
              <div class="form__item">
                <label class="form__label" for="donation">Donation Amount:</label>
                <span class="form__input-pre">$</span><input class="form__input form__input--text" id="donate" type="text" placeholder="$30 (Avg.)"/><span class="form__input-post">USD</span>
              </div>
              <div class="form__item">
                <input class="form__submit" type="submit" value="Fund Treatment" />
              </div>
            </form>
          </div>
          <div class="placard__inner placard__inner--info">
            <dl class="data data--tabular">
              <dt class="data__term data__term--name">
                Patient Name
              </dt>
              <dd class="data__definition data__definition--name">
                <span itemprop="givenName">Khumbha</span>
              </dd>
              <dt class="data__term">
                Age
              </dt>
              <dd class="data__definition">
                9
              </dd>
              <dt class="data__term">
                Location
              </dt>
              <dd class="data__definition">
                <span itemprop="address">Nepal</span>
              </dd>
              <dt class="data__term">
                Medical Partner
              </dt>
              <dd class="data__definition">
                <span itemprop="contactPoint">Nyaya Health</span>
              </dd>
              <dt class="data__term">
                Description
              </dt>
              <dd class="data__definition">
                <span itemprop="description">Khumbha needs surgery to fix a forearm fracture he sustained after accidentally falling from 15 feet in the air. He walked for three days to seek treatment at Nyaya Health, but his family cannot afford the $775 it will take to repair his swollen, painful arm. If Khumbha doesn’t receive treatment soon, doctors at Nyaya Health say that his fracture may lead to more serious problems with bone healing, alignment, and infection, and potentially result in lifelong deformity.
<br /><br />
Like most nine-year-old boys, Khumbha loves to play football with his friends. He is a bright student whose favorite subject is Nepali. When asked what he wanted to be when he grows up, he proudly said, “a teacher.”
<br /><br />
Let’s fund Khumbha’s surgery together so he can play football again and focus on being the bright student his parents are proud of!
                </span>
              </dd>
              <dt class="data__term">
                Transparency
              </dt>
              <dd class="data__definition">
                100% of your donation funds treatment for the person you choose and we are committed to complete transparency and accountability. <a href="">Learn More</a>v
              </dd>
            </dl>
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
