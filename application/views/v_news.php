<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data yang ada pada database</h2>   
                    </div>

                    <style>
           h3{
              text-align:center; }
           table { 
              border-collapse:collapse;
              border-spacing:0;     
              font-family:Arial, sans-serif;
              font-size:16px;
              padding-left:300px;
              margin:auto; }
			img {
				width:70px;
				height:70px;
			}
           table th {
              font-weight:bold;
              padding:10px;
              color:#fff;
              background-color:#2A72BA;
              border-top:1px black solid;
              border-bottom:1px black solid;}
           table td {
              padding:10px;
              border-top:1px black solid;
              border-bottom:1px black solid;
              text-align:center; }         
           tr:nth-child(even) {
             background-color: #DFEBF8; }
             #logout {
         float:right;
         padding:5px;
         border:dashed 1px gray
        }
        </style><br><br>
<body>
			<script>
			function ConfirmDelete()
			{
				var x = confirm("Apa anda yakin untuk menghapus data ini?");
				if (x)
					return true;
				else
					return false;
			}
			</script>
        <br>
        <br><table data-toggle="table" data-url= 
                <table border=1 cellpadding=5 style="margin-left: 50px; margin-right: 50px;">
                                <tr>
                                    <td>No</td>
                                    <td>TITLE</td>
                                    <td>CONTENT</td>
                                    <td>CATEGORY</td>
                                    <td>IMAGE</td>
									<td>ACTION</td>
                            
                                <?php
                                    $num=0;
                    foreach($news as $rownews){
                        $id = $rownews['ID'];
                                        $num++;
                                        echo "
                                            <tr>
                                                <td>$num</td>
                                                <td>".$rownews['title']."</td>
                                                <td>".$rownews['content']."</td>
                                                <td>".$rownews['category']."</td>
                                                <td><img src='../foto/".$rownews['image']."'></td>
												<td>
                                                    <a href='http://localhost/republika/Home/edit/$id'><div class='btn btn-primary btn-md' type='submit'>Edit</div></a>
                                                    <a href='http://localhost/republika/Home/del_news/$id'><div class='btn btn-primary btn-md' type='submit' Onclick='return ConfirmDelete();'>Delete</div></a>
                                                </td>
                                                
                                            </tr>
                                        ";
                                    }
                                ?>
                            </tbody>
                        </table>
<br><br>
        <br>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url();?>asset/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>asset/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url();?>asset/assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>asset/assets/js/custom.js"></script>
    
   
</body>
</html>
