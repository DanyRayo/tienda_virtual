<?php
	require_once("autoload.php");

	$objPersona = new Usuario();
	//$insert = $objPersona->insertUsuario("Fernando","Cabrera",876876678,"fernando@info.com");
	//echo "Respuesta de Insert: ".$insert;
	$users = $objPersona->getUsuarios();
	print_r("<pre>");
 	print_r($users);
	print_r("</pre>");

	//Actualizar
	$user = $objPersona->updateUsuario(1,"Julieta","Cardona",876876678,"marta@info.com");
	echo $user;

	//Ver Usuario
	$userId = $objPersona->getUsuario(1);
	print_r("<pre>");
 	print_r($userId);
	print_r("</pre>");

	//Ver Usuario
	//$userDel = $objPersona->delUser(3);
	//echo $userDel;
 ?>