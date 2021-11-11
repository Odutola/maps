<?php   

// error_reporting(0);
include 'address.php';

if (isset($_POST['submit'])) {
    $address = $_POST['address'];
    $address1 = $_POST['address1'];
    $unit = $_POST['unit'];
    $add = new Address();
  
    $map = $add->getDistance($address, $address1, $unit);
    $maps = array();
    $maps[0] = $address;
    $maps[1] = $address1;
    $maps[2] = $map;
    

    ?>
    <iframe width="45%" height="500" src="https:maps.google.com?q=<?php echo $address; ?>&output=embed"></iframe> 
    <iframe width="45%" height="500" src="https:maps.google.com?q=<?php echo $address1; ?>&output=embed"></iframe> 
<?php
// echo'<pre>';
//     print_r($maps);
//     echo'</pre>';

    $toJSON = json_encode($maps);
    echo $toJSON;
}     
?>
