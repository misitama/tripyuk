<div class="modal fade" data-backdrop="true" id="modalRole" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form id="frmRole" class="form-horizontal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="roleName" class="col-md-3 control-label">Role Name</label>
                        <div class="col-md-4">
                            <input type="text" id="roleName" name="roleName" placeholder="Input role name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-md-3 control-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        </div>
                    </div>
                    <div id="detailInfo" style="display: none;">
                        <div class="form-group">
                            <label for="createdby" class="col-md-3 control-label">Created By</label>
                            <div class="col-md-9">
                                <label class="control-label" id="createdBy"></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="createdAt" class="col-md-3 control-label">Created At</label>
                            <div class="col-md-9">
                                <label class="control-label" id="createdAt"></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastModifiedBy" class="col-md-3 control-label">Modified By</label>
                            <div class="col-md-9">
                                <label class="control-label" id="lastModifiedBy"></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="updatedAt" class="col-md-3 control-label">Modified At</label>
                            <div class="col-md-9">
                                <label class="control-label" id="updatedAt"></label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="roleId" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="btnEdit" class="btn btn-warning">Edit</button>
                    <button type="submit" class="btn btn-primary" id="btnSave">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </form>
</div>