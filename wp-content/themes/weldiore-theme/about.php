<?php
/*
Template Name: About Page
*/
get_header();
$img = get_template_directory_uri() . '';

$chips   = array( 'Low MOQ', 'Private label', 'Free sampling', 'Export ready' );
$buyers  = array( 'Fashion brands', 'Retail chains', 'Corporate gifting', 'Distributors', 'Hotels & hospitality', 'E-commerce sellers', 'Schools & universities', 'Importers' );
$stats   = array( array( 500, '+', 'Designs developed' ), array( 50, '+', 'Global clients' ), array( 10, '+', 'Years of experience' ), array( 98, '%', 'On-time delivery' ) );
$steps   = array(
  array( 'Brief',      'Share design, size, material and quantity.' ),
  array( 'Quotation',  'Detailed price within 24 hours.' ),
  array( 'Sample',     'Pre-production sample for approval.' ),
  array( 'Production', 'Bulk manufacturing with QC at each stage.' ),
  array( 'Delivery',   'Packed and shipped with full documents.' ),
);
$faqs = array(
  array( 'What is your minimum order quantity?', 'MOQ starts from 100 pieces for private label programmes. Exact MOQ depends on the style and material.' ),
  array( 'Do you provide samples before bulk production?', 'Yes. We develop a sample for your approval before starting bulk manufacturing.' ),
  array( 'Can you make bags with our own design and logo?', 'Yes. We offer custom branding, private label, OEM and ODM manufacturing.' ),
  array( 'Which countries do you export to?', 'We ship to retailers and brands across Europe, the Middle East and other markets.' ),
);
?>

