<div class="modal right fade show" id="modalSmc" tabindex="-1" role="dialog" aria-labelledby="modalSmcLabel">
	<div class="modal-dialog h-100 d-flex flex-column justify-content-center my-0" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row mb-4">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/PaulaAyresFerreira_logo_vetor-branco.svg" alt="<? bloginfo('name'); ?>"></div>
                            <div class="col-md-5 addressphone">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item whatsapp">
                                        <a href="<?= URL_WA; ?>" title="<?= PHONE_F; ?>" target="_blank"><?= PHONE_F; ?></a>
                                    </li>
                                    <li class=" list-inline-item address">
                                        <a href="<?= URL_MAP; ?>" title="<?= ADDRESS; ?>" target="_blank"><?= ADDRESS; ?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-2 social">
                                <ul class="list-unstyled list-inline socialicon">
                                    <li class="list-inline-item">
                                        <a class="facebook" href="<?= URL_FB; ?>" target="_blank" title="Facebook">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <!-- <li class="list-inline-item">
                                        <a class="googleplus" href="<?= URL_GP; ?>" target="_blank" title="Google Plus">
                                            <span>Google Plus</span>
                                        </a>
                                    </li> -->
                                    <li class="list-inline-item">
                                        <a class="instagram" href="<?= URL_IG; ?>" target="_blank" title="Instagram">
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 mb-2">
                        <h1>Agendar Consulta</h1>
                    </div>
                </div>
                <div class="row">
                    <form action="" class="col-md-12 form-smc">
                        <div class="col-md-6 float-left pl-0 pr-5">
                            <div class="form-group campo">
                                <label class="name" for="name">Nome</label>
                                <input id="name" name="name" class="form-control" placeholder="Mariana Alencar" type="text">
                            </div>
                            <div class="form-group campo">
                                <label class="email" for="email">E-mail*</label>
                                <input id="email" name="email" class="form-control" placeholder="nome@email.com" type="email">
                            </div>
                            <div class="form-group campo">
                                <label class="phone" for="phone">Telefone de Contato*</label>
                                <input id="phone" name="phone" class="form-control" placeholder="44 9999-2233*" type="tel">
                            </div>
                            <div class="ckbx">
                                <legend>COMO CHEGOU ATÉ A DRA PAULA?*</legend>
                                <div class="form-check form-check-inline">
                                    <label class="ckbx-ctnr">INDICAÇÃO
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="ckbx-ctnr">GOOGLE
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="ckbx-ctnr">MÍDIAS SOCIAIS
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 float-left pl-5 pr-0 mt-4">
                            <div class="form-group campo">
                                <textarea class="form-control mb-4" placeholder="Fale um pouco sobre o motivo da consulta" id="message" name="message" rows="6"></textarea>
                                <button class="float-right mt-3 btn rounded-0" type="submit">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>
</div>