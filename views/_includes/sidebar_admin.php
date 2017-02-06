<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="<?php echo HOME_URI;?>/assets/images/interativa.jpg" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Interativa Digital</div>
                <div class="email">diretoria@interativadigital.com.br</div>
            </div>
        </div>
        <!-- #User Info -->

        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MENU DE NAVEGAÇÃO</li>
                <li class="active">
                    <a href="<?php echo HOME_URI . '/modulo_admin/home_admin';?>">
                        <i class="material-icons">home</i>
                        <span>Página inicial</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME_URI . '/modulo_admin/gerenciar_posts';?>">
                        <i class="material-icons">create</i>
                        <span>Gerenciar posts</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME_URI . '/modulo_admin/gerenciar_categorias';?>">
                        <i class="material-icons">assignment</i>
                        <span>Gerenciar categorias</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="<?php echo HOME_URI; ?>">
                        <i class="material-icons">directions_run</i>
                        <span>Ir para o Weblog</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME_URI; ?>/modulo_admin?action=logout">
                        <i class="material-icons">input</i>
                        <span>Sign Out</span>
                    </a>
                </li>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>