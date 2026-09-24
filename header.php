<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header-wrapper">
    <nav class="site-navbar" aria-label="<?php esc_attr_e('Main Navigation', 'resort-hotel'); ?>">
        <!-- Brand Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
            <span class="logo-circle" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                    <path d="M3 14c2.5-2 4.5-2 7 0s4.5 2 7 0 3.5-1.5 4-1" />
                    <path d="M3 18c2.5-2 4.5-2 7 0s4.5 2 7 0 3.5-1.5 4-1" />
                    <path d="M6 9c2-2.5 3.5-2.5 5.5 0s3.5 2.5 5.5 0" />
                </svg>
            </span>
            <span class="logo-text">Kinsley</span>
        </a>

        <!-- Desktop & Mobile Navigation Links -->
        <div class="site-navigation">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'nav-menu',
                    'fallback_cb'    => false,
                ]);
            } else {
            ?>
                <ul class="nav-menu">
                    <li class="nav-item <?php echo (is_front_page() || is_home()) ? 'active' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link <?php echo (is_front_page() || is_home()) ? 'is-active' : ''; ?>">
                            <span>Home</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home 1</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home 2</a></li>
                        </ul>
                    </li>
                    <?php 
                    $is_service_single_active = is_page('service-single') 
                        || is_page_template('page-service-single.php') 
                        || is_singular('service') 
                        || (isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], 'service-single') !== false);
                    ?>
                    <li class="nav-item <?php echo (is_page('about') || is_page('services') || is_page_template('page-services.php') || $is_service_single_active) ? 'active' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/#about')); ?>" class="nav-link <?php echo (is_page('about') || is_page('services') || is_page_template('page-services.php') || $is_service_single_active) ? 'is-active' : ''; ?>">
                            <span>About</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo esc_url(home_url('/#about')); ?>">About Us</a></li>
                            <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Services</a></li>
                            <li><a href="<?php echo esc_url(home_url('/service-single/')); ?>" class="<?php echo $is_service_single_active ? 'active' : ''; ?>">Service Single</a></li>
                            <li><a href="<?php echo esc_url(home_url('/restaurant/')); ?>">Restaurant</a></li>
                            <li><a href="<?php echo esc_url(home_url('/menu-1/')); ?>">Menu #1</a></li>
                            <li><a href="<?php echo esc_url(home_url('/menu-2/')); ?>">Menu #2</a></li>
                            <li><a href="<?php echo esc_url(home_url('/gallery/')); ?>">Gallery</a></li>
                            <li><a href="<?php echo esc_url(home_url('/faq/')); ?>">FAQ</a></li>
                            <li><a href="<?php echo esc_url(home_url('/404/')); ?>">404</a></li>
                        </ul>
                    </li>
                    <?php 
                    $is_room_active = is_page('room-single') 
                        || is_page_template('page-room-single.php') 
                        || is_singular(['room', 'mphb_room_type']) 
                        || (isset($_SERVER['REQUEST_URI']) && (strpos($_SERVER['REQUEST_URI'], 'accommodation') !== false || strpos($_SERVER['REQUEST_URI'], 'room-single') !== false));
                    ?>
                    <li class="nav-item <?php echo $is_room_active ? 'active' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/accommodation/business-class-room/')); ?>" class="nav-link <?php echo $is_room_active ? 'is-active' : ''; ?>">
                            <span>Rooms</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo esc_url(home_url('/accommodation/business-class-room/')); ?>">Business class room</a></li>
                            <li><a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>">Standard room</a></li>
                            <li><a href="<?php echo esc_url(home_url('/accommodation/triple-classic-room/')); ?>">Triple classic room</a></li>
                            <li><a href="<?php echo esc_url(home_url('/accommodation/royal-class-room/')); ?>">Royal class room</a></li>
                            <li><a href="<?php echo esc_url(home_url('/#rooms')); ?>">All Rooms</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url(home_url('/#blog')); ?>" class="nav-link">
                            <span>Blog</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo esc_url(home_url('/#news')); ?>">Hotel News</a></li>
                            <li><a href="<?php echo esc_url(home_url('/#guide')); ?>">Travel Guide</a></li>
                        </ul>
                    </li>
                    <li class="nav-item <?php echo (is_page('contact') || is_page_template('page-contact.php')) ? 'active' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav-link <?php echo (is_page('contact') || is_page_template('page-contact.php')) ? 'is-active' : ''; ?>">
                            <span>Contact</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#shop" class="nav-link">
                            <span>Shop</span>
                        </a>
                    </li>
                </ul>
            <?php } ?>
        </div>

        <!-- Header Actions: Book Now & Shopping Bag -->
        <div class="header-actions">
            <a href="#book" class="btn-book-now">
                <svg viewBox="0 0 24 24">
                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                </svg>
                <span>Book Now</span>
            </a>

            <a href="#cart" class="cart-button-link" aria-label="<?php esc_attr_e('View Shopping Bag', 'resort-hotel'); ?>">
                <svg class="cart-icon" viewBox="0 0 24 24">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                </svg>
                <span class="cart-badge">0</span>
            </a>

            <!-- Mobile Hamburger Toggle -->
            <button class="mobile-nav-toggle" aria-label="<?php esc_attr_e('Toggle navigation', 'resort-hotel'); ?>" aria-expanded="false">
                <svg viewBox="0 0 24 24">
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </nav>
</header>
