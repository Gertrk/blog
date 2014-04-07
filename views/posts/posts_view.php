<!-- Code for ajax -->
<script type="text/javascript">
    function clickme() {
        $.post("<?=BASE_URL?>welcome", $( "#ajax-form" ).serialize(), function (data) {
            $(".result").html(data);
        });
    }
</script>

<div class="span8">
    <h1><?=$post["post subject"]?></h1>
    <p><?=$post["post_text"]?></p>
    <div>
        <? foreach ($tags as $tag): ?>
            <a href="<?= BASE_URL ?>tags/view/<?= $tag['tag_id'] ?>"><span class="label label-info"
                                                                           style="background-color:#5bc0de"><?= $tag['tag_name'] ?></span></a>
        <? endforeach ?>
        <span class="badge badge-success">Posted <?=$post["post created"]?></span>
    </div>
