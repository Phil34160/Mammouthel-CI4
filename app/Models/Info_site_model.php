<?php

namespace App\Models{
    use CodeIgniter\Model;

    class Info_site_model extends Model
    {
    
        public function get_site($p){ // methode recuperant les infos de chaque site avec en parametre l'id du site
            $db = \Config\Database::connect();
            $query = $db->query("SELECT location, info_site, coordinates, name, phone FROM Sites INNER JOIN Managers ON Sites.manager_id = Managers.manager_id WHERE site_id = $p")->getResult();
            return $query;
        }

        public function get_notes($p) // methode recuperant les notes du site concerné avec en parametre l'id du site
        {
            $db = \Config\Database::connect();
            $query_n = $db->query("SELECT title, content, date, Sites.location, Notes.note_id FROM Notes INNER JOIN Sites ON Notes.site_id = Sites.site_id WHERE Sites.site_id = $p")->getResult();
            return $query_n;
        }

        public function get_skeletons($p) // methode recuperant les squelettes repertoriés sur le site concerné avec en parametre l'id du site
        {
            $db = \Config\Database::connect();
            $query_s = $db->query("SELECT name, skeleton_id, Sites.location FROM skeletons INNER JOIN Sites ON skeletons.site_id = Sites.site_id WHERE Sites.site_id = $p")->getResult();
            return $query_s;
        }

        public function get_dino_info($p) // methode recuperant les infos du dinosaures d'un site avec en parametre l'id du squelette concerné
        {
            $db = \Config\Database::connect(); // $db = db_connect();
            $query_info = $db->query("SELECT name, photo, depht, position, conservation, Sites.location, Sites.site_id FROM skeletons INNER JOIN Sites ON skeletons.site_id = Sites.site_id WHERE skeletons.skeleton_id = $p")->getResult();
            return $query_info;
        }

        public function post_notes($p,$t,$c)
        {
            $db = \Config\Database::connect();
            $query_post_n = $db->query("INSERT INTO Notes(site_id, title, content, date) VALUES ('$p','$t','$c',NOW())")->getResult();
            return $query_post_n;
        }

        public function delete_notes($n)
        {
            $db = \Config\Database::connect();
            $query_delete_n = $db->query("DELETE FROM Notes WHERE note_id = $n")->getResult();
            return $query_delete_n;
        }

        public function update_notes($n,$t,$c)
        {
            $db = \Config\Database::connect();
            $query_update_n = $db->query("UPDATE Notes SET title='$t',content='$c' WHERE note_id = $n")->getResult();
            return $query_update_n;
        }
    }
}