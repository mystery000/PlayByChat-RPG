<div class="contact-void">
    <div class='text-center fs-4'>
        <p class="feedback-success text-success"></p>
        <p class="feedback-error text-danger"></p>
    </div>
    <form id="contact_void" method='post'> 
        <div class="mb-3">
            <!-- <label for="player_name" class="form-label">Player Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Player Name"> -->
            <p class="text-center fs-3"><?=$_SESSION['login']?></p>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="15"></textarea>
        </div>
        <div class='text-center'>
            <button type="submit" class="btn btn-primary p-2 fs-5">Send</button>
        </div>        
    </form>
</div>
<script>
$("#contact_void").submit(function(e){
    e.preventDefault();
    // if($("#name").val() == '') alert("Please type the Player name.");
    if($('#message').val() == '') alert("You can't send empty message.");
    else {   
        $.ajax({
            type: "POST",
            url: "pages/gameinfo/ajax.php",
            data: $(this).serialize(),
        }).then(
            function(response){
                var jsonData = JSON.parse(response);
                if (jsonData.success){
                    $(".feedback-success").html(jsonData.message);
                } else {
                    $(".feedback-error").html(jsonData.message);
                }
                // $('#name').val('');
                $('#message').val('');
            }
        );
    }
});
</script>