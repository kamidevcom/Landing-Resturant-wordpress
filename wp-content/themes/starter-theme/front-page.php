<?php get_header(); ?>
<!-- Header Section -->
<header>
  <nav class="c-navbar">
    <div class="o-section__wrapper c-navbar--container">
      <a href="#" class="u-link" aria-label="Mercadito">
        <img class="c-navbar__logo" src="<?php echo get_theme_file_uri('/assets/images/logo.svg') ?>" alt="" />
      </a>
      <ul class="o-navbar js-nav">
        <li class="current-menu-item"><a href="#about-us">WHY US</a></li>
        <li><a href="#menu">MENU</a></li>
        <li><a href="#popular">POPULAR DISHES</a></li>
        <li><a href="#book">BOOK</a></li>
        <li><a href="#contact-us">CONTACT</a></li>
      </ul>
      <div class="c-navbar__sandwich js-sandwich-menu">
        <input class="c-hamburger__checkbox js-hamburger" type="checkbox">
        <span class="c-hamburger__icon"></span>
        <span class="c-hamburger__icon"></span>
        <span class="c-hamburger__icon"></span>
      </div>
    </div>
  </nav>

  <section class="c-section--hero" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/header-bg.jpg') ?>);">
    <div class="container">
      <div class="c-hero">
        <h1 class="c-hero__title">
          Book a table in the best Mexican restaturant
        </h1>
        <p class="c-hero__description u-text-center">
          30% off for the Christmas
        </p>
        <div class="c-hero__btn-group">
          <button class="c-btn c-btn--primary">Book Now</button>
          <button class="c-btn c-btn--secondary">See Menu</button>
        </div>
      </div>
    </div>
  </section>
</header>
<!-- end - Header Section -->

<!-- Why Us Section -->
<section class="o-section c-section__why-us">
  <div class="container o-section__wrapper">
    <div class="c-section c-why-us">
      <div class="c-why-us__content">
        <h2 class="o-section__title">Why Costomers Like us?</h2>
        <div>
          <p class="o-section__text">
            When we first opened our restaturant, it didn't take a long time
            ofr us to prove our diffrence.
          </p>
          <p class="o-section__text">
            Our native chefs, the Chinese atmosphere of the restaturant, the
            variety of dishes, the high quality of foods, and affordable
            prices made us well-known very soon.
          </p>
          <p class="o-section__text">
            Today, we have customers not only from this area but also from
            other cities.
          </p>
        </div>
      </div>
      <div class="c-why-us__image-wrap">
        <img class="c-why-us__image" src="<?php echo get_theme_file_uri('/assets/images/cooking.jpg') ?>" alt="" />
      </div>
    </div>
  </div>
</section>
<!-- end - Why Us Section -->

