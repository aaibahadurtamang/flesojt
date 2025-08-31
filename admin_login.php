

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    height: 100vh;
    background: url('https://studentjob.vn/uploads/2023/4/21/admin-la-gi-1jpg638177176631374517.jpg') no-repeat center center fixed;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

/* Dark overlay for readability */
body::before {
    content: "";
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.4);
    z-index: 0;
}

/* Glass effect login box */
.login-box {
    position: relative;
    z-index: 1;
    background: rgba(255,255,255,0.15); /* semi-transparent */
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,.3);
    width: 320px;
    text-align: center;
    backdrop-filter: blur(10px); /* <-- blur effect */
    -webkit-backdrop-filter: blur(10px); /* Safari support */
    border: 1px solid rgba(255,255,255,0.3);
}

.login-box h2 {
    margin-bottom: 20px;
    color: #fff;
}

.login-box input[type="text"],
.login-box input[type="password"] {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: none;
    border-radius: 8px;
    outline: none;
    font-size: 14px;
    background: rgba(255,255,255,0.8);
}

.login-box button {
    background: #37aef3;
    color: #fff;
    border: none;
    padding: 12px;
    width: 100%;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.login-box button:hover {
    background: #2196f3;
}

.error {
    color: #ffdddd;
    margin-top: 10px;
    font-weight: bold;
}
</style>
</head>
<body>
    <div class="login-box">
        <h2>Admin Login</h2>
        <form method="post" action="<?= base_url('AdminLogin/login_action') ?>">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <?php if (!empty($error)) : ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
