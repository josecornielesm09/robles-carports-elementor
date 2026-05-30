<?php if (!is_page_template('page-elementor-fullwidth.php')) : ?>
<footer class="rc-footer">
    <div class="rc-footer-grid">
        <div class="rc-footer-brand">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="rc-nav-logo">
                <div class="rc-logo-icon">R</div>
                <div><div class="rc-logo-name">ROBLES</div><div class="rc-logo-sub">Carports & Construction</div></div>
            </a>
            <p>Protegiendo las inversiones de nuestros clientes en el Valle de Texas con carports de la más alta calidad. Más de 15 años de experiencia.</p>
        </div>
        <div>
            <h4 class="rc-footer-title">Navegación</h4>
            <?php wp_nav_menu(array('theme_location'=>'footer','menu_class'=>'rc-footer-links','container'=>false,'fallback_cb'=>false)); ?>
        </div>
        <div>
            <h4 class="rc-footer-title">Servicios</h4>
            <ul class="rc-footer-links">
                <li><a href="#">Carports Residenciales</a></li>
                <li><a href="#">Carports Comerciales</a></li>
                <li><a href="#">Pérgolas</a></li>
                <li><a href="#">Estructuras Metálicas</a></li>
            </ul>
        </div>
        <div>
            <h4 class="rc-footer-title">Contacto</h4>
            <ul class="rc-footer-links">
                <li><a href="tel:9564744332">📞 (956) 474-4332</a></li>
                <li><a href="https://wa.me/19564744332">💬 WhatsApp</a></li>
                <li><a href="#">📍 Mercedes, TX</a></li>
                <li><a href="#">🕐 Lun-Sáb: 8am-6pm</a></li>
            </ul>
        </div>
    </div>
    <div class="rc-footer-bottom">
        <p>© <?php echo date('Y'); ?> Robles Carports & Construction. Todos los derechos reservados.</p>
        <div class="rc-footer-social">
            <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
            <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/></svg></a>
            <a href="#" aria-label="TikTok"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1v-3.5a6.37 6.37 0 0 0-.79-.05A6.34 6.34 0 0 0 3.15 15.2a6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.34-6.34V8.87a8.16 8.16 0 0 0 4.76 1.52v-3.4a4.85 4.85 0 0 1-1-.3z"/></svg></a>
        </div>
    </div>
</footer>

<div class="rc-sticky-bar" id="rcStickyBar">
    <div class="rc-sticky-logo">
        <div class="rc-sticky-logo-icon">R</div>
        <a href="tel:9564744332" class="rc-sticky-phone">956-474-4332</a>
    </div>
    <div class="rc-sticky-buttons">
        <a href="tel:9564744332" class="rc-sticky-btn rc-sticky-btn-red">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Llamar
        </a>
        <a href="https://wa.me/19564744332" class="rc-sticky-btn rc-sticky-btn-outline" target="_blank">Mensaje</a>
    </div>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
