<div class="row">
    <h1>Atendimento</h1>
    <div class="row flexbox">
        <div class="col-md-4 col">
            <div class="col-md-12 one">
                <h3 class="mb-5">Consulta</h3>
                <p>Atendimento presencial em consultório Nutricional com suporte de avaliação Bioimpedância (avaliação de composição corporal) e análise e mentoria Health Coach.</p>
                <p class="mb-5">Segunda a sexta-feira, <br />das 9h às 18h <br /><?= ADDRESS; ?></p>
                <button type="button" title="Solicite agendamento" class="btn btn-branco mx-auto d-block mt-5 text-uppercase" data-toggle="modal" data-target="#modalSmc">Solicite agendamento</button>
            </div>
        </div>
        <div class="col-md-4 col">
            <div class="col-md-12 two">
                <h3>Programa Cardápio em Casa - assinatura de alimentação saudável personalizada</h3>
                <p>A partir do plano nutricional feito em consulta, a Nutri Paula entrega as refeições em casa, conforme planejado.</p>
                <p>Cardápio variado e equilibrado desenvolvido por ela e preparado com o maior cuidado e higiene por sua equipe.</p>
                <p>Consultar disponibilidade <br>Disponível somente para Maringá-PR</p>
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/ico_delivery.png" alt="Delivery" class="img-fluid d-block mx-auto">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col">
            <div class="col-md-12 three">
                <h3>Cursos</h3>
                <p>Periodicamente a Nutri Paula Ayres Ferreira ministra cursos dentro da temática de alimentação saudável, como técnicas de preparo de alimentos por exemplo. Fique atento na página de <u>Cursos</u></p>
                <p>Se não quiser perder os lançamentos, inscreva seu e-mail aqui Prometemos não enviar spams ;)</p>
                <div class="row" id="form_newsletter">
                    <div class="col-md-12">
                        <form action="" class="newsletter mx-auto">
                            <div class="form-group campo">
                                <label class="name" for="name">Nome</label>
                                <input id="name" name="name" class="form-control" placeholder="Mariana Alencar" type="text">
                            </div>
                            <div class="form-group campo">
                                <label class="email" for="email">E-mail*</label>
                                <input id="email" name="email" class="form-control" placeholder="nome@email.com" type="email">
                            </div>
                            <button class="btn py-3 px-5 d-block mx-auto sbmt-newsletter text-uppercase" title="Cadastrar" type="submit">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
