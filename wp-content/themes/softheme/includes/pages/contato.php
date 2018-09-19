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
        <li class="list-inline-item">
            <a class="googleplus" href="<?= URL_GP; ?>" target="_blank" title="Google Plus">
                <span>Google Plus</span>
            </a>
        </li>
    </ul>
</div>
<div class="row">
    <p></p>
</div>
<div class="row">
    <div class="col-md-6 p-0">
        <p class="pb-3">Consultório <? bloginfo('name'); ?> - <?= ADDRESS; ?></p>
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/consultorio.jpg" alt="<? bloginfo('name'); ?>">
    </div>
    <div class="col-md-6">
        <form action="" class="contact mx-auto">
            <div class="form-group quarenta">
                <label class="name" for="name">Nome</label>
                <input id="name" name="name" class="form-control" placeholder="Mariana Alencar" type="text">
            </div>
            <div class="form-group quarenta">
                <label class="email" for="email">E-mail*</label>
                <input id="email" name="email" class="form-control" placeholder="nome@email.com" type="email">
            </div>
            <div class="form-group quarenta">
                <label class="phone" for="phone">Telefone de Contato*</label>
                <input id="phone" name="phone" class="form-control" placeholder="44 9999-2233*" type="tel">
            </div>
            <div class="form-group mt-4 pt-5">
                <textarea class="form-control" placeholder="Mensagem" id="message" name="message" rows="8"></textarea>
            </div>
            <button class="float-right mt-3" type="submit">ENVIAR</button>
        </form>
    </div>
</div>