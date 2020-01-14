<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
  <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">  
 </head>
 <body>
 <h1 style="background:red;">品牌修改</h1>
        <form class="form-horizontal" role="form" method="post" action="{{url('admin/update'.$data->brand_id)}}">
        @csrf

        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">品牌名称</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$data->brand_name}}" name="brand_name" id="firstname" placeholder="请输入品牌名称">
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">品牌网址</label>
            <div class="col-sm-10">
            <input type="url" class="form-control"  value="{{$data->brand_url}}" name="brand_url" id="lastname" placeholder="请输入品牌网址">
            </div>
        </div>
            <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">品牌LOGO</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="lastname" name="brand_logo">
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">品牌描述</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  value="{{$data->brand_desc}}" id="lastname" name="brand_desc">
                </div>
            </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">提交</button>
            </div>
        </div>
        </form>
 </body>
</html>