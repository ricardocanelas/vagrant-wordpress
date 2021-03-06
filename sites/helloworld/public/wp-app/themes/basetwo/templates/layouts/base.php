<?php use \BaseT\Wrapper; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <script type="text/javascript">
        var ajaxurl = "<?= admin_url('admin-ajax.php') ?>";
    </script>
</head>

<body <?php body_class(); ?>>

    <div id="wrapper" class="container">

        <div id="header">
            <?php do_action('get_header'); ?>
            <?php get_template_part('templates/partials/header'); ?>
        </div>

        <div id="middle">
            <?php include Wrapper\template_path(); ?>
        </div>

        <div id="footer">
            <?php do_action('get_footer'); ?>
            <?php get_template_part('templates/partials/footer'); ?>
        </div>

    </div>

    <?php wp_footer(); ?>

</body>
</html>
