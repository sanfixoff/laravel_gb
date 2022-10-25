<?php include_once "menu.php"; ?>
<h2><?=$arResult['category']['title']?></h2>


<?php foreach ($arResult['news'] as $item): ?>
    <a href="/news/<?=$item['id']?>"><?=$item['title']?></a>
<?php endforeach; ?>
