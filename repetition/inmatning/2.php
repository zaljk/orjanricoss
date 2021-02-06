<?php
if(isset($_POST['text'])) {

$str1 = $_POST['text'];
$str2 = str_replace("a", "å", $str1);
echo $str2;
}
?>
<form method="post">
    <input type="text" name="text">
</form>