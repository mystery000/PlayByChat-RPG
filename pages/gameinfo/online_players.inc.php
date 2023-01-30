<div>
    <div class="playerlist overflow-auto text-center p-5">

        <?php 
            $sql = "SELECT characters.id AS 'player_id', characters.name AS 'player_name', mappa_room.name AS 'room_name', mappa.name AS 'mappa_name' FROM characters LEFT JOIN mappa_room ON characters.last_place=mappa_room.id LEFT JOIN mappa ON characters.latest_map=mappa.id";
            $players = gdrcd_query($sql, "result");
            while($player = gdrcd_query($players, "fetch")) {
                $position = null;
                if (empty($player['room_name'])) $position = $player['mappa_name'];
                else $position = $player['room_name'];
                echo "<div class='fs-4'><a href='main.php?page=gameinfo&content=character_sheet&player_id={$player['player_id']}'><span>{$player['player_name']} - </span><span>{$position}</span></a></div>";
            }
        ?>
    </div>
</div>