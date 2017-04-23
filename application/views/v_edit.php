<div class="login" style="margin-top:20px;">
<div class="container"  style="margin-left:280px; width:1000px;">
<h1>Update</h1>
<span style="color:red">
</span>
<form class="form-horizontal" action="<?php echo base_url('Home/update');?>" method="POST" >
<div class="form-group">
    <label for="username" class="col-sm-2 control-label">ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ID" placeholder="ID" name="ID" value="<?php echo $data->ID;?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">TITLE</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" placeholder="TITLE" name="title" value="<?php echo $data->title;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Content</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="content" placeholder="Content" name="content" value="<?php echo $data->content;?>">
    </div>
  </div>
<div class="form-group">
    <label for="username" class="col-sm-2 control-label">category</label>
    <div class="col-sm-10">
      <select class="form-control" name="id_cat" ><?php
                echo "<option value='' selected> Edit Kategory </option>";
                foreach($kategori as $r){echo "
                <option value=".$r->id_cat.">
                ".$r->category."</option>";}?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">image</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="image" placeholder="image" name="image" value="<?php echo $data->image;?>">
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Update</button>
    </div>
  </div>
</form>

</div>