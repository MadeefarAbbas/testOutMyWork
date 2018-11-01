@extends('layouts.backend')

@section('content')

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <!-- BEGIN PAGE CONTENT BODY -->
            <div class="page-content">
                <div class="container">
                    <!-- BEGIN PAGE BREADCRUMBS -->
                    <!-- BEGIN LOGIN -->
                    <div class="content">
                        <form role="form" class="workype-search sm-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn green dropdown-toggle" data-toggle="dropdown">Action
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:;">Products</a></li>
                                                <li><a href="javascript:;">Supply and Manufacturer</a></li>
                                                <li><a href="javascript:;">Buyer</a></li>
                                                <li><a href="javascript:;">Supply & Buyer</a></li>
                                                <li><a href="javascript:;">Distribution and wholesale</a></li>
                                                <li><a href="javascript:;">Business Developer</a></li>
                                                <li><a href="javascript:;">Startup</a></li>
                                                <li><a href="javascript:;">Investment & Incubation</a></li>
                                                <li><a href="javascript:;">Government Division</a></li>
                                                <li class="divider"> </li>
                                                <li class="reset"><a href="javascript:;"> Reset Action </a></li>
                                            </ul>
                                        </div>
                                        <!-- /btn-group -->
                                        <input type="text" class="form-control">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                        <!-- /btn-group -->
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <!-- /.col-md-6 -->
                            </div>
                            <!-- /.row -->
                            <div class="workype-search-append margin-top-10"></div>
                        </form>
                        <div class="company-details">
                            <div class="clearfix filter">
                                <div class="col-xs-6 col-sm-3">
                                    <label class="control-label">By Company Type</label>
                                    <select class="form-control select2">
                                        <option selected>Please choose</option>
                                        <optgroup label="Alaskan">
                                            <option value="AK">Alaska</option>
                                            <option value="HI" disabled="disabled">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <label class="control-label">By Product Type</label>
                                    <select class="form-control select2">
                                        <option selected>Please choose</option>
                                        <optgroup label="Alaskan">
                                            <option value="AK">Alaska</option>
                                            <option value="HI" disabled="disabled">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <label class="control-label">By Size</label>
                                    <select class="form-control select2">
                                        <option selected>Please choose</option>
                                        <optgroup label="Alaskan">
                                            <option value="AK">Alaska</option>
                                            <option value="HI" disabled="disabled">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <label class="control-label">By Country</label>
                                    <select class="form-control select2">
                                        <option selected>Please choose</option>
                                        <optgroup label="Alaskan">
                                            <option value="AK">Alaska</option>
                                            <option value="HI" disabled="disabled">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- TABLE -->
                        <table class="table table-responsive wt-bar-items border border-white" wt-sorting-table>
                            <thead>
                            <tr>
                                <th width="3%" class="sorted"> # </th>
                                <th> Logo </th>
                                <th> Agent name </th>
                                <th> Industry Category </th>
                                <th> Detail Category </th>
                                <th> Country </th>
                                <th> City </th>
                                <th> Specialties </th>
                                <th class="text-center not-sorted"> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="{{config('constants.base_url')}}/webicosoft-assets/global/img/portfolio/600x600/1.jpg" width="40"></td>
                                <td>Name 1</td>
                                <td>Category 1</td>
                                <td>Detail 1</td>
                                <td>Country 1</td>
                                <td>City 1</td>
                                <td>Skills 1</td>
                                <td class="text-center">
                                    <a class="btn btn-icon-only btn-circle green" href="javascript:;"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- END TABLE -->
                        <center>
                            <ul class="pagination">
                                <li class="prev disabled"><a href="javascript:;" title="First"><i class="fa fa-angle-double-left"></i></a></li>
                                <li class="prev disabled"><a href="javascript:;" title="Prev"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="javascript:;">1</a></li>
                                <li><a href="javascript:;">2</a></li>
                                <li><a href="javascript:;">3</a></li>
                                <li><a href="javascript:;">4</a></li>
                                <li><a href="javascript:;">5</a></li>
                                <li class="next"><a href="javascript:;" title="Next"><i class="fa fa-angle-right"></i></a></li>
                                <li class="next"><a href="javascript:;" title="Last"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </center>
                    </div>
                </div>
                <!-- END PAGE CONTENT INNER -->
            </div>
        </div>
        <!-- END PAGE CONTENT BODY -->
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->

    @endsection