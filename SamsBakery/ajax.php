<?php
if($_POST['action'] == 'call_this') {
  $_SESSION['Items'] = "Bread";
}
echo $_SESSION['Items'];
 ?>