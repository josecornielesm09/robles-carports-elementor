<?php get_header(); ?>

<!-- HERO -->
<section class="rc-hero-new" id="hero" style="min-height: 100vh; background: #0A0A0A; display: flex; align-items: center; padding-top: 80px;">
    <div style="max-width: 1300px; margin: 0 auto; padding: 2rem; display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; width: 100%;">
        <div>
            <span style="display: inline-block; font-size: 0.85rem; font-weight: 600; letter-spacing: 3px; text-transform: uppercase; color: #ccc; margin-bottom: 1rem;">Mercedes, Texas</span>
            <h1 style="font-size: clamp(3rem, 6vw, 5rem); font-weight: 900; line-height: 0.95; margin-bottom: 1.5rem; text-transform: uppercase; color: white;">CARPORTS DE <span style="color: #E53935;">ACERO</span></h1>
            <p style="font-size: 1.1rem; line-height: 1.7; color: #ccc; margin-bottom: 2.5rem;">Protegemos tu vehículo del sol, lluvia y granizo con estructuras metálicas de alta resistencia.<br>Fabricación e instalación profesional en el Valle de Texas.</p>
            <div style="display: inline-flex; align-items: center; gap: 1rem; background: rgba(255,255,255,0.03); border: 1px solid rgba(229,57,53,0.3); border-radius: 12px; padding: 1rem 2rem; margin-bottom: 2rem;">
                <span style="font-size: 2.5rem; font-weight: 900; color: #E53935;">10%</span>
                <span style="font-size: 0.85rem; font-weight: 700; color: white;">DEPÓSITO PARA<br>INICIAR</span>
            </div>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="tel:9564744332" style="background: #E53935; color: white; padding: 15px 35px; text-decoration: none; border-radius: 8px; font-weight: 700; display: inline-block;">Llamar Ahora</a>
                <a href="https://wa.me/19564744332" style="background: transparent; color: white; padding: 15px 35px; text-decoration: none; border-radius: 8px; font-weight: 700; border: 2px solid rgba(255,255,255,0.3); display: inline-block;">Enviar Mensaje</a>
            </div>
            <div style="display: flex; gap: 0.75rem; margin-top: 2rem; flex-wrap: wrap;">
                <span style="padding: 6px 16px; border: 1px solid rgba(255,255,255,0.15); border-radius: 50px; font-size: 0.75rem; color: #ccc;">ACERO</span>
                <span style="padding: 6px 16px; border: 1px solid rgba(255,255,255,0.15); border-radius: 50px; font-size: 0.75rem; color: #ccc;">A MEDIDA</span>
                <span style="padding: 6px 16px; border: 1px solid rgba(255,255,255,0.15); border-radius: 50px; font-size: 0.75rem; color: #ccc;">RESIDENCIAL</span>
            </div>
        </div>
        <div style="position: relative; height: 550px; border-radius: 24px; overflow: hidden; box-shadow: 0 30px 80px rgba(0,0,0,0.7);">
            <div style="position: relative; width: 100%; height: 100%;">
                <div style="position: absolute; inset: 0; background: radial-gradient(circle at center, transparent 45%, #0A0A0A 100%); pointer-events: none; z-index: 2;"></div>
                <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%); display: flex; align-items: center; justify-content: center; color: #666; font-size: 1.2rem;">[TU VIDEO AQUÍ]</div>
            </div>
        </div>
    </div>
</section>

<!-- STATS -->
<div style="background: #1A1A1A; padding: 40px 20px; border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem; text-align: center;">
        <div><div style="font-size: 3rem; font-weight: 900; color: #E53935; margin-bottom: 0.5rem;">500+</div><div style="font-size: 0.9rem; color: #888; text-transform: uppercase;">Carports Instalados</div></div>
        <div><div style="font-size: 3rem; font-weight: 900; color: #E53935; margin-bottom: 0.5rem;">15+</div><div style="font-size: 0.9rem; color: #888; text-transform: uppercase;">Años Experiencia</div></div>
        <div><div style="font-size: 3rem; font-weight: 900; color: #E53935; margin-bottom: 0.5rem;">100%</div><div style="font-size: 0.9rem; color: #888; text-transform: uppercase;">Satisfacción</div></div>
        <div><div style="font-size: 3rem; font-weight: 900; color: #E53935; margin-bottom: 0.5rem;">24</div><div style="font-size: 0.9rem; color: #888; text-transform: uppercase;">Meses Garantía</div></div>
    </div>
</div>

<!-- BENEFITS -->
<section style="padding: 80px 20px; background: #0A0A0A;">
    <div style="max-width: 1200px; margin: 0 auto; text-align: center; margin-bottom: 60px;">
        <span style="color: #E53935; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; font-size: 0.85rem;">¿Por Qué Elegirnos?</span>
        <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 800; margin: 1rem 0; color: white;">Protección que Tu Vehículo Merece</h2>
    </div>
    <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
        <?php for($i=1; $i<=6; $i++): ?>
        <div style="background: #141414; border: 1px solid rgba(255,255,255,0.06); border-radius: 20px; padding: 40px; text-align: center;">
            <div style="width: 56px; height: 56px; background: rgba(229,57,53,0.1); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #E53935; font-size: 1.5rem;">✓</div>
            <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 15px; color: white;">Beneficio <?php echo $i; ?></h3>
            <p style="color: #888; line-height: 1.7;">Descripción del beneficio <?php echo $i; ?> que ofreces a tus clientes.</p>
        </div>
        <?php endfor; ?>
    </div>
</section>

<!-- CTA -->
<section style="padding: 100px 20px; text-align: center; background: linear-gradient(135deg, rgba(10,10,10,0.92), rgba(10,10,10,0.75));">
    <div style="max-width: 700px; margin: 0 auto;">
        <span style="color: #E53935; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; font-size: 0.85rem;">¿Listo Para Proteger Tu Vehículo?</span>
        <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 900; margin: 1rem 0; color: white;">No Esperes Más, Cotiza Hoy</h2>
        <a href="tel:9564744332" style="font-size: 2rem; font-weight: 800; color: #E53935; display: block; margin: 2rem 0; text-decoration: none;">(956) 474-4332</a>
        <p style="color: #ccc; margin-bottom: 2rem;">Empieza con solo 10% de depósito.</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="tel:9564744332" style="background: #E53935; color: white; padding: 15px 35px; text-decoration: none; border-radius: 8px; font-weight: 700;">Llamar Ahora</a>
            <a href="https://wa.me/19564744332" style="background: white; color: #0A0A0A; padding: 15px 35px; text-decoration: none; border-radius: 8px; font-weight: 700;">WhatsApp</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
