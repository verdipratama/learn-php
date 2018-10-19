<!DOCTYPE html>
<html>
<head>
    <title>MEMBUAT SORTING DENGAN METODE SELECTION</title>
    <style type="text/css">
        body{
            font-family: sans-serif;
        }
        h1{            
            text-align: center;
            margin-bottom: 100px;
        }
        .box{
            width: 600px;          
            margin: 10px auto;
            text-align: center
        }
        .hasil{
            background: blue;
            color: #fff;
            padding: 10px 0px;
        }
        input[type='text']{
            width: 40px;
        }
    </style>

</head>
<h1>MEMBUAT SORTING DENGAN METODE SELECTION<br/>WWW.VERSIDE.COM</h1>
<body>
<div class="box">
        <center><h3>MASUKKAN ANGKA YANG AKAN DI URUTKAN<br/>(SELECTION SORT)</h3></center>
    
        <!--form input angka-->
        <form action="" method="post">           
            <input type="text" name="satu">
            <input type="text" name="dua">
            <input type="text" name="tiga">
            <input type="text" name="empat">
            <input type="text" name="lima">
            <input type="text" name="enam">
            <input type="text" name="tujuh">
            <input type="text" name="delapan">
            <input type="submit" name="submit" value="SORTING">
        </form>

        <?php  
        //cek submit
        if(isset($_POST['submit'])){
    
            //menangkap data angka yang di input
            $satu=$_POST['satu'];
            $dua=$_POST['dua'];
            $tiga=$_POST['tiga'];
            $empat=$_POST['empat'];
            $lima=$_POST['lima'];
            $enam=$_POST['enam'];
            $tujuh=$_POST['tujuh'];
            $delapan=$_POST['delapan'];

            //masukkan data angka ke array
            $angka=array($satu,$dua,$tiga,$empat,$lima,$enam,$tujuh,$delapan); 	

            //mengurutkan angka dengan fungsi sort()
            sort($angka);  
            echo "</br>";
            echo "<div class='hasil'> HASIL : ";
            
            //menampilkan isi array angka dengan looping for
            $jumlah=count($angka);  
            for($x=0;$x<$jumlah;$x++)  
            {  
                echo $angka[$x];  
                echo " ";  
            }  	
            echo "</div>";

        }
        ?>  
    </div>
</body>
</html>