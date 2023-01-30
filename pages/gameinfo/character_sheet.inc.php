<?php 
    $name = null;
    $date_arrival = null;
    $race = null;
    $master = false;
    if(isset($_GET['player_id'])) {
        $sql = "SELECT characters.name, characters.join_date, characters.race FROM characters WHERE id={$_GET['player_id']} LIMIT 1";
        $player = gdrcd_query($sql);
        $name = $player['name'];
        $date_arrival = $player['join_date'];
        $race = $player['race'];
        $master = false;
    } else {
        $sql = "SELECT characters.name, characters.join_date, characters.race FROM characters WHERE name='{$_SESSION['login']}' LIMIT 1";
        $player = gdrcd_query($sql);
        $name = $player['name'];
        $date_arrival = $player['join_date'];
        $race = $player['race'];
        $master = true;
    }

?>   
<div>
    <div class="bg-dark text-center text-white border-top p-3 fs-4">PUBLIC PART</div>
    <div class="public_part text-center fs-3">     
        <div>Name: <?= $name ?></div>
        <div>Date of arrival: <?= $date_arrival ?></div>     
    </div>
    
    <?php 
        if($master) {
            echo "<div class='bg-dark text-center text-white border-top p-3 fs-4'>PRIVATE PART</div>";
            echo "<div class='private_part fs-4 text-center'> Race: {$race}</div>";
        }
    ?>
</div>