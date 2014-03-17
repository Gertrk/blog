<div class="span8">
    <h1><?=$post["post subject"]?></h1>
    <p><?=$post["post_text"]?></p>
    <div>
        <span class="badge badge-success">Posted <?=$post["post created"]?></span>
    </div>
<?foreach ($tags as $tag):?><a href ="#"><span class="label label-info"><?=$tag['tag_name']?></span></a> <? endforeach?>