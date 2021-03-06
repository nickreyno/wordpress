<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=<?php blogInfo('charset')?>>
<meta name="google-site-verification" content="tJMsWXyN6Y6LfKo9upVzVc_ApUt5-7-pWntGHt6mDsI" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head();?>
</head>
<body <?php echo body_class()?>>
<header class="site-header">
    <div class="container">
    <h1 class="school-logo-text float-left">
        <a href="<?php echo site_url('')?>"><strong>Nick</strong> Reyno</a>
    </h1>
    <a href="<?php echo esc_url(site_url('/search'))?>" class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
    <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
    <div class="site-header__menu group">
        <nav class="main-navigation">
        <ul>
<?php
// logic to use the menu location from wp
// wp_nav_menu(array(
//     'theme_location'=>'header_menu_location'));
?>

<!-- conditional class for fine tuned control over active page styling behaviour -->
            <li <?php if (is_page('about-me')or wp_get_post_parent_id(0) == 13) {
    echo 'class="current-menu-item"';
}?>>
                <a href="<?php echo site_url('/about-me')?>">About Me</a>
            </li>
            <li <?php if (get_post_type() == 'project') {
    echo 'class="current-menu-item"';
}?>>
                <a href="<?php echo get_post_type_archive_link('project')?>">Projects</a>
            </li>
            <li <?php if (get_post_type() == 'event' or is_page('past-events')) {
    echo 'class="current-menu-item"';
}?>>
                <a href="<?php echo get_post_type_archive_link('event')?>">Events</a>
            </li>
            <li <?php if (get_post_type() == 'location') {
    echo 'class="current-menu-item"';
}?>>
                <a href="<?php echo get_post_type_archive_link('location')?>">Locations</a>
            </li>
            <li <?php if (get_post_type() == 'post' or wp_get_post_parent_id(0) == 13) {
    echo 'class="current-menu-item"';
}?>>
                <a href="<?php echo site_url('/blog')?>">Blog</a>
            </li>
        </ul>
        </nav>
        <div class="site-header__util">
            <?php if(is_user_logged_in()){
                ?>
                <a href="<?php echo esc_url(site_url('/my-notes'))?>" class="btn btn--small btn--orange float-left push-right">My Notes</a>
                <a href="<?php echo esc_url(wp_logout_url());?>" class="btn btn--small btn--dark-orange btn--with-photo float-left">
                    <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(),60)?></span>
                    <span class="btn__text">Log Out</span> </a>
            <?php } else { ?>
                <a href="<?php echo esc_url(wp_login_url())?>" class="btn btn--small btn--orange float-left push-right">Login</a>
                <a href="<?php echo esc_url(wp_registration_url())?>" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <?php } ?>
            <a href="<?php echo esc_url(site_url('/search'))?>" class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
        </div>
    </div>
    </div>
</header>