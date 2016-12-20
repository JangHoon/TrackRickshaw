<form action="/index.php/Topic_ctrl/add" method="post" class="col-md-10">

  <?php echo validation_errors(); ?>
  <div class="form-group" class="col-md-12">
    <input type="text" class="form-control" name="title" placeholder="제목">
  </div>

  <div class="form-group" class="col-md-12">
    <textarea class="form-control" name="description" placeholder="내용" rows="15"></textarea>
  </div>
  <button type="submit" class="btn btn-default">submit</button>


</form>
