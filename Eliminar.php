<?php
require 'Conexion/config.php';


if (!empty($_SESSION['id']) && isset($_POST['id'])) {
    $user_id = $_SESSION['id'];
    $speedrun_id = $_POST['id'];

    $checkQuery = "SELECT * FROM speedruns WHERE id = ? AND user_id = ?";
    $stmtCheck = mysqli_prepare($conn, $checkQuery);
    mysqli_stmt_bind_param($stmtCheck, 'ii', $speedrun_id, $user_id);
    mysqli_stmt_execute($stmtCheck);
    $resultCheck = mysqli_stmt_get_result($stmtCheck);

    if (mysqli_num_rows($resultCheck) > 0) {
      
        $deleteQuery = "DELETE FROM speedruns WHERE id = ?";
        $stmtDelete = mysqli_prepare($conn, $deleteQuery);
        mysqli_stmt_bind_param($stmtDelete, 'i', $speedrun_id);
        
        if (mysqli_stmt_execute($stmtDelete)) {
            echo "<script>alert('Speedrun eliminado exitosamente.'); window.location.href = 'view_speedrun_register.php';</script>";
        } else {
            echo "Error al eliminar el speedrun: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmtDelete);
    } else {
        echo "<script>alert('No tienes permiso para eliminar este speedrun.'); window.location.href = 'view_speedrun_register.php';</script>";
    }

    mysqli_stmt_close($stmtCheck);
} else {
    echo "<script>alert('No se ha proporcionado un id válido o no estás logueado.'); window.location.href = 'Login.php';</script>";
}

mysqli_close($conn);
?>
