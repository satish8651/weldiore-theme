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
      $slides = array(
        array( 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/image01.jpg.png', 'CRAFTED FOR BRANDS', 'Premium Bags Manufactured for Global Businesses', 'Leather and fashion bags | Private label | Bulk manufacturing' ),
        array( 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/Gemini_Generated_Image_4mfpcf4mfpcf4mfp-processedlightpdf.com_.png', 'PRIVATE LABEL', 'Your Brand, Our Craftsmanship', 'Custom design | Low MOQ | Fast sampling' ),
        array( 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/wmremove-transformed-9.png', 'EXPORT READY', 'Reliable Supply to Brands Worldwide', 'Quality control | On-time delivery | Global shipping' ),
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
    </div>
    <div class="hx-dots"></div>
</section>

<script>
(function() {
    const slides = document.querySelectorAll('.hx-slide');
    const dotsContainer = document.querySelector('.hx-dots');
    if (!slides.length || !dotsContainer) return;

    let currentIndex = 0;
    
    // Create dots dynamically
    slides.forEach((_, idx) => {
        const btn = document.createElement('button');
        if (idx === 0) btn.classList.add('on');
        btn.addEventListener('click', () => {
            changeSlide(idx);
            resetTimer();
        });
        dotsContainer.appendChild(btn);
    });

    const dots = dotsContainer.querySelectorAll('button');

    function changeSlide(index) {
        slides[currentIndex].classList.remove('active');
        dots[currentIndex].classList.remove('on');
        
        currentIndex = index;
        
        slides[currentIndex].classList.add('active');
        dots[currentIndex].classList.add('on');
    }

    function autoSlide() {
        let nextIndex = (currentIndex + 1) % slides.length;
        changeSlide(nextIndex);
    }

    let timer = setInterval(autoSlide, 4000);

    function resetTimer() {
        clearInterval(timer);
        timer = setInterval(autoSlide, 4000);
    }
})();
</script>
  
<!-- ----------------------------------------------------- -->




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


<!-- ------------------------------------------------ -->
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
        array( 'Leather & Fashion Bags', 'Timeless and trend-forward styles for brand collections.',   'http://localhost/weldiore-theme/wp-content/uploads/2026/10/1792063658417-72ad99af-8728-4f6b-be17-1628dbb5cdf2_1.jpg', 'leather-fashion-bags' ),
        array( 'Laptop & Work Bags',     'Professional carry solutions for work and business.',        'http://localhost/weldiore-theme/wp-content/uploads/2026/10/Gemini_Generated_Image_resc1fresc1fresc-2d4e77d9-caa1-4270-b7cf-994db7961db7.png', 'laptop-work-bags' ),
        array( 'Tote Bags',              'Versatile silhouettes for retail and lifestyle labels.',     'http://localhost/weldiore-theme/wp-content/uploads/2026/10/Gemini_Generated_Image_2jtymn2jtymn2jty-fd70c9e2-a9c4-4499-8449-495ebc9cc76c.png', 'tote-bags' ),
        array( 'Handbags',               'Structured and everyday handbag designs.',                   'http://localhost/weldiore-theme/wp-content/uploads/2026/10/Gemini_Generated_Image_7nkdjg7nkdjg7nkd-ezremove.png', 'handbags' ),
        array( 'Backpacks',              'Functional designs for travel, work and everyday use.',      'http://localhost/weldiore-theme/wp-content/uploads/2026/10/8cbc315840d64e1db21b1fb24b62b077.png', 'backpacks' ),
        array( 'Business Briefcases',    'Refined business bags for corporate and professional use.',  'http://localhost/weldiore-theme/wp-content/uploads/2026/10/f23db21cf24c456495629d743b6acc17.png', 'business-briefcases' ),
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
  <section class="featured-products">
    <div class="fp-header">
      <!-- <div class="fp-title-group">
        <small class="fp-subheading">FEATURED PRODUCTS</small>
        <h2 class="fp-main-heading">Popular Selections</h2>
      </div> -->
      <div class="sbc-head">
        <small>FEATURED PRODUCTS</small>
        <h2>Popular Selections</h2>
        <p>Explore our most popular leather and fashion bags.</p>
      </div>
      <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" class="fp-view-all">View All Products &rarr;</a>
    </div>

    <!-- Slick Slider Wrapper ---------------------------------------------------------------------------------------------------------------------->
    <section class="featured-products">
  <div class="product-slider">

      <!-- Item 1 -->
      <div class="product-card">
        <a class="pc-img" href="http://localhost/weldiore-theme/products/leather-laptop-work-bag-catalogue-ref-31/">
          <img src="http://localhost/weldiore-theme/wp-content/uploads/2026/10/Gemini_Generated_Image_edwd4pedwd4pedwd-804b6b48-81a7-432d-8f55-e6dbe6e17aab.png" alt="Classic Leather Tote">
        </a>
        <h3>
          <a href="http://localhost/weldiore-theme/products/leather-laptop-work-bag-catalogue-ref-31/">Classic Leather Tote</a>
        </h3>
        <p>Leather Bags</p>
      </div>

      <!-- Item 2 -->
      <div class="product-card">
        <a class="pc-img" href="http://localhost/weldiore-theme/products/leather-laptop-work-bag-catalogue-ref-30/">
          <img src="http://localhost/weldiore-theme/wp-content/uploads/2026/10/Gemini_Generated_Image_7ylstd7ylstd7yls.png" alt="Structured Handbag">
        </a>
        <h3>
          <a href="http://localhost/weldiore-theme/products/leather-laptop-work-bag-catalogue-ref-30/">Structured Handbag</a>
        </h3>
        <p>Leather Bags</p>
      </div>

      <!-- Item 3 -->
      <div class="product-card">
        <a class="pc-img" href="http://localhost/weldiore-theme/products/leather-laptop-work-bag-catalogue-ref-35/">
          <img src="http://localhost/weldiore-theme/wp-content/uploads/2026/10/Gemini_Generated_Image_gqtu6rgqtu6rgqtu-2def35f5-fdaf-45b1-9edf-9c6b0c95f454.png" alt="Quilted Shoulder Bag">
        </a>
        <h3>
          <a href="http://localhost/weldiore-theme/products/leather-laptop-work-bag-catalogue-ref-35/">Quilted Shoulder Bag</a>
        </h3>
        <p>Fashion Bags</p>
      </div>

      <!-- Item 4 -->
      <div class="product-card">
        <a class="pc-img" href="http://localhost/weldiore-theme/products/leather-laptop-work-bag-catalogue-ref-40/">
          <img src="http://localhost/weldiore-theme/wp-content/uploads/2026/10/wmremove-transformed-7.png" alt="Hobo Shoulder Bag">
        </a>
        <h3>
          <a href="http://localhost/weldiore-theme/products/leather-laptop-work-bag-catalogue-ref-40/">Hobo Shoulder Bag</a>
        </h3>
        <p>Fashion Bags</p>
      </div>

      <!-- Item 5 -->
      <div class="product-card">
        <a class="pc-img" href="http://localhost/weldiore-theme/products/leather-laptop-work-bag-catalogue-ref-38/">
          <img src="http://localhost/weldiore-theme/wp-content/uploads/2026/10/Gemini_Generated_Image_clk8bfclk8bfclk8-e62a3c83-2f7a-4e68-bc73-80319fcba91f.png" alt="Classic Leather Tote">
        </a>
        <h3>
          <a href="http://localhost/weldiore-theme/products/leather-laptop-work-bag-catalogue-ref-38/">Classic Leather Tote</a>
        </h3>
        <p>Leather Bags</p>
      </div>

      <!-- Item 6 -->
      <div class="product-card">
        <a class="pc-img" href="http://localhost/weldiore-theme/products/leather-fashion-bag-design-09/">
          <img src="http://localhost/weldiore-theme/wp-content/uploads/2026/10/Gemini_Generated_Image_1s42bt1s42bt1s42-e6043d33-327c-4a1b-8d57-f3253692ed41.png" alt="Structured Handbag">
        </a>
        <h3>
          <a href="http://localhost/weldiore-theme/products/leather-fashion-bag-design-09/">Structured Handbag</a>
        </h3>
        <p>Leather Bags</p>
      </div>

      <!-- Item 7 -->
      <div class="product-card">
        <a class="pc-img" href="http://localhost/weldiore-theme/products/leather-laptop-work-bag-catalogue-ref-17/">
          <img src="http://localhost/weldiore-theme/wp-content/uploads/2026/10/download-02.png" alt="Quilted Shoulder Bag">
        </a>
        <h3>
          <a href="http://localhost/weldiore-theme/products/leather-laptop-work-bag-catalogue-ref-17/">Quilted Shoulder Bag</a>
        </h3>
        <p>Fashion Bags</p>
      </div>

      <!-- Item 8 -->
      <div class="product-card">
        <a class="pc-img" href="http://localhost/weldiore-theme/products/leather-fashion-bag-design-24/">
          <img src="http://localhost/weldiore-theme/wp-content/uploads/2026/10/Gemini_Generated_Image_usgfxyusgfxyusgf-f675c373-68cb-465e-bac3-64664f9791f0.png" alt="Hobo Shoulder Bag">
        </a>
        <h3>
          <a href="http://localhost/weldiore-theme/products/leather-fashion-bag-design-24/">Hobo Shoulder Bag</a>
        </h3>
        <p>Fashion Bags</p>
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
    <!-- <section class="cb"
      style="background-image: url('http://localhost/weldiore-theme/wp-content/uploads/2026/10/wmremove-transformed.png'); background-size: cover; background-position: center; background-repeat: no-repeat; position: relative;">
      <div class="cb-shade"></div>
      <div class="cb-wrap">
        <div class="cb-text">
          <small>LET'S CREATE SOMETHING TOGETHER</small>
          <h2>Have a collection in mind?</h2>
          <p>Tell us about your products, target quantity and requirements. We reply within 24 hours.</p>
        </div>
        <div class="cb-btns">
          <a class="cb-btn cb-btn-solid" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Request a Quote <span
              aria-hidden="true">↗</span></a>
          <a class="cb-btn cb-btn-ghost" href="https://wa.me/918100611554" target="_blank" rel="noopener">WhatsApp
            Us</a>
        </div>
      </div>
    </section> -->

</main>
<script>
    jQuery(document).ready(function($){
            if($('.product-slider').length){
                $('.product-slider').slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    speed: 600,
                    arrows: true,
                    dots: false,
                    pauseOnHover: true,
                    prevArrow: '<button type=\"button\" class=\"ps-arrow ps-prev\" aria-label=\"Previous\">&#10094;</button>',
                    nextArrow: '<button type=\"button\" class=\"ps-arrow ps-next\" aria-label=\"Next\">&#10095;</button>',
                    responsive: [
                        { breakpoint: 1400, settings: { slidesToShow: 4 } },
                        { breakpoint: 1100, settings: { slidesToShow: 3 } },
                        { breakpoint: 800,  settings: { slidesToShow: 2 } },
                        { breakpoint: 480,  settings: { slidesToShow: 1, arrows: false } }
                    ]
                });
            }
        }); 
</script>

<?php get_footer(); ?>

    
    
