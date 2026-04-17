<div class="form-panel" style="margin-top: 20px; margin-bottom: 30px;">
    <div class="x-panel-bwrap">
        <form id="myform" enctype="multipart/form-data" action="<?php echo $url ?>">
            <table class="table-data">
                <tr>
                    <td colspan="2" style="text-align: right;">
                        Initial Code <b><?=$data_code + 1?></b>
                        <input type="hidden" id="code_video" name="code_video" value="<?=$data_code + 1?>" >
                    </td>
                </tr>
                <tr>
                    <td>Categorie : </td>
                    <td>
                        <?= form_dropdown('id_categorie', $categories, '', 'id="id_categorie" class="easyui-combobox" style="width: 280px;" data-options="required: true"'); ?>

                        <input type="hidden" id="frame_border" name="frame_border" value="0">
                        <input type="hidden" id="allow_arr" name="allow_arr" value="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share">
                        <input type="hidden" id="allow_full_screen" name="allow_full_screen" value="true">
                    </td>
                </tr>
                <tr>
                    <td>Title : </td>
                    <td>
                        <input id="nama_video" name="nama_video" style="width: 280px;" class="easyui-textbox" data-options="required: true">
                    </td>
                </tr>
                <tr>
                    <td>Description : </td>
                    <td>
                        <input id="desc_video" name="desc_video" class="easyui-textbox" style="width:100%;height:60px" data-options="label:'Message:',multiline:true,required: true">
                    </td>
                </tr>
                <tr>
                    <td>Link Video : </td>
                    <td>
                        <input id="link_video" name="link_video" style="width: 280px;" class="easyui-textbox" data-options="required: true">
                    </td>
                </tr>
                <tr>
                    <td>Link Embed : </td>
                    <td>
                        <input id="link_embed" name="link_embed" style="width: 280px;" class="easyui-textbox" data-options="required: true">
                    </td>
                </tr>
                <tr>
                    <td>Poster Video : </td>
                    <td>
                        <input id="poster_video" name="poster_video" style="width: 280px;" class="easyui-textbox" data-options="required: true">
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
