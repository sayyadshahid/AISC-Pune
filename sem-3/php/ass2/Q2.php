<!DOCTYPE html>
<html>
<head>
    <title>Server Information</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 30px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
       
    </style>
</head>
<body>
    <h2 style="text-align:center;">Server Information</h2>
    <table>
        <tr>
            <th>Variable</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Server Name</td>
            <td><?php echo $_SERVER['SERVER_NAME']; ?></td>
        </tr>
        <tr>
            <td>Server Address</td>
            <td><?php echo $_SERVER['SERVER_ADDR']; ?></td>
        </tr>
        <tr>
            <td>Server Software</td>
            <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td>
        </tr>
        <tr>
            <td>Server Protocol</td>
            <td><?php echo $_SERVER['SERVER_PROTOCOL']; ?></td>
        </tr>
        <tr>
            <td>Request Method</td>
            <td><?php echo $_SERVER['REQUEST_METHOD']; ?></td>
        </tr>
        <tr>
            <td>Server Port</td>
            <td><?php echo $_SERVER['SERVER_PORT']; ?></td>
        </tr>
        <tr>
            <td>Document Root</td>
            <td><?php echo $_SERVER['DOCUMENT_ROOT']; ?></td>
        </tr>
        <tr>
            <td>Script Name</td>
            <td><?php echo $_SERVER['SCRIPT_NAME']; ?></td>
        </tr>
    </table>
</body>
</html>
