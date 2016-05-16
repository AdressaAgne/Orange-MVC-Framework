<p>This is the first page</p>

<p>This is my var: </p>

$items

<pre><?= print_r($items, true) ?></pre>

foreach $items as $item : $item->name

<pre><?php

    foreach($items as $key => $item){
        print_r($item->name."\n");
    }
    
?></pre>

$items[1]

<pre><?= print_r($items[1], true) ?></pre>


<a href="/test">Second page</a>