<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;

class orderController extends Controller
{
    public function index(Request $request)
    {
        $gid = $request->input('gid');
        $goodsInfo = $this->getGoodsInfo($gid);
        $zprice = 0;
        foreach ($goodsInfo as $k  => $v) {
            // dd($v);
            // $k = $k->toArray();
            $zprice+= $v->buy_num*$v->gprice;
        }
        // dd($goodsInfo);
        return view('index/index_order')->with('goods',$goodsInfo)->with('zprice',$zprice)->with('gid',$gid);
    }
    public function index2(Request $request)
    {
        if(Session::get("user")){
            $uid=Session::get("user")->uid;
            DB::beginTransaction();
            try{
                $gid = $request->input('gid');
                $goodsInfo = $this->getGoodsInfo($gid);
                $zprice = 0;
                foreach ($goodsInfo as $k  => $v) {
                    $zprice+= $v->buy_num*$v->gprice;
                }
                $str = date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
                $result1 = DB::table('order')->insert(['order_num'=>$str,'uid'=>$uid,'oprice'=>$zprice,'addtime'=>time()]);
                if (!$result1) {
                    /**
                     * Exception类接收的参数
                     * $message = "", $code = 0, Exception $previous = null
                     */
                    throw new \Exception("1");
                }
                $id = explode(',',$gid);
                $result2 = DB::table('cart')->whereIn('gid',$id)->where('uid',$uid)->update(['is_del'=>2]);
                if (!$result2) {
                    throw new \Exception("2");
                }
                $orderdetail = [];
                $orderInfo=DB::table('order')->where('order_num',$str)->first();
                // dd($orderInfo);
                foreach ($goodsInfo as $k => $v) {
                    $orderdetail[] = [
                        'gid'=>$v->gid,
                        'gname'=>$v->gname,
                        'gsrc'=>$v->gsrc,
                        'order_id'=>$orderInfo->id,
                        'uid'=>$uid,
                        'addtime'=>time(),
                        'buy_num'=>$v->buy_num,
                        'gprice'=>$v->gprice,
                        'oldprice'=>$v->oldprice,
                    ];
                }
                $result3=DB::table('order_detail')->insert($orderdetail);
                if (!$result3) {
                    throw new \Exception("3");
                }
                DB::commit();
                return view('index/index_order2')->with('order_num',$str)->with('zprice',$zprice);
            } catch (\Exception $e){
                DB::rollback();//事务回滚
                echo $e->getMessage();
                echo $e->getCode();
            }
        }else{
            return redirect()->action('Index\loginController@login');
        }
    }
    public function index3(Request $request)
    {
        if(Session::get("user")){
            $uid=Session::get("user")->uid;
            $orderInfo=DB::table('order')->where('order.uid',$uid)->join('order_detail','order.id','=','order_detail.order_id')->get();
            // dd($orderInfo);
            return view('index/index_order3')->with('order',$orderInfo);
        }else{
            return redirect()->action('Index\loginController@login');
        }
    }
    public function changeStatus(Request $request)
    {
        $id=$request->input('id');
        $res=DB::table('order')->where('id',$id)->update(['status'=>3]);
        if($res){
            return 'ok';
        }
    }
    public function getGoodsInfo($gid)
    {
        $id = explode(',',$gid);
        $goodsInfo = DB::table('goods')->whereIn('goods.gid',$id)->where('goods.is_del',1)->join('cart','goods.gid','=','cart.gid')->where('cart.is_del',1)->get()->toArray();
        return $goodsInfo;
    }
}
