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
                    {{--@include('layouts.backend.search-form')--}}

                    <div class="create-company">
                        <div class="portlet light border border-grey">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-social-dribbble font-purple-soft"></i>
                                    <span class="caption-subject font-purple-soft bold uppercase">My Companies</span>
                                </div>
                                <div class="actions">


                                    <a href="{{url('company')}}/create" class="btn  green circle">
                                        Create Company
                                    </a>
                                    {{--<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">--}}
                                        {{--<i class="fa fa-question"></i>--}}
                                    {{--</a>--}}
                                </div>
                            </div>
                            <div class="portlet-body margin-bottom-20">
                                <div class="row">
                                    <div class="col-md-12">
                                    @include('flash::message')
                                    </div>
                                    {{--@include('layouts.backend.left-sidebar')--}}
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <div class="tab-content">
                                            <div class="tab-pane fade active in" id="tab_1_1">
                                                <div class="convention">
                                                    <!-- .row -->
                                                    <div class="row">

                                                        @if($companies_obj)
                                                            @php
                                                            $flag = 0;
                                                            @endphp
                                                            @foreach($companies_obj as $company_obj)
                                                                @php
                                                                    $flag = 1;
                                                                @endphp
                                                                <div class="col-xs-6 col-sm-4 col-md-3">
                                                                    <div class="mt-element-overlay">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="mt-overlay-3">
                                                                                    @if(@$company_obj->company_image->filename)
                                                                                    <img src="{{config('constants.base_url')}}/{{config('constants.company_logo_large').@$company_obj->company_image->filename}}">
                                                                                    @else
                                                                                        <img src="http://www.placehold.it/252x252/EFEFEF/AAAAAA&text=no+image">
                                                                                    @endif

                                                                                    <div class="mt-overlay">
                                                                                    <h2>{{$company_obj->name}}</h2>
                                                                                        @if(@$company_obj->verified == 1)
                                                                                    <a class="mt-info" href="{{url('company')}}/{{$company_obj->id}}">Click To View</a>
                                                                                        @endif
                                                                                        @if(@$company_obj->verified == 0)
                                                                                            <a class="mt-info" href="{{url('company')}}/{{$company_obj->id}}">Click To View</a>
                                                                                        @endif
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>

                                                                    <div class="actions" style="    margin-top: -8px;    padding-top: 0px; padding-bottom: 20px;">
                                                                        @if($company_obj->verified == 1)

                                                                            <h5 class="company_verify_sattus">Published</h5>
                                                                        <a  href="{{url('/company-delete')}}/{{$company_obj->id}}" class="btn_company btn btn-circle btn-icon-only btn-default pull-right sure-to-delete">
                                                                            <i class="sure-to-delete fa fa-trash" style="color: #e73d4a"> </i>
                                                                        </a>
                                                                            <a href="{{url('company')}}/{{$company_obj->id}}/edit" class="btn_company btn btn-circle btn-icon-only btn-default pull-right">
                                                                                <i class="fa fa-edit" style="color:#0abc0a;"></i>
                                                                            </a>
                                                                        @else

                                                                            <h5 class="company_status">Unverified</h5>
                                                                            <a  href="{{url('/company-delete')}}/{{$company_obj->id}}" class="btn_company sure-to-delete pull-right btn btn-circle btn-icon-only btn-default">
                                                                                <i class="sure-to-delete fa fa-trash " style="color: #e73d4a"> </i>
                                                                            </a>
                                                                            <a class="btn btn-circle btn-icon-only btn-default pull-right btn_company  fa fa-question"  data-company_id="{{$company_obj->id}}" href="#unverifiedcompany" data-toggle="modal">
                                                                                <i class=" " ></i>
                                                                            </a>
                                                                        @endif
                                                                    </div>



                                                                </div>
                                                            @endforeach
                                                        @endif
                                                        @if($flag == 0)
                                                            <div class="col-md-12">

                                                                    <div class="alert alert-danger">
                                                                        No any company found. Please click on the create company button to create your company.
                                                                    </div>

                                                            </div>

                                                        @endif
                                                    </div>
                                                    <!-- /.row -->
                                                    <center>
                                                        {{@$companies_obj->render()}}
                                                    </center>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT BODY -->
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->




<div class="modal fade " id="unverifiedcompany" tabindex="-1" role="basic" aria-hidden="true" style="display: none;">
    <div class="modal-dialog   " >
        <div class="modal-content  " >

            <div>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Unverified Company</h4>
            </div>



                    <div class="modal-body">
                        This company has not been verified yet, Please go to your email and click on activation link  we sent earlier.
                        To get activation link again, please click on the button below
                    </div>
                     </div>


                            <a href="{{url('/send_email_again')}}\" class="btn green retry_email" style="margin-top:10px; margin-bottom: 10px; margin-left:20px">Click here</a>



                <div class="modal-footer">

                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cancel</button>

                </div>

        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection