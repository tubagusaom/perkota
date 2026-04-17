<div class="form-panel" style="margin-left: 20px;margin-top: 20px; margin-bottom: 30px;">
	<div class="x-panel-bwrap">
		<form id="myform">
			<table class="table-data">
				<tr>
					<td style="width: 150px;">Program TV : </td>
					<td>
						<?= form_dropdown('id_categorie', $categorie, $data->id_categorie, 'id="id_categorie" class="easyui-combobox" style="width: 200px;" data-options="required: true"'); ?>

						<input type="hidden" id="code_video" name="code_video" value="<?=$data->code_video?>">
						<input type="hidden" id="frame_border" name="frame_border" value="<?=$data->frame_border?>">
                        <input type="hidden" id="allow_arr" name="allow_arr" value="<?=$data->allow_arr?>">
                        <input type="hidden" id="allow_full_screen" name="allow_full_screen" value="<?=$data->allow_full_screen?>">
					</td>
				</tr>
				<tr>
					<td style="width: 150px;">Title : </td>
					<td>
						<input id="nama_video" name="nama_video" style="width: 200px;" class="easyui-textbox" data-options="required: true" value="<?php echo $data->nama_video ?>">
					</td>
				</tr>
				<tr>
					<td style="width: 150px;">Description : </td>
					<td>
						<!-- <input id="desc_video" name="desc_video" style="width: 200px;" class="easyui-textbox" data-options="required: true" value="<?php echo $data->desc_video ?>"> -->
						<input id="desc_video" name="desc_video" class="easyui-textbox" style="width:100%;height:60px" data-options="label:'Description:',multiline:true,required: true" value="<?=$data->desc_video?>">
					</td>
				</tr>
				<tr>
					<td style="width: 150px;">Link Video : </td>
					<td>
						<input id="uri_video" name="uri_video" style="width: 200px;" class="easyui-textbox" data-options="required: true" value="<?php echo $data->link_video ?>">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>