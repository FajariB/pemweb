<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Detail data kamu </title>
</head>

<body>
    <header>
        <h1>Status Kamu</h1>
    </header>
   
    <div class="form">
        <form action="/action_page.php">
            <table class="table">
                <tr>
                <th>context</th>
                <th>field</th>
                </tr>
                <tr>
                    <td>Nama depan &emsp;&emsp;&emsp;&emsp; </td>
                    <td><?php echo $_GET['fname'] ?></td>
                </tr>
                <tr>
                    <td>Nama belakang</td>
                    <td><?php echo $_GET['lname'] ?></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><?php echo $_GET['nik'] ?></td>
                </tr>
            </table>
        </form>

        <button class="button"><a href="https://www.pedulilindungi.id/">real check</a></button>
    </div>
</body>
</html>