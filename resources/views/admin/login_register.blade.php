<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
</head>
<body>
        <form action="{{url('doregister')}}" method="post">
            @csrf
            <table border="1">
                <tr>
                    <td>账号</td>
                    <td>
                        <input type="text" name="name" id="name">
                    </td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td>
                        <input type="password" name="pwd" id="pwd">
                    </td>
                </tr>
                <tr>
                    <td colsapn="2">
                        <input type="submit" value="注册">
                    </td>
                </tr>
            </table>
        </form>
</body>
</html>
