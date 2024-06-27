<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>THONG TIN SINH VIEN</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Mã SV</th>
                <th>Họ và Tên</th>
                <th>Tuổi</th>
                <th>Chuyên ngành</th>
                <th>Quê quán</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $students['id'] }}</td>
                <td>{{ $students['name'] }}</td>
                <td>{{ $students['age'] }}</td>
                <td>{{ $students['cn'] }}</td>
                <td>{{ $students['country'] }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
