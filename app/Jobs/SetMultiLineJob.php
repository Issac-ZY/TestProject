<?php

namespace App\Jobs;

use App\User;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Illuminate\Support\Facades\Log;

use App\ALine;


class SetMultiLineJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

   # public $user;
    public $json_data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
   //public function __construct(User $user, $json_data)
    public function __construct($json_data)
    {
        //
      #  $this->user = $user;
        $this->json_data = $json_data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        date_default_timezone_set('Asia/Shanghai'); 
        Log::info("1 任务开始：".date("Y-m-d H:i:s"));
        $json_data = $this->json_data;
        $aline = new ALine();
        $mes = $aline->setMultiLine($json_data);  
        Log::info($mes);
  #     $time2 = microtime(true);
    #     Log::info( $aline->getStatus(13)."\n");
    #    $time3 = microtime(true);
     #   echo "获取任务状态用时：".round($time3-$time2,3)."秒<br><br>";     
     #   $aline->getByLine("谷歌","aa3");
     #    Log::info(print_r($aline,1));
   #     $time4 = microtime(true);
   #     echo "获取某一线路用时：".round($time4-$time3,3)."秒<br><br>"; 

        echo "\n任务完成\n";
    }
    public function failed(){
        echo "\n任务失败\n";
    }
}
