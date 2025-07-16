
<?php get_header(); ?>
<main>
    <section class="container-home" id="home">
        <div class="container-background-hamburguer">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hamburguesa_inicial_3.png" alt="Hamburguesa en el aire">
            <div class="container-home-texto">
                <p id="texto-uno">¿Antojo de <br> última hora?</p>
                <a href="https://wa.me/c/573102338458" id="texto-dos" target="_blank" aria-label="Haz tu pedido por WhatsApp">
                    !Ordena ya!
                </a>
            </div>
        </div>
        <div>
            <!--space to add more products--> 
        </div>
    </section>
    <section class="container-delivery" id="delivery">
        <div class="text-delivery">
            <h1>
                <span class="green-text">Directo a </span>
                <span class="white-text">tu torre</span>
            </h1>
        </div>
        <div class="delivery-info">
            <p class="white-delivery-info">Realiza tu pedido al</p>
            <div class="img-delivery-info">
                <a href="https://wa.me/c/573102338458" class="green-number">+57 3102338458</a>
                <img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp_3_.png" alt="whatsapp icono">
            </div>
        </div>
    </section>
    <section class="container-fast-food" id="productos">
        <article class="container-burguers-menu" aria-labelledby="burgers-title">
            <header class="burguers-menu-title">
                <h3 id="burgers-title">Nuestras Hamburguesas</h3>
            </header>
            <ul>
                <li>
                    <header>
                        <h4>Crunchy Zen Burger</h4>
                    </header>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/onion-High_2.png"
                            alt="Hamburguesa Crunchy Zen con cebolla crispy y salsa estilo Big Mac sobre pan artesanal."
                            loading="lazy">
                    </figure>
                    <p>
                        Hamburguesa artesanal de res (125gr), lechuga, tomate, queso mozzarella, cebolla crispy, acompañado de una salsa de pepinillos tipo Big Mac.
                    </p>
                </li>
                <li>
                    <header>
                        <h4>Happy Bite Burger</h4>
                    </header>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/beacon-high_5_.png"
                            alt="Hamburguesa Happy Bite con doble queso americano y mermelada de tocineta en pan artesanal."
                            loading="lazy">
                    </figure>
                    <p>
                        Hamburguesa artesanal de res (140gr), doble queso tipo Americano acompañado de una mermelada de tocineta.
                    </p>
                </li>
                <li>
                    <header>
                        <h4>Tranqui Vibe Burger</h4>
                    </header>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/la-tranqui_6.png" 
                            alt="Hamburguesa Tranqui con queso americano y vegetales"
                            loading="lazy">
                    </figure>
                    <p>
                        Hamburguesa artesanal de res (125gr), queso tipo Americano, tocineta, lechuga, tomate, cebolla fresca, acompañado de salsa BBQ miel y mayonesa.
                    </p>
                </li>
            </ul>
        </article>
    </section>
    <!--<section class="how-started">
        <div class="text-how-started">
            <h2>
                Así empezo Gus Bites
            </h2>
        </div>
        <div class="video-how-started">
            VIDEO
        </div>
    </section>-->
    <section class="container-location" id="location">
        <div class="location-map">
            <div id="map">
                <!--mapbox js, css, and mapbox-init.js file-->
            </div>
        </div>
        <div class="location-info">
            <h2>Ubicación</h2>
            <p>Consulta nuestra ubicación en Google Maps.</p>
            <p>📍 Reserva del Lago, Cajicá</p>
        </div>
    </section>
    <section class="container-contact-us" id="contact_us">
        <div class="form-background">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hamburguesa_parrilla.jpg" alt="Hamburguesa sobre parrilla con fuego">
            <form action="https://formspree.io/f/mpwdpwpg" method="POST"> <!--To receive the answers directly to gusbites email-->
                <!-- Personal Info -->
                <div class="reservation-text">
                    <h2>¿Quieres reservar para un evento?</h2>
                    <p>Regístrate y agenda tu reserva fácil y rápido.</p>
                </div>
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
<?php get_footer(); ?>
