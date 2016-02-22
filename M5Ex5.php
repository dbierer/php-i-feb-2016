<?php
// from nicolae
function getStaticOrders() {
    $orders = [
        [
            'id' => 1,
            'order_status' => 'complete',
            'amount' => 560,
            'order_date' => 1355097600,
            'customer' => 'Susan Chu'
        ],
        [
            'id' => 2,
            'order_status' => 'invoiced',
            'amount' => 9800,
            'order_date' => 1359062345,
            'customer' => 'Jason Flores'
        ],
        [
            'id' => 3,
            'order_status' => 'held',
            'amount' => 300,
            'order_date' => 1357948800,
            'customer' => 'Janet Levitz'
        ],
        [
            'id' => 4,
            'order_status' => 'open',
            'amount' => 34,
            'order_date' => 1359500400,
            'customer' => 'Jason Flores'
        ],
        [
            'id' => 5,
            'order_status' => 'open',
            'amount' => 4570,
            'order_date' => 1359586800,
            'customer' => 'George Stevenson'
        ],
        [
            'id' => 6,
            'order_status' => 'invoiced',
            'amount' => 2000,
            'order_date' => 1359586800,
            'customer' => 'Thomas White'
        ],
        [
            'id' => 7,
            'order_status' => 'open',
            'amount' => 300,
            'order_date' => 1360796400,
            'customer' => 'Jason Flores'
        ],
    ];
    return $orders;
}

$orders = getStaticOrders();

echo "<table>\n";
echo "\t<tr>\n";
echo "\t\t<th>Order #</th>\n";
echo "\t\t<th>Order Date</th>\n";
echo "\t\t<th>Customer</th>\n";
echo "\t\t<th>Order Status</th>\n";
echo "\t\t<th>Amount</th>\n";
echo "\t</tr>\n";

foreach ($orders as $order) {
    $row = "";
    $row .= "\t<tr>\n";
    $row .= "\t\t<td>" . $order['id'] . "</td>\n";
    $row .= "\t\t<td>" . date("M d, Y", $order['order_date']) . "</td>\n";
    $row .= "\t\t<td>" . $order['customer'] . "</td>\n";
    $row .= "\t\t<td>" . $order['order_status'] . "</td>\n";
    $row .= "\t\t<td>" . $order['amount'] . "</td>\n";
    $row .= "\t</tr>\n";
    echo $row;
}
echo '</table>';