<div class="form-panel" style="margin-left: 20px;margin-top: 10px; margin-bottom: 20px;">
	<div class="x-panel-bwrap">
		<form id="myform">
			<table class="table-data">
				<!-- <tr>
                    <td colspan="2" style="text-align: right;">
                        Initial Code <b><?=$data_code + 1?></b>
                        
                    </td>
                </tr> -->
				<tr>
					<td style="width: 150px;">Program TV : </td>
					<td>
						<input style="width: 225px;" class="easyui-textbox" data-options="required: true" value="<?=$categorie->categories?>" disabled>
					</td>
				</tr>

				<tr>
					<td style="width: 150px;">Title : </td>
					<td>
						<input id="nama_video" name="nama_video" style="width: 225px;" class="easyui-textbox" data-options="required: true">
					</td>
				</tr>
				<tr>
					<td style="width: 150px;">Description : </td>
					<td>
						<input id="desc_video" name="desc_video" class="easyui-textbox" style="width:100%;height:60px" data-options="label:'Message:',multiline:true,required: true">
					</td>
				</tr>
				<tr>
					<td style="width: 150px;">Link Video : </td>
					<td>
						<input id="uri_video" name="uri_video" style="width: 225px;" class="easyui-textbox" data-options="required: true">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>