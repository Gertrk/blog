<ul class="list-group">
    <? foreach ($tags as $tag): ?>
        <li class="list-group-item">
            <span class="badge"><?= $tag['count'] ?></span>
            <a
            <? if (!empty($tags[$post['post_id']])) foreach ($tags[$post['post_id']] as $tag): ?>
                <a href="<?= BASE_URL ?>tags/view/<?= $tag['tag_id'] ?>"><span class="label"
                                                                               style="background-color: #5bc0de"><?= $tag['tag_name'] ?></span></a> <? endforeach ?>
            </a>
        </li>
    <? endforeach ?>
</ul>