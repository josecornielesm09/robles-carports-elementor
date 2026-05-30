<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="rc-cursor" id="rcCursor"></div>
<div class="rc-cursor-dot" id="rcCursorDot"></div>

<div class="rc-loader" id="rcLoader">
    <div class="rc-loader-logo">R</div>
    <div class="rc-loader-bar"><div class="rc-loader-fill" id="rcLoaderFill"></div></div>
    <div class="rc-loader-text">Cargando experiencia...</div>
</div>

<?php if (!is_page_template('page-elementor-fullwidth.php')) : ?>
<header class="rc-header" id="rcHeader">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="rc-nav-logo">
        <div class="rc-logo-icon">R</div>
        <div>
            <div class="rc-logo-name">ROBLES</div>
            <div class="rc-logo-sub">Carports & Construction</div>
        </div>
    </a>
    <?php wp_nav_menu(array('theme_location'=>'primary','menu_class'=>'rc-nav-links','container'=>false,'fallback_cb'=>'rc_elementor_fallback_menu')); ?>
    <div class="rc-nav-cta">
        <a href="tel:9564744332" class="rc-nav-phone">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            (956) 474-4332
        </a>
        <a href="#contacto" class="rc-btn rc-btn-red">Cotizar Ahora</a>
    </div>
    <div class="rc-hamburger" id="rcHamburger" onclick="rcToggleMobile()"><span></span><span></span><span></span></div>
</header>

<div class="rc-mobile-menu" id="rcMobileMenu">
    <a href="#beneficios" onclick="rcCloseMobile()">Beneficios</a>
    <a href="#galeria" onclick="rcCloseMobile()">Galería</a>
    <a href="#proceso" onclick="rcCloseMobile()">Proceso</a>
    <a href="#testimonios" onclick="rcCloseMobile()">Testimonios</a>
    <a href="#faq" onclick="rcCloseMobile()">FAQ</a>
    <a href="tel:9564744332" class="rc-btn rc-btn-red rc-btn-lg" onclick="rcCloseMobile()">Llamar Ahora</a>
</div>
<?php endif; ?>
