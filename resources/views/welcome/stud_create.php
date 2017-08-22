<html>
   <head>
      <title>添加 - 学生管理</title>
   </head>   
   <body>
      <form action = "/create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>名字：</td>
               <td><input type='text' name='stud_name' /></td>
            </tr>
            <tr>
               <td>年龄：</td>
               <td><input type='text' name='stud_age' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "添加学生"/>
               </td>
            </tr>
         </table>
			
      </form>
   
   </body>
</html>
