<h1>Welcome!</h1>
<!-- Code for ajax -->
<script type="text/javascript">
    function clickme() {
        $.post("<?=BASE_URL?>welcome", $( "#ajax-form" ).serialize(), function (data) {
            $(".result").html(data);
        });
    }
</script>
<?foreach( $posts as $post ):?>
    <div class="span8">

        <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post["post subject"]?></a></h1>
        <p><?=$post["post_text"]?></p>
        <div>
        <span class="badge badge-success">Posted <?=$post["post created"]?></span>

            </div>
    <? if (!empty($tags[$post['post_id']])) foreach ($tags   [$post	['post_id']] as $tag):?>
        <a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>"><span class = "label" style="background-color: #5bc0de"><?=$tag['tag_name']?></span></a>
    <?endforeach?>
<?endforeach?>