<? foreach ($tags as $tag): ?>

    <div class="list-group">
        <a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>" class="list-group-item active">
            <?= $tag['tag_name'] ?>
        </a>

    </div>

<? endforeach ?>
