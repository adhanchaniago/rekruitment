<html>
<title>Read News</title>
<style>
 table { 
              font-size:16px;
              padding-left:300px;
              margin:auto; }
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
			  border-right:1px black solid;
			  border-left:1px black solid;
              text-align:center; }     
         float:right;
         padding:5px;
         border:dashed 1px gray
        }
</style>
<body>
<a href="<?php echo base_url('home/add');?>"><button type="submit" name="submit" >ADD NEWS</button></a>
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
        <br><table style="margin-left: 50px; margin-right: 50px;">
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
                        $id =$rownews['ID'];
                                        $num++;
                                        echo "
                                            <tr>
                                                <td>$num</td>
                                                <td>".$rownews['title']."</td>
                                                <td>".$rownews['content']."</td>
                                                <td>".$rownews['category']."</td>
                                                <td>".$rownews['image']."</td>
												<td>
                                                    <a href='http://localhost/CI/Home/edit/$id'><div type='submit'>Edit</div></a>
                                                    <a href='http://localhost/CI/Home/del_news/$id'><div type='submit' Onclick='return ConfirmDelete();'>Delete</div></a>
                                                </td>
                                                
                                            </tr>
                                        ";
                                    }
                                ?>
                            </tbody>
                        </table>

</body>
</html>