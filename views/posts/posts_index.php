<?foreach( $posts as $post ):?>
<div class="span8">

    <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post["post subject"]?></a></h1>
    <p><?=$post["post_text"]?></p>
    <div>

    <div>
        <span class="badge badge-success">Posted <?=$post["post created"]?></span>
    </div>
    <?foreach ($tags   [$post	['post_id']] as $tag):?>
        <a href="<?=BASE_URL?>tags/view/<?=$tag?>"><span class = "label" style="background-color: #5bc0de"><?=$tag?></span></a><?endforeach?>
    <?endforeach?>