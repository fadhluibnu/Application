<?php
include "config.php";
include "header.php";
?>

<div class="panel panel-default">
    <div class="panel-body">


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Add Data
        </button>
        <br />
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Data</h4>
                    </div>
                    <div class="modal-body">

                        <form>
                            <div class="form-group">
                                <label for="nm">Nama</label>
                                <input type="text" class="form-control" id="nm">
                            </div>
                            <div class="form-group">
                                <label for="gd">Gender</label>
                                <input type="text" class="form-control" id="gd">
                            </div>
                            <div class="form-group">
                                <label for="pn">Phone</label>
                                <input type="text" class="form-control" id="pn">
                            </div>
                            <div class="form-group">
                                <label for="al">Alamat</label>
                                <input type="text" class="form-control" id="al">
                            </div>

                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="save" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>



        <div id="info"></div><!-- menampilkan info hasil insert update dan delete -->

        <br />
        <div id="viewdata"></div><!-- memanggil data dari fungsi viewdata -->
    </div>

    <script>
        function viewdata() {
            $.ajax({
                type: "GET",
                url: "php/getdata.php"
            }).done(function(data) {
                $('#viewdata').html(data);
            });
        }
        $('#save').click(function() {

            var nm = $('#nm').val();
            var gd = $('#gd').val();
            var pn = $('#pn').val();
            var al = $('#al').val();

            var datas = "nm=" + nm + "&gd=" + gd + "&pn=" + pn + "&al=" + al;

            $.ajax({
                type: "POST",
                url: "php/newdata.php",
                data: datas
            }).done(function(data) {
                $('#myModal').modal('hide')
                $('#info').html(data);
                viewdata();
            });
        });

        function updatedata(str) {

            var id = str;
            var nm = $('#nm' + str).val();
            var gd = $('#gd' + str).val();
            var pn = $('#pn' + str).val();
            var al = $('#al' + str).val();

            var datas = "nm=" + nm + "&gd=" + gd + "&pn=" + pn + "&al=" + al;

            $.ajax({
                type: "POST",
                url: "php/updatedata.php?id=" + id,
                data: datas
            }).done(function(data) {
                $('#info').html(data);
                viewdata();
            });
        }

        function deletedata(str) {

            var id = str;

            $.ajax({
                type: "GET",
                url: "php/deletedata.php?id=" + id
            }).done(function(data) {
                $('#info').html(data);
                viewdata();
            });
        }
    </script>
    </body>


</div>
<div class="panel-footer"><?php
                            include 'footer.php';

                            ?></div>
</div>