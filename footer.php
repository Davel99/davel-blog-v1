</main>

<footer id="main-footer">
    <div class="m-0 row">
        <div class="col-lg-8 row m-0 p-0">
            <div class="col-lg-12">
                <a class="brand-container px-5" href="#">
                    <span id="brandName">VENTURTAM</span>
                </a>
            </div>
            <div class="col-lg-12 gral-icon-container">
                <a href="https://facebook.com/venturtam" target="_blank">
                    <i class="fa-brands fa-square-facebook"></i>
                </a>
                <a href="https://instagram.com/venturtam" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://wa.link/sgqbxc" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>

        </div>

        <div class="col-lg-2 footer-aside">
            <div class="footer-heading">
                ¡Conócenos!
            </div>
            <ul class="footer-list">
                <li>
                    <a href="<?= site_url() ?>/nosotros">Nosotros</a>
                </li>
                <li>
                    <a href="<?= site_url() ?>/contacto">Contacto</a>
                </li>
                <li>
                    <a href="<?= site_url() ?>/destinos">Destinos</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-2 footer-aside">
            <div class="footer-heading">
                Aviso legal
            </div>
            <ul class="footer-list">
                <li>
                    <a href="<?= site_url() ?>/terminos-y-condiciones">Términos y condiciones</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="end-footer">
        VENTURTAM &copy; <?= date('Y'); ?>
    </div>


</footer>
<?php wp_footer(); ?>
</body>

</html>