<?php

use DevelopWP\Theme\Helpers;

?>
    <footer>
        <div class="footer-wrapper">
            <div class="footer-social">
                <a href="https://twitter.com/mrbobbybryant" target="_blank" class=" twitter">
                    <?php echo Helpers\inline_svg( 'twitter' ); ?>
                </a>
                <a href="https://www.youtube.com/channel/UCnVv6y1FJ2XbbmXvWO9VBDg" target="_blank" class="youtube">
		            <?php echo Helpers\inline_svg( 'youtube' ); ?>
                </a>
                <a href="https://github.com/Develop-With-WP" target="_blank" class="github">
		            <?php echo Helpers\inline_svg( 'github' ); ?>
                </a>
                <a href="#" target="_blank" class="facebook">
		            <?php echo Helpers\inline_svg( 'facebook' ); ?>
                </a>
            </div>
            <div class="footer-copyright">
                <ul>
                    <li>
                        <a href="<?php echo esc_url( site_url( 'terms-of-service' ) ); ?>">
                            <?php esc_html_e( 'Terms of Service', 'dwwp' ); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( site_url( 'privacy-policy' ) ); ?>">
                            <?php esc_html_e( 'Privacy Policy', 'dwwp' ); ?>
                        </a>
                    </li>
                    <li><?php printf( '<a href="%s" class="copyright">Copyright</a> © Develop With WP %s. All Rights Reserved.',
		                    esc_url( site_url( 'copyright' ) ),
		                    esc_html( date("Y") )
	                    ); ?></li>
                </ul>
            </div>
        </div>
    </footer>
	<?php wp_footer(); ?>
	</body>
</html>