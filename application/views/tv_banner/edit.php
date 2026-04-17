<div class="form-panel" style="margin-left: 20px;margin-top: 20px; margin-bottom: 30px;">
    <div class="x-panel-bwrap">
         <form id="myform" enctype="multipart/form-data" action="<?php echo $url ?>">
            <table class="table-data">
                <tr>
                    <td style="width: 50px;">Nama : </td>
                    <td>
                        <input id="title" name="title" style="width: 250px;" class="easyui-textbox" data-options="required: true" value="<?php echo $data->title ?>">
                    </td>
                </tr>
                  <tr>
                      <td style="width: 50px;">Link : </td>
                      <td>
                          <input id="link" name="link" style="width: 250px;" class="easyui-textbox" data-options="required: true" value="<?php echo $data->link ?>">
                      </td>
                  </tr>


                  <tr>
                      <td style="width: 50px;">Urutan : </td>
                      <td>
                          <input type="number" id="no_urut" name="no_urut" style="width: 250px;" class="easyui-textbox" data-options="required: true" value="<?php echo $data->no_urut ?>">
                      </td>
                  </tr>

                <tr>
                    <td style="width: 150px;">Gambar : </td>
                    <td>
                        <input id="fileToUpload" class="easyui-filebox" name="fileToUpload" style="width: 250px;"  data-options="buttonText: 'Pilih Banner'"  />

                        <input type="hidden" name="foto_hidden" id="foto_hidden" value="<?php echo $data->image_slide ?>" />
                </tr>
            </table>
        </form>
    </div>
</div>
