<div class="p-2" style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/venturtam-fondo.png);">
    <div id="post-container" class="col-md-12">
        <div class="venturtam-content-card">

            <?php if (get_post_type() == 'viajes') : ?>

                <?php
                $destinoID = get_post_field('destino')[0];
                $eventDate = new Datetime(get_field('dia_del_evento'));
                ?>

                <div class="venturtam-content-card p-3 mb-3">
                    <div class="row m-0">
                        <div class="col-md-6 text-center">
                            <h2>Destino:</h2>
                            <span id="destino-title"> <?= get_the_title($destinoID); ?></span>

                        </div>
                        <div class="col-md-6">
                            <table class="table table-primary table-hover table-striped align-middle text-center">
                                <tr>
                                    <td>
                                        <b>Día del viaje:</b>
                                    </td>
                                    <td> <?= $eventDate->format('d/M/Y'); ?> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Hora de comienzo:</b>
                                    </td>
                                    <td> <?= the_field('hora_de_comienzo'); ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Hora de regreso:</b>
                                    </td>
                                    <td> <?= the_field('hora_de_retorno'); ?></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>

            <?php endif; ?>

            <?php the_content(); ?>

        </div>
    </div>
</div>