<!-- Our Menu Section -->
<section class="o-section c-section--our-menu">
  <div class="container o-section__wrapper">
    <div class="c-section c-our-menu">
      <div class="c-our-menu__content">
        <div class="c-tab">
          <div class="c-tab--wrap">
            <h3 class="o-section__title">Our Menu</h3>

            <ul class="c-tab__items">
              <li class="is-active js-tab__item">starter</li>
              <li class="js-tab__item">main dishes</li>
              <li class="js-tab__item">desserts</li>
            </ul>
          </div>
          <div class="c-our-menu__list">
            <!-- Starter list -->
            <div class="c-tab__content js-our-menu__list is-active">
              <?php
              $rows = get_field('strater');
              // var_dump($rows);
              if ($rows) {
                foreach ($rows as $row) {
              ?>
                  <div class="c-our-menu__item">
                    <div class="c-our-menu__item-head">
                      <h5 class="c-title"><?php echo $row['title']; ?></h5>
                      <p class="c-text">
                        <?php echo $row['ingredients']; ?>
                      </p>
                    </div>
                    <span class="c-price">$<?php echo $row['price']; ?></span>
                  </div>
              <?php
                }
              }
              ?>
            </div>

            <!-- Main Dishes list -->
            <div class="c-tab__content js-our-menu__list">
              <?php
              $rows = get_field('main_dishes');
              // var_dump($rows);
              if ($rows) {
                foreach ($rows as $row) {
              ?>
                  <div class="c-our-menu__item">
                    <div class="c-our-menu__item-head">
                      <h5 class="c-title"><?php echo $row['title']; ?></h5>
                      <p class="c-text">
                        <?php echo $row['ingredients']; ?>
                      </p>
                    </div>
                    <span class="c-price">$<?php echo $row['price']; ?></span>
                  </div>
              <?php
                }
              }
              ?>
            </div>

            <!-- Dessert list -->
            <div class="c-tab__content js-our-menu__list">
              <?php
              $rows = get_field('desserts');
              // var_dump($rows);
              if ($rows) {
                foreach ($rows as $row) {
              ?>
                  <div class="c-our-menu__item">
                    <div class="c-our-menu__item-head">
                      <h5 class="c-title"><?php echo $row['title']; ?></h5>
                      <p class="c-text">
                        <?php echo $row['ingredients']; ?>
                      </p>
                    </div>
                    <span class="c-price">$<?php echo $row['price']; ?></span>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end - Our Menu Section -->

<!-- Popular Dishes -->
<section class="o-section c-section--popular-dishes">
  <div class="container o-section__wrapper">
    <div class="c-section c-popular-dishes">
      <div class="c-popular-dishes__header">
        <h3 class="o-section__title">
          The Most Popular Dishes
        </h3>
        <div class="c-popular-dishes__slide-number">
          <div class="c-popular-dishes__slide-number--previous js-popular-dishes--previous">
            <svg width="36" height="16" viewBox="0 0 36 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.275005 7.30499L7.46872 0.268346C7.83412 -0.0894488 8.42027 -0.0894488 8.78567 0.268346C9.15106 0.626142 9.15106 1.2001 8.78567 1.5579L3.18294 7.04409H35.0637C35.5813 7.04409 36 7.45407 36 7.96094C36 8.46782 35.5813 8.87779 35.0637 8.87779H3.18294L8.78567 14.3491C9.15106 14.7069 9.15106 15.2808 8.78567 15.6386C8.60297 15.8175 8.36699 15.907 8.12339 15.907C7.87979 15.907 7.64381 15.8175 7.46111 15.6386L0.267391 8.59454C-0.0903893 8.2442 -0.0903893 7.66278 0.275005 7.30499Z" fill="#FFFCFC" />
            </svg>
          </div>
          <div class="c-popular-dishes__slide-number--content">
            <span class="active">1</span> / <span><?php count(get_field('popular_dishes_slider')); ?></span>
          </div>
          <div class="c-popular-dishes__slide-number--next js-popular-dishes--next">
            <svg width="37" height="16" viewBox="0 0 37 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M36.7235 7.30499L29.5298 0.268346C29.1644 -0.0894488 28.5783 -0.0894488 28.2129 0.268346C27.8475 0.626142 27.8475 1.2001 28.2129 1.5579L33.8156 7.04409H1.93486C1.41722 7.04409 0.998535 7.45407 0.998535 7.96094C0.998535 8.46782 1.41722 8.87779 1.93486 8.87779H33.8156L28.2129 14.3491C27.8475 14.7069 27.8475 15.2808 28.2129 15.6386C28.3956 15.8175 28.6315 15.907 28.8751 15.907C29.1187 15.907 29.3547 15.8175 29.5374 15.6386L36.7311 8.59454C37.0889 8.2442 37.0889 7.66278 36.7235 7.30499Z" fill="#FFFCFC" />
            </svg>
          </div>
        </div>
      </div>
      <div class="c-popular-dishes__slider js-popular-dishes">

        <?php
        $rows = get_field('popular_dishes_slider');
        // var_dump($rows);
        if ($rows) {
          foreach ($rows as $row) {
        ?>
            <div class="c-popular-dishes__slide">
              <div class="c-popular-dishes__image">
                
                <img src="<?php echo $row['food_picture']; ?>" alt="popular dishes">
              </div>
              <div class="c-popular-dishes__content">
                <h5 class="c-popular-dishes__title">
                <?php echo $row['food_name']; ?>
                </h5>
                <p class="c-popular-dishes__description">
                <?php echo wpautop($row['food_description']); ?>
                </p>
                <span class="c-popular-dishes__price">$<?php echo $row['price']; ?></span>
              </div>
            </div>
        <?php
          }
        }
        ?>

      </div>
    </div>
</section>

<!-- end - Popular Dishes -->
<?php get_footer(); ?>