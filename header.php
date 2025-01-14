<?php
/* Header Template */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="header-content">
            <div class="logo">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/screenshot.png" alt="Logo - Becma" height="75">
                </a>
            </div>
                <?php
                    wp_nav_menu( $arg = array (
                        'menu' => 'Header',
                        'menu_class' => 'main-navigation',
                        'theme_location' => 'primary'
                    ));
                ?>
        </nav>
    </header>