<main class="ab2">

  <!-- 1. Hero -->
  <section class="ab2-hero">
    <div class="ab2-wrap ab2-hero-grid">
      <div class="ab2-hero-text">
        <small>ABOUT WELDIORE</small>
        <h1>Bags built for brands that <em>care about craft.</em></h1>
        <p>We design and manufacture leather and fashion bags for brands, retailers and corporates, with consistent quality, flexible MOQ and on-time delivery.</p>
        <div class="ab2-btns">
          <a class="ab2-btn" href="<?php echo esc_url( home_url( '/request-a-quote/' ) ); ?>">Request a Quote <i aria-hidden="true">↗</i></a>
          <a class="ab2-link" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">View collection →</a>
        </div>
        <ul class="ab2-chips">
          <?php foreach ( $chips as $c ) : ?><li><i aria-hidden="true">✓</i><?php echo esc_html( $c ); ?></li><?php endforeach; ?>
        </ul>
      </div>
      <div class="ab2-hero-media">
        <img src="<?php echo esc_url('http://localhost/weldiore-theme/wp-content/uploads/2026/10/Arno-Enterprises-Leather-Laptop-Bag-2-59.png' ); ?>" alt="Weldiore manufacturing">
        <div class="ab2-float"><strong>10+</strong><span>Years of craft</span></div>
      </div>
    </div>
  </section>

  <!-- 2. Marquee -->
  <section class="ab2-marq" aria-label="Who we work with">
    <div class="ab2-track">
      <?php for ( $i = 0; $i < 2; $i++ ) : foreach ( $buyers as $b ) : ?>
        <span><?php echo esc_html( $b ); ?></span><em aria-hidden="true">◆</em>
      <?php endforeach; endfor; ?>
    </div>
  </section>

  <!-- 3. Story -->
  <section class="ab2-story">
    <div class="ab2-wrap ab2-story-grid">
      <div class="ab2-collage">
        <img class="ab2-c1" src="<?php echo esc_url( 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/Arno-Enterprises-Leather-Laptop-Bag-2-87.png' ); ?>" alt="Leather craftsmanship">
        <img class="ab2-c2" src="<?php echo esc_url( 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/Arno-Enterprises-Leather-Laptop-Bag-2-87.png' ); ?>" alt="Stitching detail">
      </div>
      <div>
        <small>OUR STORY</small>
        <h2>A manufacturing partner <em>built around your brand.</em></h2>
        <p><strong>Weldiore</strong> is a trusted manufacturer of leather and fashion bags, serving brands, distributors and retailers across India and global markets.</p>
        <p>We specialise in consistent bulk production and on-time delivery, with <strong>custom branding, private label, OEM and ODM</strong> services so your product matches your identity from logo to finished bag.</p>
        <blockquote>Our mission is simple: deliver high-quality, cost-effective bags that strengthen your brand.</blockquote>
      </div>
    </div>
  </section>

  <!-- 4. Stats -->
  <section class="ab2-stats">
    <div class="ab2-wrap ab2-stats-grid">
      <?php foreach ( $stats as $s ) : ?>
        <div>
          <strong><span class="ab2-count" data-to="<?php echo (int) $s[0]; ?>">0</span><?php echo esc_html( $s[1] ); ?></strong>
          <span><?php echo esc_html( $s[2] ); ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- 5. Bento -->
  <section class="ab2-why">
    <div class="ab2-wrap">
      <div class="ab2-head">
        <small>WHY BRANDS CHOOSE US</small>
        <h2>Everything you need, <em>under one roof.</em></h2>
      </div>
      <div class="ab2-bento">
        <article class="b-lg b-dark"><h3>Custom design and private label</h3><p>From sketch to finished bag. Your logo, hardware, lining and packaging, made to spec.</p><a href="<?php echo esc_url( home_url( '/custom-manufacturing/' ) ); ?>">Explore custom manufacturing →</a></article>
        <article><h3>Low MOQ</h3><p>Start small, scale when ready.</p></article>
        <article><h3>Strict QC</h3><p>Inspection at every stage.</p></article>
        <article><h3>Fast sampling</h3><p>Sample approval before bulk.</p></article>
        <article class="b-wide"><h3>Premium materials</h3><p>Genuine leather, PU and fashion fabrics sourced from vetted suppliers.</p></article>
      </div>
    </div>
  </section>

  <!-- 6. Process -->
  <section class="ab2-proc">
    <div class="ab2-wrap">
      <div class="ab2-head">
        <small>HOW WE WORK</small>
        <h2>A simple, <em>transparent</em> process</h2>
      </div>
      <ol class="ab2-steps">
        <?php foreach ( $steps as $n => $s ) : ?>
          <li><span><?php echo sprintf( '%02d', $n + 1 ); ?></span><h3><?php echo esc_html( $s[0] ); ?></h3><p><?php echo esc_html( $s[1] ); ?></p></li>
        <?php endforeach; ?>
      </ol>
    </div>
  </section>

  <!-- 7. FAQ -->
  <section class="ab2-faq">
    <div class="ab2-wrap ab2-faq-in">
      <div class="ab2-head ab2-head-left">
        <small>FAQ</small>
        <h2>Questions buyers <em>ask us</em></h2>
      </div>
      <div class="ab2-acc">
        <?php foreach ( $faqs as $f ) : ?>
          <details><summary><?php echo esc_html( $f[0] ); ?></summary><p><?php echo esc_html( $f[1] ); ?></p></details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 8. CTA -->
  <section class="ab2-cta">
    <div class="ab2-wrap ab2-cta-in">
      <div>
        <small>LET'S CREATE SOMETHING TOGETHER</small>
        <h2>Have a collection in mind?</h2>
        <p>Tell us about your product and quantity. We reply within 24 hours.</p>
      </div>
      <div class="ab2-btns">
        <a class="ab2-btn ab2-btn-light" href="<?php echo esc_url( home_url( '/request-a-quote/' ) ); ?>">Request a Quote <i aria-hidden="true">↗</i></a>
        <a class="ab2-btn ab2-btn-ghost" href="https://wa.me/918100611554" target="_blank" rel="noopener">WhatsApp Us</a>
      </div>
    </div>
  </section>

  <!-- --------FACTORY SHOWROOM & CRAFT WELDIORE COLLECTIONS----------------------------------------------------------------------------------- -->


  <!-- Weldiore Premium Full-Bleed Gallery Showcase -->
