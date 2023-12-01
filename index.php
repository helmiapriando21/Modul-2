<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai IP</title>
</head>
<body>
    <?php if(isset($_POST['Nilai'])){ 
        $totalnilai=0;
        foreach($_POST['Nilai'] as $nilai){
            $totalnilai +=$nilai;
        }
        $rataratanilai = $totalnilai / count($_POST['Nilai']);
        $status = $rataratanilai > 7 ? 'Lulus' : 'Ngulang';
        ?>
    <h1>Hasil Perhitungan nilai dan Kelulusan</h1>
    <p>Nilai : <?= $rataratanilai ?></p>
    <p>Kelulusan : <?= $status ?></p>
    <a href="">kembali</a>
    <?php } else{ ?>
        <h1>Form Input IP</h1>
        <form action="" method="post">
        <div class="form">
        <label for="Nilai">Nilai 1 : </label>
        <input type="Number" min=0 max=10 name = "Nilai[]">    
        </div>
        <button class="tambahmatkul">Tambah Matkul</button>
        <button type="submit">Rata-Rata Nilai</button>
    </form>
<?php } ?>
<script>
    const tambahmatkul = document.querySelector('button.tambahmatkul');
    var i = 2
    tambahmatkul.addEventListener('click', function (e) {
        e.preventDefault();
        if(i<=10){
            const form = document.querySelector('form .form');
            form.innerHTML = form.innerHTML +  '<label for="Nilai">Nilai'+i+' : </label><input type="Number" name = "Nilai[]" min=0 max=10>'
            i++;
        }

    })
</script>
</body>

</html>