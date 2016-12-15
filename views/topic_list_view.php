
  <div class="col-md-2">
<ul>
<?php
foreach ($topics as $entry) {
?>
  <li><a href="/index.php/topic_ctrl/get/<?=$entry->id?>"><?=$entry->title?></a></li>
<?php
}
?>
</ul>
</div>
