#Setting a session Cookie

<?php
   session_name('private');
   session_start();
   $Private_id = session_id();
   $user = get_current_user();
   $_SESSION ['user'] = $user;
   $_SESSION['password'] ="super_secret";
   session_write_close();
   set cookie("prudential_plc, $ private_id, time() + 86400 *30), "/"";
?>

#Restoring a Session from a Cookie

<?php
     Session_id($_COOKIE)['Prudential_plc']);
     session_start();
?>     
