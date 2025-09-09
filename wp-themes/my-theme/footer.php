<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gus_logo.png" alt="Logo">
            <h3>Gus Bites</h3>
        </div>
        <div class="footer-text">
            <div class="footer-text-1">
                <h3>ENLACES</h3>
                <a href="#productos">Productos</a>
                <a href="#location">Ubicación</a>
                <a href="#contact_us">Reservar</a>
            </div>
            <div class="footer-contact-us">
                <h3>CONTACTANOS</h3>
                <a href="https://wa.me/c/573102338458" class="green-number">3102338458</a>
                <a href="#delivery">Domicilios</a>
            </div>
            <div class="footer-contact-us">
                <h3>RESERVA</h3>
                <a href="https://wa.me/c/573102338458" class="green-number">Ingresa tu correo para que podamos contactarte</a>
                <form class="form-footer" action="https://formspree.io/f/mpwdpwpg" method="POST">
                    <input type="email" name="email" placeholder="Tu correo electrónico" required>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>