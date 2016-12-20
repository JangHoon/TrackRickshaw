<div class="col-md-8">
<article>
  <h1><?=$topic->title?></h1>
  <div>
    <div class="">
      <?=kdate($topic->created)?>
    </div>
    <?=auto_link($topic->description)?>
  </div>

</article>
<div class="">
  <a href="/index.php/topic_ctrl/add" class="btn btn-default">추가</a>
</div>
</div>
