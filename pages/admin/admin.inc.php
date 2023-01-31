
<div>
    <div class="text-center fs-3"> Players</div>
    <table class="table table-dark table-hover border-top text-center">
    <thead>
      <tr>
        <th>ID</th>
        <th>PlayerName</th>
        <th>Race</th>
        <th class='text-center'>Dreams and Memories</th>
        <th>Allowed</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php 
            $sql = "SELECT * FROM characters";
            $msgs = gdrcd_query($sql, "result");
            while($msg = gdrcd_query($msgs, "fetch")) {
                echo "<tr id='{$msg['id']}'>";
                echo "<td>{$msg['id']}</td>";
                echo "<td class='playerName'>{$msg['name']}</td>";
                echo "<td class='playerRace'>{$msg['race']}</td>";
                echo "<td class='playerDream'>{$msg['dreams']}</td>";
                echo "<td class='playerAllow'>{$msg['allow']}</td>";
                echo "<td><button class='btn btn-primary edit_profile' type='button' data-player-id='{$msg['id']}' data-bs-toggle='modal' data-bs-target='#exampleModal'>Edit</button></td>";
                echo "</tr>";
            }
        ?>
    </tbody>
    </table>
    <div class="text-center fs-3"> Messages From Players</div>
    <table class="table table-dark table-hover border-top text-center">
    <thead>
      <tr>
        <th>ID</th>
        <th>PlayerName</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
        <?php 
            $sql = "SELECT * FROM admin_messages";
            $msgs = gdrcd_query($sql, "result");
            while($msg = gdrcd_query($msgs, "fetch")) {
                echo "<tr>";
                echo "<td>{$msg['id']}</td>";
                echo "<td>{$msg['sender']}</td>";
                echo "<td>{$msg['messages']}</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
  </table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Sheet</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class='text-center text-success sheet_playerName'>Player Sheets</p>
        <form id="frm_profile" method='post'>
          <input type="text" class="playerId d-none" name='playerId'>
          Race: <input type="text" class="form-control sheet_playerRace" name='playerRace'>
          Dreams and Memories: <textarea class="form-control sheet_playerDream" rows="4" name="playerDream"></textarea>
          Permission for Chat and Forum: <input type='checkbox' class='form-check-input sheet_playerAllow' name="playerAllow"/>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form='frm_profile'>Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>

$('#exampleModal').on('show.bs.modal', function(e) {
  var playerId = $(e.relatedTarget).data('player-id');
  var name = $("#"+playerId).find(".playerName").text();
  var race = $("#"+playerId).find(".playerRace").text();
  var dream = $("#"+playerId).find(".playerDream").text();
  var allow = $("#"+playerId).find(".playerAllow").text();
  $('.playerId').val(playerId);
  $('.sheet_playerName').text(name + "'s sheet");
  $('.sheet_playerRace').val(race);
  $('.sheet_playerDream').val(dream);
  $('.sheet_playerAllow').prop('checked', allow == 1);
});
$("#frm_profile").submit(function(e) {
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: 'pages/gameinfo/ajax.php',
    data: $(this).serialize(),
    success: function(response) {
      var jsonData = JSON.parse(response);
      if (jsonData.success) {
        $("#"+jsonData.message[0]).find(".playerRace").text(jsonData.message[1]);
        $("#"+jsonData.message[0]).find(".playerDream").text(jsonData.message[2]);
        $("#"+jsonData.message[0]).find(".playerAllow").text(jsonData.message[3]);
      } 
    }
  });
  bootstrap.Modal.getInstance($('#exampleModal')).hide();
});
</script>