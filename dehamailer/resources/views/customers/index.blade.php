<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<body>
    <table>
        <tr>
            <th class="text-center"><input type="checkbox" value="" name="checkAll" /></th>
            <th class="text-center">Company Name</th>
            <th class="text-center">Full Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Last sent mail</th>
            <th class="text-center">Created date</th>
            <th class="text-center">Updated date</th>
            <th class="text-center"></th>
        </tr>
        <?php foreach ($customers as $cus){ ?>
            <tr>
                <td>
                    <input type="checkbox" name="send[{{ $cus->customers_id }}]" value="1" />
                </td>
                <td>
                    {{ $cus->customers_name }}
                </td>
                <td>
                    {{ $cus->customers_full_name }}
                </td>
                <td>
                    {{ $cus->customers_mail }}
                </td>
                <td>
                    {{ $cus->customers_last_sent_mail }}
                </td>
                <td>
                    {{ $cus->created_at }}
                </td>
                <td>
                    {{ $cus->updated_at }}
                </td>
                <td>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>