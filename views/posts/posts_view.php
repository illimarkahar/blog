<div class="span8">
    <h1><?=$post['post_subject']?></h1>
    <p><?=$post['post_text']?></p>
    <div>
        <span class="badge badge-success"><?=$post['post_created']?></span><div class="pull-right"><span class="label"><?=$post['username']?></span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
        <?foreach ($tags as $tag):?>
            <a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>"><span class="label label-info" style="background-color:#5bc0de"><?=$tag['tag_name']?></span></a>
        <?endforeach?>
    </div>
    <hr>
</div>


<?foreach ($tags as $tag):?><a href="#"><span class="label label-info"><?=$tag['tag_name']?></span></a> <?endforeach?>
