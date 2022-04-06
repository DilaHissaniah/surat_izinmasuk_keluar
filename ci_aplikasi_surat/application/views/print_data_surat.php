<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Surat</title>
    <style>
        table tr td{
            font-size: 13px;
        }
        table tr .text{
            text-align: center ;
            font-size: 17px;
            letter-spacing: 6px ;
            text-decoration: underline;
        }
        table tr .text2{
            text-align: center ;
            font-family: "Arial";
        }
        table tr .NO{
            font-size: 15px;
            text-align: center ;
        }
        table tr .pengantar{
            font-size: 17px;
            text-align: left ;
        }
        table tr .data{
            font-size: 15px;
            font-family: "Arial";
        }

    </style>
</head>
<body>
    <?php 
            foreach($print_data_surat as $pds):
                $tanggal = $pds->tanggal;
                $nomor_surat = $pds->nomor_surat;
                $ditujukan_kepada = $pds->ditujukan_kepada;
                $perihal = $pds->perihal;
                $keterangan = $pds->keterangan;
            endforeach;

            date_default_timezone_set('Asia/Jakarta');
            $kode = date('Y');
        
            date_default_timezone_set('Asia/Jakarta');
            $tanggalsurat = date('d-F-Y');
        
    ?>

    <center>
        <table>
            <br>
            <br>
            <br>
            <br>
            <tr>
                <td><img src="<?php echo base_url()?>template/img/logo jawa barat.png" alt="logo kab.Tasikmalaya" widht="90" height="90"></td>
                <td>
                    <center>
                    <font size="5">PEMERINTAH DAERAH KABUPATEN TASIKMALAYA</font><br>
                    <font size="4">DINAS KOPERASI, USAHA KECIL DAN MENENGAH, DAN TENAGA KERJA</font><br>
                    <font size="2">Jalan Cikanyere No.1 Telp./Fax : (0265) 333154</font><br>
                    <font size="2"> Email:diskukmenaker@tasikmalayakab.go.id</font><br>
                    <font size="6">TASIKMALAYA </font><br>

                    </center>
                </td>
                
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
        </table>
        <table width="820" >
            <tr>
                
            </tr>
            <tr>

            </tr>

            

            <table>
                <br>
                    <tr>
                        <td><font size="3"> tanggal </font></td>
                        <td  class="data" width="600">:   <?=$tanggal?></td>
                    </tr>
                    <tr>
                        <td><font size="3"> Nomor Surat </font></td>
                        <td  class="data" width="600">:   <?=$nomor_surat?></td>
                    </tr>
                    <tr>
                        <td><font size="3"> Ditujukan Kepada </font></td>
                        <td  class="data" width="600">:   <?=$ditujukan_kepada?></td>
                    </tr>
                    <tr>
                        <<td><font size="3"> Perihal</font></td>
                        <td  class="data" width="600">:   <?=$perihal?></td>
                    </tr>
                    <tr>
                        <td><font size="3"> keterangan </font></td>
                        <td  class="data" width="600">:   <?=$keterangan?></td>
                    </tr>
                    <table width="750" >
                <br>
                    <tr>
                        <td class="pengantar">Disampaikan dengan hormat, berdasarkan dengan hasil monitoring dan evaluasi arsip yang di laksanakan pada hari Senin, 15 November 2021 oleh Dinas kearsipan dan perpustakaan kabupaten Tasikmalaya, maka untuk menunjang penyelamatan arsip pada Dinas Koperasi, Usaha Kecil dan menengah, dan Tenaga Kerja Kabupaten Tasikmalaya kami mohon untuk di berikan box arsip</td>
                    </tr>
                    <tr>
                    </tr>
            </table>
            </table>
            <table width="750">
                <tr><br>
                        <td class="pengantar">Demikian kami sampaikan pemberitahuan ini, terimakasih atas perhatian dan kerjasamanya</td>
                </tr>
            </table>
            <br>
            <table width="750" >
                <tr>
                    <td width="430"></td>
                    <!-- <td><img src="<?php echo site_url('Admin/QRcode/'.$id_surat)?>"></td>   -->
                    <td class="text2"><br>Plt.Kepala Dinas Koperasi, UKM, dan Tenaga Kerja</br>Kabupaten Tasikmalaya, <br> <br><br><br><br>Ir.Hj.WIDA ANDRIANI</td>
                </tr>
            </table>
        </table>
        <br>
    </center>
</body>
</html>
    <script>
		window.print();
	</script>