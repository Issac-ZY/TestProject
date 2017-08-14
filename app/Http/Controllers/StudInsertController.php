<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller {
   public function show(){
       $students = DB::select('select * from student order by id asc',[1]);
       return view('welcome.index',['stuList'=>$students]);
      # $cats = DB::select('select * from cats',[1]);
      # return view('welcome.index',['catList'=>$cats]);
   }
   public function insertform(){
      return view('welcome.stud_create');
   }
   public function editform(Request $request){
      $name = $request->input('id');
      #$age = $request->input('stud_age');
      return view('welcome.stud_edit',['id'=>$name]);
   }	
   public function insert(Request $request){
      $name = $request->input('stud_name');
      $age = $request->input('stud_age');
      DB::insert('insert into student (name,age) values(?,?)',[$name, $age]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/show">Click Here</a> to go back.';
   }
   public function update(Request $request){
      $name = $request->input('stud_name');
      $age = $request->input('stud_age');
      $id = $request->input('stud_id');
      $affected = DB::update('update student set name = ? , age = ? where id = ?', 
		[$name, $age, $id]);
      echo '修改成功<br/>';
      echo '<a href = "/show">Click Here</a> to go back.';
   }
   public function del(Request $request){
      $id = $request->input('id');
      $deleted = DB::delete('delete from student where id = ?',[$id]);
      echo '成功删除【id='.$id.'】的学生信息<br/>';
      echo '<a href = "/show">Click Here</a> to go back.';
   }
   public function create_record(Request $request){

      //添加记录 
      $login_token = '35359,32a3b767f3ccd2ce5e0a835488124a63';
      $format = 'json';
      $domain_id = '';
      $domain = 'issaccherry.com';
      $sub_domain = 'aa1';
      $record_type = 'A';
      $record_line = "电信";
      $record_line_id = '';
      $value = '1.1.1.1';
      $mx = '';
      $ttl = '602';
      $status = '';
      $weight = '';
      $data = array(#'login_email' => '',
                      #'login_password' => '',
                      'login_token' => $login_token,
                      'format' => $format,
                      'domain_id' => $domain_id,
                      'domain' => $domain,
                      'sub_domain' => $sub_domain,
                      'record_type' => $record_type,
                      'record_line' => $record_line,
                      'record_line_id' => $record_line_id,
                      'value' => $value,
                      'mx' => $mx,
                      'ttl' => $ttl,
                      'status' => $status,
                      'weight' => $weight  );
       echo $this->postData("https://dnsapi.cn/Record.Create", $data);
     
/*
//修改记录
$login_token = '35359,32a3b767f3ccd2ce5e0a835488124a63';
$format = 'json';
$domain_id = '';
$domain = 'issaccherry.com';
$record_id = '313221477';
$sub_domain = '@';
$record_type = 'A';
$record_line = "电信";
$record_line_id = '';
$value = '3.3.2.2';
$mx = '';
$ttl = '601';
$status = '';
$weight = '';

$data = array(
    'login_token' => $login_token,
    'format' => $format,
    'domain_id' => $domain_id,
    'domain' => $domain,
    'record_id' => $record_id,
    'sub_domain' => $sub_domain,
    'record_type' => $record_type,
    'record_line' => $record_line,
    'record_line_id' => $record_line_id,
    'value' => $value,
    'mx' => $mx,
    'ttl' => $ttl,
    'status' => $status,
    'weight' => $weight
    );
    echo postData("https://dnsapi.cn/Record.Modify", $data);
      # return view('welcome.record_create');   
*/
/*
//记录列表
$login_token = '35359,32a3b767f3ccd2ce5e0a835488124a63';
$format = 'json';//json,xml
$lang = 'en'; //en默认，建议用cn
$domain_id = '';
$domain = 'issaccherry.com';
$offset = '';
$length = '';
$sub_domain = 'aa2';//aa2
$keyword = ""; //默认\u9ED8\u8BA4，电信\u7535\u4FE1，联通\u8054\u901A

$data = array(
    'login_token' => $login_token,
    'format' => $format,
    'lang' => $lang,
    'domain_id' => $domain_id,
    'domain' => $domain,
    'offset' => $offset,
    'length' => $length,
    'sub_domain' => $sub_domain,
    'keyword' => $keyword
    );
    echo $this->postData("https://dnsapi.cn/Record.List", $data);
  */
   }
   //提交请求的函数
   function postData($url, $data) {
              $data            = http_build_query($data);
              $ch               = curl_init();
	      curl_setopt($ch, CURLOPT_URL, $url);
	      // curl_setopt($ch, CURLOPT_HEADER, 1);
	      // curl_setopt($ch, CURLOPT_VERBOSE, 1);
              curl_setopt($ch, CURLOPT_POST, 1);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
              curl_setopt($ch, CURLOPT_USERAGENT, '程序英文名/版本 (联系邮箱)');
              curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
       $response        = curl_exec($ch);
       curl_close($ch);
       $obj = json_decode($response);
#       echo "json数据格式:<br>";
#       echo $response."<br>";       
#       echo "json经解析后：<br>";
       return $response;
#       return print_r($obj->status);
#       return print_r($obj->domain); 
#       echo print_r($obj->records)."<br><br>"; 
#       echo print_r($obj->records[1])."<br><br>";
#       return print_r($obj->records[1]->line,1)."<br><br>";  
   }

}
