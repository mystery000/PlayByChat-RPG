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
<?php
/*Chiudo la connessione al database*/
gdrcd_close_connection($handleDBConnection);

/**    * Per ottimizzare le risorse impiegate le liberiamo dopo che non ne abbiamo pi� bisogno
 * @author Blancks
 */
unset($MESSAGE);
unset($PARAMETERS);
?>