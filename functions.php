<?php
function get_date() {
  date_default_timezone_set("GMT-3");
  return date("D M j Y G:i:s \G\M\T\-0300 \(T\)");
}
?>
