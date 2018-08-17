<!DOCTYPE html>
<html lang="pt_br">
<head>
    <title>Scroll Infinito</title>
    <link rel="stylesheet" href="_cdn/css/reset.css">
</head>
<body>

<div class="container">
    <div class="content">

        <?php
        require_once __DIR__ . '/config.php';

        $read = new \CRUD\Read;
        $read->readFull("SELECT * FROM posts ORDER BY post_date DESC, post_id DESC LIMIT 6");

        if ($read->getResult()) {
            foreach ($read->getResult() as $item) {
                ?>

                <!-- CARD UNIQUE -->
                <div class="card">

                    <div class="card_header">
                        <h1>#<?= $item['post_id']; ?> <?= $item['post_title']; ?></h1>
                    </div>

                    <div class="card_content">
                        <p><?= $item['post_content']; ?></p>
                    </div>

                    <div class="card_footer">
                        <a href="javascript:void(0)">Curtir</a>
                        <a href="javascript:void(0)">Compartilhar</a>
                    </div>

                </div>
                <!-- /CARD UNIQUE -->

                <?php
            }
        }
        ?>

        <div class="load_more">
            <p>Acabou os registros!</p>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="_cdn/js/script.js"></script>
</body>
</html>