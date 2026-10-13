<article <?php post_class('product-card'); ?>><a class="product-image" href="<?php the_permalink(); ?>"><img
            src="<?php echo esc_url(weldiore_get_image(get_the_ID(),'weldiore-card')); ?>"
            alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy"><span class="quick-link">View product
            ↗</span></a>
    <div class="product-meta">
        <div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php $terms=get_the_terms(get_the_ID(),'weldiore_product_cat');echo esc_html($terms&&!is_wp_error($terms)?$terms[0]->name:'B2B product enquiry'); ?>
            </p>
        </div><a class="product-arrow" href="<?php the_permalink(); ?>"
            aria-label="View <?php the_title_attribute(); ?>">↗</a>
    </div>
</article>