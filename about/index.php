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
  
  <?php include_block('hero--kofi'); ?>

  <?php include_block('nav--hero'); ?>

  <div class="body">
    <div class="body__inner"> 

      <div class="page__column page__column--left">

      <section class="verse verse--separator">
        <h3 class="verse__heading" id="how-watsi-works">
          How Watsi Works
        </h3>
        <ol class="process">
          <li class="process__item process__item--connect">
            <h5 class="process__heading">1. Connect</h5>
            <p class="process__copy">
              Browse profiles on Watsi.org and connect with a person you would like to support
            </p>
            <span class="process__icon icon-users"></span>
          </li>
          <li class="process__item process__item--fund">
            <h5 class="process__heading">2. Fund Treatment</h5>
            <p class="process__copy">
              Donate as little as $25 to fund a life-changing medical treatment for that person
            </p>
            <span class="process__icon icon-heart"></span>
          </li>
          <li class="process__item process__item--update">
            <h5 class="process__heading">3. Get an Update</h5>
            <p class="process__copy">
              You receive an update about the outcome of the treatment you funded
            </p>
            <span class="process__icon icon-up"></span>
          </li>
        </ol>
      </section>

      <section class="verse verse--separator">
        <h3 class="verse__heading" id="story">Story</h3>
        <p class="verse__copy">
          I was sitting in the back of a bus in a small village in Costa Rica called Watsi. A woman in tattered clothing was standing in the aisle in front. She was holding a red folder and speaking to the passengers near her. I thought she must be selling stickers or skin creams.
          <br /><br />
          A few minutes later I looked up and found she was making her way down the aisle toward me. She was holding a plastic bag, and although she had only passed a few passengers, the bag was bursting with money. I couldn’t believe it. In my year and a half in the Peace Corps, I had never seen a bus salesperson earn so much.
          <br /><br />
          When she reached me, I still had no idea what she was selling. Then the man next to me asked to see the red folder she was holding.
          <br /><br />
          The instant she opened the folder everything came together. There was a photograph on one side and a document on the other. The photograph showed a young boy with an incision across the width of his stomach. The document described his medical condition. The young boy was her son.
          <br /><br />
          In that moment I had what can only be described as an epiphany. If I could somehow connect this woman with my friends and family back home, she would have the money to pay for her son’s medical treatment within the day.
          <br /><br />
          Chase Adam Co-Founder/Vision
        </p>
      </section>

      <section class="verse verse--separator">
        <h3 class="verse__heading" id="values">Values</h3>
        <p class="verse__copy">
          <h4 class="verse__subheading">Impact</h4>
          Impact is King. Our goal is to fund low-cost, high-impact medical treatments for a million people in need.
          <br /><br />
          <h4 class="verse__subheading">Innovation</h4>
The world is changing at a million miles per second, and we intend to keep up. We aren’t afraid to push the limits.
          <br /><br />
          <h4 class="verse__subheading">Efficiency</h4>
In our experience, most non-profits aren’t efficient. We are different. We believe motivation and adaptation are more important than a fancy office and expensive business cards.
          <br /><br />
          <h4 class="verse__subheading">Transparency</h4>
