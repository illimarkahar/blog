<ul class="list-group">
    <? foreach ($tags as $tag): ?>
        <li class="list-group-item">
            <span class="badge"><?= $tag['count'] ?></span>
            <a
                href="<?= BASE_URL ?>tags/view/<?= $tag['tag_id'] ?>/<?= $tag['tag_name'] ?>" >
                <?= $tag['tag_name'] ?>
            </a>
        </li>
    <? endforeach ?>
</ul>