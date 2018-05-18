<?php 
$config = [
	// configuration globale
	'site_name'	=> 'Odyssey Discovery',
	'env' => 'dev',

   	//information de connexion à la bdd
	'db_host' => '127.0.0.1',
    'db_user' => 'root',
    'db_pass' => '',
    'db_name' => '',
    'db_table_prefix' => '',

	//authentification, autorisation
	'security_user_table' => 'users',
	'security_id_property' => 'id',
	'security_username_property' => 'username',
	'security_email_property' => 'email',
	'security_password_property' => 'password',
	'security_roles_property' => 'roles',

	'security_login_route_name' => 'signin',
];

require 'routes.php';