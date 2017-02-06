<section class="content">
    <div class="container-fluid">

        <?php

            // Check if the category ID was informed
            if ( isset($_GET['postID']) && strcmp($_GET['postID'], "") != 0 )
            {
                // Get the category ID
                $post_id = encrypt_decrypt('decrypt', $_GET['postID']);

                // Load category information
                $post_info = $modelo_posts->get_posts_info($post_id);
                $post_info = $post_info[0];
            }
            else
            {
                ?><script>alert("Houve um problema com o identificador do post. Por favor, tente novamente.");
                window.location.href = "<?php echo HOME_URI; ?>";</script> <?php
                return false;
            }

        ?>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Visualização de posts
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h1>
                            <?php
                                if ( isset($post_info["TITULO"]) && strcmp($post_info["TITULO"], "") != 0 )
                                {
                                    echo $post_info["TITULO"];
                                }
                            ?>
                        </h1>
                        <p class="m-b-30">
                            <?php
                                if ( isset($post_info["SUBTITULO"]) && strcmp($post_info["SUBTITULO"], "") != 0 )
                                {
                                    echo $post_info["SUBTITULO"];
                                }
                            ?>
                        </p>

                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                    <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic_2" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic_2" data-slide-to="2"></li>
                                        </ol>
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img src="<?php
                                                    if ( isset($post_info["FOTO"]) && strcmp($post_info["FOTO"], "") != 0 )
                                                    {
                                                        echo HOME_URI . '/resources/posts/' . $post_info["ID_POST"] . '/' . file_basename($post_info["FOTO"]) . '.' . file_ext($post_info["FOTO"]);
                                                    }
                                                    else
                                                    {
                                                        echo HOME_URI . '/assets/images/animation-bg.jpg';
                                                    }
                                                ?>" />
                                                <div class="carousel-caption">
                                                    <h3><?php
                                                        if ( isset($post_info["TITULO"]) && strcmp($post_info["TITULO"], "") != 0 )
                                                        {
                                                            echo $post_info["TITULO"];
                                                        }
                                                    ?></h3>
                                                    <p><?php
                                                        if ( isset($post_info["SUBTITULO"]) && strcmp($post_info["SUBTITULO"], "") != 0 )
                                                        {
                                                            echo $post_info["SUBTITULO"];
                                                        }
                                                    ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #END# With Captions -->

                        <p class="m-t-10 m-b-30">
                            <?php
                                if ( isset($post_info["TEXTO"]) && strcmp($post_info["TEXTO"], "") != 0 )
                                {
                                    echo $post_info["TEXTO"];
                                }
                            ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>