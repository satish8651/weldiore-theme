<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="topline">Leather goods manufacturing · Custom collections · B2B enquiries</div>

    <header class="site-header">
        <div class="container nav-wrap">

            <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Weldiore home">
                <img class="brand-logo"
                    src="http://localhost/weldiore-theme/wp-content/uploads/2026/10/WELDIORE_original_logo_clear__1_-removebg-preview.png"
                    alt="Weldiore" height="52" style="height:52px;width:auto;max-width:220px;display:block;">
            </a>

            <button class="menu-toggle" aria-label="Open navigation" aria-expanded="false"
                aria-controls="primary-navigation">☰</button>

            <nav class="main-nav" id="primary-navigation" aria-label="Primary navigation">
                <a href="<?php echo esc_url( home_url( '/home/' ) ); ?>">Home</a>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
                <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Products</a>
                <a href="<?php echo esc_url( home_url( '/custom-manufacturing/' ) ); ?>">Manufacturing</a>
                <a href="<?php echo esc_url( home_url( '/manufacturing-quality/' ) ); ?>">Custom Orders</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a>
                <a class="btn" href="<?php echo esc_url( home_url( '/request-a-quote/' ) ); ?>">Request a Quote <span
                        aria-hidden="true">↗</span></a>
            </nav>

        </div>
    </header>