<section class="content">
    <div class="container-fluid">

        <?php

            // Check if the category ID was informed
            if ( isset($_GET['categoryID']) && strcmp($_GET['categoryID'], "") != 0 )
            {
                // Get the category ID
                $category_id = encrypt_decrypt('decrypt', $_GET['categoryID']);

                // Get the posts related to a specific category
                $posts_list = $modelo_posts->get_posts_list($category_id);

                // Load category information
                $category_info = $modelo_categorias->get_category_info($category_id);
                $category_info = $category_info[0];
            }
            else
            {
                // Get the entire post list
                $posts_list = $modelo_posts->get_posts_list();
            }

        ?>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="header">
                        <h2>
                            <?php
                                if ( isset($category_info["NOME"]) && strcmp($category_info["NOME"], "") != 0 )
                                {
                                    // Check if any post was laoded
                                    if ( sizeof($posts_list) == 0 )
                                    {
                                        echo "Não há posts para a categoria [" . $category_info["NOME"] . "]";
                                        echo "<small>Como não há posts para esta categoria, iremos trazer todos os posts disponíveis.</small>";

                                        // Get the entire post list
                                        $posts_list = $modelo_posts->get_posts_list();
                                    }
                                    else
                                    {
                                        echo "Categoria [" . $category_info["NOME"] . "]";
                                        echo "<small>Confira abaixo os nossos posts sobre " . $category_info["NOME"] . "</small>";
                                    }
                                }
                                else
                                {
                                    echo "BEM-VINDO AO WEBLOG INTERATIVA";
                                    echo "<small>Abaixo se encontram os posts publicados mais recentemente, aproveite!</small>";
                                }
                            ?>
                        </h2>
                    </div>
                    <div class="body">

                        <?php

                            // Auxiliary variables
                            $counter = 0;
                            $limit_row = 4;

                            // Print a new row
                            echo "<div class='row'>";

                            // Run through posts list
                            foreach ( $posts_list as $value )
                            {
                                // Check if the register exists
                                if ( isset($value["ID_POST"]) && strcmp($value["ID_POST"], "") != 0 )
                                {
                                    // Check if it's necessary print a new row
                                    if ( $counter == $limit_row )
                                    {
                                        // Close the previous row
                                        echo "</div>";

                                        // Open a new row
                                        echo "<div class='row'>";
                                    }

                                    // View url
                                    $view_url = HOME_URI . '/home/visualizar_post?postID=' . encrypt_decrypt('encrypt', $value["ID_POST"]);

                                    // Print the post overview
                                    echo "<div class='col-sm-6 col-md-3'>
                                        <div class='thumbnail'>
                                            <img style='width: 500px; height: 150px;' alt='" . $value["TITULO"] . "' title='" . $value["TITULO"] . "' src='" . HOME_URI . "/resources/posts/" . $value["ID_POST"] . "/" . file_basename($value["FOTO"]) . "." . file_ext($value["FOTO"]) . "' />
                                            <div class='caption'>
                                                <h3>" . $value["TITULO"] . "</h3>
                                                <p>" . substr($value["TEXTO"], 0, 250) . "...</p>
                                                <p>
                                                    <a href='" . $view_url . "' class='btn btn-primary waves-effect' role='button'>LER POST</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>";

                                    // Sum the counter
                                    $counter++;
                                }

                            }

                            // Close the row
                            echo "</div>";

                        ?>

                        <div class="row">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>