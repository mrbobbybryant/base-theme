<?php
use DevelopWP\Theme\Helpers;
use DevelopWP\Theme\View;

$logged_in = is_user_logged_in(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
        <title><?php echo get_the_title(); ?></title>
        <meta name="google-site-verification" content="0mhHLJIii0HbgIP11VvsvJprBupi7lgs6bAlcNvYUrI" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

        <meta property="og:title" content="<?php echo get_the_title() ?>">
        <meta property="og:description" content="">
        <meta property="og:image" content="">
        <meta property="og:url" content="<?php echo get_the_permalink(); ?>">
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:site" content="@mrbobbybryant">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
   <header>
       <a href="<?php echo esc_url( site_url() ); ?>" class="logo">
           <?php echo Helpers\inline_svg( 'logo' ); ?>
       </a>
       <a href="<?php echo esc_url( site_url() ); ?>" class="logo-mobile">
		   <?php echo Helpers\inline_svg( 'wp-logo' ); ?>
       </a>
       <div class="header-search">
           <input type="text"/>
           <div class="header-search-button">
               <?php esc_html_e( 'Search', 'dwwp' ); ?>
           </div>
       </div>
       <div class="header-menu">
           <div class="header-menu-items">
		       <?php View\radiate_register_link( $logged_in ); ?>
               <div class="header-menu-avatar">
		           <?php echo Helpers\get_user_avatar(); ?>
               </div>
	           <?php wp_loginout(); ?>
               <div class="header-menu-items-dropdown">
                   <ul>
                       <li>
                           <a href="<?php echo esc_url( site_url( 'register/edit-your-profile' ) ); ?>">
				               <?php esc_html_e( 'Edit You Profile', 'dwwp' ); ?>
                           </a>
                       </li>
                       <li>
                           <a href="<?php echo esc_url( site_url( 'register/update-billing-card' ) ); ?>">
				               <?php esc_html_e( 'Update Billing', 'dwwp' ); ?>
                           </a>
                       </li>
                       <li>
                           <a href="<?php echo esc_url( site_url( 'register/your-membership' ) ); ?>">
				               <?php esc_html_e( 'View Membership', 'dwwp' ); ?>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
       <a id="nav-toggle" class="header-menu-icon" href="#"><span></span></a>
       <section class="header-offcanvas">
           <div class="header-offcanvas-items">
               <div class="header-offcanvas-user-info">
	               <?php View\radiate_register_link( $logged_in ); ?>
                   <div class="header-menu-avatar">
		               <?php echo Helpers\get_user_avatar(); ?>
                   </div>
               </div>
               <div class="header-offcanvas-subnav">
                   <ul>
                       <li><a href="<?php echo esc_url( site_url( 'series' ) ); ?>"><?php esc_html_e( 'Catalog', 'dwwp' ); ?></a></li>
                       <li class="fundamental">
                           <a href="#"><?php esc_html_e( 'Fundamentals', 'dwwp' ); ?></a>
                           <?php echo View\get_fundamentals_nav_items(); ?>
                       </li>
                       <li><a href="<?php echo esc_url( site_url( 'knowledge-center' ) ); ?>"><?php esc_html_e( 'Knowledge Center', 'dwwp' ); ?></a></li>
                   </ul>
               </div>
	           <div class="user-menu">
                   <ul>
                       <li><?php wp_loginout(); ?></li>
                       <li>
                           <a href="<?php echo esc_url( site_url( 'register/edit-your-profile' ) ); ?>">
                               <?php esc_html_e( 'Edit You Profile', 'dwwp' ); ?>
                           </a>
                       </li>
                       <li>
                           <a href="<?php echo esc_url( site_url( 'register/update-billing-card' ) ); ?>">
                               <?php esc_html_e( 'Update Billing', 'dwwp' ); ?>
                           </a>
                       </li>
                       <li>
                           <a href="<?php echo esc_url( site_url( 'register/your-membership' ) ); ?>">
                               <?php esc_html_e( 'View Membership', 'dwwp' ); ?>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </section>
   </header>
   <section class="subnav">
       <div class="subnav-wrapper">
           <a href="<?php echo esc_url( site_url( 'series' ) ); ?>"><?php esc_html_e( 'Catalog', 'dwwp' ); ?></a>
           <div href="#" class="fundamentals-subnav">
               <?php esc_html_e( 'Fundamentals', 'dwwp' ); ?>
               <div class="fundamentals-dropdown">
	               <?php echo View\get_fundamentals_nav_items(); ?>
               </div>
           </div>
           <a href="<?php echo esc_url( site_url( 'knowledge-center' ) ); ?>"><?php esc_html_e( 'Knowledge Center', 'dwwp' ); ?></a>
       </div>
   </section>
