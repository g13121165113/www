<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>学生修改</title>
</head>
<body>
    <form action="{{url('stu_doupdate')}}" method="post">
        @csrf
        <table border='1'>
            <input type="hidden" name="id" value="{{$data->id}}">
            <tr>
                <td>姓名</td>
                <td>
                    <input type="text" name="name" value="{{$data->name}}">
                </td>
            </tr>
            <tr>
                <td>年龄</td>
                <td>
                    <input type="text" name="age" id="" value="{{$data->age}}">
                </td>
            </tr>
            <tr>
                <td>性别</td>
                <td>
                    <input type="radio" name="sex" @if($data->sex==1)checked @endif value="1">男
                    <input type="radio" name="sex" @if($data->sex==2)checked @endif value="2">女
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="修改">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
