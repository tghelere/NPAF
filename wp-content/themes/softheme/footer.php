            </div>
        </main>
        <footer>
            <div class="container-fluid">
                <div class="row first-bar">
                    <h2>Nutri Paula Ayres Ferreira no Instagram</h2>
                    <div ></div>
                </div>
                <div class="row" id="instafeed"></div>
            </div>
            <div class="container-fluid verde">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row first-ln">
                                <div class="col-md-4 foto">
                                    <img class="rounded-circle img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/Paula_thumbrodape.jpg" alt="">
                                </div>
                                <div class="col-md-8">
                                    <p>Nutri Paula Ayres Ferreira é nutricionista (CNR8-4875) em Maringá. Atende principalmente as áreas de nutrição funcional, emagrecimento, dieta vegan e vegetariana e distúrbios alimentares</p>
                                </div>
                            </div>
                            <div class="row second-ln">
                                <div class="col-md-6 left">
                                    <ul class="list-unstyled list-inline socialicon">
                                        <li class="list-inline-item">
                                            <a class="facebook" href="<?= URL_FB; ?>" target="_blank" title="Facebook">
                                                <span>Facebook</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="googleplus" href="<?= URL_GP; ?>" target="_blank" title="Google Plus">
                                                <span>Google Plus</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="instagram" href="<?= URL_IG; ?>" target="_blank" title="Instagram">
                                                <span>Instagram</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 right">
                                    <ul class="list-unstyled list-inline">
                                        <li class="whatsapp">
                                            <a href="<?= URL_WA; ?>" title="<?= PHONE_F; ?>" target="_blank"><?= PHONE_F; ?></a>
                                        </li>
                                        <li class="address">
                                            <a href="<?= URL_MAP; ?>" title="<?= ADDRESS; ?>" target="_blank"><?= ADDRESS; ?></a>
                                       </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mapa">
                            <?= EMBED_MAP; ?>
                        </div>
                    </div>
                </div>
                <div class="row copyright">
                    <div class="container">
                        <div class="col-md-6">
                            <p class="text-uppercase">DESENVOLVIDO POR SOFTHING - <? bloginfo('name'); ?> / TODOS OS DIREITOS RESERVADOS - <?= date('Y'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="<? bloginfo('template_url'); ?>/assets/js/scripts.min.js"></script>
        <? wp_footer(); ?>
    </body>
</html>