<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
?>

<?php
if(isset($_REQUEST['aksi'])&&$_REQUEST['aksi']=="simpan"){
$sss= str_replace("'","\'",$_REQUEST['tanyasoal']);
	$sql0 = mysql_query("update cbt_soal set XTanya = '$sss' where XKodeSoal = '$_REQUEST[soal]' and Urut = '$_REQUEST[nom]'");
	//echo "update cbt_soal set XTanya = '$sss' where XKodeSoal = '$_REQUEST[txt_soal]' and Urut = '$_REQUEST[txt_nom]'";
}
?>	

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<script type="text/javascript" src="jscripts/tiny_mce/plugins/asciimath/js/ASCIIMathMLwFallback.js"></script>
<script type="text/javascript">
var AMTcgiloc = "http://www.imathas.com/cgi-bin/mimetex.cgi";  		//change me
//var AMTcgiloc = "http://localhost:8090/cgi-bin/mimetex.cgi";  		//change me
</script>

<!-- TinyMCE -->
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
    mode : "textareas",
    theme : "advanced",
    theme_advanced_buttons1 : "fontselect,fontsizeselect,formatselect,bold,italic,underline,strikethrough,separator,sub,sup,separator,cut,copy,paste,undo,redo",
    theme_advanced_buttons2 : "justifyleft,justifycenter,justifyright,justifyfull,separator,numlist,bullist,outdent,indent,separator,forecolor,backcolor,separator,hr,link,unlink,image,media,table,code,separator,asciimath,asciimathcharmap,asciisvg",
    theme_advanced_buttons3 : "",
    theme_advanced_fonts : "Arial=arial,helvetica,sans-serif,Courier New=courier new,courier,monospace,Georgia=georgia,times new roman,times,serif,Tahoma=tahoma,arial,helvetica,sans-serif,Times=times new roman,times,serif,Verdana=verdana,arial,helvetica,sans-serif",
    theme_advanced_toolbar_location : "top",
    theme_advanced_toolbar_align : "left",
    theme_advanced_statusbar_location : "bottom",
    plugins : 'asciimath,asciisvg,table,inlinepopups,media',
   
    AScgiloc : 'http://www.imathas.com/editordemo/php/svgimg.php',			      //change me  
    ASdloc : 'http://www.imathas.com/editordemo/jscripts/tiny_mce/plugins/asciisvg/js/d.svg',  //change me  	
        
    content_css : "./jscripts/tiny_mce/plugins/media/css/content.css"
});
</script>
<!-- /TinyMCE -->

<!-- TinyMCE 4.x -->
<!-- 
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript">
 
tinymce.init({
  selector: "textarea",
  
  // ===========================================
  // INCLUDE THE PLUGIN
  // ===========================================
	
  plugins: [
    "eqneditor advlist lists charmap anchor",
    "code fullscreen",
    "table contextmenu paste jbimages"
  ],
	
  // ===========================================
  // PUT PLUGIN'S BUTTON on the toolbar
  // ===========================================
	
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
	
  // ===========================================
  // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
  // ===========================================
	
  relative_urls: false,
 forced_root_block : "", 
    force_br_newlines : true,
    force_p_newlines : false,
});
 
</script>
<!-- /TinyMCE -->

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="./js/jquery-1.4.js"></script>

