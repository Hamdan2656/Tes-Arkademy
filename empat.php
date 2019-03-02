<?php
    function kembalian($total_belanja, $jumlah_uang){
        $kembali = $jumlah_uang - $total_belanja;
        // 34500
        $y = 1;
        $hasil = 1;
        $j = 1;
        global $sisa ;

        echo "Kembalian = ",$kembali,"<br>";

        if ($kembali >= 20000 && $sisa <= 50000){
                    while ($hasil <= $kembali){                                  
                        $y++;
                        $hasil = $y * 20000;
                        if ($hasil <= $kembali){
                            $j++;
                        }else{
                            echo $j," x 20000"; 
                            $hasil2 = $j * 20000;                    
                            $sisa = $kembali - $hasil2;
                            $y = 1;
                        } 
                    }
                    $hasil = 1;
                    $j = 1;
                    if ($sisa >= 10000 && $sisa <= 20000){
                        // echo "<br> kkk $y";
                        // echo " $sisa";
                        while ($hasil <= $sisa){                                  
                            $y++;
                            // echo "<br>$y kkksl<br>";
                            $hasil = $y * 10000;
                            // echo "$hasil";
                            if ($hasil <= $sisa){
                                // echo "$hasil <br>";
                                $j++;
                                // echo "$j ";
                            }else{
                                echo "<br> $j x 10000"; 
                                $hasil2 = $j * 10000;
                                $sisa = $sisa - $hasil2;
                                // echo "<br> sisa = $sisa";
                            }
                        }
                    
                    }
                    $hasil = 1;
                    $j = 1;
                    $y = 1;
                if ($sisa >5000 && $sisa <= 10000){
                    while ($hasil <= $sisa){                                  
                        $y++;
                        $hasil = $y * 5000;                    
                        if ($hasil <= $sisa){
                            $j++;
                        }else{
                            echo "<br> $j x 5000"; 
                            $hasil2 = $j * 5000;
                            $sisa = $sisa - $hasil2;
                            // echo "<br> $sisa";
                        }
                    }
                }
                if ($sisa > 2000 && $sisa <= 5000){
                    while ($hasil <= $sisa){                                  
                        $y++;
                        $hasil = $y * 2000;                    
                        if ($hasil <= $sisa){
                            $j++;
                        }else{
                            echo "<br> $j x 2000"; 
                            $hasil2 = $j * 2000;
                            $sisa = $sisa - $hasil2;
                            // echo "<br> sisa t = $sisa";
                        }
                    }
                }
                if ($sisa > 1000 && $sisa <= 2000){
                    while ($hasil <= $sisa){                                  
                        $y++;
                        $hasil = $y * 1000;                    
                        if ($hasil <= $sisa){
                            $j++;
                        }else{
                            echo "<br> $j x 1000"; 
                            $hasil2 = $j * 1000;
                            $sisa = $sisa - $hasil2;
                            // echo "<br>sisa = $sisa";
                        }
                    }
                }
                $hasil = 1;
                $j = 1;
                $y = 1;
            if ($sisa >= 500 && $sisa <= 1000){
                while ($hasil <= $sisa){                                  
                    $y++;
                    $hasil = $y * 500;                    
                    if ($hasil <= $sisa){
                        $j++;
                    }else{
                        echo "<br> $j x 500"; 
                        $hasil2 = $j * 500;
                        $sisa = $sisa - $hasil2;
                        // echo "<br>sisa = $sisa";
                    }
                }
            }
        }else{
                echo " 0 ";
        }
    }


    kembalian(15500,50000)
?>