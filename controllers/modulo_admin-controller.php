<?php

	/**
	 * modulo_admin - Controller modulo_admin
	 *
	 * @package IgorMVC
	 * @since 0.1
	*/
	class ModuloAdminController extends MainController
	{
		/** Functions section
		 * Load the page "http://www.example.com/modulo_admin/"
		*/
		public function index( )
		{
			// Page title
			$this->title = 'Autenticação de usuário';

			// Function parameter
			$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

			/** Load files from view **/

			// Load model
			$modelo = $this->load_model('modulo_admin/modulo_login-model');

			// /views/_includes/header.php
			require ABSPATH . '/views/_includes/header.php';

			// /views/modulo_admin/login-view.php
			require ABSPATH . '/views/modulo_admin/login-view.php';

		} // index

		/**
		 * Load the page "http://www.example.com/home_admin.php"
		*/
		public function homeadmin( )
		{
			// Page title
			$this->title = 'Página Inicial';

			// Function parameter
			$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

			// Load model
			$modelo = $this->load_model('modulo_admin/modulo_login-model');

			/** Load files from view **/

			// /views/_includes/header.php
			require ABSPATH . '/views/_includes/header.php';

			// /views/_includes/security.php (just to admin pages)
			require ABSPATH . '/views/_includes/security.php';

			// /views/_includes/loading.php
			require ABSPATH . '/views/_includes/loading.php';

			// /views/_includes/navbar.php
			require ABSPATH . '/views/_includes/navbar_admin.php';

			// /views/_includes/sidebar.php
			require ABSPATH . '/views/_includes/sidebar.php';

			// /views/modulo_admin/home-view.php
			require ABSPATH . '/views/modulo_admin/home_admin-view.php';

			// /views/_includes/footer.php
			require ABSPATH . '/views/_includes/footer.php';
		} // index

	} // class homeadmin
?>