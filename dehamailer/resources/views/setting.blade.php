@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    <!-- Content -->
    <div class="content-area p-y-1">
        <div class="container-fluid">
            <h4>Setting</h4>
            <ol class="breadcrumb no-bg m-b-1">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Setting</li>
            </ol>
            <!-- End panel -->
            <!-- <div class="m-b-1 pull-right">
                <a href="javascript:;" class="btn btn-warning" data-toggle="modal" data-target="#sendMailModal">Send Mail</a>
                <a href="#" class="btn btn-success">Import</a>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addMailTemplateModal">Add</a>
            </div> -->
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body setting-panel">
                            <h4 class="panel-title">SMTP</h4>
                            <form action="" class="form-horizontal" id="smtp-form">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="setting_host" class="col-sm-3 form-label">Host</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="setting_host" placeholder="smtp.gmail.com">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="setting_username" class="form-label col-sm-3">Username</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="setting_username" placeholder="thang@deha-soft.com">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="setting_password" class="form-label col-sm-3">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="setting_password" placeholder="*********">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="setting_mail_send" class="form-label col-sm-3">From</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="setting_mail_send" placeholder="thang@deha-soft.com">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="setting_reply_to" class="form-label col-sm-3">Reply to</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="setting_reply_to" placeholder="sales@deha-soft.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="setting_port" class="form-label col-sm-3">Port</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="setting_port" placeholder="587">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="Save" class="btn btn-info">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body setting-panel">
                            <h4 class="panel-title">Common setting</h4>
                            <form action="" class="form-horizontal" id="common-form">
                                <div class="form-group">
                                    <label for="commonMailPerDay" class="col-sm-3 form-label">Mail per day</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="commonMailPerDay">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="commonTime" class="form-label col-sm-3">Time interval</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" aria-describedby="basic-addon2" id="commonTime">
                                            <span class="input-group-addon" id="basic-addon2">min</span>
                                        </div>
                                    </div>
                                </div>


                                <input type="submit" value="Save" class="btn btn-info">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection