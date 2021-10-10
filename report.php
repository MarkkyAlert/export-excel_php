<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export to Excel</title>
</head>

<body>
    <button>Export</button>
    <br><br>
    <table border=1 id="table2excel">
        <tr>
            <th>ลำดับ</th>
            <th>ชื่อสินค้า</th>
            <th>ราคา</th>
            <th>หมวด</th>
        </tr>
        <tr>
            <td>1</td>
            <td>เสื้อยืด</td>
            <td>200</td>
            <td>เสื้อ</td>

        </tr>
        <tr>
            <td>2</td>
            <td>กางเกง</td>
            <td>200</td>
            <td>เสื้อ</td>
        </tr>
    </table>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    
    <script src="export/src/jquery.table2excel.js"></script>
    <script>
        $("button").click(function() {
            $("#table2excel").table2excel({
                // exclude CSS class
                exclude: ".noExl",
                name: "Worksheet Name",
                filename: "SomeFile", //do not include extension
                fileext: ".xls" // file extension
            });
        });
    </script>
</body>

</html>