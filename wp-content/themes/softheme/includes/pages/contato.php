<div class="row">
    <h1>Contato</h1>
</div>
<div class="row mb-5">
    <p>Fale com a Nutri Paula Ayres Ferreira e tire suas dúvidas!</p>
    <p>Utilize as mídias sociais ou o formulário abaixo!</p>
</div>
<div class="row mb-4">
    <p class="pb-4">Acompanhe pelas Redes Sociais</p>
    <ul class="list-unstyled list-inline socialicon">
        <li class="list-inline-item">
            <a class="facebook" href="<?= URL_FB; ?>" target="_blank" title="Facebook">
                <span>Facebook</span>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="instagram" href="<?= URL_IG; ?>" target="_blank" title="Instagram">
                <span>Instagram</span>
            </a>
        </li>
        <!-- <li class="list-inline-item">
            <a class="googleplus" href="<?= URL_GP; ?>" target="_blank" title="Google Plus">
                <span>Google Plus</span>
            </a>
        </li> -->
    </ul>
</div>
<div class="row">
    <div class="col-md-6 p-0">
        <p class="pb-3">Consultório <? bloginfo('name'); ?> - <?= ADDRESS; ?></p>
        <img class="img-fluid" src="<? bloginfo('template_url'); ?>/assets/images/consultorio.jpg" alt="<? bloginfo('name'); ?>">
    </div>
    <div class="col-md-6">
        <?
            the_post();
            the_content();
        ?>
    </div>
</div>