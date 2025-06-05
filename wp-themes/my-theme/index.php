<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <?php get_header(); ?>
    <main>
        <section class="container-home">
            <div class="container-home-texto">
                <p id="texto-uno">¿Antojo de <br> última hora?</p>
                <a href="https://wa.me/c/573102338458" id="texto-dos" target="_blank" aria-label="Haz tu pedido por WhatsApp">
                    !Ordena ya!
                </a>
            </div>
            <div class="container-home-products">
                <article class="container-home-hamburguesas">
                    <h3>Hamburguesas</h3>
                    <ul>
                        <li>
                            <h4>Crunchy Zen Burger</h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Onion-High.png" alt="Hamburguesa Crunchy Zen con cebolla crispy y salsa estilo Big Mac sobre pan artesanal.">
                            <p>
                                Hamburguesa artesanal de res (125gr), lechuga, tomate, queso mozzarella, cebolla crispy, acompañado de una salsa de pepinillos tipo Big Mac.
                            </p>
                        </li>
                        <li>
                            <h4>Happy Bite Burger</h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Beacon-High.png" alt="Hamburguesa Happy Bite con doble queso americano y mermelada de tocineta en pan artesanal.">
                            <p>
                                Hamburguesa artesanal de res (140gr), doble queso tipo Americano acompañado de una mermelada de tocineta.
                            </p>
                        </li>
                    </ul>
                </article>
                <article class="container-home-bakery">
                    <h3>Panadería</h3>
                    <ul>
                        <li>
                            <h4>Palito de queso</h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Palitos.png" alt="Palitos dorados de queso recién horneados.">
                        </li>
                        <li>
                            <h4>Pastel de carne</h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/pasteldecarne.png" alt="Pastel de carne con masa dorada y relleno jugoso.">
                        </li>
                        <li>
                            <h4>Pastel de pollo</h4>
                            <img class="img-pastel-pollo" src="<?php echo get_template_directory_uri(); ?>/img/pastel-pollo2.png" alt="Pastel de pollo horneado con relleno cremoso y corteza crujiente.">
                        </li>
                    </ul>
                </article>
            </div>
        </section>
        <section class="container-delivery">
            <div class="text-delivery">
                <h1>
                    <span class="green-text">Directo a </span>
                    <span class="white-text">tu torre</span>
                </h1>
            </div>
            <div class="delivery-info">
                <div class="img-delivery-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Whatsapp.webp" alt="Logo Whatsapp">
                </div>
                <div class="text-delivery-info">
                    <p class="white-delivery-info">Realiza tu pedido al</p>
                    <a href="https://wa.me/c/573102338458" class="green-number">+57 3102338458</a>
                </div>
            </div>
        </section>
        <section class="container-location">
            <div class="location-map">
                <iframe class="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.0908604705505!2d-74.0128443!3d4.9244607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e40770077d8e0db%3A0x5913e72a77289!2sReserva%20del%20Lago%20Etapa%201!5e0!3m2!1ses-419!2sco!4v1746033348326!5m2!1ses-419!2sco" 
                    width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class='link-map'>
                    <!--<a href="https://maps.app.goo.gl/1TsE5m3J1LFBs8Wn7" target="_blank" rel="noopener noreferrer">
                    🌎 Ver ubicación en Google Maps
                    </a>-->
                </div>
            </div>
            <div class="location-info">
                <h2>Ubicación</h2>
                <p>Consulta nuestra ubicación en Google Maps.</p>
                <p>📍 Reserva del Lago, Cajicá</p>
            </div>
        </section>
        <section class="container-contact-us">
            <h2>¡Haz tu pedido con <br> anticipación!</h2>
            <p>¿Planeas un evento o quieres asegurar varias unidades de un producto? <br> Regístrate y agenda tu reserva fácil y rápido. ¡Nos encargamos del resto!</p>
            <div class="form-background">
                <img src="<?php echo get_template_directory_uri(); ?>/img/hamburguesa_parrilla.jpg" alt="Hamburguesa sobre parrilla con fuego">
                <form action="https://formspree.io/f/mpwdpwpg" method="POST"> <!--To receive the answers directly to gusbites email-->
                    <!-- Personal Info -->
                    <div class="container-form-group-one">
                        <div class="form-group">
                            <label for="nombre-completo">Nombre y apellido</label>
                            <input type="text" id="nombre-completo" name="nombre-completo-usuario" placeholder="Escribe tu nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="numero-celular">Número de celular</label>
                            <input type="tel" id="numero-celular" name="numero-celular" placeholder="Escribe tu numero de celular" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="correo-electronico">Correo electronico</label>
                        <input type="email" id="correo-electronico" name="correo" placeholder="Escribe tu correo electronico (opcional)">
                    </div>
                    <!-- Products -->
                    <div class="container-form-producto" id="productos-container">
                        <div class="bloque-form-producto">
                            <div class="form-group">
                                <label for="producto-1">¿Qué producto deseas?</label>
                                <select id="producto-1" name="producto[]" required>
                                    <option value="">Selecciona un producto</option>
                                    <option value="crunchy-zen">Crunchy Zen Burger</option>
                                    <option value="happy-bite">Happy Bite Burger</option>
                                    <option value="palitos-queso">Palitos de queso</option>
                                    <option value="pastel-carne">Pastel de carne</option>
                                    <option value="pastel-pollo">Pastel de pollo</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cantidad-1">¿Cuántas unidades?</label>
                                <input type="number" id="cantidad-1" name="cantidad[]" min="1" value="1" required>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-add" id="add-product">+ Agregar otro producto</button>
                    <br><br>
                    <div class="form-group full-width">
                        <label for="fecha-pedido">¿Para que fecha necesitas tu pedido?</label>
                        <input type="date" id="fecha-pedido" name="fecha-pedido" required>
                    </div>
                    <button type="submit" class="btn btn-submit">Enviar</button>
                </form>
            </div>
        </section>
    </main>
    <?php wp_footer(); ?>
</body>
</html>