<section class="ab-gallery">
  <div class="ab-gallery-wrap">
    
    <div class="ab-gallery-head">
      <small>FACTORY SHOWROOM & CRAFT</small>
      <h2>WELDIORE COLLECTIONS</h2>
      <p>A glimpse inside our leather goods manufacturing unit, curated showrooms, and custom collection displays.</p>
    </div>

    <?php
    $upload_dir = home_url( '/wp-content/uploads/2026/10/' );
          
    // Balanced 6-Item Grid for Full Coverage
    $gallery_items = array(
      array(
        'title'    => 'Leather Executive Briefcase',
        'category' => 'Corporate Collection',
        'img'      => $upload_dir . 'Gemini_Generated_Image_epchzaepchzaepch.png',
        'class'    => 'is-tall' // Left tall item
      ),
      array(
        'title'    => 'B2B Travel Bags & Luggage',
        'category' => 'Export Series',
        'img'      => 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/Arno-Enterprises-Leather-Laptop-Bag-2-75.png',
        'class'    => 'is-wide' // Middle top wide item
      ),
      array(
        'title'    => 'Custom Handbag Display',
        'category' => 'Private Label',
        'img'      => 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/Arno-Enterprises-Leather-Laptop-Bag-2-82.png',
        'class'    => ''
      ),
      array(
        'title'    => 'Minimalist Leather Backpacks',
        'category' => 'Modern Lifestyle',
        'img'      => 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/Arno-Enterprises-Leather-Laptop-Bag-2-61.png',
        'class'    => ''
      ),
      array(
        'title'    => 'Stitching and Craftsmanship',
        'category' => 'Quality Control',
        'img'      => 'http://localhost/weldiore-theme/wp-content/uploads/2026/10/Arno-Enterprises-Leather-Laptop-Bag-2-19.png',
        'class'    => 'is-wide' // Complete layout filler item
      ),
      array(
        'title'    => 'Premium Messenger Bags',
        'category' => 'Bulk Manufacturing',
        'img'      => $upload_dir . 'Gemini_Generated_Image_epchzaepchzaepch.png',
        'class'    => ''
      )
    );
    ?>

    <div class="ab-gallery-grid">
      <?php foreach ( $gallery_items as $item ) : ?>
        <div class="ab-gallery-item <?php echo esc_attr( $item['class'] ); ?>">
          <a class="ab-gallery-link" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">
            <img class="ab-gallery-img" src="<?php echo esc_url( $item['img'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" loading="lazy">
            <div class="ab-gallery-overlay">
              <span class="ab-gallery-tag"><?php echo esc_html( $item['category'] ); ?></span>
              <h3 class="ab-gallery-title"><?php echo esc_html( $item['title'] ); ?></h3>
              <span class="ab-gallery-btn">View Collection ↗</span>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- -------REGISTERED B2B EXPORTER & MANUFACTURER------------------------------------------------------------------------------------------- -->

<!-- Weldiore B2B Corporate Info & Contact Section -->
<section class="wx-corp-section">
  <div class="wx-corp-container">
    <div class="wx-corp-card">
      
      <!-- Top Decorative Badge -->
      <div class="wx-corp-badge">
        <span class="wx-badge-icon">✓</span>
        <span>REGISTERED B2B EXPORTER & MANUFACTURER</span>
      </div>

      <!-- Main Heading & Legal Info -->
      <h3 class="wx-corp-title">
        <strong>Vadalo Ventures Pvt. Ltd.</strong> 
        <small>(CIN: U46410WB2024PTC275166)</small>
      </h3>

      <p class="wx-corp-desc">
        Registered under the Companies Act 2013. Operating state-of-the-art leather manufacturing facility for global brands.
      </p>

      <!-- Grid Info Details -->
      <div class="wx-corp-grid">
        <div class="wx-corp-info-item">
          <span class="wx-info-label">FACTORY ADDRESS</span>
          <address class="wx-info-val">
            57/N M.D. Kalachand Road, Musalman Para,<br>
            Agarpara, Kolkata – 700111, West Bengal, India
          </address>
        </div>

        <div class="wx-corp-info-item">
          <span class="wx-info-label">OFFICE TELEPHONE</span>
          <a class="wx-info-val wx-link" href="tel:+913331997211">+91 33 3199 7211</a>
        </div>
      </div>

      <!-- Call to Action Button -->
      <div class="wx-corp-action">
        <a class="wx-btn-export" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
          <span>CONTACT OUR EXPORT TEAM</span>
          <i class="wx-arrow" aria-hidden="true">→</i>
        </a>
      </div>

    </div>
  </div>
</section>

</main>

<script>
(function () {
  var els = document.querySelectorAll('.ab2-count');
  if (!('IntersectionObserver' in window)) { els.forEach(function (e) { e.textContent = e.dataset.to; }); return; }
  var io = new IntersectionObserver(function (list) {
    list.forEach(function (en) {
      if (!en.isIntersecting) return;
      var el = en.target, to = +el.dataset.to, n = 0, step = Math.max(1, Math.ceil(to / 60));
      var t = setInterval(function () { n += step; if (n >= to) { n = to; clearInterval(t); } el.textContent = n; }, 20);
      io.unobserve(el);
    });
  }, { threshold: .4 });
  els.forEach(function (e) { io.observe(e); });
})();
</script>

<?php get_footer(); ?>