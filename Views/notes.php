<div class="main"><button onclick="window.location.href='http://localhost:8080/Home/index_info/<?=$index?>'">Return</button><br><br><strong>List notes of <?=$liste_n[0]->location?> :</strong> <br><?php foreach($liste_n as $key){echo "<br>";foreach($key as $keys => $value){echo "<strong>".$keys."</strong> : <em>".$value."</em> <br>";}}?>
</div>