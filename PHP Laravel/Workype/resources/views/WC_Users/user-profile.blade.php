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

                        <div class="col-md-12 margin-top-40">
                     <!-- BEGIN PROFILE CONTENT -->
                    <div class="col-md-3">
                        <ul class="list-unstyled profile-nav">
                            <li>
                                @if(@$user_obj->avatar->filename)
                                <img class="img-responsive pic-bordered" alt="" src="{{config('constants.base_url')}}/{{config('constants.user_avatar_large')}}{{@$user_obj->avatar->filename}}">
                                @else

                                    {{--<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">--}}
                                        {{--<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>--}}
                                    <img class="img-responsive pic-bordered" alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                                @endif
                            </li>
                        </ul>
                    </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-8 profile-info">

                             <h1 class="font-green sbold uppercase no-margin">{{@$user_obj->first_name}} {{@$user_obj->last_name}}</h1>
                    <p> <b>Contact Information</b> </p>
                    <div class="row">
                        <div class="col-md-3">Email:</div>
                        <div class="col-md-9"><a href="mailto:<?php echo @$user_obj->email; ?>">{{@$user_obj->email ?? 'N/A'}}</a></div>
                    </div>
                    <div class="row margin-top-10">
                        <div class="col-md-3">Contact #:</div>
                        <div class="col-md-9">{{@$user_obj->contact->phone  ?? 'N/A'}}</div>
                    </div>
                            <div class="row margin-top-10">
                                <div class="col-md-3">Skype:</div>
                                <div class="col-md-9">{{@$user_obj->contact->skype ?? 'N/A'}}</div>
                            </div>
                            <div class="row margin-top-10">
                                <div class="col-md-3">Website:</div>
                                <div class="col-md-9"><a href="{{@$user_obj->contact->website ?? 'Javascript:;'}}" target="_blank"> {{@$user_obj->contact->website ?? 'N/A'}}</a></div>
                            </div>
                    <p> <b>General Information</b> </p>
                    <div class="row">
                        <div class="col-md-3">Birthday:</div>
                        <div class="col-md-9">@php echo date('F d, Y', strtotime(@$user_obj->personal_detail->date_of_birth)) ?? 'N/A'; @endphp</div>
                    </div>
                    <div class="row margin-top-10">
                    <div class="col-md-3">Nationality:</div>
                    <div class="col-md-9">{{@$nationality ?? 'N/A'}}</div>
                </div>
                {{--<div class="row margin-top-10">--}}
                    {{--<div class="col-md-3">Department:</div>--}}
                    {{--<div class="col-md-9">Web Development</div>--}}
                {{--</div>--}}
                <hr>
                <ul class="list-inline">
                    {{--<li> <i class="fa fa-map-marker"></i> Pakistan </li>--}}
                    {{--<li><i class="fa fa-calendar"></i> 13-10-1990 </li>--}}
                </ul>
            </div>
            <!--end col-md-8-->

            <!--end col-md-4-->
        </div>
        <!--end row-->
    </div>
    <!-- END PROFILE CONTENT -->
</div>

                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
    </div>

@endsection