<?php
session_start();

	try 
	{
		if (!isset($_GET['action']))
		{
			include('./controller/login.php');
		}
		else 
		{
			switch ($_GET["action"]) {
				case  'LOGIN':
					include("/controlleur/login.php");
					break;
                case 'LOGOUT':
                    include("/controlleur/sign_out.php");
                    break;
				case 'profil':
					include("/controlleur/info_profil.php");
					break;

			}
		}
	}
	catch(Exception $e)
	{
		echo 'Erreur : '. $e->getMessage();
	}
?>
