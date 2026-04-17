<div class="form-panel" style="margin-left: 20px;margin-top: 20px; margin-bottom: 30px;">
    <div class="x-panel-bwrap">
         <form id="myform" enctype="multipart/form-data" action="<?php echo $url ?>">
            <table class="table-data">
                <tr>
                    <td style="width: 50px;">Nama : </td>
                    <td>
                        <input id="categories" name="categories" style="width: 250px;" class="easyui-textbox" data-options="required: true" value="<?php echo $data->categories ?>">
                    </td>
                </tr>

                <tr>
                    <td style="width: 150px;">Logo : </td>
                    <td>
                        <input id="fileToUpload" class="easyui-filebox" name="fileToUpload" style="width: 250px;"  data-options="buttonText: 'Pilih Logo'"  />

                        <input type="hidden" name="foto_hidden" id="foto_hidden" value="<?php echo $data->logo_img ?>" />
                </tr>
            </table>
        </form>
    </div>
</div>
