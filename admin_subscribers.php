<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manage Subscribers</title>
<style>
    body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 20px; }
    h2 { text-align: center; color: #333; }
    .table-container { overflow-x: auto; }
    table {
        width: 50%;
        margin: 20px auto;
        border-collapse: collapse;
        background: #fff;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td { padding: 12px 15px; text-align: center; border-bottom: 1px solid #ddd; }
    th { background: #37aef3; color: white; text-transform: uppercase; letter-spacing: 0.1em; }
    tr:hover { background-color: #f1f1f1; }
    a.delete-btn {
        background: #e74c3c; color: white; padding: 6px 12px;
        border-radius: 5px; text-decoration: none; transition: 0.3s;
    }
    a.delete-btn:hover { background: #c0392b; }
</style>
</head>
<body>

<h2>Manage Subscribers</h2>
<div class="table-container">
<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php if(!empty($subscribers)): ?>
        <?php foreach($subscribers as $sub): ?>
        <tr>
            <td><?= htmlspecialchars($sub['id']) ?></td>
            <td><?= htmlspecialchars($sub['email']) ?></td>
            <td>
                <a class="delete-btn" href="<?= base_url('admin/delete/subscribers/'.$sub['id']) ?>" onclick="return confirm('Are you sure you want to delete this subscriber?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr><td colspan="3">No subscribers found.</td></tr>
    <?php endif; ?>
</table>
</div>

</body>
</html>
