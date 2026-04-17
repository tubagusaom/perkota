<div class="form-panel" style="margin-left: 20px;margin-top: 20px; margin-bottom: 30px;">
    <div class="x-panel-bwrap">
    <form id="myform" enctype="multipart/form-data" action="<?php echo $url ?>">
            <table class="table-data">
                <tr>
                    <td colspan="2" style="width: 150px;">
                        Initial Code <b><?=$data->code_live?></b>
                        <input type="hidden" id="code_live" name="code_live" value="<?=$data->code_live?>">
                    </td>
                </tr>

                <tr>
                    <td style="width: 150px;">Categorie : </td>
                    <td>
                        <?php echo form_dropdown('id_categories', $categorie_live, $data->id_categories, 'id="id_categories" class="easyui-combobox" style="width: 250px;" data-options="required: true"'); ?>
                    </td>
                </tr>

                <tr>
                    <td style="width: 150px;">Name Chanel : </td>
                    <td>
                        <input id="nama_live" name="nama_live" style="width: 250px;" class="easyui-textbox" data-options="required: true" value="<?=$data->nama_live?>">
                    </td>
                </tr>

                <tr>
                    <td style="width: 150px;">Link Live : </td>
                    <td>
                        <input id="link_live" name="link_live" style="width: 250px;" class="easyui-textbox" data-options="required: true" value="<?=$data->link_live?>">
                    </td>
                </tr>

                <tr>
                    <td style="width: 150px;">Logo : </td>
                    <td>
                        <input id="fileToUpload" class="easyui-filebox" name="fileToUpload" style="width: 250px;"  data-options="buttonText: 'Pilih Logo'"  />

                        <input type="hidden" name="foto_hidden" id="foto_hidden" value="<?php echo $data->logo_live ?>" />
                        <!-- <input type="hidden" name="logo_live" id="logo_live" value="<?=$data->logo_live?>" />
                        <input type="hidden" name="logo_link" id="logo_link" value="<?=$data->logo_link?>" /> -->

                        <input type="hidden" name="poster_live" style="width: 250px;" value="<?php echo $data->poster_live ?>">
                </tr>

            </table>
        </form>
    </div>
</div>
