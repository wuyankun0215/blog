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
 <h1></h1>
        <form class="form-horizontal" role="form" method="post" action="{{url('admin/store')}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">品牌管理</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="brand_name" id="firstname" placeholder="请输入名称">
                <b style="color:red"></b>
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">品牌网址</label>
            <div class="col-sm-10">
            <input type="url" class="form-control" name="brand_url" id="lastname" placeholder="请输入品牌网址">
                <b style="color:red"></b>
            </div>
        </div>
            <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">品牌LOGO</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="lastname" name="brand_logo">
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">描述、</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastname" name="brand_desc">
                </div>
            </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加</button>
            </div>
        </div>
        </form>
 </body>
   <script src="/static/admin/js/jquery.js"></script>
   <script>
       $('input[ name="brand_name"]').blur(function(){
           $(this).next().text('');
          var brand_name = $(this).val();

           var reg = /^[\u4e00-\u9fa5\w.\-]{1,16}$/;
           if(!reg.test(brand_name)){
               $(this).next().text('品牌名称需是中文、字母、下划线、点和-长度为1-16！')
           }
       });

       $('input[name="brand_url"]').blur(function(){
           $(this).next().text('');
           var brand_url = $(this).val();
           var reg = /^http:\/\*/;
           if(!reg.test(brand_url)){
               $(this).next().text('品牌必须是HTTP开头')
           }
       });
   </script>

</html>