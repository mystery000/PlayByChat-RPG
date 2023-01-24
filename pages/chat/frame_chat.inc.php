<?php
    $room = $_REQUEST['dir'];
    $info = gdrcd_query("SELECT mappa_room.name, mappa_room.description, mappa_room.image FROM mappa_room WHERE mappa_room.id={$room} LIMIT 1");
    $result = gdrcd_query("SELECT characters.name, characters.online_status FROM characters WHERE last_place={$room}", 'result');    

    if(isset($_POST['message'])) {
        gdrcd_query("INSERT INTO chat(room_id, sender, text) VALUES({$room}, '{$_SESSION['login']}', '{$_POST['message']}')");
    }
?>

<div class="chat-room">
    <div class="d-flex h-100">
        <div class="p-2 flex-fill w-25 room-info-left">
            <div class="image">
                <img src="imgs/locations/<?= $info['image'] ?>" alt="No Image" class="w-100"/>
            </div>
            <div class="description p-3">
                <p><?= $info['description'] ?></p>
            </div>
        </div>
        <div class="p-2 flex-fill w-50 border-start border-end border-4 main-content">
            <?php 
                $sql = "SELECT chat.sender, chat.recipient, chat.text, chat.now FROM chat WHERE room_id={$room}";
                $chats = gdrcd_query($sql, "result");
                while($row = gdrcd_query($chats, 'fetch')) {
                    echo "<div class='fs-5 '><span>{$row['sender']}</span><span class='p-2'>-</span><span class='p-2'>{$row['text']}</span></div>";
                }
            ?>
            <form action="<?= $_SERVER['SCRIPT_NAME'] . '?' . $_SERVER['QUERY_STRING'] ?>" method="post">
                <div class="input-group mb-1 chat-input">
                    <input type="text" class="form-control" placeholder="Message" name="message">
                    <button class="btn btn-dark" type="submit">ENTER</button>
                </div>
            </form>
        </div>
        <div class="p-2 flex-fill w-25 room-info-right">
            <p class="text-center fs-4">Players in Chat</p>
            <ul>
                <?php 
                    while($row = gdrcd_query($result, 'fetch')) {
                        $online_status_image = "";
                        if($row['online_status']) $online_status_image = "<img src='imgs/icons/disponibile1.png'>";
                        else $online_status_image = "<img src='imgs/icons/disponibile0.png'>";
                        echo "<div class='fs-5'><span>{$online_status_image}</span><span class='p-2'>{$row['name']}</span></div>";                    
                    }
                ?>
            </ul>
        </div>
    </div>

</div>