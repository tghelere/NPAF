<nav class="col-md-6">
    <!-- <ul class="menu list-unstyled list-inline">
        <li class="list-inline-item text-uppercase">
            <a title="Sobre" href="/sobre">Sobre</a>
        </li>
        <li class="list-inline-item text-uppercase">
            <a title="Atendimentos" href="/atendimentos">Atendimentos</a>
        </li>
        <li class="list-inline-item text-uppercase">
            <a title="Novidades" href="/novidades">Novidades</a>
        </li>
        <li class="list-inline-item text-uppercase">
            <a title="E-book" href="/ebook">E-book</a>
        </li>
        <li class="list-inline-item text-uppercase">
            <a title="Contato" href="/contato">Contato</a>
        </li>
    </ul> -->
    <? wp_nav_menu([
        'theme_location' => 'header-menu',
        'menu_class' => 'menu list-unstyled list-inline',
    ]); ?>
</nav>