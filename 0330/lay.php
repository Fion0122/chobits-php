<?php
$s = isset($_GET['s'])?intval($_GET['s']):0;
?>

    <form action="" method="get">
        <input type="number" name="s" value="<?= $s ?>">
        <input type="submit" value="sumomo">
    </form>


//if ($n>=90){
//    $g = 'A';
//}elseif ($n>=80){
//    $g = 'B';
//}
//elseif ($n>=70){
//    $g = 'C';
//}
//elseif ($n>=60){
//    $g = 'F';
//}
//echo $g;
<table border="1">
<?php for ($i=1;$i<=9;$i++):?>
<tr>
    <?php  for ($m=1;$m<=9;$m++):?>
<td><?= "$i*$m=" ?></td>
    <?php endfor; ?>
</tr>
        </table>
<?php endfor; ?>
?>