<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    /*
    protected $fillable = [
         'record_id', 'sub_domain', 'line', 'value', 'weight', 'ttl'
    ];
    */
    //记录id
    public $record_id;
    //子域名
    public $sub_domain;
    //线路类型
    public $line;
    //记录值
    public $value;
    //权重
    public $weight;
    public $ttl;
    public function Record($record_id, $sub_domain, $line, $value, $weight, $ttl){
        $this->record_id = $record_id;
        $this->sub_domain = $sub_domain;
        $this->line = $line;
        $this->value = $value;
        $this->weight = $weight;
        $this->ttl = $ttl;
    }
  
    public function init($record_id, $sub_domain, $line, $value, $weight, $ttl){
        $this->record_id = $record_id;
        $this->sub_domain = $sub_domain;
        $this->line = $line;
        $this->value = $value;
        $this->weight = $weight;
        $this->ttl = $ttl;
    }
}
