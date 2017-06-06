<?php

namespace App\Http\Controllers\Vip;

use App\Http\Requests\StoreVipRequest;
use App\Models\Vip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VipController extends Controller
{
    public function index()
    {
//        return view('vip');
        return '很遗憾！报名时间已截止';
    }

    public function create(StoreVipRequest $request)
    {

        $result = Vip::create($request->all());
        return view('submitSuess', compact('result'));
    }

    public function mobile(StoreVipRequest $request)
    {

        $result = Vip::create($request->all());
        return view('redirect', compact('result'));
    }
}
