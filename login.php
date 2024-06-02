<script>
    let test = 1;
</script>

<?php


$nombre = $_POST['nombre'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';


require 'database.php'; 


$pdo = Database::connect();

$sql = "SELECT * FROM reto_admins WHERE nombre = '$nombre' AND contraseña = '$contrasena'";
$stmt = $pdo->query($sql);


if ($stmt->rowCount() === 1) {
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['nombre'] = $user['nombre'];
    
    
    header("Location: testgrid.php");
    exit;
} else {
    
    echo "Invalid credentials.";
}
?>
