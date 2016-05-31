<?php
    layout('layouts.head', [
        '__title' => 'post'
    ]);
?>

    <p>Post</p>
    <?= print_r($_POST) ?>

<?php
    layout('layouts.foot');
?>


