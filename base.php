<?php
    use Roots\Sage\Setup;
    use Roots\Sage\Wrapper;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('templates/head'); ?>
  
    <body <?php body_class(); ?>>
        <div class="wrapper">
        <!--[if IE]>
            <div class="alert alert-warning">
                <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
            </div>
        <![endif]-->
        <div class="off-canvas side">
            <div class="title"><a href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></div>
            <ul class="nav">
                <!-- Add more links here -->
                <?php
                    if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                    endif;
                ?>
                <li>
                    <a href="<?php if (is_user_logged_in()) {
                                echo wp_logout_url( get_home_url() );
                            } else {
                                echo wp_login_url( get_home_url() );
                            }
                        ?>"><?php if (is_user_logged_in()) {echo 'Logout';} else {echo 'Login';} ?>
                    </a>
                </li>
            </ul>
                        
            <ul class="socials">
                <li><a href="http://codepen.io/lazaryo/" target="_blank"><i class="fa fa-codepen"></i></a></li>
                <li><a href="http://lazaryo.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UC1Qqd7Bh1PGtHpjw1MwSSIw" target="_blank"><i class="fa fa-youtube"></i></a></li>
                <li><a href="https://github.com/lazaryo" target="_blank"><i class="fa fa-github"></i></a></li>
            </ul>
            
            <?php get_search_form(); ?>
        </div>
        
        <div class="lana wrap container" role="document">
            <?php
                do_action('get_header');
                get_template_part('templates/header');
            ?>
            
            <div class="content row">
                <main class="main">
                    <?php include Wrapper\template_path(); ?>
                </main><!-- /.main -->
            </div><!-- /.content -->
            
            <div id="top-wrap">
                <a id="to-top" href="#">
                    <i class="fa fa-arrow-up" aria-hidden="true"></i>
                </a>
            </div>
            
            <?php get_template_part('templates/footer'); ?>
        </div><!-- /.wrap -->

        <?php
            do_action('get_footer');
            wp_footer();
        ?>
        </div>
    </body>
</html>