<?php
if(isset($_REQUEST['jum'])&&$_REQUEST['jum']==5){
?>
<script>    
$(document).ready(function(){
 $("#kirim").click(function(){
 var ed = tinyMCE.get('tanyasoal');
 
 /*
    // Do you ajax call here, window.setTimeout fakes ajax call
    ed.setProgressState(1); // Show progress
    window.setTimeout(function() {
        ed.setProgressState(0); // Hide progress
        //alert(ed.getContent());
    }, 2000);
*/
var a = tinymce.get('tanyasoal').getContent();
var b1 = tinymce.get('jawab1').getContent();
var b2 = tinymce.get('jawab2').getContent();
var b3 = tinymce.get('jawab3').getContent();
var b4 = tinymce.get('jawab4').getContent();
var b5 = tinymce.get('jawab5').getContent();
var b6 = $("#gambar").val();
var b7 = $("#audio").val();
var b8 = $("#video").val();

var c = $("#nom").val();
var d = $("#soal").val();
 //alert(a+b1+b2+c+d);	
var e = $('input[name=radio1]:checked').val();
//alert(e);
if ($("input[type=radio]:checked").length > 0) {
//alert(e);
} else {alert("Pilih Kunci Jawaban !!!"); return false;}

var f = $("#map").val();

var g1 = $("#gambar4").val();
var g2 = $("#gambar5").val();
var g3 = $("#gambar6").val();
var g4 = $("#gambar7").val();
var g5 = $("#gambar8").val();

var h = $("#nomax").val();
var i = $("#txt_kate").val();
var j = $("#txt_kes").val();
var k = $("#txt_aca").val();
var l = $("#txt_ops").val();
var m = $("#txt_ag").val();

$.ajax({
     type:"POST",
     url:"simpan_soal_tambah.php",    
     data: "aksi=simpan&txt_tanya=" + encodeURIComponent(a) + "&txt_jawab1=" + encodeURIComponent(b1) + "&txt_jawab2=" + encodeURIComponent(b2) + "&txt_jawab3=" + encodeURIComponent(b3) + "&txt_jawab4=" + encodeURIComponent(b4)  + "&txt_jawab5=" + encodeURIComponent(b5)  + "&txt_gbr=" + b6  + "&txt_audio=" + b7  + "&txt_video=" + b8 + "&txt_kunci=" + e + "&txt_soal=" + d + "&txt_nom=" + c + "&txt_gbr1=" + g1 + "&txt_gbr2=" + g2 + "&txt_gbr3=" + g3 + "&txt_gbr4=" + g4 + "&txt_gbr5=" + g5 + "&txt_mapel=" + f + "&txt_nomax=" + h + "&txt_kate=" + i + "&txt_kes=" + j + "&txt_aca=" + k + "&txt_ops=" + l + "&txt_ag=" + m,

	 success: function(data){
	  alert("Simpan sukses");
	  window.location.href = "?modul=edit_soal&jum=5&soal="+d;
	 //$("#info").html(data);
		//alert(txt_durasi);
		//tampildata();
	 }
	 });
	 });
	

});
</script> 
<?php } ?>
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="js/lc_switch.js" type="text/javascript"></script>
<link rel="stylesheet" href="js/lc_switch.css">
<script type="text/javascript">
var $jnoc = jQuery.noConflict();
          
$jnoc(document).ready(function(e) {

	$jnoc ('input').lc_switch();

	// triggered each time a field changes status
	$jnoc('body').delegate('.lcs_check', 'lcs-statuschange', function() {
		var status = ($(this).is(':checked')) ? 'checked' : 'unchecked';
		console.log('field changed status: '+ status );
	});
	
	
	// triggered each time a field is checked
	$jnoc('body').delegate('.lcs_check', 'lcs-on', function() {
		console.log('field is checked');
	});
	
	
	// triggered each time a is unchecked
	$jnoc('body').delegate('.lcs_check', 'lcs-off', function() {
		console.log('field is unchecked');
		
	});
});
</script>

<body><form action="#" method="post">
<?php	
$sqltanya = mysql_query("select * from cbt_paketsoal where XKodeSoal= '$_REQUEST[soal]'");
	$so=mysql_fetch_array($sqltanya); ?>

<div class="panel panel-info">
	<div class="panel-heading">
    Data Bank Soal  &nbsp; &nbsp; | &nbsp; &nbsp; 
	<?php echo "<a href=?modul=edit_soal&jum=$_REQUEST[jum]&soal=$_REQUEST[soal]><button type='button' class='btn btn-info'><i class='fa fa-arrow-left'></i> Kembali ke Daftar Soal</button></a>"; ?>	
          

    </div>
	
    <div class="panel-body">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td colspan="2"  style="font-size:18px">&nbsp; </td>

<td align="right">
<button type="submit" class="btn btn-success btn-small" id="kirim"><i class='fa fa-save'></i> Simpan Soal</button>     
    <input type="hidden" id="soal" name="soal" value="<?php echo $_REQUEST['soal']; ?>" />
    <input type="hidden" id="map" name="map" value="<?php echo $so['XKodeMapel']; ?>" />
<?php    $sqlsoal = mysql_query("SELECT MAX(XNomerSoal) as maksi FROM `cbt_soal` WHERE XKodeSoal = '$_REQUEST[soal]'");
$sm = mysql_fetch_array($sqlsoal);
$maks = $sm['maksi']+1; ?>
<input type="hidden" id="nomax" name="nomax" value="<?php echo $maks ; ?>" />
    </strong></td>
  </tr>
