<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <form action="test" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="text" name="username" value="">
            <input type="text" name="age" value="">
            <input type="submit" value="提交">
        </form>
    </body>
</html>
