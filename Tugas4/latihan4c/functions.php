<?php 
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040020");

    return $conn;
}

// function untuk melakukan query dan memasukannya kedalam array
function query($sql) 
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $row[] = $row;
    }
    return $row;
}
?>