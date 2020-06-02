<html>
<head>
	<title>Login Form</title>  
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url()."/style/style_login.css"?>">
    </head>
<body>
<div id="containt" align="center">
<br /><br />
 <form action="<?php echo base_url()?>login/authentikasi_user" method="POST" class="registration_form">
 <fieldset>
 <table width="517">
 <td width="101"><img src="<?php echo base_url()?>/style/images/logo_klinik.png" width="70"  /></td>
 <td width="404"><h1> RS SEHAT SENTOSA </h1></td>
 </table>
    <p align="left"><strong>&nbsp;&nbsp;<br />
     &nbsp;&nbsp; Masukkan Username dan Password anda </strong></p>
    <div class='elements'>
      <div align='center'>
        <b><font color='#FF0000'><?php echo $this->session->flashdata('message');?> </font></b>
      </div>
    </div>
    <div class="elements">
      <label for="Email / Username"> 
       <div align="left">Email / Username </div> </label>
       <div align="left"> : <input id="txt_username" name="txt_username" size="30" required> </div>
    </div>
  <div class="elements">
     <label for="pass"> 
     <div align="left">Password</div>  </label>
     <div align="left">: <input id="txt_password" name="txt_password" size="30" type="password" required>    
     </div>
   </div>	
   <div class="elements">
      <label for="pass"> 
        <div align="left">&nbsp;</div>  </label>
	    <div align="left">&nbsp;&nbsp;<input type="submit" class="btn btn-primary" value="LOGIN"></div>
        </div>
    <center class="copy">
	  <p></p>
      <strong class="copy">Copyrighted &copy; 2020  | Pemrograman Web 2 - UMB </strong>
	</center>
  </fieldset>
  </form>
</div>
</body>
</html>
