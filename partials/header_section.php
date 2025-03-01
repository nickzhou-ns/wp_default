<!--===== HEADER START =======-->
<header>
  <div class="header-area homepage1 header header-sticky d-none d-lg-block " id="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav id="navbar-example2" class="navbar">
            <div class="header-elements">
              <div class="site-logo">
                <a href="<?= esc_url(home_url('/')); ?>">
                  <img src="<?= get_template_directory_uri(); ?>/assets_ext/img/nihao_logo.png" alt="Logo">
                </a>
              </div>
              <div class="main-menu">
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'header_menu', // 关联WordPress后台的菜单
                  'container'      => false,         // 不要自动加<div>
                  'menu_class'     => '',            // 移除默认ul的class
                  'items_wrap'     => '<ul class="nav">%3$s</ul>', // 结构调整
                ));
                ?>
              </div>

              <div class="btn-area">
                <div class="search-icon header__search header-search-btn">
                  <a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/img/icons/search-icons1.svg" alt="Search"></a>
                </div>
                <a href="javascript:void(0)" class="header-btn1">Free Consultation <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
              <div class="header-search-form-wrapper">
                <div class="tx-search-close tx-close"><i class="fa-solid fa-xmark"></i></div>
                <div class="header-search-container">
                  <form role="search" class="search-form" method="get" action="<?= esc_url(home_url('/')); ?>">
                    <input type="search" class="search-field" placeholder="Search …" value="<?= get_search_query(); ?>" name="s">
                    <button type="submit" class="search-submit">
                      <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/search-icons1.svg" alt="Search">
                    </button>
                  </form>
                </div>
              </div>

              <div class="body-overlay"></div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!--===== HEADER END =======-->


<!--===== MOBILE HEADER STARTS =======-->
<div class="mobile-header mobile-haeder1 d-block d-lg-none">
  <div class="container-fluid">
    <div class="col-12">
      <div class="mobile-header-elements">
        <div class="mobile-logo">
          <a href="index.php"><img src="<?= get_template_directory_uri() ?>/assets/img/logo/logo1.png" alt=""></a>
        </div>
        <div class="mobile-nav-icon dots-menu">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mobile-sidebar mobile-sidebar1">
  <div class="logosicon-area">
    <div class="logos">
      <img src="<?= get_template_directory_uri(); ?>/assets/img/logo/logo1.png" alt="Logo">
    </div>
    <div class="menu-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
  </div>
  <div class="mobile-nav mobile-nav1">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'mobile_menu', // 关联后台菜单
      'container'      => false,         // 不要自动包裹div
      'menu_class'     => 'mobile-nav-list nav-list1', // 自定义ul的class
      'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>', // 结构调整
    ));
    ?>

    <div class="allmobilesection">
      <a href="contact.php" class="header-btn1">Get Started <span><i class="fa-solid fa-arrow-right"></i></span></a>
      <div class="single-footer">
        <h3>Contact Info</h3>
        <div class="footer1-contact-info">
          <div class="contact-info-single">
            <div class="contact-info-icon">
              <i class="fa-solid fa-phone-volume"></i>
            </div>
            <div class="contact-info-text">
              <a href="tel:<?= $company_info['phone'] ?>"><?= $company_info['phone'] ?></a>
            </div>
          </div>

          <div class="contact-info-single">
            <div class="contact-info-icon">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="contact-info-text">
              <a href="mailto:<?= $company_info['email'] ?>"><?= $company_info['email'] ?>m</a>
            </div>
          </div>

          <div class="single-footer">
            <h3>Our Location</h3>
            <div class="contact-info-single">
              <div class="contact-info-icon">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="contact-info-text">
                <a href="#"><?= $company_info['address'] ?></a>
              </div>
            </div>
          </div>
          <div class="single-footer">
            <h3>Social Links</h3>
            <div class="social-links-mobile-menu">
              <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--===== MOBILE HEADER STARTS =======-->