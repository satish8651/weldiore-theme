<?php get_header();while(have_posts()):the_post();$id=get_the_ID();$fields=array('material'=>'Material','dimensions'=>'Dimensions','colour'=>'Colour options','branding'=>'Branding options','moq'=>'Minimum order quantity','lead_time'=>'Indicative lead time'); ?>
<main>
    <div class="container">
        <div style="padding-top:25px;font-size:.78rem;color:var(--muted)"><a
                href="<?php echo esc_url(home_url('/products/')); ?>">Products</a> / <?php the_title(); ?></div>
        <article class="product-detail">
            <div class="detail-gallery">
                <?php if(has_post_thumbnail()){the_post_thumbnail('large',array('alt'=>get_the_title()));}else{ ?><img
                    src="<?php echo esc_url(weldiore_get_image($id,'large')); ?>"
                    alt="<?php echo esc_attr(get_the_title()); ?>"><?php } ?><?php $gallery=get_post_meta($id,'_weldiore_gallery',true);if(is_array($gallery))foreach(array_slice($gallery,0,4) as $img):?><img
                    src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr(get_the_title()); ?> detail"
                    loading="lazy"><?php endforeach; ?></div>
            <div class="detail-copy">
                <div class="eyebrow">Weldiore product catalogue</div>
                <h1><?php the_title(); ?></h1>
                <p><?php echo esc_html(weldiore_excerpt($id,45)); ?></p>
                <div class="entry-content"><?php the_content(); ?></div>
                <table class="spec-table">
                    <tbody>
                        <?php foreach($fields as $key=>$label):$value=get_post_meta($id,'_weldiore_'.$key,true);if($value):?>
                        <tr>
                            <td><?php echo esc_html($label); ?></td>
                            <td><?php echo esc_html($value); ?></td>
                        </tr><?php endif;endforeach; ?></tbody>
                </table>
                <p class="form-note">Final specifications, minimum quantities, pricing and timelines are confirmed
                    during quotation.</p><a class="btn"
                    href="<?php echo esc_url(add_query_arg('product',rawurlencode(get_the_title()),home_url('/request-a-quote/'))); ?>">Enquire
                    About This Product ↗</a>
            </div>
        </article>
    </div>
    <section class="section" style="background:#eee7de">
        <div class="container">
            <div class="section-head">
                <div>
                    <div class="eyebrow">Keep exploring</div>
                    <h2 class="section-title">Related styles.</h2>
                </div><a class="btn btn-outline" href="<?php echo esc_url(home_url('/products/')); ?>">All products
                    ↗</a>
            </div>
            <div class="product-grid">
                <?php $related=new WP_Query(array('post_type'=>'weldiore_product','posts_per_page'=>3,'post__not_in'=>array($id)));while($related->have_posts()):$related->the_post();get_template_part('template-parts/product-card');endwhile;wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
</main><?php endwhile;get_footer(); ?>