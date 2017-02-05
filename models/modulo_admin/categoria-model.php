<?php

	class CategoriaModel extends MainModel
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
		 * Get the categories count
		 *
		 * @since 0.1
		 * @access public
		*/
		public function get_categories_count()
		{
			// Select the necessary data from DB
			$sql = "SELECT COUNT(`ID_CATEGORIA`) FROM `categorias` WHERE `DATA_FECHA` IS NULL";

			// Execute the query
			$query = $this->db->query($sql);

			// Check if query worked
			if ( $query )
				return $query->fetchColumn(0);
			else
				return 0;
		} // get_categories_count

		/**
		 * Get the categories list
		 *
		 * @since 0.1
		 * @access public
		*/
		public function get_categories_list()
		{
			// Select the necessary data from DB
			$sql = "SELECT `ID_CATEGORIA`, `NOME`
			FROM 
				`categorias` 
			WHERE 
				`DATA_FECHA` IS NULL";

			// Execute the query
			$query = $this->db->query($sql);

			// Check if query worked
			if ( $query )
				return $query->fetchAll();
			else
				return 0;
		} // get_categories_list

		/**
		 * Get the categories information
		 *
		 * @since 0.1
		 * @access public
		 * @id_categorie_ 	=> post ID
		*/
		public function get_categories_info( $id_categorie_ )
		{
			// Select the necessary data from DB
			$sql = "SELECT `ID_CATEGORIA`, `NOME`
			FROM 
				`categories` 
			WHERE 
				`ID_POST` = " . $id_categorie_ . " AND
				`DATA_FECHA` IS NULL";

			// Execute the query
			$query = $this->db->query($sql);

			// Check if query worked
			if ( $query )
				return $query->fetchAll();
			else
				return 0;
		} // get_categories_info
	}

?>