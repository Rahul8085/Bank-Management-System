<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transactions History</title>
</head>

<body>
    <?php include 'dbConnect.php'; ?>
    <div class="container-fluid bg-overlay4">
        <?php include 'transaction.html'; ?>
        <div class="container my-5">
            <h1 class="text-center mt-2">Transactions History</h1>
            <table id="myTable" class="table">
                <thead class="bg-dark text-light">
                    <th>Sender Id</th>
                    <th>Receiver Id</th>
                    <th>Transaction</th>
                    <th>Date</th>
                </thead>
                <tbody class="">
                    <?php
                    $query = 'SELECT * FROM `transaction_details`';
                    $result = mysqli_query($conn, $query);
                    $num_rows = mysqli_num_rows($result);
                    while ($rows = mysqli_fetch_assoc($result)) {
                        echo '
            <tr>
			<td>' . $rows['sender_id'] . '</td>
            <td>' . $rows['receiver_id'] . '</td>
            <td>Rs. ' . $rows['Amount'] . '</td>
            <td>' . $rows['Transaction_Date'] . '</td>
            </tr>
            ';
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>