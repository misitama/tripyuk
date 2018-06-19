<div class="modal fade" data-backdrop="true" id="modalUsers" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <form id="frmUsers" class="form-horizontal row-border">
        <div class="modal-lg modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fullName" class="col-md-3 control-label">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" id="fullName" name="fullName"
                                           placeholder="Input full name of the user" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group" id="emailInputGroup">
                                <label for="email" class="col-md-3 control-label">email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="Input your valid email address example jhon@gmail.com" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sex" class="col-md-3 control-label">Sex</label>
                                <div class="col-md-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="rbSex" id="Male" value="Male" required checked> Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="rbSex" id="Female" value="Female" required> Female
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="rbSex" id="Other" value="Other" required> Other
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-md-3 control-label">phone</label>
                                <div class="col-md-9">
                                    <input type="phone" class="form-control" id="phone" name="phone"
                                           placeholder="Input your phone number ex=0321 595721" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mobilePhone" class="col-md-3 control-label">Mobile Phone</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="mobilePhone" name="mobilePhone"
                                           placeholder="Input your mobile phone number ex = +6281230230230">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="roleId" class="col-md-3 control-label">User Roles</label>
                                <div class="col-md-9">
                                    <select class="populate" id="roleId" name="roleId" style="width: 100%;" required>
                                        <option value="">Choose on role</option>
                                        @foreach($role as $roles)
                                            <option value="{{$roles->id}}">{{$roles->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="provinceId" class="col-md-3 control-label">Province</label>
                                <div class="col-md-9">
                                    <select class="populate" id="provinceId" name="provinceId" style="width: 100%;"
                                            required>
                                        <option value="">Choose one province</option>
                                        @foreach($province as $provincies)
                                            <option value="{{$provincies->id}}">{{$provincies->province_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="regencyId" class="col-md-3 control-label">Regency</label>
                                <div class="col-md-9">
                                    <select class="populate" id="regencyId" name="regencyId" style="width: 100%;"
                                            required>
                                        <option value="">Choose one regency</option>
                                        @foreach($regency as $regencies)
                                            <option value="{{$regencies->id}}">{{$regencies->regency_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="districtId" class="col-md-3 control-label">District</label>
                                <div class="col-md-9">
                                    <select class="populate" id="districtId" name="districtId" style="width: 100%;"
                                            required>
                                        <option value="">Choose one of district</option>
                                        @foreach($district as $districts)
                                            <option value="{{$districts->id}}">{{$districts->district_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-md-3 control-label">Address</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="address" name="address"
                                              placeholder="Input the complete address of user" rows="5"
                                              required></textarea>
                                </div>
                            </div>
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
                    <input type="hidden" id="userId" value="">
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