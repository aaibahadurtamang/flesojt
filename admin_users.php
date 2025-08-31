<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manage Users</title>



<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f8;
        margin: 20px;
    }
    h2 {
        text-align: center;
        color: #333;
    }
    table {
        width: 90%;
        margin: 20px auto;
        border-collapse: collapse;
        background: #fff;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }
    th {
        background: #37aef3;
        color: white;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    a.delete-btn {
        background: #e74c3c;
        color: white;
        padding: 6px 12px;
        border-radius: 5px;
        text-decoration: none;
        transition: 0.3s;
    }
    a.delete-btn:hover {
        background: #c0392b;
    }
    .table-container {
        overflow-x: auto;
    }
</style>


</head>
<body>

<h2>Manage Users</h2>
<div class="table-container">
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Action</th>
    </tr>
    <?php if(!empty($users)): ?>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['name']) ?></td>
            <td><?= htmlspecialchars($user['mobile']) ?></td>
            <td>
                <a class="delete-btn" href="<?= base_url('admin/delete/users2/'.$user['id']) ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">No users found.</td>
        </tr>
    <?php endif; ?>
</table>
</div>

</body>
</html>
