

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manage Hotels</title>
<style>
    body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 20px; }
    h2 { text-align: center; color: #333; }
    .table-container { overflow-x: auto; }
    table {
        width: 95%;
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

<h2>Manage Hotels</h2>
<div class="table-container">
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>City</th>
        <th>Rate</th>
        <th>MRP</th>
        <th>Discount</th>
        <th>Action</th>
    </tr>
    <?php if(!empty($hotels)): ?>
        <?php foreach($hotels as $hotel): ?>
        <tr>
            <td><?= htmlspecialchars($hotel['id']) ?></td>
            <td><?= htmlspecialchars($hotel['name']) ?></td>
            <td><?= htmlspecialchars($hotel['city']) ?></td>
            <td><?= htmlspecialchars($hotel['rate']) ?></td>
            <td><?= htmlspecialchars($hotel['mrp']) ?></td>
            <td><?= htmlspecialchars($hotel['discount']) ?></td>
            <td>
                <a class="delete-btn" href="<?= base_url('admin/delete/hotels/'.$hotel['id']) ?>" onclick="return confirm('Are you sure you want to delete this hotel?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr><td colspan="7">No hotels found.</td></tr>
    <?php endif; ?>
</table>
</div>

</body>
</html>
