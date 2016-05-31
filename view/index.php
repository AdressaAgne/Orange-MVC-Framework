<?php 
/**
*   Page setup
*/
layout('layouts.head', [
    '__title' => 'ball title' 
]);

?>


<h1>Loopen</h1>
<pre><?= $images ?></pre>

<h1>$_POST</h1>
<pre>
<?= print_r($_POST, true) ?>
</pre>
<form action="" method="post">
    <input type="submit" value="send" name="subittetButton">
</form>


<?php 

layout('layouts.foot');

?>