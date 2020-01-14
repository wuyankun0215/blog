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
 <h1>商品添加</h1>
 <form class="form-horizontal" role="form" method="post" action="{{url('student/store')}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">商品名称</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="brand_name" id="firstname" placeholder="商品名称">
            </div>
        </div>

            <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">商品LOGO</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="lastname" name="brand_logo">
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">商品详细</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastname" name="brand_desc">
                </div>
            </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">点击提交</button>
            </div>
        </div>
        </form>
 </body>
</html>