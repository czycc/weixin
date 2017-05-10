<?php

namespace App\Http\Controllers\Hs;

use App\Models\Question;
use App\Models\Result;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function index()
    {
//      随机抽取4道问题
        $questions = Question::all()->random(5);
        return view('hs/index', compact('questions'));
    }

    public function result($quantity)
    {
        $user = session('wechat.oauth_user');
        $openid = Result::where('openid', $user['id'])->first();

//        保存信息
        $prize = 1;
        if ($quantity == 5) {
            if ($openid !== null) {
//            已经答过题了
                return view('hs/fail');
            }
            $rand = mt_rand(0, 1000);
            if ($rand < 478) {
                $prize = 1;
            } elseif ($rand >= 478 && $rand < 764) {
                $prize = 2;
            } elseif ($rand >= 764 && $rand < 923) {
                $prize = 3;
            } else {
                $prize = 4;
            }
            $prize_code = str_random(5);
            $result = new Result;
            $result->openid = $user['id'];
            $result->nickname = $user['nickname'];
            $result->headimgurl = $user['avatar'];
            $result->quantity = $quantity;
            $result->prize_code = $prize_code;
            $result->prize = $prize;
            $result->save();
        }
        return view('hs/result', compact('quantity', 'prize', 'prize_code'));
    }

    public function draw()
    {
//        因为放音乐，不需要该页面
        $user = session('wechat.oauth_user');
        $user_info = Result::where('openid', $user['id'])->first();
        $prize = $user_info->prize;
        $prize_code = $user_info->prize_code;
        return view('hs.draw', compact('prize', 'prize_code'));
    }

    public function statistics()
    {
        $results = Result::all();
        return view('hs/statistics', compact('results'));
    }
}