<tr><td colspan="3"  style="font-size:18px"><hr></td></tr>
<tr><td colspan="3">
<div class="col-sm-12"><label style="width:100px; font-style:normal; font-weight:normal">Jenis Soal</label>
<input type="text" id="txt_kate" name="txt_kate" value="1" readonly size="1" style="margin-bottom:5px" >
 </div>
 <div class="col-sm-12"><label style="width:100px; font-style:normal; font-weight:normal">Jenis Mapel</label>
<select id="txt_ag" name="txt_ag" class="input-sm"  style="margin-bottom:5px" />
<option value="">Mapel Umum</option>
<option value="ISLAM" selected>Agama ISLAM</option>
<option value="KRISTEN">Agama KRISTEN</option>
<option value="HINDU">Agama HINDU</option>
<option value="BUDA">Agama BUDA</option>
<option value="KONGHUCU">Agama KONGHUCU</option>
<?php
$sqlpil = mysql_query("select * from cbt_siswa group by XPilihan");
while($xpil = mysql_fetch_array($sqlpil)){ 
$p=$xpil['XPilihan'];?>	
<option value=<?php echo $p; ?>> Pilihan <?php echo $p. "</option>";
}?>
</select>
 </div>
<div class="col-sm-12"><label style="width:100px; font-style:normal; font-weight:normal">Tk. Kesulitan</label>
<select id="txt_kes" name="txt_kes" class="input-sm"  style="margin-bottom:5px" />
<option value="1">Mudah</option>
<option value="2">Sedang</option>
<option value="3">Sulit</option>
</select>
 </div>
<div class="col-sm-12"><label style="width:100px; font-style:normal; font-weight:normal">Acak Soal</label>
<select id="txt_aca" name="txt_aca" class="input-sm"/>
<option value="A">Acak</option>
<option value="T">Tidak</option>
</select>
 </div>
<div class="col-sm-12"><label style="width:100px; font-style:normal; font-weight:normal">Acak Opsi</label>
<select id="txt_ops" name="txt_ops" class="input-sm"/>
<option value="Y">Acak</option>
<option value="T">Tidak</option>
</select>
 </div>
</td>
  </tr>   
<tr><td colspan="3">&nbsp;</td></tr>    
    <td colspan="3" align="right"><textarea name="tanyasoal"  id="tanyasoal" style="font-size:18px; width:100%; height:300px">
    
    
    
    
    </textarea>
    
    <div>
		<!-- Some integration calls: the first two seem to be having issues with asciimath plugin
		<a href="javascript:;" onmousedown="tinyMCE.get('elm1').show();">[Show]</a>
		<a href="javascript:;" onmousedown="tinyMCE.get('elm1').hide();">[Hide]</a>  -->
		<a href="javascript:;" onMouseDown="alert(tinyMCE.get('elm1').getContent());">[Get contents]</a>
		<a href="javascript:;" onMouseDown="alert(tinyMCE.get('elm1').selection.getContent());">[Get selected HTML]</a>
		<a href="javascript:;" onMouseDown="alert(tinyMCE.get('elm1').selection.getContent({format : 'text'}));">[Get selected text]</a>
	</div>

    </td>
  </tr>
 <tr><td colspan="3"><hr></td></tr>
<tr bgcolor="#507db3"><td colspan="3" style="padding:10px"><font color="#FFFFFF" size="5"><b>&nbsp;File Pendukung Soal</b></font></td></tr>
<tr><td colspan="3"><hr></td></tr>  
   
<tr><td  colspan="3" ><br>
<script type="text/javascript" src="js/jquery-1.3.2.js" ></script>
<script type="text/javascript" src="js/ajaxupload.3.5.js" ></script>
<!-- <link rel="stylesheet" type="text/css" href="./styles.css" /> -->
<script type="text/javascript" >
	$(function(){
		var btnUpload=$('#upload');
		var status=$('#status');
		new AjaxUpload(btnUpload, {
			action: 'upload_gambar.php',
			name: 'uploadfile',
			onSubmit: function(file, ext){
				 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
                    // extension is not allowed 
					status.text('Only JPG, PNG or GIF files are allowed');
					return false;
				}
				status.text('Uploading...');
			},
			onComplete: function(file, response){
				//On completion clear the status
				status.text('');
				//Add uploaded file to list
				
				if(response==="success"){
				$('#upload').html('<img src="../../pictures/'+file+'"  width="130" alt="" />').addClass('success');
				document.getElementById("gambar").value = file
//					$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
				} else{
					$('<li></li>').appendTo('#files').text(file).addClass('error');
				}
			}
		});
		
	});
</script>

