<?php

    if(isset($_POST['sent'])){

        $num = (int) $_POST["count"];
        $c1 = sscanf($_POST["c1"], "#%02x%02x%02x");
        $c2 = sscanf($_POST["c2"], "#%02x%02x%02x");

        $ml = "($c1[0], $c1[1], $c1[2], 0.3)";
        $fm = "($c2[0], $c2[1], $c2[2], 0.3)";

        include_once("../includes/request.php");

        $resp = parseRes(fetchAPI($num));

        $persons = $resp["results"];

    }else{
        ob_start();
        header("Location: /index.php");
        ob_end_flush();
        die();
    }

?>

<?php
    include_once("../components/head.php");
    include_once("../components/list-header.php");
?>

<main>
    <div class="container-lg main">
        <div class="row mt-4">
            <?php foreach($persons as $p): ?>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-3">
                    <section class="card cus-card usr p-2" style="border-color: rgba<?=($p["gender"]=="female")?$fm:$ml;?>">
                        <img class="cus-card-img w-100" style="border-color: rgba<?=($p["gender"]=="female")?$fm:$ml;?>" src="<?=$p["picture"]["large"];?>">
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
    include_once("../components/footer.php")
?>
