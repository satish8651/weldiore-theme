<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div><a class="brand footer-brand" href="<?php echo esc_url(home_url('/')); ?>">WELDIORE<small>CRAFTED FOR
                        BRANDS</small></a>
                <p style="max-width:300px;margin-top:20px">A manufacturing partner for brands building distinctive
                    leather and fashion bag collections.</p><a class="btn btn-light"
                    href="<?php echo esc_url(home_url('/request-a-quote/')); ?>">Discuss Your Project ↗</a>
            </div>
            <div>
                <h4>Explore</h4>
                <div class="footer-links"><a href="<?php echo esc_url(home_url('/products/')); ?>">Products</a><a
                        href="<?php echo esc_url(home_url('/custom-manufacturing/')); ?>">Custom Manufacturing</a><a
                        href="<?php echo esc_url(home_url('/manufacturing-quality/')); ?>">Capabilities</a><a
                        href="<?php echo esc_url(home_url('/about/')); ?>">About Weldiore</a></div>
            </div>
            <div>
                <h4>For Business</h4>
                <div class="footer-links"><a href="<?php echo esc_url(home_url('/request-a-quote/')); ?>">Request a
                        Quote</a><a href="<?php echo esc_url(home_url('/industries-served/')); ?>">Industries
                        Served</a><a
                        href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></div>
            </div>
            <div>
                <h4>Start a Conversation</h4>
                <p>Tell us about your product idea, material preferences and estimated order quantity.</p>
                <p><a href="<?php echo esc_url(home_url('/request-a-quote/')); ?>">Send a manufacturing enquiry ↗</a>
                </p>
                <p style="font-size:.74rem">Add verified business email, phone and address in WordPress before launch.
                </p>
            </div>
        </div>
        <div class="footer-bottom"><span>© <?php echo esc_html(date('Y')); ?> Weldiore. All rights
                reserved.</span><span><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy</a> &nbsp;
                · &nbsp; <a href="<?php echo esc_url(home_url('/terms/')); ?>">Terms</a></span></div>
    </div>
</footer>
<div class="mobile-quote"><a class="btn" href="<?php echo esc_url(home_url('/request-a-quote/')); ?>">Request a Quote
        ↗</a></div><?php wp_footer(); ?>
    
    <!-- ------------------------------------------------------------------------------------------------------------------------------------ -->
    
    <script>
jQuery(document).ready(function($) {
    $('.product-slider').slick({
        dots: true,             // Niche dots dikhane ke liye
        infinite: true,         // Loop chalane ke liye
        speed: 300,
        slidesToShow: 4,        // Ek bar me kitne products dikhe
        slidesToScroll: 1,      // Ek click par kitne scroll ho
        autoplay: true,         // Auto scroll karne ke liye
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

// -------------------------------------------------------
<script>
document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".hx-slide");
    const dotsContainer = document.querySelector(".hx-dots");

    if (slides.length === 0 || !dotsContainer) return;

    let currentIndex = 0;
    const intervalTime = 5000;
    let slideInterval;

    slides.forEach((_, index) => {
        const dot = document.createElement("button");
        if (index === 0) dot.classList.add("on");
        dot.addEventListener("click", () => {
            goToSlide(index);
            resetTimer();
        });
        dotsContainer.appendChild(dot);
    });

    const dots = dotsContainer.querySelectorAll("button");

    function goToSlide(index) {
        slides[currentIndex].classList.remove("active");
        dots[currentIndex].classList.remove("on");

        currentIndex = index;

        slides[currentIndex].classList.add("active");
        dots[currentIndex].classList.add("on");
    }

    function nextSlide() {
        let nextIndex = (currentIndex + 1) % slides.length;
        goToSlide(nextIndex);
    }

    function startTimer() {
        slideInterval = setInterval(nextSlide, intervalTime);
    }

    function resetTimer() {
        clearInterval(slideInterval);
        startTimer();
    }

    startTimer();
});
</script>

</script>
    </body>

</html>