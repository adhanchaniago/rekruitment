<h1>ADD MOVIE</h1>
<span style="color:red">
</span>
<form class="form-horizontal" action="<?php echo base_url('Home/addnews');?>" method="POST" >
<div class="form-group">
    <label for="username" class="col-sm-2 control-label">ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ID" placeholder="ID" name="ID" value="" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">TITLE</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" placeholder="TITLE" name="title" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Content</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="content" placeholder="Content" name="content" value="">
    </div>
  </div>
<div class="form-group">
    <label for="username" class="col-sm-2 control-label">category</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="category" placeholder="category" name="category" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">image</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="image" placeholder="image" name="image" value="">
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Update</button>
    </div>
  </div>
</form>

</div>