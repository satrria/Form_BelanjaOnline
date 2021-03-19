<!doctype html>
<html lang="en">
  <head>    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Array Siswa</title>
  </head>
  <body>
    <?php
        $ns1 = ['id'=>1, 'nim'=>'01101', 'uts'=>80, 'uas'=>84, 'tugas'=>78];
        $ns2 = ['id'=>2, 'nim'=>'01121', 'uts'=>70, 'uas'=>50, 'tugas'=>68];
        $ns3 = ['id'=>3, 'nim'=>'01130', 'uts'=>60, 'uas'=>86, 'tugas'=>70];
        $ns4 = ['id'=>4, 'nim'=>'01134', 'uts'=>90, 'uas'=>91, 'tugas'=>82];

        $ar_nilai = [$ns1, $ns2, $ns3, $ns4];

    ?>


    <h3 style="display:flex; justify-content:center; margin-top:30px;">DAFTAR NAMA MAHASISWA</h3><br>
    <div class="container">

        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">UTS</th>
                <th scope="col">UAS</th>
                <th scope="col">Tugas</th>
                <th scope="col">Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $nomor = 1;
                foreach($ar_nilai as $ns){
                    echo '<tr><th scope="row">'.$nomor.'</th>';
                    echo '<td>'.$ns['nim'].'</td>';
                    echo '<td>'.$ns['uts'].'</td>';
                    echo '<td>'.$ns['uas'].'</td>';
                    echo '<td>'.$ns['tugas'].'</td>';
                    $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
                    echo '<td>'.number_format($nilai_akhir,2,',',',',).'</td>';
                    echo '<tr/>';
                    $nomor++;
                }
            ?>

        </tbody>
        </table>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>