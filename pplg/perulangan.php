<?php
    // Menyiapkan data menu minuman
    $menu_minuman = array(
        array("nama" => "Es Teh", "harga </br>" => 5000) ,
        array("nama" => "Es Jeruk", "harga </br>" => 6000),
        array("nama" => "Es Americano", "harga </br>" => 7000),
        array("nama" => "Es Cappucino", "harga </br>" => 8000),
    );
    
    // Menampilkan menu minuman
    for ($i = 0; $i < count($menu_minuman); $i++) {
        echo ($i + 1) . ". " . $menu_minuman[$i]["nama"] . " - Rp " . $menu_minuman[$i]["harga </br>"] . "\n </br>";}
    
    // Meminta input pilihan minuman dari pengguna
    $pilihan = (int) readline("Masukkan nomor minuman yang Anda pilih: </br> ");
    
    // Memeriksa apakah pilihan minuman valid atau tidak
    if ($pilihan >= 1 && $pilihan <= count($menu_minuman)) {
        $minuman_terpilih = $menu_minuman[$pilihan - 1]["nama"];
        $harga_minuman = $menu_minuman[$pilihan - 1]["harga </br>"];
        
        echo "Anda memilih " . $minuman_terpilih . ". Silakan menunggu, minuman Anda sedang disiapkan!\n";
        echo "Harga: Rp" . $harga_minuman . "\n";
    } else {
        echo "Maaf, pilihan minuman tidak valid.\n";
    }

?>
