<div class="form-panel" style="margin-left: 20px;margin-top: 20px; margin-bottom: 30px;">
    <div class="x-panel-bwrap">
        <form id="myform">
            <table class="table-data">
                <tr>
                    <td colspan="2" style="width: 150px;">
                        Initial Code <b><?=$data->code_video?></b>
                        <input type="hidden" id="code_video" name="code_video" value="<?=$data->code_video?>">
                    </td>
                </tr>

                <tr>
                    <td style="width: 150px;">Categorie : </td>
                    <td>
                        <?php echo form_dropdown('id_categorie', $categories, $data->id_categorie, 'id="id_categorie" class="easyui-combobox" style="width: 250px;" data-options="required: true"'); ?>

                        <input type="hidden" id="frame_border" name="frame_border" value="<?=$data->frame_border?>">
                        <input type="hidden" id="allow_arr" name="allow_arr" value="<?=$data->allow_arr?>">
                        <input type="hidden" id="allow_full_screen" name="allow_full_screen" value="<?=$data->allow_full_screen?>">
                    </td>
                </tr>

                <tr>
                    <td style="width: 150px;">Title : </td>
                    <td>
                        <input id="nama_video" name="nama_video" style="width: 250px;" class="easyui-textbox" data-options="required: true" value="<?=$data->nama_video?>">
                    </td>
                </tr>

                <tr>
                    <td style="width: 150px;">Description : </td>
                    <td>
                        <!-- <input id="desc_video" name="desc_video" style="width: 250px;" class="easyui-textbox" data-options="required: true" value="<?=$data->desc_video?>"> -->
                        <input id="desc_video" name="desc_video" class="easyui-textbox" style="width:100%;height:60px" data-options="label:'Description:',multiline:true,required: true" value="<?=$data->desc_video?>">
                    </td>
                </tr>

                <tr>
                    <td style="width: 150px;">Link Video : </td>
                    <td>
                        <input id="link_video" name="link_video" style="width: 250px;" class="easyui-textbox" data-options="required: true" value="<?=$data->link_video?>">
                    </td>
                </tr>

                <tr>
                    <td style="width: 150px;">Link Embed : </td>
                    <td>
                        <input id="link_embed" name="link_embed" style="width: 250px;" class="easyui-textbox" data-options="required: true" value="<?=$data->link_embed?>">
                    </td>
                </tr>

                <tr>
                    <td style="width: 150px;">Poster Video : </td>
                    <td>
                        <input id="poster_video" name="poster_video" style="width: 250px;" class="easyui-textbox" data-options="required: true" value="<?=$data->poster_video?>">
                    </td>
                </tr>

            </table>
        </form>
    </div>
</div>
