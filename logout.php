<?php
session_start();
// Finally, destroy the session.
session_destroy();
echo '<script>window.location.href="login.php"</script>';
?>