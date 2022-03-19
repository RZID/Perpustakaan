<?php
session_start();
if (!isset($_SESSION['isLogin']) || !isset($_SESSION['role'])) {
    $_SESSION['error'] = "Belum login";
    echo "
    <script>
        if (confirm('Silakan login dulu!') == true) {
            window.location.href = '../landing.php';
        } else {
            window.location.href = '../landing.php';
        }
    </script>";
    return;
    // return header("Location: ../landing.php");
}

if (isset($_SESSION['isLogin']) && $_SESSION['role'] != 'user') {
    $role = $_SESSION['role'];
    return header("Location: ./$role.php");
}
?>
<h1 id="test">
    User
</h1>