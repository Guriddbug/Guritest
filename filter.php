<?php


$ratingsData = [
    ['id' => 1, 'rating' => 1, 'content' => 'Item with rating 1'],
    ['id' => 2, 'rating' => 2, 'content' => 'Item with rating 2'],
    ['id' => 3, 'rating' => 3, 'content' => 'Item with rating 3'],
    ['id' => 4, 'rating' => 4, 'content' => 'Item with rating 4'],
    ['id' => 5, 'rating' => 5, 'content' => 'Item with rating 5'],
];


foreach ($ratingsData as $item) {
    echo "<div class='ratingItem' data-rating='{$item['rating']}'>{$item['content']}</div>";
}
?>
