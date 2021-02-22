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
		$info_site = new Info_site_model();
		$data['liste'] = $info_site->get_site($p);
		$data['note'] = $p; // récuperation de l'id que l on réutilisera dans l'url et ainsi le passer en argument pour notre prochaine méthode
		$data['skeleton'] = $p;
		echo view('home.php');
		echo view('info_site.php',$data);
	}

	public function index_info_note($p) // affichage des notes du site concerné
	{
		$info_note = new Info_site_model();
		$data['liste_n'] = $info_note->get_notes($p);
		$data['index'] = $p;
		echo view('home.php');
		echo view('notes.php',$data); 
	}

	public function index_info_skeleton($p) // affichage des squelettes du site concerné 
	{
		$info_skeleton = new Info_site_model();
		$data['liste_s'] = $info_skeleton->get_skeletons($p);
		$data['index'] = $p;
		echo view('home.php');
		echo view('skeletons.php',$data); 
	}

	public function skel_info($p) // affichage des infos du squelette concerné
	{
		$dino_info = new Info_site_model();
		$data['dino_info'] = $dino_info->get_dino_info($p);
		$data['index'] = $p;
		echo view('home.php');
		echo view('dino_info',$data);
	}

	public function index_post_notes($p)
	{
		// print_r($p);
		$data['index'] = $p;
		echo view('home.php');
		echo view('post.php',$data);
	}

	public function action_post_notes($p)
	{
		$data['index'] = $p;
		$t = $_POST['title'];
		$c = $_POST['content'];
		$notes = new Info_site_model();
		$data['notes'] = $notes->post_notes($p,$t,$c);
		if (isset($data['notes'])){
			echo view('home.php');
			echo "<div class=\"main\"><button onclick=\"window.location.href='http://localhost:8080/Home/index_info_note/".$p."'\">Return</button><br><br><strong>Recording completed</strong>";
		} else {
			echo view('home.php');
			echo "<div class=\"main\"><button onclick=\"window.location.href='http://localhost:8080/Home/index_info_note/".$p."'\">Return</button><br><br><strong>Recording failed</strong>";
		}
	}

	public function index_delete_notes ($p)
	{
		$data['index'] = $p;
		// $delete = new Info_site_model();
		// $data['delete'] = $delete->delete_notes($p);
		echo view('home.php');
		echo view('delete.php', $data);
	}

	public function action_delete_notes ($p)
	{
		$data['index'] = $p;
		$n = $_POST['id'];
		$delete = new Info_site_model();
		$data['delete']=$delete->delete_notes($n);
		if(isset($data['delete'])){
			echo view('home.php');
			echo "<div class=\"main\"><button onclick=\"window.location.href='http://localhost:8080/Home/index_info_note/".$p."'\">Return</button><br><br><strong>Deletion note_id : $n confirmed</strong>";
		} else {
			echo view('home.php');
			echo "<div class=\"main\"><button onclick=\"window.location.href='http://localhost:8080/Home/index_info_note/".$p."'\">Return</button><br><br><strong>Deletion note_id : $n failed</strong>";
		}
	}

	public function index_update_notes ($p)
	{
		$data['index'] = $p;
		echo view('home.php');
		echo view('update.php', $data);
	}

	public function action_update_notes ($p)
	{
		$data['index'] = $p;
		$n = $_POST['id'];
		$t = $_POST['title'];
		$c = $_POST['content'];
		$update = new Info_site_model();
		$data['update']=$update->update_notes($n,$t,$c);
		if(isset($data['update'])){
			echo view('home.php');
			echo "<div class=\"main\"><button onclick=\"window.location.href='http://localhost:8080/Home/index_info_note/".$p."'\">Return</button><br><br><strong>Update confirmed on note_id : $n</strong>";
		} else {
			echo view('home.php');
			echo "<div class=\"main\"><button onclick=\"window.location.href='http://localhost:8080/Home/index_info_note/".$p."'\">Return</button><br><br><strong>Update failed on note_id : $n</strong>";
		}
	}
}
