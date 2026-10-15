<?php
/**
 * Template Name: Home Page
 * 
 * @package Weldiore_Theme
 */

get_header(); 
?>


<main>

  <!-- ---------- Home: Hero (hx) -----first image design code ------------------------------------------------------------------------------ -->
  <section class="hx">
    <div class="hx-slides">
      <?php
      // $img = get_template_directory_uri() . '/assets/images/';
      $slides = array(
        array( 'https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=1000&q=85', 'CRAFTED FOR BRANDS', 'Premium Bags Manufactured for Global Businesses', 'Leather and fashion bags | Private label | Bulk manufacturing' ),
        array( 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/Leather-laptop-bag_page-0042.jpg', 'PRIVATE LABEL', 'Your Brand, Our Craftsmanship', 'Custom design | Low MOQ | Fast sampling' ),
        array( 'hero3.jpg', 'EXPORT READY', 'Reliable Supply to Brands Worldwide', 'Quality control | On-time delivery | Global shipping' ),
      );
      foreach ( $slides as $n => $s ) : ?>
      <div class="hx-slide<?php echo $n === 0 ? ' active' : ''; ?>"
        style="background-image: url('<?php echo esc_url( $s[0] ); ?>');">
        <div class="hx-overlay"></div>
        <div class="container hx-content">
          <small class="eyebrow"><?php echo esc_html( $s[1] ); ?></small>
          <h1><?php echo esc_html( $s[2] ); ?></h1>
          <p><?php echo esc_html( $s[3] ); ?></p>
          <div class="hx-btns">
            <a class="btn-dark" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Explore Our Collection ↗</a>
            <a class="btn-outline-light" href="<?php echo esc_url( home_url( '/request-a-quote/' ) ); ?>">Request a Quote →</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      <div class="hx-dots"></div>
    </div>

    <?php
    $feats = array(
  array( 'B2B & Bulk Manufacturing', 'Reliable production capacity',
    '<path class="f" d="M3 21V10l6 4V10l6 4V5h4v16z"/><path d="M3 21h18"/><path d="M7 17h2M12 17h2M17 17h1"/>' ),
  array( 'Custom Design & Private Label', 'From concept to finished product',
    '<path class="f" d="M12 3l5 6-5 12-5-12z"/><path d="M7 9h10"/><circle cx="12" cy="11" r="1.2"/><path d="M12 12v4"/>' ),
  array( 'Premium Materials', 'Leather, PU & fashion fabrics',
    '<path class="f" d="M5 6c3-2 11-2 14 0l1 5-3 2 1 6c-4 2-9 2-13 0l1-6-3-2z"/><path d="M9 10l1.5 1.5M14 9l1 2M10 15l2 1"/>' ),
  array( 'Global Supply', 'Trusted by brands worldwide',
    '<circle class="f" cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"/><path d="M5 7.5c4 2 10 2 14 0M5 16.5c4-2 10-2 14 0"/>' ),
);
?>
    <div class="hx-feats">
      <div class="hx-feats-grid">
        <?php foreach ( $feats as $f ) : ?>
        <div class="hx-feat">
          <span class="hx-ico">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?php echo $f[2]; // static svg ?></svg>
          </span>
          <div>
            <strong><?php echo esc_html( $f[0] ); ?></strong>
            <span><?php echo esc_html( $f[1] ); ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- EXPLORE OUR CATALOGUE Shop by Category----------------------------------------------------------------------------------------------------- -->



  <!-- Shop by Category -->
  <section class="sbc">
    <div class="sbc-wrap">

      <div class="sbc-head">
        <small>EXPLORE OUR CATALOGUE</small>
        <h2>Shop by Category</h2>
        <p>Browse our bag categories and discover styles for your next private-label or bulk order.</p>
      </div>

      <?php
      $cats_home = array(
        array( 'Leather & Fashion Bags', 'Timeless and trend-forward styles for brand collections.',   'http://localhost/weldiore-theme/wp-content/uploads/2026/10/ChatGPT-Image-Oct-13-2026-06_01_58-PM.png', 'leather-fashion-bags' ),
        array( 'Laptop & Work Bags',     'Professional carry solutions for work and business.',        'http://localhost/weldiore-theme/wp-content/uploads/2026/10/ChatGPT-Image-Oct-13-2026-06_09_51-PM.png', 'laptop-work-bags' ),
        array( 'Tote Bags',              'Versatile silhouettes for retail and lifestyle labels.',     'http://localhost/weldiore-theme/wp-content/uploads/2026/10/ChatGPT-Image-Oct-13-2026-06_12_05-PM.png', 'tote-bags' ),
        array( 'Handbags',               'Structured and everyday handbag designs.',                   'http://localhost/weldiore-theme/wp-content/uploads/2026/10/ChatGPT-Image-Oct-13-2026-06_14_29-PM.png', 'handbags' ),
        array( 'Backpacks',              'Functional designs for travel, work and everyday use.',      'http://localhost/weldiore-theme/wp-content/uploads/2026/10/ChatGPT-Image-Oct-13-2026-06_16_44-PM.png', 'backpacks' ),
        array( 'Business Briefcases',    'Refined business bags for corporate and professional use.',  'http://localhost/weldiore-theme/wp-content/uploads/2026/10/ChatGPT-Image-Oct-13-2026-06_19_04-PM.png', 'business-briefcases' ),
      );
      ?>

      <div class="sbc-grid">
        <?php foreach ( $cats_home as $c ) : ?>
        <a class="sbc-card" href="<?php echo esc_url( home_url( '/' . $c[3] . '/' ) ); ?>">
          <img src="<?php echo esc_url( $c[2] ); ?>" alt="<?php echo esc_attr( $c[0] ); ?>">
          <span class="sbc-shade"></span>
          <span class="sbc-info">
            <h3><?php echo esc_html( $c[0] ); ?></h3>
            <p><?php echo esc_html( $c[1] ); ?></p>
            <span class="sbc-btn">Explore Category →</span>
          </span>
        </a>
        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- -------FEATURED PRODUCTS Popular Selections---------------------------------------------------------------------------------------------- -->


  <!-- Popular Selections -->
  <section class="pop">
    <div class="pop-wrap">

      <div class="pop-head">
        <div>
          <small>FEATURED PRODUCTS</small>
          <h2>Popular Selections</h2>
        </div>
        <a class="pop-all" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">View All Products →</a>
      </div>

      <?php
      $popular = array(
        array( 'Classic Leather Tote', 'Leather Bags', 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/source_6acf0ffc6ed749a6c3ded438.jpg' ),
        array( 'Structured Handbag',   'Leather Bags', 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/wmremove-transformed-1.png' ),
        array( 'Quilted Shoulder Bag', 'Fashion Bags', 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/wmremove-transformed-3.png' ),
        array( 'Hobo Shoulder Bag',    'Fashion Bags', 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/wmremove-transformed-4.png' ),
      );
      ?>

      <div class="pop-grid">
        <?php foreach ( $popular as $p ) : ?>
        <a class="pop-card" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">
          <span class="pop-img">
            <img src="<?php echo esc_url( $p[2] ); ?>" alt="<?php echo esc_attr( $p[0] ); ?>">
          </span>
          <span class="pop-meta">
            <span>
              <strong><?php echo esc_html( $p[0] ); ?></strong>
              <em><?php echo esc_html( $p[1] ); ?></em>
            </span>
            <i aria-hidden="true">↗</i>
          </span>
        </a>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- ------------------------------ -->


  <!-- Manufacturing Partner banner -->
  <section class="mp">
    <div class="mp-bg" style="background-image:url('<?php echo esc_url( $img . 'partner.jpg' ); ?>');"></div>
    <div class="mp-shade"></div>

    <div class="mp-wrap">
      <div class="mp-text">
        <small>YOUR MANUFACTURING PARTNER</small>
        <h2>From Concept to Creation, <em>We Build Your Bags</em></h2>
        <p>We work with brands, retailers and businesses to develop high-quality bags with consistent quality, on-time
          delivery and flexible customization.</p>
        <a class="mp-btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Discuss Your Project <span
            aria-hidden="true">↗</span></a>
      </div>

      <aside class="mp-card">
        <h3>Why brands choose us</h3>
        <ul>
          <li><span>01</span>Low MOQ with private label</li>
          <li><span>02</span>Free sampling support</li>
          <li><span>03</span>Strict QC at every stage</li>
        </ul>
      </aside>
    </div>
  </section>

  <?php
  $stats = array(
    array( 500, '+', 'Designs Developed' ),
    array( 50,  '+', 'Global Clients' ),
    array( 10,  '+', 'Years of Experience' ),
    array( 100, '%', 'Quality Focused' ),
  );
  ?>
  <section class="mp-stats">
    <div class="mp-stats-grid">
      <?php foreach ( $stats as $s ) : ?>
      <div class="mp-stat">
        <strong><span class="count"
            data-to="<?php echo (int) $s[0]; ?>">0</span><?php echo esc_html( $s[1] ); ?></strong>
        <span><?php echo esc_html( $s[2] ); ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <script>
    (function () {
      var els = document.querySelectorAll('.mp-stat .count');
      if (!els.length || !('IntersectionObserver' in window)) {
        els.forEach(function (e) {
          e.textContent = e.dataset.to;
        });
        return;
      }
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
          if (!en.isIntersecting) return;
          var el = en.target,
            to = +el.dataset.to,
            n = 0,
            step = Math.max(1, Math.ceil(to / 60));
          var t = setInterval(function () {
            n += step;
            if (n >= to) {
              n = to;
              clearInterval(t);
            }
            el.textContent = n;
          }, 20);
          io.unobserve(el);
        });
      }, {
        threshold: .4
      });
      els.forEach(function (e) {
        io.observe(e);
      });
    })();
  </script>

  <!-- --------ABOUT WELDIORE A manufacturing partner built around your brand.----------------------------------------------------------------- -->

  <!-- About Weldiore -->
  <section class="ab">
    <div class="ab-wrap">

      <div class="ab-media">
        <img class="ab-main"
          src="<?php echo esc_url( 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/Gemini_Generated_Image_epchzaepchzaepch.png' ); ?>"
          alt="Weldiore manufacturing">
        <img class="ab-inset"
          src="<?php echo esc_url( 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/Gemini_Generated_Image_epchzaepchzaepch.png' ); ?>"
          alt="Craftsmanship detail">
        <div class="ab-badge">
          <strong>10+</strong>
          <span>Years of craft</span>
        </div>
      </div>

      <div class="ab-text">
        <small>ABOUT WELDIORE</small>
        <h2>A manufacturing partner <em>built around your brand.</em></h2>
        <p>From product development to production planning, Weldiore works with businesses to bring thoughtful bag
          collections to life. We focus on clear communication, considered details and a process aligned with your
          requirements.</p>

        <ul class="ab-points">
          <li><i aria-hidden="true">✓</i>Dedicated project manager</li>
          <li><i aria-hidden="true">✓</i>Sample before bulk production</li>
          <li><i aria-hidden="true">✓</i>Transparent timelines and pricing</li>
        </ul>

        <div class="ab-btns">
          <a class="ab-btn ab-btn-solid" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Our Story <span
              aria-hidden="true">↗</span></a>
          <a class="ab-link" href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>">See our work →</a>
        </div>
      </div>

    </div>
  </section>

  <!-- CTA band -->
 <section class="cb" style="background-image:url('http://localhost/weldiore-theme/wp-content/uploads/2026/10/Dewatermark_1791957501088.png');">
    <div class="cb-shade"></div>
    <div class="cb-wrap">
      <div class="cb-text">
        <small>LET'S CREATE SOMETHING TOGETHER</small>
        <h2>Have a collection in mind?</h2>
        <p>Tell us about your products, target quantity and requirements. We reply within 24 hours.</p>
      </div>
      <div class="cb-btns">
        <a class="cb-btn cb-btn-solid" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Request a Quote <span aria-hidden="true">↗</span></a>
        <a class="cb-btn cb-btn-ghost" href="https://wa.me/918100611554" target="_blank" rel="noopener">WhatsApp Us</a>
      </div>
    </div>
</section>

</main>

<?php get_footer(); ?>