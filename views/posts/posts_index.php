<h1>Tere tulemast minu blogi lehele!</h1>

<script type="text/javascript">
    function clickme() {
        $.post("<?=BASE_URL?>welcome", $( "#ajax-form" ).serialize(), function (data) {
            $(".result").html(data);
        });
    }
</script>



<?foreach($posts as $post):?>
    <div class="span8">
        <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post["post_subject"]?></a></h1>
        <p><?=$post["post_text"]?></p>
        <div>
            <span class="badge badge-success">Posted <?=$post["post_created"]?></span>
            <span class="badge badge-success">By <?=$post["username"]?></span>
            <div class="pull-right">
                <?foreach ($tags   [$post	['post_id']] as $tag):?>
                    <a href="<?=BASE_URL?>tags/view/<?=$tag?>"><span class = "label" style="background-color: #5bc0de"><?=$tag?></span></a>
                <?endforeach?>
            </div>
        </div>
        <hr>
    </div>
<?endforeach?>