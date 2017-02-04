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
		 * Load the page "http://www.example.com/Detail_Data/modulo_admin/gerenciar_funcionario"
		*/
		public function gerenciarfuncionario()
		{
			// Page title
			$this->title = 'Gerenciar Funcionários';

			// Function parameter
			$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

			/** Load files from view **/

			// Load model
			$modelo = $this->load_model('modulo_admin/funcionario-model');

			// /views/_includes/header.php
			require ABSPATH . '/views/_includes/header.php';

			// /views/_includes/navbar.php
			require ABSPATH . '/views/_includes/navbar.php';

			// /views/_includes/sidebar.php
			require ABSPATH . '/views/_includes/sidebar.php';

			// /views/_includes/style_selector.php
			require ABSPATH . '/views/_includes/style_selector.php';

			// /views/modulo_admin/_breadcrumb_gerenciar_funcionario.php
			require ABSPATH . '/views/modulo_admin/_breadcrumb_gerenciar_funcionario.php';

			// /views/_includes/search_box.php
			require ABSPATH . '/views/_includes/search_box.php';

			// /views/modulo_admin/gerenciar_funcionario-view.php
			require ABSPATH . '/views/modulo_admin/gerenciar_funcionario-view.php';

			// /views/_includes/footer.php
			require ABSPATH . '/views/_includes/footer.php';

			// /views/modulo_admin/_include_gerenciar_funcionario.php
			require ABSPATH . '/views/modulo_admin/_include_gerenciar_funcionario.php';

			//***********************************************************
            //** EVENT HANDLER'S
            //***********************************************************

            // Store the action from $_GET ( insert, login, delete, etc )
            if ( isset( $_REQUEST["action"] ) )
            {
                // Auxiliar variables
                $action = $_REQUEST["action"];

                // Check the action
                switch ( $action )
                {
                    // Search informations related the specified CNPJ
                    case 'delete':
                    {
                    	// Check wich item should be excluded
                    	if ( strcmp($_REQUEST["type"], "employee") == 0 )
                    	{
	                        // Call function from model instance
	                        $modelo->delete_item($_REQUEST["type"], $_REQUEST["employee_ID"]);
	                    }

						break;
                    }
                }
            }
		}

	} // class ModuloAdminController
?>