<script type="text/javascript" >
	$(function(){
		var btnUpload2=$('#upload2');
		var status2=$('#status2');
		new AjaxUpload(btnUpload2, {
			action: 'upload_audio.php',
			name: 'uploadfile2',
			onSubmit: function(file2, ext2){
				 if (! (ext2 && /^(mp3|wav)$/.test(ext2))){ 
                    // extension is not allowed 
					status2.text('Only JPG, PNG or GIF files are allowed');
					return false;
				}
				status2.text('Uploading...');
			},
			onComplete: function(file2, response2){
				//On completion clear the status
				status2.text('');
				//Add uploaded file to list
				
				if(response2==="success"){
				$('#upload2').html('<img src="images/mp3.png"  width="130" alt="" />').addClass('success');
		 		document.getElementById("audio").value = file2				
//					$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
				} else{
					$('<li></li>').appendTo('#files2').text(file2).addClass('error');
				}
			}
		});
		
	});
</script>

<script type="text/javascript" >
	$(function(){
		var btnUpload3=$('#upload3');
		var status3=$('#status3');
		new AjaxUpload(btnUpload3, {
			action: 'upload_video.php',
			name: 'uploadfile3',
			onSubmit: function(file3, ext3){
				 if (! (ext3 && /^(mp4|avi)$/.test(ext3))){ 
                    // extension is not allowed 
					status3.text('Upload file dengan format mp4');
					return false;
				}
				status3.text('Uploading...');
			},
			onComplete: function(file3, response3){
				//On completion clear the status
				status3.text('');
				//Add uploaded file to list
				
				if(response3==="success"){
				$('#upload3').html('<img src="images/vid.png"  width="130" alt="" />').addClass('success');
//					$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
				var henti = document.getElementById("fileUpload");
		 		document.getElementById("video").value = file3
				} else{
					$('<li></li>').appendTo('#files3').text(file3).addClass('error');
				}
			}
		});
		
	});
</script>
       <table cellpadding="10" width="70%" align="center" cellspacing="10">
         <tr height="40"><td align="center">Gambar Soal</td><td align="center">Audio Soal</td><td align="center">Video Soal</td></tr>
         <tr><td align="center"><br>               
         <div id="upload" style="text-align:center; padding-right:10;"><img src="images/no_pic.png" width="130" style="margin-top:10"/></div><span id="status" ></span>
                        <ul id="files"></ul>
           				</div><input type="text" id="gambar" name="image-upload" readonly>
         </td><td align="center">   <br>            
                        <div id="upload2" style="text-align:center"><img src="images/no_aud.png" width="130"/></div><span id="status2" ></span>
                        <ul id="files2"></ul>
           				</div><input type="text" id="audio" name="audio-upload" readonly>
         </td>
         
         <td align="center">  <br>             
                        <div id="upload3" style="text-align:center"><img src="images/no_vid.png" width="130"/></div><span id="status3" ></span>
                        <ul id="files3"></ul>
           				</div><input type="text" id="video" name="video-upload" readonly>
         </td>
         </tr></table>


</td>
  </tr>
  

 <tr><td colspan="3"><hr></td></tr>
<tr bgcolor="#507db3"><td colspan="3" style="padding:10px"><font color="#FFFFFF" size="5"><b>&nbsp;Pilihan Jawaban Soal Multiple Choices</b></font></td></tr>
<tr><td colspan="3"><hr></td></tr>  


