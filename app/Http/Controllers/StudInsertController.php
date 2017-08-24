<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Record;

define("tesComi", "test");
define("tes", "test222222");

define("LOGIN_TOKEN", "35359,32a3b767f3ccd2ce5e0a835488124a63");
define("FORMAT", "json");
define("DOMAIN_ID", "");
define("DOMAIN", "issaccherry.com");
define("RECORD_TYPE", "A");
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

   static $count = 0;//统计api访问次数
   static $url_list = array();//操作访问api列表
   static $data_list = array();//对应访问api时需要post的data
   static $opt_list = array();//操作列表
   static $details_list = array();//操作记录日志
   static $status_list = array();//操作记录日志，json形式
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
   public function insertTask($type, $args, $status){
      DB::insert('insert into tasks(type, args, status) values(?,?,?)',[$type, $args, $status]);
   }
   public function create_record(Request $request){
        $time_start1 = microtime(true);
        // 接收客户端JSON_DATA, 解析缓存进update_list         
          # $update_list = $this->jsonToArray(JSON_DATA); 
        $update_list = $this->jsonToArray2(JSON_DATA3);        
          # $this->printRecordList($update_list);
        // 按线路分别获取dnspod的记录列表
        $dnspod_list = $this->getDnspodLine();         
        // 更新线路
       # $this->printRecordList($update_list);
       # $this->printRecordList($dnspod_list);
        $this->updateLine($update_list, $dnspod_list);
        echo "<br>访问api的总次数：".self::$count."<br>";
        $time_end1 = microtime(true);
        echo '访问记录列表耗时：'.round($time_end1 - $time_start1,3)."秒<br>";
      
        $time_start2 = microtime(true);
        $data=$this->curl_multi_fetch(self::$url_list, self::$data_list);
        #echo "result:<br>";
        #echo print_r($data,1)."<br>";
        $time_end2 = microtime(true);
        $time = $time_end2 - $time_start2;
        echo "异步耗时：".round($time,3)."秒<br>";
        $status = "";
        for($i=0; $i<count(self::$status_list); $i++){
            $status .= "【".$i."】".print_r(self::$status_list[$i],1)."<br>";
            echo "【".$i."】".print_r(self::$status_list[$i],1)."<br>";
        }
        echo "总用时：".round($time_end2 - $time_start1,3)."秒<br>";
        $this->insertTask("1001", JSON_DATA3, $status);
    }

   //输出Record类元素数组
   function printRecordList($list){
       echo "<br>printRecordList:<br>";
       for($i=0; $i<count($list); $i++){
           echo "【".$i."】：".$list[$i]->record_id.", ".$list[$i]->sub_domain.", ".$list[$i]->    line.", ".$list[$i]->value.", ".$list[$i]->weight.", ".$list[$i]->ttl."<br>";
       }
       echo "printRecordList end.<br>";
   }

   //将客户端json数据格式转换为自定义Record数组
   function jsonToArray2($json_data){
    # echo "<br>jsonToArray2 begin:<br>";
       $obj = json_decode($json_data);
       $record_list = array();
       for($i=0; $i<count($obj->data); $i++){
           $sub_domain = $obj->data[$i]->sub_domain;
         #  echo "子域名：".$i."号，".$sub_domain."<br>";
           for($j=0; $j<count($obj->data[$i]->line); $j++){
               $line_type = $obj->data[$i]->line[$j]->line_type;
             #  echo "____线路：".$j."号，".$line_type."<br>";
               for($k=0; $k<count($obj->data[$i]->line[$j]->ip_list);$k++){
                   if(property_exists($obj->data[$i]->line[$j]->ip_list[$k],'ip')){
                       $ip = $obj->data[$i]->line[$j]->ip_list[$k]->ip;
                       //若存在weight则设置为输入值，否则默认weight=0
                       $weight = property_exists($obj->data[$i]->line[$j]->ip_list[$k],'weight') ? $obj->data[$i]->line[$j]->ip_list[$k]->weight : 0;
                       //若存在ttl则设置为输入值，否则默认ttl=600
                       $ttl = property_exists($obj->data[$i]->line[$j]->ip_list[$k],'ttl') ?  $obj->data[$i]->line[$j]->ip_list[$k]->ttl : 600;
                       $record = new Record();
                     #  echo "________[".$k."], ".$ip.", ".$weight.", ".$ttl."<br>";
                       $record->init(0, $sub_domain, $line_type, $ip, $weight, $ttl);
                       array_push($record_list, $record);
                   }
               }
           }
       }
     #  echo "jsonToArray2 end.:<br>";
       return $record_list;
   }
   function jsonToArray($json_data){
       $obj = json_decode($json_data);
      # echo "解析后json:<br>";
      # echo print_r($obj,1)."<br>";
       $record_list = array();
       for($i=0; $i<count($obj->data); $i++){
           $sub_domain = $obj->data[$i]->sub_domain;
           $line_type = $obj->data[$i]->line_type;
          # echo "线路：".$i."号,".$sub_domain.", ".$line_type."<br>";
           for($j=0; $j<count($obj->data[$i]->ip_list); $j++){
              # echo "ip：".$j."<br>";
               $ip = $obj->data[$i]->ip_list[$j]->ip;
               $weight = $obj->data[$i]->ip_list[$j]->weight;
               //若存在ttl则设置输入值，否则默认ttl=600
               $ttl = property_exists($obj->data[$i]->ip_list[$j], 'ttl') ? $obj->data[$i]->ip_list[$j]->ttl : 600 ; 
               $record = new Record();
               $record->init(0, $sub_domain, $line_type, $ip, $weight, $ttl);
               array_push($record_list, $record);
           }   
       }       
       return $record_list;
   }

   //将dnspod记录列表json数据格式转换为自定义Record数组
   function dspdToArray($result){
       if(property_exists($result,'info')){
           $result_n = $result->info->record_total; 
       }else{
           $record_list = array();
           return $record_list;
       }
       $result_n = $result->info->record_total;
       //缓存进record_list
       $record_list = array();
       for($i=0; $i<count($result->records); $i++){
           $record = new Record();
           $record->init($result->records[$i]->id, $result->records[$i]->name, $result->records[$i]->line, $result->records[$i]->value, $result->records[$i]->weight, $result->records[$i]->ttl);
           array_push($record_list, $record);
       }   
       return $record_list;
   }

   //提交单个curl请求的函数
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
       
       return $obj;  
    }

    //多个cURL并发执行的函数
    // function postData2($url_list, $data_list){
        

    //添加记录
    function recordCreate($login_token, $format, $domain_id, $domain, $sub_domain, $record_type, $record_line, $value, $ttl, $weight)
    {   
        $url = "https://dnsapi.cn/Record.Create";     
        $data = array(
            'login_token' => $login_token,
            'format' => $format,
            'domain_id' => $domain_id,
            'domain' => $domain,
            'sub_domain' => $sub_domain,
            'record_type' => $record_type,
            'record_line' => $record_line,
            'value' => $value,
            'ttl' => $ttl,
            'weight' => $weight
        );
        array_push(self::$url_list, $url);
        array_push(self::$data_list, $data);
        array_push(self::$opt_list, "add");
        self::$count++;
        return 1;
        //return $this->postData($url, $data);
    }

    //记录列表
    function recordList($login_token, $format, $domain_id, $domain, $offset, $length, $sub_domain, $keyword)
    {
        $data = array(
            'login_token' => $login_token,
            'format' => $format,
            'domain_id' => $domain_id,
            'domain' => $domain,
            'offset' => $offset,
            'length' => $length,
            'sub_domain' => $sub_domain,
            'keyword' => $keyword
        );
        self::$count++;
        return $this->postData("https://dnsapi.cn/Record.List", $data);
    }

    //修改记录
    function recordModify($login_token, $format, $domain_id, $domain, $record_id, $sub_domain, $record_type, $record_line, $record_line_id, $value, $ttl, $weight)
    {
        $url = "https://dnsapi.cn/Record.Modify";          
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
            'ttl' => $ttl,
            'weight' => $weight
        );
        array_push(self::$url_list, $url);
        array_push(self::$data_list, $data);
        array_push(self::$opt_list, "modify");
        self::$count++;
        return 1;
        #return $this->postData("https://dnsapi.cn/Record.Modify", $data);
    }

    //删除记录
    function recordRemove($login_token, $format, $domain_id, $domain, $record_id)
    {
        $url = "https://dnsapi.cn/Record.Remove";    
        $data = array(
            'login_token' => $login_token,
            'format' => $format,
            'domain_id' => $domain_id,
            'domain' => $domain,
            'record_id' => $record_id 
        );
        array_push(self::$url_list, $url);
        array_push(self::$data_list,$data);
        array_push(self::$opt_list, "del");
        self::$count++;
        return 1;
        #return $this->postData("https://dnsapi.cn/Record.Remove", $data);
    }
    //比较两个record是否相同，子域名，线路类型，ip，权重，ttl
    function isEqual($record1, $record2){
        if($record1->weight==null)
                $record1->weight = 0;
        if($record2->weight==null)
                $record2->weight = 0;

        if($record1->sub_domain != $record2->sub_domain){
            return false;
        }else if($record1->line != $record2->line){
            return false;
        }else if($record1->value!= $record2->value){
            return false;
        }else if($record1->weight!=$record2->weight){           
            return false;
        }else if($record1->ttl  != $record2->ttl){
            return false;
        }
        return true;
    }
    //比较两个record是否属于相同的线路，根据子域名，线路类型比较
    function isLineEqual($record1, $record2){
        if($record1->sub_domain != $record2->sub_domain){
            return false;
        }else if($record1->line != $record2->line){
            return false;
        }
        return true;
    }
    //获取dnspod线路
    function getDnspodLine(){     
        $offset = '';
        $length = '';
        $sub_domain = '';//aa2
        $keyword = ""; //默认\u9ED8\u8BA4，电信\u7535\u4FE1，联通\u8054\u901A
        $obj = json_decode(JSON_DATA2);
        $record_list = array();
        //因为只能按子域名sub_domain获取列表，因此可能获取了其他类型记录(CNAME)、其他类型线路的记录，因此需要过滤掉这些记录
        for($i=0; $i<count($obj->data); $i++){
            $key_line_type = array();
            for($j=0; $j<count($obj->data[$i]->line); $j++){
                $key = $obj->data[$i]->line[$j]->line_type;
                if(in_array($key, $key_line_type)){
                 #  echo $i.$j."in,<br>";
                }else{
                    array_push($key_line_type, $key );
                }
            }            
           # echo "<br>线路类型数组：<br>";
           # echo print_r($key_line_type);
           # echo "<br>end.<br>";
            //获取dnspod记录列表
            $sub_domain = $obj->data[$i]->sub_domain;
            //按子域名的分组查询列表
            $result = $this->recordList(LOGIN_TOKEN, FORMAT, DOMAIN_ID, DOMAIN, $offset, $length, $sub_domain, $keyword);
           
            if(property_exists($result, 'records')){
              #  echo "<br>存在records,进行过滤<br>";
              #  echo "<br>过滤前：<br>";
                foreach($result->records as $key => $value){
                 #   echo $i."[".$key."]line:".$value->line."<br>";
                    //只保留A记录类型
                    //if($value->type=="A"){
                        //只保留与更新相关的线路类型
                        if(in_array($value->line, $key_line_type)){
                        }else{
                            unset($result->records[$key]);
                          #  array_splice($result->records,$key,1);
                        }
                    //}else{
                    //    unset($result->records[$key]);
                    //}
                }
                //重新整理索引
                array_splice($result->records,0,0);
              #  echo "过滤后：<br>";
                for($j=0; $j<count($result->records); $j++){
                 #   echo $i."[".$j."]line:".$result->records[$j]->line."<br>";
                }
            }else{
              #  echo "<br>不存在records,跳过过滤<br>";
            } 
            $record_list2= $this->dspdToArray($result);
            $record_list = array_merge($record_list, $record_list2);
        }
        $this->dspdToArray($result);
        #$this->printRecordList($record_list);
        return $record_list;
     }
    /*
     *更新线路,将update_list中的record与dspd_list中的record比较，完全相同则不操作，权值或ttl不同则进行修改，不存在的record则增加
     *
     *update_list:需要更新的record列表
     *dspd__list:dnspod已存在的record列表
     *
     *return 生成任务结果，status
     */
     function updateLine($update_list, $dspd_list)
     { 
         //标记数组，dspd记录是否已处理（0:to do, 1:done）
         $flag_dspd = array();
         //标记数组，待更新线路的记录(0:to do, 1:done)
         $flag_update = array();
         //不操作的记录，索引表
         $list_none = array();
         //需修改的记录，索引表
         $list_modify = array();
         //待删除的记录，索引表
         $list_del = array();
         //待添加的记录，索引表
         $list_add = array();
         for($i=0; $i<count($dspd_list); $i++){
             array_push($flag_dspd, 0);
         }
         for($i=0; $i<count($update_list); $i++){
             array_push($flag_update, "0");
         }
         echo "<br>update：".count($flag_update).", dspd: ".count($flag_dspd)."<br><br>";
         //判断哪些记录已存在，不作任何操作
         for($i=0; $i<count($update_list); $i++){
             //如果 updata记录 未被操作，则开始匹配
             if($flag_update[$i] == 0){
                 for($j=0; $j<count($dspd_list); $j++){
                     //如果 dspd记录 未被操作， 则开始匹配
                     if($flag_dspd[$j] == 0){
                         if($this->isEqual($update_list[$i], $dspd_list[$j])){
                             $flag_update[$i] = 1;
                             $flag_dspd[$j] = 1;
                             $list_none[$i] = $j;
                         }
                     }
                 }
             }
         }
         //判断哪两条记录之间进行修改（判断条件：必须相同子域名和线路类型，不然修改会导致超出线路记录数量限制）
         for($i=0; $i<count($update_list); $i++){
             if($flag_update[$i] == 0){
                 for($j=0; $j<count($dspd_list); $j++){
                     if($flag_dspd[$j] == 0){
                         if($this->isLineEqual($update_list[$i],$dspd_list[$j])){
                             //在相同的ip修改
                             if($update_list[$i]->value==$dspd_list[$j]->value){   
                                 $flag_update[$i] = 1;
                                 $flag_dspd[$j] =1;
                                 $list_modify[$i] = $j;
                                 break;
                             }
                         }
                     } 
                 }
             }
         }
         /*不限制条件，随意两两记录之间进行修改
         for($i=0; $i<count($update_list); $i++){
             if($flag_update[$i] == 0){
                 for($j=0; $j<count($dspd_list); $j++){
                     if($flag_dspd[$j] == 0){
                         $flag_update[$i] = 1;
                         $flag_dspd[$j] =1;
                         $list_modify[$i] = $j;
                         break;
                     } 
                 }
             }
         }
         */
         $modify_num = count($list_modify);
         $add_num = count($update_list)-count($list_none)-$modify_num;
         $del_num = count($dspd_list)  -count($list_none)-$modify_num;
         echo "none_num:".count($list_none).", add_num:".$add_num.", del_num:".$del_num.", modify_num".$modify_num."<br>";
         //判断哪些记录需要进行 添加操作
         if($add_num>0){
             for($i=0; $i<count($update_list); $i++){
                 if($flag_update[$i]==0){
                     array_push($list_add, $i);
                     $flag_update[$i] = 1;
                 }
             }
         }
         //判断哪些记录需要进行 删除操作
         if($del_num>0){
             for($i=0; $i<count($dspd_list); $i++){
                 if($flag_dspd[$i]==0){
                     array_push($list_del, $i);
                     $flag_dspd[$i] = 1 ;
                 }
             }
         }
        # echo "处理标记数组：<br>";
        # echo print_r($flag_update,1).array_sum($flag_update)."<br>".print_r($flag_dspd,1).array_sum($flag_dspd)."<br>";        
         echo "已有记录：<br>";
         echo print_r($list_none,1).count($list_none)."<br>";
         echo "需修改记录：<br>";
         echo print_r($list_modify,1).count($list_modify)."<br>";
         echo "待删除的记录：<br>";
         echo print_r($list_del,1).count($list_del)."<br>";
         echo "待添加的记录：<br>";
         echo print_r($list_add,1).count($list_add)."<br>";
         //批量删除记录
         for($i=0; $i<count($list_del); $i++){
             $record_id = $dspd_list[$list_del[$i]]->record_id;
            # echo "---------------正在删除【".$list_del[$i]."】-------------<br>";
             $details = '"details":"'.$record_id.", ".$dspd_list[$list_del[$i]]->sub_domain.", ".$dspd_list[$list_del[$i]]->line.", ".$dspd_list[$list_del[$i]]->value.", ".$dspd_list[$list_del[$i]]->ttl.", ".$dspd_list[$list_del[$i]]->weight.'"';
             $result_obj = $this->recordRemove(LOGIN_TOKEN, FORMAT, DOMAIN_ID, DOMAIN, $record_id);
            # $result = $result_obj->status->message;
            # echo "结果：".$result."<br>";
             array_push(self::$details_list, $details);
            # echo $details."<br>";
            # echo "---------------操作完毕-------------------<br><br>";
 
         }                 
         //批量修改记录
         foreach($list_modify as $key => $value){
             $record = $update_list[$key];
             $record_id = $dspd_list[$value]->record_id;
             $sub_domain = $record->sub_domain;
             $record_line = $record->line;
             $record_line_id = "";
             $ip_value = $record->value;
             $ttl = $record->ttl;
             $weight = $record->weight;
            # echo "---------------正在修改【".$key."】-------------<br>";
             $details = '"details":"'.$dspd_list[$value]->record_id.", ".$dspd_list[$value]->sub_domain.", ".$dspd_list[$value]->line.", ".$dspd_list[$value]->value.", ".$dspd_list[$value]->ttl.", ".$dspd_list[$value]->weight."=>"
             //修改后的数据
             .$record_id.", ".$sub_domain.", ".$record_line.", ".$ip_value.", ".$ttl.", ".$weight.'"';
             $result_obj = $this->recordModify(LOGIN_TOKEN, FORMAT, DOMAIN_ID, DOMAIN, $record_id, $sub_domain, RECORD_TYPE, $record_line, $record_line_id, $ip_value, $ttl, $weight);      
            # $result = $result_obj->status->message;
            # echo "结果：".$result."<br>";
             array_push(self::$details_list, $details);
            # echo $details."<br>";
            # echo "---------------操作完毕-------------------<br><br>";
         }
         //批量添加记录         
         for($i=0; $i<count($list_add); $i++){
             $sub_domain = $update_list[$list_add[$i]]->sub_domain;
             $record_line = $update_list[$list_add[$i]]->line;
             $value = $update_list[$list_add[$i]]->value;
             $ttl = $update_list[$list_add[$i]]->ttl;
             $weight = $update_list[$list_add[$i]]->weight; 
            # echo "---------------正在添加【".$list_add[$i]."】-------------<br>";
             $details = '"details":"'.$sub_domain.", ".$record_line.", ".$value.", ".$ttl.", ".$weight.'"';
             $result_obj = $this->recordCreate(LOGIN_TOKEN, FORMAT, DOMAIN_ID, DOMAIN, $sub_domain, RECORD_TYPE, $record_line, $value, $ttl, $weight);
            # $result = $result_obj->status->message;
            # echo "结果：".$result."<br>";
             array_push(self::$details_list, $details);
            # echo $details."<br>";
            # echo "---------------操作完毕-------------------<br><br>";
         }
        # echo "<br>url_list:<br>";
        # print_r(self::$url_list);
        # echo "<br>data_list:<br>";
        # print_r(self::$data_list);          
     }
     /*
      *curl并发执行函数
      *
      *$url_list:  url列表
      *$data_list:  需要post的数据列表，与url列表一一对应
      *
      *return:  返回url访问后的字符串数组
      */
      function curl_multi_fetch($url_list, $data_list){
          $result=$res=$ch=array();
          $nch = 0;
          $mh = curl_multi_init();
          foreach ($url_list as $nk => $url) {
              $timeout=10;
              $ch[$nch] = curl_init();
              curl_setopt_array($ch[$nch], array(
                  CURLOPT_URL => $url,
                  CURLOPT_HEADER => false,
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_TIMEOUT => $timeout,
                  CURLOPT_POST => true,
                  CURLOPT_POSTFIELDS => $data_list[$nk],    
              ));
              curl_multi_add_handle($mh, $ch[$nch]);
              ++$nch;
          }
          /* wait for performing request */
          do {
              $mrc = curl_multi_exec($mh, $running);
          } while (CURLM_CALL_MULTI_PERFORM == $mrc);
          while ($running && $mrc == CURLM_OK) {
              // wait for network
              if(curl_multi_select($mh, 0.5) > -1) {
                  // pull in new data;
                  do {
                      $mrc = curl_multi_exec($mh, $running);
                  } while (CURLM_CALL_MULTI_PERFORM == $mrc);
                  $localtime = time();
              }
          }
          if ($mrc != CURLM_OK) {
              error_log("CURL Data Error");
          }
          /* get data */
          $nch = 0;
          foreach ($url_list as $moudle=>$node) {
              if (($err = curl_error($ch[$nch])) == '') {
              //curl_multi_getcontent,如果CURLOPT_RETURNTRANSFER作为一个选项被设置到一个具体的句柄，
              //会以字符串的形式返回那个cURL句柄获取的内容
                  $res[$nch]=curl_multi_getcontent($ch[$nch]);
                  $obj = json_decode($res[$nch]);
                  $code = $obj->status->code;
                  $message = $obj->status->message;
                  $created_at = $obj->status->created_at;
                  $message = $code."-".$message;
                  $info = $code==1 ? "successful" : "failed";                  
                 # echo "nch:".$nch.", opt:".self::$opt_list[$nch].", ch:".$ch[$nch].", result:".$res[$nch].", ".self::$details_list[$nch]."<br>";
                  $status = '"opt":"'.self::$opt_list[$nch].'","status":"'.$info.'","dnspod_mes":"'.$message.'","created_at":"'.$created_at.'",'.self::$details_list[$nch];
                  array_push(self::$status_list, $status);
                 # echo "【".$nch."】".$status."<br>";
                  $result[$moudle]=$res[$nch];
              }else{
                  $res[$nch]=curl_multi_getcontent($ch[$nch]);
                  $status = '"opt":"'.self::$opt_list[$nch].'","status":"failed","dnspod_mes":"Timeout(3s) '.print_r($res[$nch],1).'",'.self::$details_list[$nch];
                  array_push(self::$status_list, $status);     
                 # echo "【".$nch.$err."】".$status."<br>"; 
                  error_log("curl error");
              }
              curl_multi_remove_handle($mh,$ch[$nch]);
              curl_close($ch[$nch]);
              ++$nch;
          } 
          curl_multi_close($mh);
          return $result;
     }
      
}
