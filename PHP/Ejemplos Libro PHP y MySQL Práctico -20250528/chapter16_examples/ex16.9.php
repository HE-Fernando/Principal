<?php

  echo "Your session files are stored in <b>".
  session_save_path(). ".</b><br>";
  if ($handle = opendir(session_save_path())) {
    echo "<b>Files:<br>\n";
    /* Loop over the directory. */
    while (false !== ($file = readdir($handle))) {
       echo "$file<br>\n";
    }
    echo "</b>";
    closedir($handle);
  }

?>
