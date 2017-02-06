<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">

        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MENU DE NAVEGAÇÃO</li>
                <li class="active">
                    <a href="<?php echo HOME_URI;?>">
                        <i class="material-icons">home</i>
                        <span>Página inicial</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">widgets</i>
                        <span>Posts por categoria</span>
                    </a>

                    <?php
                        // Load model
                        $modelo_categoria = $this->load_model('modulo_admin/categoria-model');

                        // Categories list
                        $category_list = $modelo_categoria->get_categories_list();

                        // Start printing the menu
                        echo "<ul class='ml-menu'>";

                        foreach ( $category_list as $value )
                        {
                            // Print menu content
                            echo "<li>
                                    <a href='" . HOME_URI . '?categoryID=' . encrypt_decrypt('encrypt', $value["ID_CATEGORIA"]) . "'>
                                        <span>" . $value["NOME"] . "</span>
                                    </a>
                                </li>";
                        }

                        // Close menu
                        echo "</ul>";
                    ?>

                </li>
                <li>
                    <a href="<?php echo HOME_URI;?>/modulo_admin">
                        <i class="material-icons">lock</i>
                        <span>Área restrita</span>
                    </a>
                </li>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>