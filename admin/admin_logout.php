<?php
session_start();
session_unset();
session_destroy();
echo'
<script>window.location="http://localhost/sms_project/index.php"</script>
';
?>