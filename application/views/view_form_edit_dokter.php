<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
  <html>
  <head>
       <title> Basis Data Dokter | Registrasi  Dokter </title>
       <link rel="stylesheet" type="text/css" href="<?php echo base_url()."/style/desain.css"?>">
  </head>
  <body>
      <div id="container">
           <div id="body">
             <h1>Form Edit Data Dokter</h1>
             <?php if (validation_errors())
        {?>   <div style="width:500px; background-color:#FCC; padding:5px; 
               margin-left:auto; margin-right:auto; ">
                <?php echo validation_errors(); ?> <br>
            </div>
       <?php } ?>             
             <form name="form1" method="post" action="<?php echo base_url()."dokter/proses_edit_dokter/".$dt_id_dokter;?>">
                 <table id="gp_tabel" width="50%">
                   <th colspan="3">  SILAHKAN UBAH DATA DOKTER </th>
                 <tr>
                   <td width="20%">ID Dokter</td>
                   <td width="1%">:</td>
                   <td width="79%">
                    <input type="text" name="txt_id_dokter" id="txt_id_dokter" disabled value="<?php echo $dt_id_dokter; ?>">
                   <span>* ID Dokter tidak dapat diganti</span></td>
                 </tr>
                 <tr>
                   <td width="20%">Nama Dokter</td>
                   <td width="1%">:</td>
                   <td width="79%">
                    <input type="text" name="txt_nama" id="txt_nama" value="<?php echo $dt_nama_dokter; ?>" required></td>
                 </tr>
                 <tr>
                   <td>Jenis Kelamin </td>
                   <td>:</td>
                   <td> 
                        <input type="radio" name="txt_jeniskelamin" value="laki-laki" 
                        <?php 
                        if ($dt_jenis_kelamin == "laki-laki") {echo "checked"; }  ?> >  Laki-Laki 

                        <input type="radio" name="txt_jeniskelamin"  value="perempuan" 
                        <?php 
                        if ($dt_jenis_kelamin == "perempuan") {echo "checked"; }  ?> 
                        >  Perempuan 
                  </td>
                 </tr>
                 <!-- <tr> 
                <input type="hidden" name="txt_id_dokter" id="txt_id_dokter" value="<?php echo $dt_id_dokter;?>">
                 </tr> -->
                 <tr>
                   <td>Alamat </td>
                   <td>:</td>
                   <td><textarea name="txt_alamat" id="txt_alamat" cols="45" rows="5"><?php echo $dt_alamat;?></textarea></td>
                 </tr>
                 <tr>
                   <td>No. TLP </td>
                   <td>:</td>
                   <td><input type="number" name="txt_tlp" id="txt_tlp"   value="<?php echo $dt_no_tlp;?>"  required></td>
                 </tr>
                 <tr>
                   <td>email </td>
                   <td>:</td>
                   <td><input type="text" name="txt_email" id="txt_email"   value="<?php echo $dt_email;?>"  required></td>
                 </tr>
                 <tr>
                   <td>Bidang Spesialis </td>
                   <td>:</td>
                   <td><input type="text" name="dt_bidangspesialis" id="dt_bidangspesialis" value="<?php echo $dt_bidangspesialis;?>" disabled></td>
                 </tr>
                 <tr>
                   <td>Join Date </td>
                   <td>:</td>
                   <td><input type="date" name="txt_join_date" id="txt_join_date" value="<?php echo $dt_join_date;?>"></td>
                 </tr>
                 <tr>
                 <tr>
                   <td>Status </td>
                   <td>:</td>
                   <td> 
                        <input type="radio" name="txt_status" value="tetap"> Tetap 
                        <input type="radio" name="txt_status"  value="non-tetap">  Non-Tetap
                  </td>
                 </tr>
                 <td>Spesialis</td>
                   <td>:</td>
                   <td><select name='txt_spesialis' id='txt_spesialis'>
                       <?php
                        // menampilkan option list dari database
                        echo "  <option value='' disabled selected>Pilih Spesialis Dokter</option>";
                        foreach ($spesialis as $row_spesialis) {  
                                        echo " <option value='".$row_spesialis->spesialis."'>".$row_spesialis->bidang_spesialis."</option>"; }
                       ?>
                        </select>
                   </td>
                 </tr>
                 <tr>
                   <td>Nomor Izin </td>
                   <td>:</td>
                   <td><input type="text" name="txt_no_ijin" id="txt_no_ijin" value="<?php echo $dt_nomor_izin;?>"></td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td>:</td>
                   <td><input type="submit" name="button" id="button" value= " PROSES  "> || 
                       <a class="btn2" href="<?php echo base_url(); ?>dokter"> Batal </a></td>
                 </tr>
               </table>
             </form>
             <br><br><i>Aplikasi Datapasien &copy; Praktikum web 2 @ 2020 </i>
            <br>
            <br>
           </div>
       </div>
  </body>
  </html>