<?php
    gdrcd_controllo_sessione();
    $room = $_REQUEST['dir'];
    $info = gdrcd_query("SELECT mappa_room.name, mappa_room.description, mappa_room.image FROM mappa_room WHERE mappa_room.id={$room} LIMIT 1");
    $result = gdrcd_query("SELECT characters.name, characters.online_status FROM characters WHERE last_place={$room}", 'result');    

    if(isset($_POST['message'])) {
        $testo = gdrcd_filter('in', $_POST['message']);
        gdrcd_query("INSERT INTO chat(room_id, sender, text) VALUES({$room}, '{$_SESSION['login']}', '{$testo}')");
    }
?>

<div class="chat-room">
    <div class="d-flex h-100">
        <div class="p-2 flex-fill w-50 border-start border-end border-4 main-content text-center">
            <div class='overflow-auto inbox' id="div-scroll">
                <?php 
                    $sql = "SELECT chat.sender, chat.recipient, chat.text, chat.now FROM chat WHERE room_id={$room}";
                    $chats = gdrcd_query($sql, "result");
                    while($row = gdrcd_query($chats, 'fetch')) {
                        echo "<div class='fs-4 '><span>{$row['sender']}</span><span class='p-2'>-</span><span class='p-2'>{$row['text']}</span></div>";
                    }
                ?>
            </div>
            <form action="<?= $_SERVER['SCRIPT_NAME'] . '?' . $_SERVER['QUERY_STRING'] ?>" method="post">
                <div class="input-group mb-1 chat-input">
                    <input type="text" class="form-control" placeholder="Message" name="message">
                    <button class="btn btn-dark" type="submit">ENTER</button>
                </div>
            </form>
        </div>
        <!--  -->
    </div>

</div>
<script>
    var element = document.getElementById("div-scroll");
    element.scrollTop = element.scrollHeight;
    window.scrollTo(0, window.innerHeight);
</script>