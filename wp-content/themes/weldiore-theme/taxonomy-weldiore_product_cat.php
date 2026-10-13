<?php get_header(); ?><main>
    <div class="container">
        <section class="page-hero">
            <div class="eyebrow">Product category</div>
            <h1 class="display"><?php single_term_title(); ?></h1>
            <?php if(term_description())echo '<div>'.wp_kses_post(term_description()).'</div>';else echo '<p>Explore product directions and enquire about specifications, customization and bulk requirements.</p>'; ?>
        </section><?php if(have_posts()): ?><div class="product-grid">
            <?php while(have_posts()):the_post();get_template_part('template-parts/product-card');endwhile;?></div>
        <div class="pagination"><?php the_posts_pagination(); ?></div><?php else: ?><div class="empty-state">
            <h2>Products coming soon</h2>
            <p>Contact us to discuss a custom requirement.</p><a class="btn"
                href="<?php echo esc_url(home_url('/request-a-quote/')); ?>">Request a Quote ↗</a>
        </div><?php endif; ?>
    </div>
</main><?php get_footer(); ?>