<!--===== CTA AREA STARTS =======-->
<div class="cta-section-area">
  <img src="<?= get_template_directory_uri() ?>/assets/img/bg/cta-bg1.png" alt="" class="cta-bg1 aniamtion-key-2">
  <img src="<?= get_template_directory_uri() ?>/assets/img/bg/cta-bg2.png" alt="" class="cta-bg2 aniamtion-key-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">
        <div class="cta-header-area text-center sp4 heading2">
          <h2 class="text-anime-style-3">Ready To Take Your SEO To <br class="d-md-block d-none"> The Next Level</h2>
          <p data-aos="fade-up" data-aos-duration="1000">Effective SEO strategies not only elevate a website's visibility but also drive <br class="d-md-block d-none"> targeted traffic, enhance user experience,</p>
          <div class="btn-area text-center" data-aos="fade-up" data-aos-duration="1200">
            <a href="javascrpt:void(0);" class="header-btn1">Free Consultation <span><i class="fa-solid fa-arrow-right"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CTA AREA ENDS =======-->

<!--===== FOOTER AREA STARTS =======-->
<div class="footer1-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="footer-logo-area">
          <img src="<?= get_template_directory_uri() ?>/assets/img/logo/logo1.png" alt="">
          <p>We are a Perth-based SEO and marketing agency, specializing in transforming online presence with expert SEO and digital marketing strategies.</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-6">
        <div class="footer-logo-area1">
          <h3>About Link</h3>
          <ul>
            <li><a href="#about">About Us</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="footer-logo-area2">
          <h3>Get in touch</h3>
          <ul>



            <li><a href="mailto:<?= get_option('nihao_email') ?>"><img src="<?= get_template_directory_uri() ?>/assets/img/icons/email.svg" alt=""><span><?= get_option('nihao_email') ?></span></a></li>
            <li><a href="#"><img src="<?= get_template_directory_uri() ?>/assets/img/icons/location.svg" alt=""><span><?= get_option('nihao_address') ?></span></a></li>
            <?php if (get_option('nihao_phone') <> "") { ?>
              <li><a href="tel:<?= get_option('nihao_phone'); ?>"><img src="<?= get_template_directory_uri() ?>/assets/img/icons/phone.svg" alt=""><span><?= get_option('nihao_phone') ?></span></a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="footer-logo-area3">
          <h3>Subscribe Our Newsletter</h3>
          <form action="#">
            <input type="text" placeholder="Enter Your email">
            <button class="header-btn1"> Subscribe <span><i class="fa-solid fa-arrow-right"></i></span></button>
          </form>
        </div>
      </div>
    </div>
    <div class="space80 d-lg-block d-none"></div>
    <div class="space40 d-lg-none d-block"></div>
    <div class="row">
      <div class="col-lg-12">
        <div class="copyright-area">
          <div class="pera">
            <p>ⓒCopyright 2024 NIHAO MEDIA . All rights reserved</p>
          </div>
          <ul>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#" class="m-0"> Privacy Policy </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== FOOTER AREA ENDS =======-->