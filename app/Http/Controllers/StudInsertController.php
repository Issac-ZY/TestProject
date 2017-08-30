<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Record;
use App\ALine;
# use App\Jobs\SendReminderEmail;
use App\User;

use App\Jobs\SetMultiLineJob;
# define("LOGIN_TOKEN", "35359,32a3b767f3ccd2ce5e0a835488124a63");
# define("FORMAT", "json");
# define("DOMAIN_ID", "");
# define("DOMAIN", "issaccherry.com");
# define("RECORD_TYPE", "A");
define("JSON_DATA", 
'
{
"data":[
    {
        "sub_domain":"aa3",
        "line_type":"默认",
        "ip_list":[
            {
                "ip":"1.1.1.1",
                "weight":"0",
                "ttl":"601"
            },
            {
                "ip":"1.1.1.2",
                "weight":"0"
            },
            {
                "ip":"1.1.1.3",
                "weight":"0",
                "ttl":"602"
            }
        ]
    },
    {
        "sub_domain":"aa3",
        "line_type":"电信",
        "ip_list":[
            {
                "ip":"1.1.1.1",
                "weight":"0"
            },
            {
                "ip":"1.1.1.2",
                "weight":"0"
            }
        ]

    },
    {
        "sub_domain":"aa4",
        "line_type":"联通",
        "ip_list":[
            {
                "ip":"1.1.1.1",
                "weight":"0"
            },
            {
                "ip":"1.1.1.2",
                "weight":"0"
            }
        ]
    }	
]
}
'
);
define("JSON_DATA2",
'
{
"data":[
    {
        "sub_domain":"aa1",
        "line":[
            {
                "line_type":"默认",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"601"
                    }
                ]
            },
            {
                "line_type":"国内",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"601"
                    },
                    {
                        "ip":"1.1.1.2",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"国外",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"601"
                    },
                    {
                        "ip":"1.1.1.2",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"电信",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"601"
                    },
                    {
                        "ip":"1.1.1.2",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"联通",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"601"
                    },
                    {
                        "ip":"1.1.1.2",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"教育网",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"601"
                    }
                ]
            },
            {
                "line_type":"移动",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"601"
                    },
                    {
                        "ip":"1.1.1.2",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"百度",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"601"
                    },
                    {
                        "ip":"1.1.1.2",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"谷歌",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"601"
                    },
                    {
                        "ip":"1.1.1.2",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"搜搜",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"601"
                    },
                    {
                        "ip":"1.1.1.2",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"有道",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"601"
                    },
                    {
                        "ip":"1.1.1.2",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"必应",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"601"
                    },
                    {
                        "ip":"1.1.1.2",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"搜狗",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"601"
                    },
                    {
                        "ip":"1.1.1.2",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"奇虎",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"601"
                    },
                    {
                        "ip":"1.1.1.2",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"搜索引擎",
                "ip_list":[
                     {
                         "ip":"1.1.1.2",
                         "weight":"0",
                         "ttl":"666"
                     }
                 ]
            }
        ]
    },
    {
        "sub_domain":"aa2",
        "line":[
            {
                "line_type":"默认",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"603"
                    }
                ]
            },
            {
                "line_type":"国内",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"603"
                    },
                    {
                        "ip":"4.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"国外",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"603"
                    },
                    {
                        "ip":"4.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"电信",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"603"
                    },
                    {
                        "ip":"4.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"联通",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"603"
                    },
                    {
                        "ip":"4.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"教育网",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"603"
                    }
                ]
            },
            {
                "line_type":"移动",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"603"
                    },
                    {
                        "ip":"4.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"百度",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"603"
                    },
                    {
                        "ip":"4.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"谷歌",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"603"
                    },
                    {
                        "ip":"4.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"搜搜",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"603"
                    },
                    {
                        "ip":"4.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"有道",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"603"
                    },
                    {
                        "ip":"4.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"必应",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"603"
                    },
                    {
                        "ip":"4.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"搜狗",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"603"
                    },
                    {
                        "ip":"4.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"奇虎",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"603"
                    },
                    {
                        "ip":"4.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"搜索引擎",
                "ip_list":[
                     {
                         "ip":"3.1.1.1",
                         "weight":"0",
                         "ttl":"603"
                     },
                     {
                         "ip":"4.1.1.1",
                         "weight":"0"
                     }
                 ]
            }
        ]                
    },
    {
        "sub_domain":"aa3",
        "line":[
            {
                "line_type":"默认",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"605"
                    },
                    {
                        "ip":"6.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"国内",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"605"
                    },
                    {
                        "ip":"6.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"国外",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"605"
                    },
                    {
                        "ip":"6.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"电信",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"605"
                    },
                    {
                        "ip":"6.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"联通",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"605"
                    },
                    {
                        "ip":"6.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"教育网",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"605"
                    },
                    {
                        "ip":"6.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"移动",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"605"
                    },
                    {
                        "ip":"6.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"百度",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"605"
                    },
                    {
                        "ip":"6.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"谷歌",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"605"
                    },
                    {
                        "ip":"6.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"搜搜",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"605"
                    },
                    {
                        "ip":"6.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"有道",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"605"
                    },
                    {
                        "ip":"6.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"必应",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"605"
                    },
                    {
                        "ip":"6.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"搜狗",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"605"
                    },
                    {
                        "ip":"6.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"奇虎",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"605"
                    },
                    {
                        "ip":"6.1.1.1",
                        "weight":"0"
                    }
                ]
            },
            {
                "line_type":"搜索引擎",
                "ip_list":[
                     {
                         "ip":"5.1.1.1",
                         "weight":"0",
                         "ttl":"605"
                     },
                     {
                         "ip":"6.1.1.1",
                         "weight":"0"
                     }
                 ]
            }
        ]                
    }   
]
}
'
);

