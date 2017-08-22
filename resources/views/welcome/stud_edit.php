<html>
   <head>
      <title>添加 - 学生管理</title>
   </head>   
   <body>
      <form action = "/update" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>名字：</td>
               <td><input type='text' name='stud_name'value="<?=$_GET['name']?>" /></td>
            </tr>
            <tr>
               <td>年龄：</td>
               <td><input type='text' name='stud_age' value="<?=$_GET['age']?>"  /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "修改信息"/>
		  <input type = 'hidden' name='stud_id' value = "<?=$_GET['id']?>" />
               </td>
            </tr>
         </table>
			
      </form>
   
   </body>
</html>
