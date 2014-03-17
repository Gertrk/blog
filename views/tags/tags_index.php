<?php
/**
 * Created by PhpStorm.
 * User: Gert
 * Date: 17.03.14
 * Time: 15:33
 */
$tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag");
    foreach ($tags as $tag) {
    $this->tags[$tag['post_id']][] = $tag['tag_name'];
    }
<?foreach($tags as $tag):?>
    <a href="<?=BASE_URL?>tags/view/<?=$tag['tag_name']?>" class="list-group-item"><span class="badge"><?=$tag['count']?></span>
        <?=$tag['tag_name']?>
    </a>
    <div class="list-group">
        <a href="#" class="list-group-item active">Cras justo odio</a>
        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
        <a href="#" class="list-group-item">Morbi leo risus</a>
        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
        <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>
<?endforeach?>
