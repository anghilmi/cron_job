# cron_job
latihan menggunakan cron job di hosting
gunakan XAMPP atau semacamnya dan min versi PHP 7

example 
$now = strtotime(date("Y-m-d"));
        //Add one day to today
        $expired = date('Y-m-d', strtotime('+1 day', $now));
        //echo "After adding 7 day = ".$date."<br>";

        $mySql6  = "INSERT INTO pembayaran ( 
                                id_cmhs, tgl_expired)
                            VALUES ( 
                                '$kodeBaru','$expired')";            
        $myQry6  = mysql_query($mySql6, $koneksidb) or die ("Gagal query".mysql_error());
