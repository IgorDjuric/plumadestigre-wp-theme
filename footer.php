<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plumasdetigre
 */

?>

</div><!-- #content -->

</div> <!-- main-layout -->
<?php if (!is_home()) {
    $padding = 'py-0';
} else {
    $padding = 'py-4';
}

?>
<footer id="colophon" class="site-footer">
    <div class="pl-footer footer-contact">
        <div class="row footer-background">
            <div class="col-12 d-flex justify-content-between content">
                <div class="contact-wrapper">
                    <div>
                        <h3>GET IN TOUCH</h3>
                    </div>

                    <div>
                        <p>Email: <a href="mailto:airun.savan@plumasdetigre.com?subject=Portfolio-Job Application">airun.savan@plumasdetigre.com</a>
                        </p>
                        <p>Tel: <a href="tel:07946432049">07946432049</a> / <a href="02037192739">020 3719 2739</a></p>
                    </div>
                </div>
                <div class="icons">
                    <div class="d-flex icons-wrapper">
                        <div class="icon-bg">
                            <a href="https://www.linkedin.com/in/nurianavas" target="_blank">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/icon-linkedin.png"
                                     alt="linkedin">
                            </a>
                        </div>
                        <div class="icon-bg">
                            <a href="https://www.pinterest.com/airunsavan/" target="_blank">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/icon-pinterest.png"
                                     alt="pinterest">
                            </a>
                        </div>
                        <div class="icon-bg">
                            <a href="mailto:airun.savan@hotmail.co.uk?subject=Portfolio-Job Application"
                               target="_blank">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/icon-email.png" alt="email">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-credits">
        <div class="pl-footer <?= $padding ?>">
            <p>© 2016 Nuria Navas</p>
        </div>
    </div>
</footer><!-- #colophon -->

</div><!-- #page -->
<script src="https://player.vimeo.com/api/player.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>-->


<?php wp_footer(); ?>

</body>
</html>
