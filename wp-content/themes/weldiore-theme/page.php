<?php get_header();while(have_posts()):the_post();$slug=get_post_field('post_name',get_the_ID()); ?><main>
    <div class="container">
        <section class="page-hero">
            <div class="eyebrow">Weldiore · For business</div>
            <h1 class="display"><?php the_title(); ?></h1><?php if(has_excerpt()){the_excerpt();}else{ ?><p>Thoughtful
                leather and fashion bag manufacturing for brands, retailers and bulk buyers.</p><?php } ?>
        </section>
        <div class="page-content">
            <div class="container entry-content"><?php if($slug==='request-a-quote'): ?><h2>Tell us about your project.
                </h2>
                <p>Share the product, estimated quantity and any design or material requirements. Our team can review
                    the brief and discuss next steps.</p>
                <?php weldiore_quote_form(absint($_GET['product_id']??0)); ?><?php elseif($slug==='contact'): ?><div
                    class="split-section">
                    <div>
                        <h2>Start a conversation.</h2>
                        <p>For product enquiries, private-label discussions or bulk manufacturing requirements, send us
                            a project brief.</p>
                        <p><strong>Business contact details</strong><br>Replace this placeholder with Weldiore's
                            verified business email, telephone number and address before launch.</p><a class="btn"
                            href="<?php echo esc_url(home_url('/request-a-quote/')); ?>">Send an Enquiry ↗</a>
                    </div>
                    <div><?php weldiore_quote_form(); ?></div>
                </div><?php elseif($slug==='custom-manufacturing'): ?><div class="split-section">
                    <div>
                        <h2>Bring your product idea into focus.</h2>
                        <p>Start with a sketch, reference image or a clear product brief. Discuss material, dimensions,
                            branding, finish and estimated quantity with the Weldiore team.</p>
                        <ul class="feature-list">
                            <li><b>01</b> Design and product brief</li>
                            <li><b>02</b> Material and finish discussions</li>
                            <li><b>03</b> Branding and private-label requirements</li>
                            <li><b>04</b> Sampling and production planning, where available</li>
                        </ul><a class="btn" href="<?php echo esc_url(home_url('/request-a-quote/')); ?>">Discuss Your
                            Project ↗</a>
                    </div>
                    <div class="split-image"><img
                            src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?auto=format&fit=crop&w=1000&q=85"
                            alt="Leather bag design direction" loading="lazy"></div>
                </div><?php elseif($slug==='manufacturing-quality'): ?><h2>Capability, process and quality.</h2>
                <p>Use this page to present Weldiore's verified production capabilities, facility, equipment, inspection
                    process and material sourcing approach. The statements below are a structure to customize with
                    approved company information.</p>
                <div class="materials-grid">
                    <div class="material-card">
                        <h3>Product development</h3>
                        <p>Brief alignment, specification review and sample approval steps.</p>
                    </div>
                    <div class="material-card">
                        <h3>Production process</h3>
                        <p>Document the actual cutting, stitching, assembly and finishing processes available.</p>
                    </div>
                    <div class="material-card">
                        <h3>Quality checks</h3>
                        <p>Explain the inspection points and standards used for approved orders.</p>
                    </div>
                </div>
                <p style="margin-top:25px">Add real facility photography, certifications and capacity information only
                    after verification.</p><a class="btn"
                    href="<?php echo esc_url(home_url('/request-a-quote/')); ?>">Enquire About Capabilities
                    ↗</a><?php elseif($slug==='industries-served'): ?><h2>Manufacturing for business requirements.</h2>
                <p>Weldiore can use this page to explain the segments it actively supports. Confirm the final service
                    fit before publishing specific claims.</p>
                <div class="materials-grid">
                    <div class="material-card">
                        <h3>Fashion brands</h3>
                        <p>Product concepts, collection planning and brand  -specific details.</p>
                    </div>
                    <div class="material-card">
                        <h3>Retailers & wholesalers</h3>
                        <p>Catalogue-led product discussions and bulk order enquiries.</p>
                    </div>
                    <div class="material-card">
                        <h3>Private-label businesses</h3>
                        <p>Branding, specifications and production requirements for your label.</p>
                    </div>
                </div><a class="btn" style="margin-top:24px"
                    href="<?php echo esc_url(home_url('/request-a-quote/')); ?>">Discuss Your Requirements
                    ↗</a><?php elseif($slug==='insights'): ?><div class="article-grid">
                    <?php $articles=new WP_Query(array('post_type'=>'post','posts_per_page'=>9));if($articles->have_posts()):while($articles->have_posts()):$articles->the_post();?>
                    <article class="article-card"><a
                            href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('medium_large');}else{ ?><img
                                src="https://images.unsplash.com/photo-1520639888713-7851133b1ed0?auto=format&fit=crop&w=700&q=80"
                                alt="Leather goods insights" loading="lazy"><?php } ?></a>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo esc_html(weldiore_excerpt(get_the_ID(),22)); ?></p>
                    </article><?php endwhile;wp_reset_postdata();else:?><div class="empty-state">
                        <h2>Insights coming soon.</h2>
                        <p>Helpful guides for product development, materials and bag manufacturing will appear here.</p>
                    </div><?php endif; ?></div><?php else: the_content();endif; ?>
            </div>
        </div>
    </div>
</main><?php endwhile;get_footer(); ?>