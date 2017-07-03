@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    <!-- Content -->
    <div class="container-fluid">
        <h4>Customer</h4>
        <ol class="breadcrumb no-bg m-b-1">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Customer</li>
        </ol>
        <div class="panel panel-default">
            <div class="panel-body">
                <h4 class="panel-title">Search</h4>
                <form action="" method="POST" class="form-group form-horizontal" id="mailSearch-form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mailSearchCompanyName" class="col-sm-3 control-label form-label">Company name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="mailSearchCompanyName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mailSearchEmail" class="col-sm-3 control-label form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="mailSearchEmail">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label form-label">Created date</label>
                                <div class="col-sm-9">
                                    <div class="input-daterange input-group">
                                        <input type="text" class="input-sm form-control" name="createdDateStart" />
                                        <span class="input-group-addon">to</span>
                                        <input type="text" class="input-sm form-control" name="createdDateEnd" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label form-label">Latest mail time</label>
                                <div class="col-sm-9">
                                    <div class="input-daterange input-group">
                                        <input type="text" class="input-sm form-control" name="createdDateStart" />
                                        <span class="input-group-addon">to</span>
                                        <input type="text" class="input-sm form-control" name="createdDateEnd" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <input type="submit" class="btn btn-success" value="Search">
                                    <input type="button" class="btn btn-warning btn-reset" value="Reset" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End panel -->
        <div class="m-b-1 pull-right">
            <a href="javascript:;" class="btn btn-warning" data-toggle="modal" data-target="#sendMailModal">Send Mail</a>
            <a href="#" class="btn btn-success">Import</a>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addCustomerModal">Add</a>
        </div>
        <div class="clearfix"></div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Company name</th>
                            <th>PIC</th>
                            <th>Email</th>
                            <th >Last sent email</th>
                            <th>Created date</th>
                            <th class="text-center"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center"> <input type="checkbox" name=""> </td>
                            <td>Deha Solutions</td>
                            <td>fsdfsdf</td>
                            <td><a href="anhnm@deha.vn">anhnm@deha.vn</a></td>
                            <td>2017/7/01 15:35</td>
                            <td>2017/7/01</td>
                            <td class="text-center"><a href="#" class="btn btn-info"><i class="fa fa-pencil-square-o visible-xs"></i><span class="hidden-xs">Edit</span></a>
                                <a href="#" class="btn btn-danger"><i class="fa fa-trash visible-xs"></i><span class="hidden-xs">Delete</span></a></td>
                        </tr>
                        <tr>
                            <td class="text-center"> <input type="checkbox" name=""> </td>
                            <td>Deha Solutions</td>
                            <td>fsdfsdf</td>
                            <td><a href="anhnm@deha.vn">anhnm@deha.vn</a></td>
                            <td>2017/7/01 15:35</td>
                            <td>2017/7/01</td>
                            <td class="text-center"><a href="#" class="btn btn-info"><i class="fa fa-pencil-square-o visible-xs"></i><span class="hidden-xs">Edit</span></a>
                                <a href="#" class="btn btn-danger"><i class="fa fa-trash visible-xs"></i><span class="hidden-xs">Delete</span></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="text-center">
            <ul class="pagination">
                <li class="disabled"><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>
    </div>
    <!-- Send mail modal -->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="sendMailModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Send mail</h4>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="sel1" class="col-sm-4 control-label">Template mail:</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="sel1">
                                    <option>Template mail 1</option>
                                    <option>Template mail 2</option>
                                    <option>Template mail 3</option>
                                    <option>Template mail 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Add customer modal -->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="addCustomerModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Add customer</h4>
                </div>
                <form class="form-horizontal">
                    <div class="modal-content">
                        <div class="form-group">
                            <label for="modalAddCustomerName" class="col-sm-3 control-label">Company name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="modalAddCustomerName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="modalAddCustomerPIC" class="col-sm-3 control-label">PIC</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="modalAddCustomerPIC">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="modalAddCustomerMail" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="modalAddCustomerMail">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <div class="text-right">
                                <button type="button" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection