<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>時間</th>
            <th>名前</th>
            <th>email</th>
            <th>星座</th>
        </tr>
        <?php
        $file = fopen('data/data.txt', 'r'); // ファイルを開く

        // ファイル内容を1行ずつ読み込んで出力
        while ($str = fgets($file)) {
            $data = explode(',', $str);
            echo "<tr>";
            echo "<td>" . $data[0] . "</td>"; // 時間
            echo "<td>" . $data[1] . "</td>"; // 名前
            echo "<td>" . $data[2] . "</td>"; // email
            echo "<td>" . $data[3] . "</td>"; // 星座
            echo "</tr>";
        }
        fclose($file); // ファイルを閉じる
        ?>
    </table>
</body>
</html>
