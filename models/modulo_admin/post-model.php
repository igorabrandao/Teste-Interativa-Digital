<?php

	class PostModel extends MainModel
	{
		/**
		 * Class constructor
		 *
		 * Set the database, controller, parameter and user data.
		 *
		 * @since 0.1
		 * @access public
		 * @param => object $db PDO Conexion object
		 * @param => object $controller Controller object
		*/
		public function __construct( $db = false, $controller = null )
		{
			// Set DB (PDO)
			$this->db = $db;

			// Set the controller
			$this->controller = $controller;

			// Set the main parameters
			$this->parametros = $this->controller->parametros;
		}

		/**
		 * Get the POSTS count
		 *
		 * @since 0.1
		 * @access public
		*/
		public function get_posts_count()
		{
			// Select the necessary data from DB
			$sql = "SELECT COUNT(`ID_POST`) FROM `posts` WHERE `DATA_FECHA` IS NULL";

			// Execute the query
			$query = $this->db->query($sql);

			// Check if query worked
			if ( $query )
				return $query->fetchColumn(0);
			else
				return 0;
		} // get_posts_count

		/**
		 * Get the POSTS list
		 *
		 * @since 0.1
		 * @access public
		*/
		public function get_posts_list()
		{
			// Select the necessary data from DB
			$sql = "SELECT `ID_POST`, `ID_CATEGORIA`, `TITULO`, `SUBTITULO`, 
				`TEXTO`, `TIMESTAMP` 
			FROM 
				`posts` 
			WHERE 
				`DATA_FECHA` IS NULL";

			// Execute the query
			$query = $this->db->query($sql);

			// Check if query worked
			if ( $query )
				return $query->fetchAll();
			else
				return 0;
		} // get_posts_list

		/**
		 * Get the POST information
		 *
		 * @since 0.1
		 * @access public
		 * @id_post_ 	=> post ID
		*/
		public function get_posts_info( $id_post_ )
		{
			// Select the necessary data from DB
			$sql = "SELECT `ID_POST`, `ID_CATEGORIA`, `TITULO`, `SUBTITULO`, 
				`TEXTO`, `TIMESTAMP` 
			FROM 
				`posts` 
			WHERE 
				`ID_POST` = " . $id_post_ . " AND
				`DATA_FECHA` IS NULL";

			// Execute the query
			$query = $this->db->query($sql);

			// Check if query worked
			if ( $query )
				return $query->fetchAll();
			else
				return 0;
		} // get_posts_info
	}

?>