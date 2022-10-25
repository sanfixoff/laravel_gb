<?php include_once "menu.php"; ?>
<h1>News</h1>


<?php foreach ($news as $item): ?>
    <a href="/news/<?=$item['id']?>"><?=$item['title']?></a>
<?php endforeach; ?>
