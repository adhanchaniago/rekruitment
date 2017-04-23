<div class="login" style="margin-top:20px; ">
<div class="container" style="margin-left:280px; width:1000px;">

<h1>ADD NEWS</h1>
<span style="color:red">
</span>
<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url('Home/addnews');?>" method="POST" >
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
      <textarea class="form-control" id="content" placeholder="Content" name="content" value=""></textarea>
    </div>
  </div>
<div class="form-group">
    <label for="username" class="col-sm-2 control-label">category</label>
    <div class="col-sm-10">
     <select class="form-control" name="id_cat"><?php
                echo "<option value='' selected> Pilih Category </option>";
                foreach($kategori as $r){echo "
                <option value=".$r->id_cat.">
                ".$r->category."</option>";}?>
     </select>
    </div>
  </div>
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="image" placeholder="image" name="userfile" value="">
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Tambah</button>
    </div>
  </div>
</form>

</div>