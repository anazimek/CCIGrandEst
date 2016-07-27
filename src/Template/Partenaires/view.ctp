
<div>
    <table >
        <tr>
            <td>Email</td>
            <td><?= h($user[0]['email']) ?></td>
        </tr>
        <tr>
            <th>Username</th>
            <td><?= h($user[0]['username']) ?></td>
        </tr>
        <tr>
            <th>First Name</th>
            <td><?= h($user[0]['first_name']) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Name') ?></th>
            <td><?= h($user[0]['last_name']) ?></td>
        </tr>
        <tr>
            <th><?= __('Company Name') ?></th>
            <td><?= h($user[0]['company_name']) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($user[0]['address']) ?></td>
        </tr>

    </table>

</div>
