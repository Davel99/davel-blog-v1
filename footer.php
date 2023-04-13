</main>

<footer class="m-0 row">
    <div class="col-md-8" id="footer-banner_">
        <div id="footer-banner__container">
            <div class="gral-gold-title">
                Davel Gomoz
            </div>
        </div>
        <?php
            get_template_part('template-parts/gral', 'iconContainer');
        ?>
    </div>
    <div class="col-md-4" id="footer-list">
        <div class="border rounded border-white m-0 row icon-container">
            <div class="col-md-6">
                <a href="#">
                    <i class="fa fa-home"></i>
                    Inicio
                </a>
            </div>
            <div class="col-md-6">
                <a href="#">
                    <i class="fa-brands fa-wordpress"></i>
                    Blog
                </a>
            </div>
            <div class="col-md-6">
                <a href="#">
                    <i class="fa-solid fa-address-book"></i>
                    Contacto
                </a>
            </div>
            <div class="col-md-6">
                <a href="#">
                    <i class="fa-solid fa-wallet"></i>
                    Libros
                </a>
            </div>
        </div>

        <div id="footer-list__copyright">
            DAVEL GOMOZ &copy; <?= date('Y'); ?>
        </div>

    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>