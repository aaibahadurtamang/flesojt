
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh;
    background: url('https://www.furtenbachadventures.com/wp-content/uploads/view_7800_everest-e1564406006156.jpg') no-repeat center center fixed;
    background-size: cover;
    position: relative;
}

/* Overlay for better readability */
body::before {
    content: "";
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.4);
    z-index: -1;
}

header {
    background: rgba(55,174,243,0.9);
    color: #fff;
    padding: 20px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 5px 15px rgba(0,0,0,.2);
}
header h1 {
    margin: 0;
    font-size: 28px;
}
header a.logout {
    background: #ff4d4d;
    color: #fff;
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
}
header a.logout:hover {
    background: #e60000;
}
.container {
    width: 90%;
    margin: 60px auto;
}
.cards {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}
.card {
    background: rgba(55,174,243,0.85);
    color: #fff;
    padding: 30px;
    text-align: center;
    width: 220px;
    border-radius: 15px;
    text-decoration: none;
    font-weight: bold;
    box-shadow: 0 5px 15px rgba(0,0,0,.3);
    transition: 0.3s;
    backdrop-filter: blur(4px);
}
.card:hover {
    background: rgba(33,150,243,0.9);
    transform: translateY(-7px) scale(1.05);
}
</style>
</head>
<body>
<header>
    <h1>Admin Dashboard</h1>
    <a href="<?= base_url('admin/logout') ?>" class="logout">Logout</a>
</header>

<div class="container">
    <div class="cards">
        <a href="<?= base_url('admin/users_list') ?>" class="card">Manage Users</a>
        <a href="<?= base_url('admin/bookings_list') ?>" class="card">Manage Bookings</a>
        <a href="<?= base_url('admin/hotels_list') ?>" class="card">Manage Hotels</a>
        <a href="<?= base_url('admin/subscribers_list') ?>" class="card">Manage Subscribers</a>
    </div>
</div>
</body>
</html>