define("JSON_DATA3",
'
{
"data":[
    {
        "sub_domain":"aa1",
        "line":[
            {
                "line_type":"默认",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"901"
                    },
                    {
                        "ip":"1.1.1.2"
                    }
                ]
            },
            {
                "line_type":"国内",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"901"
                    }
                ]
            },
            {
                "line_type":"国外",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"901"
                    }
                ]
            },
            {
                "line_type":"电信",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"901"
                    }
                ]
            },
            {
                "line_type":"联通",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"901"
                    }
                ]
            },
            {
                "line_type":"教育网",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"901"
                    },
                    {
                        "ip":"1.1.1.2"
                    }
                ]
            },
            {
                "line_type":"移动",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"901"
                    }
                ]
            },
            {
                "line_type":"百度",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"901"
                    }
                ]
            },
            {
                "line_type":"谷歌",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"901"
                    }
                ]
            },
            {
                "line_type":"搜搜",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"901"
                    }
                ]
            },
            {
                "line_type":"有道",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"901"
                    }
                ]
            },
            {
                "line_type":"必应",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"901"
                    }
                ]
            },
            {
                "line_type":"搜狗",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"901"
                    }
                ]
            },
            {
                "line_type":"奇虎",
                "ip_list":[
                    {
                        "ip":"1.1.1.1",
                        "weight":"0",
                        "ttl":"901"
                    }
                ]
            },
            {
                "line_type":"搜索引擎",
                "ip_list":[
                     {
                         "ip":"1.1.1.2",
                         "weight":"0",
                         "ttl":"966"
                     },
                     {
                         "ip":"1.1.1.1"
                     }
                 ]
            }
        ]
    },
    {
        "sub_domain":"aa2",
        "line":[
            {
                "line_type":"默认",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"903"
                    },
                    {
                        "ip":"4.1.1.1"
                    }
                ]
            },
            {
                "line_type":"国内",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"903"
                    }
                ]
            },
            {
                "line_type":"国外",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"903"
                    }
                ]
            },
            {
                "line_type":"电信",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"903"
                    }
                ]
            },
            {
                "line_type":"联通",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"903"
                    }
                ]
            },
            {
                "line_type":"教育网",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"903"
                    },
                    {
                        "ip":"4.1.1.1"
                    }
                ]
            },
            {
                "line_type":"移动",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"903"
                    }
                ]
            },
            {
                "line_type":"百度",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"903"
                    }
                ]
            },
            {
                "line_type":"谷歌",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"903"
                    }
                ]
            },
            {
                "line_type":"搜搜",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"903"
                    }
                ]
            },
            {
                "line_type":"有道",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"903"
                    }
                ]
            },
            {
                "line_type":"必应",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"903"
                    }
                ]
            },
            {
                "line_type":"搜狗",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"903"
                    }
                ]
            },
            {
                "line_type":"奇虎",
                "ip_list":[
                    {
                        "ip":"3.1.1.1",
                        "weight":"0",
                        "ttl":"903"
                    }
                ]
            },
            {
                "line_type":"搜索引擎",
                "ip_list":[
                     {
                         "ip":"3.1.1.1",
                         "weight":"0",
                         "ttl":"903"
                     }
                 ]
            }
        ]                
    },
    {
        "sub_domain":"aa3",
        "line":[
            {
                "line_type":"默认",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"905"
                    }
                ]
            },
            {
                "line_type":"国内",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"905"
                    }
                ]
            },
            {
                "line_type":"国外",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"905"
                    }
                ]
            },
            {
                "line_type":"电信",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"905"
                    }
                ]
            },
            {
                "line_type":"联通",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"905"
                    }
                ]
            },
            {
                "line_type":"教育网",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"905"
                    }
                ]
            },
            {
                "line_type":"移动",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"905"
                    }
                ]
            },
            {
                "line_type":"百度",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"905"
                    }
                ]
            },
            {
                "line_type":"谷歌",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"905"
                    }
                ]
            },
            {
                "line_type":"搜搜",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"905"
                    }
                ]
            },
            {
                "line_type":"有道",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"905"
                    }
                ]
            },
            {
                "line_type":"必应",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"905"
                    }
                ]
            },
            {
                "line_type":"搜狗",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"905"
                    }
                ]
            },
            {
                "line_type":"奇虎",
                "ip_list":[
                    {
                        "ip":"5.1.1.1",
                        "weight":"0",
                        "ttl":"905"
                    }
                ]
            },
            {
                "line_type":"搜索引擎",
                "ip_list":[
                     {
                         "ip":"5.1.1.1",
                         "weight":"0",
                         "ttl":"905"
                     }
                 ]
            }
        ]                
    }   
]
}
'
);

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
        
        $flag = $request->input('flag');
        $json_data = $flag==2 ? JSON_DATA2 : JSON_DATA3;
     #   $json_data = JSON_DATA2;
     #   $json_data = JSON_DATA3;

/*        $aline = new ALine();
        $aline->setMultiLine($json_data);      
        $time2 = microtime(true);
        echo $aline->getStatus(13)."<br>";
        $time3 = microtime(true);
        echo "获取任务状态用时：".round($time3-$time2,3)."秒<br><br>";        
        $aline->getByLine("谷歌","aa3");
        $time4 = microtime(true);
        echo "获取某一线路用时：".round($time4-$time3,3)."秒<br><br>";       
*/                     
       dispatch(new SetMultiLineJob($json_data));
       echo '<a href="show">百度</a><br>';
       echo "flag:".$flag."<br>";
       echo "json_data:<br>".$json_data."<br>";
       
       return 'done<br>'; 

    }
      
}
