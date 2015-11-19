<div class="panel panel-default">
    <div class="panel-heading">Page</div>
    <div class="panel-body">
        <div class="row col-md-12">            
            <div class="row form-group" style="padding-left:10px;">
                <div class ="col-md-2 pull-left form-group">
                    <a href="<?php echo base_url().'admin/page/create_page'?>">
                        <button id="menu_create_id" value="" class="form-control pull-right btn_custom_button">Create Page</button>  
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                 <div class="table-responsive table-left-padding table_padding">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Submenu Id</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th style="text-align: center">Edit</th>
                                <th style="text-align: center">Delete</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                </div>
            </div>
            <div class="btn-group" style="padding-right: 10px;">
                <input type="button" style="width:120px;" value="Back" id="back_button" onclick="javascript:history.back();" class="form-control btn_custom_button">
            </div>
        </div>
    </div>
</div>
