<?php include_once "menu.php"; ?>
<h1>Категории</h1>


<?php foreach ($cats as $item): ?>
    <a href="/categories/<?=$item['id']?>"><?=$item['title']?></a>
<?php endforeach; ?>
