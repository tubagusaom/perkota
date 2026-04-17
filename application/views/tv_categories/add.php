<div class="form-panel" style="margin-top: 20px; margin-bottom: 30px;">
    <div class="x-panel-bwrap">
        <form id="myform" enctype="multipart/form-data" action="<?php echo $url ?>">
            <table class="table-data">
                <tr>
                    <td>Nama : </td>
                    <td>
                        <input id="categories" name="categories" style="width: 280px;" class="easyui-textbox" >
                    </td>
                </tr>

                <tr>
                    <td>Logo : </td>
                    <td>
                        <input id="fileToUpload" class="easyui-filebox" name="fileToUpload" style="width: 280px;" data-options="buttonText: 'Pilih Logo'" />
                        <!-- <br> <b style="color:red;font-size:11px;float:right;">Ukuran gambar 305 x 129</b> -->
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
