<?foreach( $posts as $post ):?>
<div class="span8">

    <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post["post subject"]?></a></h1>
    <p><?=$post["post_text"]?></p>
    <div>

    <div>
        <span class="badge badge-success">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
    </div>
   <?endforeach?>
<?foreach ($tags[$post['post_id']]as $tag):?>
    <a href="#"><span class="label" style="background-color:#5bc0de"><?=$tag?></span></a> <? endforeach?>