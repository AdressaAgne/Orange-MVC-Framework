<p>This is the first page</p>

<p>This is my var: </p>

$items

<pre><?= print_r($items, true) ?></pre>

foreach $items as $item : $item->name

<pre><?php foreach($items as $key => $item){
        print_r($item->name."\n");
} ?></pre>

$items[1]

<pre><?= print_r($items[1], true) ?></pre>


$images
<pre><?php
    foreach($images as $key => $image){
        print_r($image->timestamp);
        
        
        $image->timestamp = '<br>klokka 4';
        
        
        print_r($image->timestamp);
    }
?></pre>


<a href="/test">Second page</a>