<?php
for($i=1;$i<=$so['XJumPilihan'] ;$i++){
$jwb = "XJawab$i";
$gjwb = "XGambarJawab$i";
?>
<?php $var = $i +3 ; ?>
<script type="text/javascript" >
	$(function(){
		var btnUpload<?php echo $var; ?>=$('#upload<?php echo $var; ?>');
		var status<?php echo $var; ?>=$('#status<?php echo $var; ?>');
		new AjaxUpload(btnUpload<?php echo $var; ?>, {
			action: 'upload_jawab<?php echo $var; ?>.php',
			name: 'uploadfile<?php echo $var; ?>',
			onSubmit: function(file<?php echo $var; ?>, ext<?php echo $var; ?>){
				 if (! (ext<?php echo $var; ?> && /^(jpg|png|jpeg|gif)$/.test(ext<?php echo $var; ?>))){ 
                    // extension is not allowed 
					status<?php echo $var; ?>.text('Only JPG, PNG or GIF files are allowed');
					return false;
				}
				status<?php echo $var; ?>.text('Uploading...');
			},
			onComplete: function(file<?php echo $var; ?>, response<?php echo $var; ?>){
				//On completion clear the status
				status<?php echo $var; ?>.text('');
				//Add uploaded file to list
				
				if(response<?php echo $var; ?>==="success"){
				$('#upload<?php echo $var; ?>').html('<img src="../../pictures/'+file<?php echo $var; ?>+'"  width="130" alt="" />').addClass('success');
				document.getElementById("gambar<?php echo $var; ?>").value = file<?php echo $var; ?>
//					$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
				} else{
					$('<li></li>').appendTo('#files<?php echo $var; ?>').text(file<?php echo $var; ?>).addClass('error');
				}
			}
		});
		
	});
</script>
  <tr><td colspan="3">&nbsp;</td></tr>
  <tr>
   	<td width="70px" height="50px">
    <p style="margin-top:8px;margin-left:10px"><input type="radio" name="radio1" value="<?php echo $i; ?>" class="lcs_check lcs_tt2" autocomplete="off" ></p>
    </td>
    <td width="100%" colspan="3" >Tekan tombol untuk mengaktifkan Opsi Jawaban <?php echo $i; ?> sebagai Kunci Jawaban</td> 
    </tr>
    <tr>
    <td><div class="col-sm-12"> <span>Gambar Jawaban <?php echo $i; ?> </span><span>
 <div id="upload<?php echo $var; ?>" style="text-align:center; padding-right:10;"><img src="images/no_pic.png" width="130" style="margin-top:10"/></div><span id="status<?php echo $var; ?>" ></span>
                        <ul id="files<?php echo $var; ?>"></ul>
           				</div><input type="text" id="gambar<?php echo $var; ?>" name="image-upload<?php echo $var; ?>" readonly>

<?php $jwb = "XGambarJawab$jwb";?>
</span>
 </div>
</td>
    <td align="right" colspan="2"><textarea name="tanya"  id="jawab<?php echo $i; ?>" style="font-size:18px; width:95%; height:150px"></textarea>
        <div>
		<!-- Some integration calls: the first two seem to be having issues with asciimath plugin
		<a href="javascript:;" onmousedown="tinyMCE.get('elm1').show();">[Show]</a>
		<a href="javascript:;" onmousedown="tinyMCE.get('elm1').hide();">[Hide]</a>  -->
		<a href="javascript:;" onMouseDown="alert(tinyMCE.get('elm1').getContent());">[Get contents]</a>
		<a href="javascript:;" onMouseDown="alert(tinyMCE.get('elm1').selection.getContent());">[Get selected HTML]</a>
		<a href="javascript:;" onMouseDown="alert(tinyMCE.get('elm1').selection.getContent({format : 'text'}));">[Get selected text]</a>
	</div>
    </td>
  </tr>
<tr><td colspan="3"><hr></td></tr>  
<?php } ?>
   <tr><td colspan="2">&nbsp;</td></tr>
 </table>
</div></div> 
</form>
                   
<script>    
$(document).ready(function(){

});

function confirmDialog(message, onConfirm){
    var fClose = function(){
        modal.modal("hide");
    };
    var modal = $("#confirmModal");
    modal.modal("show");
    $("#confirmMessage").empty().append(message);
    $("#confirmOk").one('click', onConfirm);
    $("#confirmOk").one('click', fClose);
    $("#confirmCancel").one("click", fClose);
}

</script>
                                                     
  <!-- Modal confirm -->
<div class="modal" id="confirmModal" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmMessage">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="confirmOk">Ok</button>
                <button type="button" class="btn btn-default" id="confirmCancel">Cancel</button>
            </div>
        </div>
    </div>
</div>
                            <!-- /.table-responsive -->
                            <div class="well">
                            <p></p>
                                
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
    <script src="../vendor/jquery/jquery-1.12.3.js"></script>
    <script src="../vendor/jquery/jquery.dataTables.min.js"></script>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    
	
	
	});
    </script>
    <script>$(document).ready(function() {
    var table = $('#example').DataTable();
 
    $('#example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
 
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );
} );</script>
    
 
<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Buat Bank Soal Baru</h4>
      </div>
      <div class="modal-body">
        <?php include "buat_banksoalbaru.php";?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
!-->
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script>
	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').focus()
	})
	$('#myModal').on('hidden.bs.modal', function () {
	  document.location.reload();
	 // alert("tes");
	})
	
	$('#confirmModal').on('hidden.bs.modal', function () {
	  document.location.reload();
	  //alert("hapus");
	})
</script>


</body>

</html>
