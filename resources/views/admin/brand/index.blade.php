<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <h3>列表展示</h3>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
</head>
<body>
<h3><a href="{{url('admin/brand')}}">添加</a></h3>
  <form >
      <input type="text" name="word" value="{{$arr['word']??''}} "placeholder="请输入关键字">
      <button>搜索</button>
  </form >  
<table class="table table-bordered">
    <thead>
    <th>z走的是db</th>
    <tr>
        <th>ID</th>
        <th>新闻名称</th>
        <th>新闻网址</th>
        <!-- <th>logo</th> -->
        <th>新闻管理</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($data as $v)
     
    <tr>
        
        <td>{{$v->brand_id}}</td>
        <td>{{$v->brand_name}}</td>
        <td>{{$v->brand_url}}</td>
<td><img src="{{env('APP_URL')}}{{$v->brand_logo}}" width="50px"/></td>
        <td>{{$v->brand_desc}}</td>
        <td>
            {{--<a href="{{url('/admin/edit/'.$v->brand_id)}}" class="btn btn-info">编辑</a>--}}
            <a href="{{url('/admin/del/'.$v->brand_id)}}" 
            fkre  class="btn btn-danger">删除</abbbbbbb>
        </td>

    </tr>
    @endforeach
    <tr>
        <td colspan="4">{{$data->links()}}</td>
    </tr>
    </tbody>
</table>

</body>
</html>