We are 100% transparent. Period. All relevant information, from transfer receipts to patient waivers, are available on our <a class="verse__link" href="https://docs.google.com/spreadsheet/pub?key=0Ah3wJ9CRQzyHdDZSaEF1X1JsRm1yZ251d0RQZ0VmRGc&output=html" target="_blank">Transparency Google Document</a>. Watsi is an open book.
        </p>
      </section>
    
      <section class="verse">
        <h3 class="verse__heading" id="contact">Contact</h3>
        <p class="verse__copy">
          Please email us at <a class="verse__link" href="mailto:connect@watsi.org">connect@watsi.org</a> or call us at <a class="chapter__link" href="tel:+12567928747">(256) 792-8747</a> and we will get back to you as soon as possible.
          <br /><br />
          Our mailing address is 123 10th St, San Francisco, CA 94103.
        </p>
      </section>
  
    </div>
    <div class="page__column page__column--right">

      <section class="verse verse--separator">
        <h3 class="verse__heading" id="about">About</h3>
        <p class="verse__copy">
          All over the world people are dying of treatable illnesses because they can’t afford basic medical care. Watsi connects you with patients in serious need of low-cost medical care and enables you to fund high-impact treatments.
          <br /><br />
          We believe non-profits should be impactful, innovative, efficient, and transparent, and we built Watsi on those principles. Watsi is a community, not just an organization. We are young, dynamic and serious about using technology to connect people and change lives.
          <br /><br />
          We invite you to join us and <a class="verse__link" href="/fund-treatments">change the world</a>, one treatment, one person, and one life at a time. 
        </p>
      </section>
      
      <section class="verse verse--separator">
        <h3 class="verse__heading" id="get-involved">Get Involved</h3>
        <p class="verse__copy">
          The most direct way for you to get involved is to fund a treatment. Every time you <a class="verse__link" href="/fund-treatments">fund a treatment</a> on Watsi, you help grow our community, expand our reach, and spread our message.
          <br /><br />
          <h4 class="verse__subheading">Connect with us</h4>
          Like us on <a class="verse__link" href="https://www.facebook.com/Watsi.org" target="_blank">Facebook</a>, follow us on <a class="chapter__link" href="https://twitter.com/watsi" target="_blank">Twitter</a>, and check out our <a class="chapter__link" href="http://watsi.tumblr.com/" target="_blank">blog</a> to get the latest news, updates, and information!
          <br /><br />
          <h4 class="verse__subheading">Donate to Watsi</h4>
          Because we are committed to using 100% of your donation to fund medical treatments, we rely on donations from people like you to grow our impact. <a class="verse__link" href="/about#donate#modal">Donate to Watsi's operational costs</a>.
          <br /><br />
          <h4 class="verse__subheading">Be cool and spread the word</h4>
          Invite friends, family, and coworkers to <a class="verse__link" href="/registration">join us</a> and <a class="chapter__link" href="/fund-treatments">fund treatments</a>.
        </p>
      </section>
    
      <section class="verse verse--separator">
        <h3 class="verse__heading" id="teams">Team</h3>
        <p class="verse__copy">
          <a class="verse__link" href="http://watsi.tumblr.com/post/21043545556/" target="_blank">Chase Adam</a>, Vision, is full of optimistic passion. He spends his life looking toward the horizon.
          <br /><br />
          <a class="verse__link" href="http://watsi.tumblr.com/post/21043338728/" target="_blank">Jesse Cooke</a>, Tech, develops software and is an avid contributor to the open source movement.
          <br /><br />
          <a class="verse__link" href="http://watsi.tumblr.com/post/21043263585/" target="_blank">Grace Garey</a>, Marketing, is driven by hope and positivity. She's on a mission to connect people and create change.
        </p>
      </section>
      
      <section class="verse">
        <h3 class="verse__heading" id="advisors">Advisors</h3>
        <p class="verse__copy">
          Jon Skaggs, Entrepreneur and Former Professional Athlete, knows how to make big things happen. He is an ideas man, and he keeps us shooting for the stars.
          <br /><br />
          Mary Everette Cann, Marketing Professional, is a seasoned non-profit marketing wizard. She makes sure Watsi’s voice is heard loud and clear.
          <br /><br />
          Dr. Mitul Kapadia, Global Health Expert, is the director of the Physical Medicine and Rehabilitation Program at UCSF Benioff Children's Hospital and has traveled the world treating patients. He advises us on all things medical and ensures we have the greatest impact possible.
          <br /><br />
          Dinkar Jain, strategy consultant, investment professional, and a product leader at Google, keeps us focused, criticized, and energized.
          <br /><br />
          Eric Wu, product advisor, entrepreneur and investor, and helps us with product, UI/UX, and design.
        </p>
      </section>
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
