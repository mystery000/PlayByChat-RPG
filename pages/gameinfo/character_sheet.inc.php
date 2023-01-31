<?php 
    $name = null;
    $date_arrival = null;
    $race = null;
    $memories = null;
    $dreams = null;
    $master = false;
    if(isset($_GET['player_id'])) {
        $sql = "SELECT * FROM characters WHERE id={$_GET['player_id']} LIMIT 1";
        $player = gdrcd_query($sql);
        $name = $player['name'];
        $date_arrival = $player['join_date'];
        $race = $player['race'];
        $memories = $player['memories'];
        $dreams = $player['dreams'];
        $master = false;
    } else {
        $sql = "SELECT * FROM characters WHERE name='{$_SESSION['login']}' LIMIT 1";
        $player = gdrcd_query($sql);
        $name = $player['name'];
        $date_arrival = $player['join_date'];
        $race = $player['race'];
        $memories = $player['memories'];
        $dreams = $player['dreams'];
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
            echo "<div class='private_part fs-4 text-center'> 
                    <p>Race: {$race} &#128512;</p>
                    <p>Memories: <span class='textMemo'>{$memories}</span></p>
                    <p>Memories and Dreams: {$dreams}  </p>
                    <button type='button' class='btn btn-outline-dark px-4 editMemo' data-bs-toggle='modal' data-bs-target='#exampleModal'>Edit</button>
                </div>";         
        }
    ?>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Private</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="frm_memo" method='post'> 
            <div class="form-group">
                <label for="memories">Memories:</label>
                <textarea class="form-control" rows="5" id="memories" maxlength=100 name='txtMemo' id='txtMemo'><?= $memories ?></textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form='frm_memo'>Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>
    
    $('#frm_memo').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'pages/gameinfo/ajax.php',
            data: $(this).serialize(),
            success: function(response) {
                var jsonData = JSON.parse(response);
                if (jsonData.success == "1") {
                    $('.textMemo').html(jsonData.message);
                } else {

                }
            }
        });
        bootstrap.Modal.getInstance($('#exampleModal')).hide();
    });
</script>