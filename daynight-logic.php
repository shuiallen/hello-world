<?php

function is_day() {
// this is a comment
   date_default_timezone_set('America/New_York');
   $thishour = (int)(date('G'));

/* this is also a comment
*/
   if($thishour >= 6 && $thishour < 20) {
     return 'day';
   }
   else {
     return 'night';
  }
}
?>
