<div class="container">
<br>
    <?php if (isset($_SESSION['is_logged_in'])): ?>
        <a href="<?= ROOT_URL?>Shares/add" class="btn btn-success btn-share">Share Something</a>
    <?php endif; ?>


<?php foreach($viewModel as $item): ?>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><a href="<?= $item['link'] ?>" target="_blank"><?= $item['title'] ?></a></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $item['created_at'] ?></h6>
            <p class="card-text"><?= $item['body'] ?></p>

        </div>
    </div>
    <br>

<?php endforeach; ?>
</div>