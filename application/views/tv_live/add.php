
<div class="form-panel" style="margin-top: 20px; margin-bottom: 30px;">
    <div class="x-panel-bwrap">
        <form id="myform" enctype="multipart/form-data" action="<?php echo $url ?>">
            <table class="table-data">
                <tr>
                    <td colspan="2" style="text-align: right;">
                        Initial Live Code <b><?=$data_code + 1?></b>
                        <input type="hidden" id="code_live" name="code_live" value="<?=$data_code + 1?>" >
                    </td>
                </tr>
                <tr>
                    <td style="width: 100px;">Categorie : </td>
                    <td>
                        <?= form_dropdown('id_categories', $categorie_live, '', 'id="id_categories" class="easyui-combobox" style="width: 250px;" data-options="required: true"'); ?>

                        <!-- <input type="hidden" id="frame_border" name="frame_border" value="0">
                        <input type="hidden" id="allow_arr" name="allow_arr" value="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share">
                        <input type="hidden" id="allow_full_screen" name="allow_full_screen" value="true"> -->
                    </td>
                </tr>
                <tr>
                    <td>Name Chanel : </td>
                    <td>
                        <input id="nama_live" name="nama_live" style="width: 250px;" class="easyui-textbox" data-options="required: true">
                    </td>
                </tr>
                <tr>
                    <td>Link Live : </td>
                    <td>
                        <input id="link_live" name="link_live" style="width: 250px;" class="easyui-textbox" data-options="required: true">
                    </td>
                </tr>

                <tr>
                    <td>Logo : </td>
                    <td>
                        <input id="fileToUpload" class="easyui-filebox" name="fileToUpload" style="width: 250px;" data-options="buttonText: 'Pilih Logo'" data-options="required: true"/>
                        <!-- <br> <b style="color:red;font-size:11px;float:right;">Ukuran gambar 305 x 129</b> -->

                        <input type="hidden" name="poster_live" style="width: 250px;" value="poster_blue_m1.png">
                    </td>
                </tr>

            </table>
        </form>
    </div>
</div>

<script type="text/javascript">
<?php
 // echo $status_iklan;
?>
</script>
