<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendCode;

use Illuminate\Support\Facades\Mail;
use DB;

class Brand extends Controller
{

// //接收的邮箱号
//     public function sendemail() { Mail::to('2450287426@qq.com')->send(new SendCode()); } 



    /**
     * Display a listing of the resource.
     *展示页面
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $word = request()->word??'';
       $where=[];
       if($word){
           $where[]=['brand_name','like',"%$word%"];
       };
       DB::connection()->enableQueryLog();
       $logs = DB::getQueryLog();
      // dd($logs);
       $arr = request()->all();
       // $data = DB::table('brand')->orderBy('brand_id', 'desc')->paginate(2);
       $data = DB::table('brand')->where($where)->orderBy('brand_id', 'desc')->paginate(2);
        //dd($data);
        return view('admin.brand.index', ['data' => $data],['arr'=>$arr]);
    }

    /**
     * Show the form for creating a new resource.
     *添加
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *执行添加
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        dd('添加页面');
        //接收全部值
        //排除谁谁
        $post = $request->except(['_token']);
        //只接受谁谁
        // $post = $request->only(['_token','brand_name']);
        //  dump($post);
        //文件上传
        if($request->hasFile('brand_logo')){
            $post['brand_logo'] = $this->upload('brand_logo');
        }
         // dd($post);
        //db操作
        $res = DB::table('brand')->insert($post);
        if ($res) {
            return redirect('admin/index');
        }
    }

    /**
     * Display the specified resource.
     *详情页
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *编辑页面
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = DB::table('brand')->where('brand_id', $id)->first();
        return view('admin.brand.edit', ['data' => $data]);
        //dd($data);
    }

    /**
     * Update the specified resource in storage.
     *执行编辑
     
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //echo $id;
        $post = $request->except('_token');
        $res = DB::table('brand')->where('brand_id', $id)->update($post);
        if ($res !== false) {
            return redirect('/admin/index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *删除
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = DB::table('brand')->where('brand_id', $id)->delete();
        if ($res!== false) {
            return redirect('/admin/index');
        }
    }
//文件上传
    public function upload($filename)
    {
        if (request()->file($filename)->isValid())
        {
            //接收文件
            $photo = request()->file($filename);
            //上传文件
            $store_result = $photo->store('uploads');
            return $store_result;
        }
        exit('没有文件上传或者文件上传错误');
    }
}
