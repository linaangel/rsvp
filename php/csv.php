 <?php

 $data = array("guestname" . ',' . "guestemail" . ',' . "rsvp" . ',' . "message" . );

  $file = "../test/guests.csv";          //file to append to
  $current = file_get_contents($file);    //open the file
  $current .= "\n" . implode(",",$data);  //add line-break then comma separated array data
  file_put_contents($file, $current);     //append new content to file;

  ?>