<?php

    if (isset($_POST['submit'])) {
        header('Location:get_distance.php');
    }

?>
<form method ="POST" action="get_distance.php">
<p>
    <label>From</label>
    <input type="text" name="address">
</p>
<p>
    <label>To</label>
    <input type="text" name="address1">
</p>
<p>
    <label>Unit</label>
    <input type="text" name="unit">
</p>
<input type="submit" name="submit">
</form> 
