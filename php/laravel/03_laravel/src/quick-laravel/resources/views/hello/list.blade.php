<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>速習</title>
</head>
<body>
    <table class="table">
        <tr>
            <th>署名</th>
            <th>価格</th>
            <th>出版社</th>
            <th>刊行日</th>
        </tr>
        @foreach($records as $record)
        <tr>
            <td>{{$record->title}}</td>
            <td>{{$record->price}}</td>
            <td>{{$record->publisher}}</td>
            <td>{{$record->published}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>