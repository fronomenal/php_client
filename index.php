<?php

    include_once("./includes/request.php");

    $resp = parseRes(fetchAPI());

    $persons = $resp["results"];

?>

<?php
    include_once("./components/head.php");
    include_once("./components/index-header.php");
?>

<main>
    <div class="container-lg main">
        <div class="row mt-4">
            <?php foreach($persons as $p): ?>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
                    <section class="card cus-card usr p-2 usr-<?=$p["gender"];?>">
                        <img class="cus-card-img w-100 usr-<?=$p["gender"];?>" src="<?=$p["picture"]["large"];?>">
                        <div class="card-body">
                            <p class="lead card-title"><?="{$p['name']['title']}. {$p['name']['first']} {$p['name']['last']}";?></p>
                            <p class="card-text cus-card-text"><?=$p["email"];?></p>
                        </div>
                    </section>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php
    include_once("./components/footer.php")
?>
