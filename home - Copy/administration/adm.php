<?php
	include "../boot_head.php";
	include "../head.php";
	include "../navbar.php";
?>
<link rel='stylesheet' href='styling_adm.css'>



<div id='main_box'>
	<div class='row'>
		<div class='col-sm-12 col-md-4 col-xs-12'>
			<a href='/vsvm/home/director/dir.php'><div id='blocks'>
				<img id='adm_img' src='director.jpg'><div style='font-family:tahoma; font-size:16px; font-weight:bold; padding:3%;'>Diretcor</div>
			</div></a>
		</div>
		<div class='col-sm-12 col-md-4 col-xs-12'>
			<a href='/vsvm/home/principal/pri.php'><div id='blocks'>
				<img id='adm_img' src='principal.jpg'><div style='font-family:tahoma; font-size:16px; font-weight:bold; padding:3%;'>Principal</div>
			</div></a>
		</div>
		<div class='col-sm-12 col-md-4 col-xs-12'>
			<a href='/vsvm/home/ec/eco.php'><div id='blocks'>
				<img id='adm_img' src='eco.jpg'><div style='font-family:tahoma; font-size:16px; font-weight:bold; padding:3%;'>Examination Controller</div>
			</div></a>
		</div>
	</div>
	<div class="table-responsive" style='padding:5%'>         
  <table  class="table table-striped" id='table_box'>
    <thead>
      <tr >
        <th id='thead'>Name</th>
        <th id='thead'>contact</th>
        <th id='thead'>Designation</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id='tdata'>Pramod Kumar Singh</td>
        <td id='tdata'>9874561230</td>
        <td id='tdata'>Warden-Hostel A, Financial Advisor</td>
      </tr>
      <tr>
        <td id='tdata'>Rahul Kuamr Roy</td>
        <td id='tdata'>923046987</td>
        <td id='tdata'>Warden-Hostel C, Account Section</td>
      </tr>
      <tr>
        <td id='tdata'>July</td>
        <td id='tdata'>8745612308</td>
        <td id='tdata'>Accountant</td>
      </tr>
    </tbody>
  </table>
</div>
</div>	

		
<?php
	include "../footer.php";
?>