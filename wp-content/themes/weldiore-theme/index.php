<?php get_header(); ?><main>
    <div class="container">
        <section class="page-hero">
            <div class="eyebrow">Weldiore journal</div>
            <h1 class="display"><?php echo is_home()?'Insights & ideas':esc_html(get_bloginfo('name')); ?></h1>
        </section>
        <div class="article-grid"><?php if(have_posts()):while(have_posts()):the_post();?><article class="article-card">
                <a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('medium_large');}else{ ?><img
                        src="https://images.unsplash.com/photo-1520639888713-7851133b1ed0?auto=format&fit=crop&w=700&q=80"
                        alt="Leather goods article" loading="lazy"><?php } ?></a>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php echo esc_html(weldiore_excerpt(get_the_ID(),22)); ?></p>
            </article><?php endwhile;the_posts_pagination();else:?><p>No content found.</p><?php endif; ?></div>
    </div>
</main><?php get_footer(); ?>