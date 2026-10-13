<?php get_header(); ?><main>
    <div class="container">
        <section class="page-hero">
            <div class="eyebrow">Weldiore catalogue</div>
            <h1 class="display">Find the form<br><em>for your collection.</em></h1>
            <p>Explore leather and fashion bag designs for brands, retailers and bulk buyers. Specifications and
                customization are discussed per project.</p>
        </section>
        <div class="catalogue-toolbar">
            <div class="filter-list"><a class="<?php echo !is_tax('weldiore_product_cat')?'active':''; ?>"
                    href="<?php echo esc_url(get_post_type_archive_link('weldiore_product')); ?>">All
                    products</a><?php $terms=weldiore_product_categories();if(!is_wp_error($terms))foreach($terms as $term):?><a
                    class="<?php echo is_tax('weldiore_product_cat',$term->slug)?'active':''; ?>"
                    href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a><?php endforeach; ?>
            </div>
            <form class="search-form" role="search" method="get"
                action="<?php echo esc_url(get_post_type_archive_link('weldiore_product')); ?>"><label
                    class="screen-reader-text" for="product-search">Search products</label><input id="product-search"
                    type="search" name="product_search" placeholder="Search products…"
                    value="<?php echo esc_attr(sanitize_text_field(wp_unslash($_GET['product_search']??''))); ?>"><button
                    type="submit" aria-label="Search products">⌕</button></form>
        </div>
        <?php $paged=max(1,get_query_var('paged'));$args=array('post_type'=>'weldiore_product','post_status'=>'publish','posts_per_page'=>12,'paged'=>$paged);if(!empty($_GET['product_search']))$args['s']=sanitize_text_field(wp_unslash($_GET['product_search']));if(is_tax('weldiore_product_cat'))$args['tax_query']=array(array('taxonomy'=>'weldiore_product_cat','field'=>'slug','terms'=>get_queried_object()->slug));$q=new WP_Query($args);if($q->have_posts()):?>
        <div class="product-grid">
            <?php while($q->have_posts()):$q->the_post();get_template_part('template-parts/product-card');endwhile; ?>
        </div>
        <div class="pagination">
            <?php echo wp_kses_post(paginate_links(array('total'=>$q->max_num_pages,'current'=>$paged,'type'=>'plain'))); ?>
        </div><?php else: ?><div class="empty-state">
            <h2>No products found yet.</h2>
            <p>Our catalogue is being updated. Contact us to discuss your product requirements.</p><a class="btn"
                href="<?php echo esc_url(home_url('/request-a-quote/')); ?>">Request a Quote ↗</a>
        </div><?php endif;wp_reset_postdata(); ?>
    </div>
    <section class="quote-band" style="margin-top:80px">
        <div class="container quote-inner">
            <div>
                <div class="eyebrow">Need a custom style?</div>
                <h2>Let's discuss your requirements.</h2>
            </div><a class="btn" href="<?php echo esc_url(home_url('/request-a-quote/')); ?>">Request a Quote ↗</a>
        </div>
    </section>
</main><?php get_footer(); ?>