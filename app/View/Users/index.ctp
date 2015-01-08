<h1>All users</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
        <th>Created</th>
        <th>Modify</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td><?php $this->Html->postlink($user['user']['username'], array(
            
        )); ?></td>
    </tr>
    <?php endforeach; ?>
</table>