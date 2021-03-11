<?php
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        if($produk == 'TV'){
            $total_belanja = 4200000*$jumlah;
        }elseif($produk == 'Kulkas'){
            $total_belanja = 3100000*$jumlah;
        }else{
            $total_belanja = 3800000*$jumlah;
        }
       
        echo '<br/>Nama Customer : '.$customer;
        echo '<br/>Produk Pilihan : '.$produk;
        echo '<br/>Jumlah Produk : '.$jumlah;
        echo '<br/>Total Belanja : '.$total_belanja;

        echo'<br/>Terimakasih Atas Pembeliannya^_^'
    ?>