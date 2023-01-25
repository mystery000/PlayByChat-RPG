<?php 
    gdrcd_controllo_sessione();
?>
<div class="mappa">
    <div class='heading'>
        <h2>Map</h2>
        <h3>Every location is a chat</h3>
    </div>  
    <div class="mappa-rooms">
        <?php 
            $current_map = (isset($_GET['map_id']) === true) ? gdrcd_filter('num', $_GET['map_id']) : $_SESSION['map'];
            /*Seleziono le voci della mappa*/
            $result = gdrcd_query("SELECT mappa_room.name, mappa_room.description, mappa_room.image, mappa_room.x_cord, mappa_room.y_cord, mappa_room.id_map FROM mappa LEFT JOIN mappa_room ON mappa.id = mappa_room.id_map WHERE mappa.id = ".$current_map."", 'result');

            if(gdrcd_query($result, 'num_rows') == 0) {
                echo '<div class="error">'.gdrcd_filter('out', $MESSAGE['error']['can_t_find_any_map']).'</div>';
            } else {
                $just_one_click = gdrcd_query($result, 'fetch');
                gdrcd_query($result, 'free');
                $result = gdrcd_query("SELECT mappa_room.id, mappa_room.name, mappa_room.description, mappa_room.image,mappa_room.link_image, mappa_room.x_cord, mappa_room.y_cord FROM mappa LEFT JOIN mappa_room ON mappa.id = mappa_room.id_map WHERE mappa.id = ".$just_one_click['id_map']."", 'result');
                
                while($row = gdrcd_query($result, 'fetch')) {
                    $name = $row['name'];
                    $description = $row['description'];
                    $link_image = $row['link_image'];
                    $x_cord = $row['x_cord'];
                    $y_cord = $row['y_cord'];
                    $room_id = $row['id'];
                    echo "<div class='mappa-room' style='position: absolute; left: {$x_cord}%; top: {$y_cord}%; text-align: center'>
                        <img src='imgs/maps/{$link_image}' alt='?' style='height: 60px; weight: 60px'/><br>        
                        <a href='main.php?dir={$room_id}'>{$name}</a>
                        </div>";
    
                }

            }
            
        ?>
    </div>
</div>
