<?php
	/**
	 * Home - Index Controller
	 *
	 * @package IgorMVC
	 * @since 0.1
	*/
	class HomeController extends MainController
	{
		/**
		 * Load the page "http://www.example.com/home-view.php"
		*/
		public function index( )
		{
			// Page title
			$this->title = 'Página Inicial';

			// Function parameter
			$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

			/** Load files from view **/

			// /views/_includes/header.php
			require ABSPATH . '/views/_includes/header.php';

			// /views/_includes/loading.php
			require ABSPATH . '/views/_includes/loading.php';

			// /views/_includes/navbar.php
			require ABSPATH . '/views/_includes/navbar.php';

			// /views/_includes/sidebar.php
			require ABSPATH . '/views/_includes/sidebar.php';

			// /views/home/home-view.php
			require ABSPATH . '/views/home/home-view.php';

			// /views/_includes/footer.php
			require ABSPATH . '/views/_includes/footer.php';
		} // index

		/**
		 * Load the page "http://www.example.com/visualizar_post.php"
		*/
		public function visualizarpost( )
		{
			// Page title
			$this->title = 'Visuualizar post';

			// Function parameter
			$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

			// Load models
			$modelo = $this->load_model('modulo_admin/modulo_login-model');
			$modelo_posts = $this->load_model('modulo_admin/post-model');
			$modelo_categorias = $this->load_model('modulo_admin/categoria-model');


			/** Load files from view **/

			// /views/_includes/header.php
			require ABSPATH . '/views/_includes/header.php';

			// /views/_includes/security.php (just to admin pages)
			require ABSPATH . '/views/_includes/security.php';

			// /views/_includes/loading.php
			require ABSPATH . '/views/_includes/loading.php';

			// /views/_includes/navbar.php
			require ABSPATH . '/views/_includes/navbar.php';

			// /views/_includes/sidebar.php
			require ABSPATH . '/views/_includes/sidebar.php';

			// /views/home/visualizar_post-view.php
			require ABSPATH . '/views/home/visualizar_post-view.php';

			// /views/_includes/footer.php
			require ABSPATH . '/views/_includes/footer.php';

		} // visualizarpost

	} // class HomeController

?>