<?php 

namespace App\Controllers;

use App\Models\Info_site_model;

class Home extends BaseController
{
	public function index() // affichage de la vue "home" à la connexion 
	{
		echo view('home.php');
	}


	public function index_info($p) // appel de la methode de mon model qui requete sur ma table et l'affiche dans la view test.php
	{
		$test = new Info_site_model();
		$data['liste'] = $test->get_site($p);
		$data['note'] = $p; // récuperation de l'id que l on réutilisera dans l'url et ainsi le passer en argument pour notre prochaine méthode
		$data['skeleton'] = $p;
		echo view('home.php');
		echo view('info_site.php',$data);
	}

	public function index_info_note($p) // affichage des notes du site concerné
	{
		$test1 = new Info_site_model();
		$data['liste_n'] = $test1->get_notes($p);
		$data['index'] = $p;
		echo view('home.php');
		echo view('notes.php',$data); 
	}

	public function index_info_skeleton($p) // affichage des squelettes du site concerné 
	{
		$test2 = new Info_site_model();
		$data['liste_s'] = $test2->get_skeletons($p);
		$data['index'] = $p;
		echo view('home.php');
		echo view('skeletons.php',$data); 
	}

	public function skel_info($p) // affichage des infos du squelette concerné
	{
		$test3 = new Info_site_model();
		$data['dino_info'] = $test3->get_dino_info($p);
		$data['index'] = $p;
		echo view('home.php');
		echo view('dino_info',$data);
	}
}
