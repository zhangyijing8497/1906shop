<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function redis1()
    {
        $key = 'shop';
        $val = '2020年3月9日12:13:08'.$key;
        Redis::set($key,$val);
        echo "set 成功";
    }

    public function redis2()
    {
        $key = 'shop';
        $val = Redis::get($key);
        echo "val:" . $val;
    }

    public function mysql1()
    {
        $list = DB::table('p_users')->first();
        var_dump($list);
    }
}
