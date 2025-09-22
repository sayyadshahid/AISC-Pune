<!-- Write a PHP Script to display Server information in table format (Use $_SERVER). -->
<head>

<style>
    tr, td {
border: 1px solid black;
    }
</style>
    
    <body>
        
        <table>
            <tr>
                <td>server name</td>
                <td><?php echo $_SERVER['SERVER_NAME'] ?></td>
            </tr>
            <tr>
                <td>server port</td>
                <td><?php echo $_SERVER['SERVER_PORT'] ?></td>
            </tr>
            <tr>
                <td>server addr</td>
                <td><?php echo $_SERVER['SERVER_ADDR'] ?></td>
            </tr>
            <tr>
                <td>server software</td>
                <td><?php echo $_SERVER['SERVER_SOFTWARE'] ?></td>
            </tr>
            <tr>
                <td>server protocal</td>
                <td><?php echo $_SERVER['SERVER_PROTOCOL'] ?></td>
            </tr>
            
        </table>
    </body>
</head>