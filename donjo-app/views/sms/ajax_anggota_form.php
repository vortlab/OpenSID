<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/validasi.js"></script>
<form action="<?=$form_action?>" method="post" id="validasi">
    <div class="ui-layout-north panel">
    </div>
    <div class="ui-layout-center" id="maincontent" style="padding: 5px;">
        <div class="table-panel top">            
        </div>
        <table class="list">
		<thead>
		    	<tr>
				<th width="10">No</th>
				<th width="15"><input type="checkbox" class="checkall"/></th>
				<th width="100">Nama </th>
			    	<th width="25">Jenis Kelamin</th>	
			    	<th width="25">Alamat</th>	
			    	<th width="25">No HP</th>	
		   	 </tr>
		</thead>
		<tbody>
        		<? $no=1; foreach($main as $data): ?>
			<tr>
		  		<td align="center" width="2"><?=$no?></td>
				<td align="center" width="5">
					<input type="checkbox" name="id_cb[]" value="<?=$data['id']?>" />
				</td>
				 <td><?=unpenetration($data['nama'])?></td>
				 <td><?=$data['sex']?></td>
				 <td><?=$data['alamat_sekarang']?></td>
				 <td align="center"><?=$data['no_hp']?></td>
			</tr>
      			<? $no++; endforeach; ?>
		</tbody>
        </table>
    	</div>

<div class="buttonpane"  style="text-align: right; width:400px;position:absolute;bottom:0px;>
    <div class="uibutton-group">
        <button class="uibutton" type="button" onclick="$('#window').dialog('close');">Close</button>
        <button class="uibutton confirm" type="submit">Simpan</button>
    </div>
</div>
</form>