<?php
include 'db.php';

$result = $conn->query("SELECT * FROM profile");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Database Fetch</title>

    <style>
        body {
            font-family: Arial;
            background: #f8fafc;
        }

        .wrap {
            width: 90%;
            max-width: 950px;
            margin: 50px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th,
        td {
            padding: 13px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #4f46e5;
            color: white;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <h2>Student Details Fetched from MySQL</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qualification</th>
                <th>Institution</th>
                <th>Email</th>
                <th>City</th>
            </tr>

            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td>
                        <?= $row['id'] ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($row['name']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($row['qualification']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($row['institution']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($row['email']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($row['city']) ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>