<html>
   <head>
      <title>添加记录</title>
   </head>   
   <body>
      <h1>添加一条记录</h1>
      <form action = "https://dnsapi.cn/Record.Create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>login_token：</td>
               <td><input type='text' name='login_token' /></td>
            </tr>
            <tr>
               <td>format：</td>
               <td><input type='text' name='format' /></td>
            </tr>
            <tr>
               <td>domain_id：</td>
               <td><input type='text' name='domain_id' /></td>
            </tr>
            <tr>
               <td>domain：</td>
               <td><input type='text' name='domain' /></td>
            </tr><tr>
               <td>sub_domain：</td>
               <td><input type='text' name='sub_domain' /></td>
            </tr><tr>
               <td>record_type：</td>
               <td><input type='text' name='record_type' /></td>
            </tr>
            <tr>
               <td>record_line：</td>
               <td><input type='text' name='record_line' /></td>
            </tr><tr>
               <td>record_line_id：</td>
               <td><input type='text' name='record_line_id' /></td>
            </tr><tr>
               <td>value：</td>
               <td><input type='text' name='value' /></td>
            </tr><tr>
               <td>mx：</td>
               <td><input type='text' name='mx' /></td>
            </tr><tr>
               <td>ttl：</td>
               <td><input type='text' name='ttl' /></td>
            </tr><tr>
               <td>status：</td>
               <td><input type='text' name='status' /></td>
            </tr>
            <tr>
               <td>weight：</td>
               <td><input type='text' name='weight' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "添加记录"/>
               </td>
            </tr>
         </table>
			
      </form>
   
   </body>
</html>
