<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="main.php?page=gameinfo&content=contact_void">
        CONTACT THE VOID
    </a>
    <a class="navbar-brand" href="main.php?page=gameinfo&content=forum">
        FORUM
    </a>
  </div>
</nav>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<?php
/*Chiudo la connessione al database*/
gdrcd_close_connection($handleDBConnection);

/**    * Per ottimizzare le risorse impiegate le liberiamo dopo che non ne abbiamo pi� bisogno
 * @author Blancks
 */
unset($MESSAGE);
unset($PARAMETERS);
?>