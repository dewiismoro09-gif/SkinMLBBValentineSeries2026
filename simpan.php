<?php
// Mengambil data yang dikirim dari HTML
if (isset($_POST['id_game'])) {
    $id = $_POST['id_game'];
    $waktu = date('Y-m-d H:i:s');
    
    // Format data yang akan disimpan
    $data = "Waktu: $waktu | ID Player: $id" . PHP_EOL;
    
    // Simpan ke file bernama database_user.txt
    // FILE_APPEND agar data baru tidak menghapus data lama
    file_put_contents('database_user.txt', $data, FILE_APPEND);
}
?>