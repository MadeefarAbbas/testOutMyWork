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

                                {{--<div class="portlet-title">--}}
                                {{--<div class="caption">--}}
                                {{--<i class="icon-social-dribbble font-purple-soft"></i>--}}
                                {{--<span class="caption-subject font-purple-soft bold uppercase">My Companies</span>--}}
                                {{--</div>--}}
                                {{--<div class="actions">--}}


                                {{--<a href="{{url('company')}}/create" class="btn  green circle">--}}
                                {{--Create Company--}}
                                {{--</a>--}}
                                {{--<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">--}}
                                {{--<i class="fa fa-question"></i>--}}
                                {{--</a>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{----}}

                                <div class="portlet-body margin-bottom-20">
                                    <div class="row">
                                        {{--@include('layouts.backend.left-sidebar')--}}
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active in" id="tab_1_1_1 ">
                                                    <div class="convention">

                                                        @if($errors->any())
                                                            <div class="alert alert-danger">
                                                                <button class="close" data-close="alert"></button>
                                                                <ul>
                                                                @foreach($errors->all() as $error)
                                                                    <li>{{$error}}</li>
                                                                @endforeach
                                                                </ul>
                                                            </div>

                                                        @endif

                                                        @if(session()->get('status') != null)

                                                            <div class="alert alert-success">
                                                                <button class="close" data-close="alert"></button>
                                                                {{ session()->get('status') }}<br>
                                                            </div>
                                                        @endif





                                                        <div class="col-md-12">
                                                            <!-- BEGIN PROFILE SIDEBAR -->
                                                            <div class="profile-sidebar">
                                                                <!-- PORTLET MAIN -->
                                                                <div class="portlet light profile-sidebar-portlet ">
                                                                    <!-- SIDEBAR USERPIC -->
                                                                    <div class="profile-userpic">
                                                                        @if(@$user->avatar->filename)
                                                                            <img src="{{config('constants.base_url')}}/{{config('constants.user_avatar_large')}}{{@$user->avatar->filename}}" class="img-responsive" alt="">
                                                                        @else
                                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" class="img-responsive" alt="">
                                                                        @endif
                                                                    </div>

                                                                    <!-- END SIDEBAR USERPIC -->
                                                                    <!-- SIDEBAR USER TITLE -->
                                                                    <div class="profile-usertitle">
                                                                        <div class="profile-usertitle-name"> {{$user->first_name}} {{$user->last_name}} </div>
                                                                        {{--<div class="profile-usertitle-job"> Developer </div>--}}
                                                                    </div>
                                                                    {{--<!-- END SIDEBAR USER TITLE -->--}}
                                                                    {{--<!-- SIDEBAR BUTTONS -->--}}
                                                                    {{--<div class="profile-userbuttons">--}}
                                                                    {{--<button type="button" class="btn btn-circle green btn-sm">Follow</button>--}}
                                                                    {{--<button type="button" class="btn btn-circle red btn-sm">Message</button>--}}
                                                                    {{--</div>--}}
                                                                    {{--<!-- END SIDEBAR BUTTONS -->--}}
                                                                    {{--<!-- SIDEBAR MENU -->--}}
                                                                    {{--<div class="profile-usermenu">--}}
                                                                    {{--<ul class="nav">--}}
                                                                    {{--<li>--}}
                                                                    {{--<a href="page_user_profile_1.html">--}}
                                                                    {{--<i class="icon-home"></i> Overview </a>--}}
                                                                    {{--</li>--}}
                                                                    {{--<li class="active">--}}
                                                                    {{--<a href="page_user_profile_1_account.html">--}}
                                                                    {{--<i class="icon-settings"></i> Account Settings </a>--}}
                                                                    {{--</li>--}}
                                                                    {{--<li>--}}
                                                                    {{--<a href="page_user_profile_1_help.html">--}}
                                                                    {{--<i class="icon-info"></i> Help </a>--}}
                                                                    {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                    {{--</div>--}}
                                                                    {{--<!-- END MENU -->--}}



                                                                </div>
                                                                <!-- END PORTLET MAIN -->
                                                                <!-- PORTLET MAIN -->
                                                            {{--<div class="portlet light ">--}}
                                                            {{--<!-- STAT -->--}}
                                                            {{--<div class="row list-separated profile-stat">--}}
                                                            {{--<div class="col-md-4 col-sm-4 col-xs-6">--}}
                                                            {{--<div class="uppercase profile-stat-title"> 37 </div>--}}
                                                            {{--<div class="uppercase profile-stat-text"> Projects </div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-4 col-sm-4 col-xs-6">--}}
                                                            {{--<div class="uppercase profile-stat-title"> 51 </div>--}}
                                                            {{--<div class="uppercase profile-stat-text"> Tasks </div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-4 col-sm-4 col-xs-6">--}}
                                                            {{--<div class="uppercase profile-stat-title"> 61 </div>--}}
                                                            {{--<div class="uppercase profile-stat-text"> Uploads </div>--}}
                                                            {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<!-- END STAT -->--}}
                                                            {{--<div>--}}
                                                            {{--<h4 class="profile-desc-title">About Marcus Doe</h4>--}}
                                                            {{--<span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>--}}
                                                            {{--<div class="margin-top-20 profile-desc-link">--}}
                                                            {{--<i class="fa fa-globe"></i>--}}
                                                            {{--<a href="http://www.keenthemes.com">www.keenthemes.com</a>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="margin-top-20 profile-desc-link">--}}
                                                            {{--<i class="fa fa-twitter"></i>--}}
                                                            {{--<a href="http://www.twitter.com/keenthemes/">@keenthemes</a>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="margin-top-20 profile-desc-link">--}}
                                                            {{--<i class="fa fa-facebook"></i>--}}
                                                            {{--<a href="http://www.facebook.com/keenthemes/">keenthemes</a>--}}
                                                            {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--</div>--}}
                                                            <!-- END PORTLET MAIN -->
                                                            </div>
                                                            <!-- END BEGIN PROFILE SIDEBAR -->
                                                            <!-- BEGIN PROFILE CONTENT -->
                                                            <div class="profile-content">
                                                                <div class="row">
                                                                    {{--<form method="post" action="{{url('users')}}/{{$user->id}}" enctype="multipart/form-data">--}}
                                                                    {{--@csrf--}}
                                                                    {{--<input type="hidden" name="_method" value="PUT">--}}


                                                                    <div class="col-md-12">
                                                                        <div class="portlet light ">
                                                                            <div class="portlet-title tabbable-line">
                                                                                <div class="caption caption-md">
                                                                                    <i class="icon-globe theme-font hide"></i>
                                                                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                                                </div>
                                                                                <ul class="nav nav-tabs">
                                                                                    @php
                                                                                        if(!isset($active_tab))
                                                                                        {
                                                                                         $active_tab = 'tab_1_1';
                                                                                        }

                                                                                    @endphp
                                                                                    <li class=@if($active_tab == "tab_1_1" || $active_tab == "") "active" @endif>
                                                                                        <a href="#tab_1_1"  data-toggle="tab">Personal Details</a>
                                                                                    </li>
                                                                                    <li class=@if($active_tab == "tab_1_2") "active" @endif>
                                                                                        <a href="#tab_1_2" data-toggle="tab">Contact Details</a>
                                                                                    </li>


                                                                                    {{--<li class=@if($active_tab == "tab_1_3") "active" @endif>--}}
                                                                                    {{--<a href="#tab_1_3" data-toggle="tab">Employee Details</a>--}}
                                                                                    {{--</li>--}}
                                                                                    {{----}}

                                                                                    <li class=@if($active_tab == "tab_1_4") "active" @endif>
                                                                                        <a href="#tab_1_4" data-toggle="tab">Profile Photo</a>
                                                                                    </li>
                                                                                    @if(Auth::id() == @$id || Auth::user()->hasRole('admin'))
                                                                                        <li class="@if($active_tab == "tab_1_5") active @endif">
                                                                                            <a href="#tab_1_5" data-toggle="tab">Change Password</a>
                                                                                        </li>
                                                                                    @endif
                                                                                </ul>
                                                                            </div>
                                                                            <div class="portlet-body">
                                                                                <div class="tab-content">

                                                                                    <form method="post" action="{{url('users')}}/{{$user->id}}" enctype="multipart/form-data" class="tab-pane @if($active_tab == "tab_1_1" || $active_tab == "") active @endif" id="tab_1_1">
                                                                                        <div >

                                                                                            {{--@if(Auth::user()->hasRole('admin'))--}}
                                                                                            {{--<div class="form-group">--}}
                                                                                            {{--<div class="row">--}}
                                                                                            {{--<div class="col-md-6">--}}
                                                                                            {{--<label class="control-label col-md-4">Status</label>--}}
                                                                                            {{--<div class="col-md-8">--}}
                                                                                            {{--<div class="radio-list">--}}
                                                                                            {{--<label class="radio-inline"><input type="radio" name="status" value="1" @if(isset($user->status)){{checked($user->status,'1')}} @else checked @endif/> Active</label>--}}
                                                                                            {{--<label class="radio-inline"><input type="radio" name="status" value="0" @if(isset($user->status)){{checked($user->status,'0')}} @endif/> Deactive</label>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--@endif--}}
                                                                                            <h4 class="tab-title">Personal Details</h4>
                                                                                            <!--/row-->
                                                                                            <div class="form-group">
                                                                                                <div class="row">
                                                                                                    @csrf
                                                                                                    <input type="hidden" name="_method" value="PUT">

                                                                                                    <div class="col-md-12">
                                                                                                        <label class="control-label ">First Name</label>
                                                                                                        <div class="">
                                                                                                            <input type="text" class="form-control" value="@if(isset($user->first_name)){{$user->first_name}}@endif" name="first_name" pattern="^[A-Za-z\s]{1,191}$" title="Characters only" maxlength="191" placeholder="" required>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <label class="control-label ">Last Name</label>
                                                                                                        <div class="">
                                                                                                            <input type="text" class="form-control" value="@if(isset($user->last_name)){{$user->last_name}}@endif" name="last_name" pattern="^[A-Za-z\s]{1,191}$" title="Characters only" maxlength="191" placeholder="" required>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!--/row-->
                                                                                            <div class="form-group">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <label class="control-label">Gender</label>
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="radio-list">
                                                                                                                <label class="radio-inline"><input type="radio" name="gender" value="1" @if(isset($personal_detail->gender)){{checked($personal_detail->gender,'1')}} @else checked @endif/> Male</label>
                                                                                                                <label class="radio-inline"><input type="radio" name="gender" value="2" @if(isset($personal_detail->gender)){{checked($personal_detail->gender,'2')}} @endif/> Female</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--/row-->



                                                                                            <div class="form-group">
                                                                                                <div class="row">

                                                                                                    <div class="col-md-12">
                                                                                                        <label class="control-label ">Date of Birth  </label>
                                                                                                        <div class="">
                                                                                                            <input type="text" class="form-control date-picker" value="@if(isset($personal_detail->date_of_birth)){{$personal_detail->date_of_birth}}@endif" name="date_of_birth" placeholder="yyyy-mm-dd" data-date-format="yyyy-mm-dd" required> </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--/row-->


                                                                                            <div class="form-group">
                                                                                                <div class="row">

                                                                                                    <div class="col-md-12">
                                                                                                        <label class="control-label">Nationality</label>
                                                                                                        <div class="">
                                                                                                            <div class="wtSelect">
                                                                                                                <select class="form-control select2" name="nationality" required  >
                                                                                                                    <option value="" disabled selected>Please choose</option>
                                                                                                                    @foreach(get_countries_list() as $key => $value)
                                                                                                                        <option value="{{$key}}" @if(isset($personal_detail->nationality)){{ selected($key, $personal_detail->nationality) }} @endif >{{$value}}</option>
                                                                                                                    @endforeach
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6">
                                                                                                        <div class="col-md-offset-4 col-md-8">
                                                                                                            <input type="hidden" name="submit_Personal_detail" value="submitPersonalDetail">
                                                                                                            {{--<input type="hidden" name="active_tab" value="tab_1_1">--}}
                                                                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                                            <input name="_method" type="hidden" value="PUT" >
                                                                                                            <button type="submit" class="btn green" name="active_tab" value="tab_1_1">Submit</button>
                                                                                                            <button type="reset" class="btn default">Reset</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        {{--</form>--}}
                                                                                        <!-- END FORM-->
                                                                                        </div>
                                                                                    </form>
                                                                                    <!-- END PERSONAL DETAILS TAB -->
                                                                                    <!-- CONTACT DETAILS TAB -->
                                                                                    <form method="post" action="{{url('users')}}/{{$user->id}}" enctype="multipart/form-data" class="tab-pane @if($active_tab == "tab_1_2") active @endif" id="tab_1_2">
                                                                                        <div>
                                                                                            <h4 class="tab-title">Contact Details</h4>
                                                                                            <!-- BEGIN FORM-->
                                                                                            {{--<form action="{{config('constants.base_url')}}/users/{{$id}}" method="post" class="wt-form-groups">--}}
                                                                                            <div class="form-group">
                                                                                                <div class="row">
                                                                                                    @csrf
                                                                                                    <input type="hidden" name="_method" value="PUT">
                                                                                                    <div class="col-md-12">
                                                                                                        <label class="control-label">Phone</label>
                                                                                                        <div class="">
                                                                                                            <input type="number" class="form-control" value="@if(isset($contact_detail->phone)){{$contact_detail->phone}}@endif" name="phone" placeholder="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--/row-->


                                                                                            <div class="form-group">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <label class="control-label">Skype</label>
                                                                                                        <div class=" ">
                                                                                                            <input type="text" class="form-control" value="@if(isset($contact_detail->skype)){{$contact_detail->skype}}@endif" name="skype" placeholder="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <label class="control-label">Website</label>
                                                                                                        <div class=" ">
                                                                                                            <input type="text" data-type="url" class="form-control" value="@if(isset($contact_detail->website)){{$contact_detail->website}}@endif" name="website" placeholder="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                            <!--/row-->
                                                                                            {{--<div class="form-group">--}}
                                                                                            {{--<div class="row">--}}
                                                                                            {{--<div class="col-md-12">--}}
                                                                                            {{--<label class="control-label">Email</label>--}}
                                                                                            {{--<div class="">--}}
                                                                                            {{--<input type="email" class="form-control" name="email"   value="{{@$contact_detail->email}}">--}}
                                                                                            {{--</div>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--</div>--}}
                                                                                            <div class="form-group">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class=" ">
                                                                                                            <input type="hidden" name="submit_contact_detail" value="submitContactDetail">
                                                                                                            {{--<input type="hidden" name="active_tab" value="tab_1_2">--}}
                                                                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                                            <input name="_method" type="hidden" value="PUT" >
                                                                                                            <button type="submit" class="btn green" name="active_tab" value="tab_1_2">Submit</button>
                                                                                                            <button type="reset" class="btn default">Reset</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        {{--</form>--}}
                                                                                        <!-- END FORM-->
                                                                                        </div>
                                                                                    </form>
                                                                                    <!-- END CONTACT DETAILS TAB -->
                                                                                    <!-- EMPLOYEE DETAILS TAB -->
                                                                                    <form method="post" action="{{url('users')}}/{{$user->id}}" enctype="multipart/form-data" class="tab-pane @if($active_tab == "tab_1_3") active @endif" id="tab_1_3">
                                                                                        <div>
                                                                                            <h4 class="tab-title">Employee Details</h4>
                                                                                            <!-- BEGIN FORM-->
                                                                                        @if(Auth::user()->hasRole('admin'))
                                                                                            {{--<form action="{{config('constants.base_url')}}/users/{{$id}}" method="post" class="wt-form-groups">--}}

                                                                                            {{--<div class="form-group">--}}
                                                                                            {{--<div class="row">--}}
                                                                                            {{--<div class="col-md-6">--}}
                                                                                            {{--<label class="control-label col-md-4">User Role</label>--}}
                                                                                            {{--<div class="col-md-8">--}}
                                                                                            {{--<select class="form-control select2" name="role" data-placeholder="Please choose">--}}
                                                                                            {{--<option value="" disabled selected></option>--}}
                                                                                            {{--@foreach($roles as $role)--}}
                                                                                            {{--<option value="{{$role->id}}" @if(isset($user->roles[0]->id)){{ selected($role->id, $user->roles[0]->id) }} @endif>{{$role->name}}</option>--}}
                                                                                            {{--@endforeach--}}
                                                                                            {{--</select>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--<!--/row-->--}}
                                                                                            {{--<div class="form-group">--}}
                                                                                            {{--<div class="row">--}}
                                                                                            {{--<div class="col-md-6">--}}
                                                                                            {{--<div class="col-md-offset-4 col-md-8">--}}
                                                                                            {{--<input type="hidden" name="submit_employee_detail" value="submitEmployeeDetail">--}}
                                                                                            {{--<input type="hidden" name="active_tab" value="tab_1_3">--}}
                                                                                            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                                                                                            {{--<input name="_method" type="hidden" value="PUT" >--}}
                                                                                            {{--<button type="submit" class="btn green" name="active_tab" value="tab_1_3">Submit</button>--}}
                                                                                            {{--<button type="button" class="btn default">Cancel</button>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--</form>--}}
                                                                                            <!-- END FORM-->
                                                                                            @else
                                                                                                <form class="wt-form-groups">
                                                                                                    <div class="form-group">
                                                                                                        <div class="row">
                                                                                                            @csrf
                                                                                                            <input type="hidden" name="_method" value="PUT">
                                                                                                            <div class="col-md-6">
                                                                                                                <label class="control-label col-md-4">Department</label>
                                                                                                                <div class="col-md-8">
                                                                                                                    <label class="control-label"><strong>@if(isset($employee_detail->department)){{ $employee_detail->department->name }}@else __ @endif</strong></label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-6">
                                                                                                                <label class="control-label col-md-4">Designation</label>
                                                                                                                <div class="col-md-8">
                                                                                                                    <label class="control-label"><strong>@if(isset($employee_detail->designation)){{ $employee_detail->designation->name }}@else __ @endif</strong></label>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-6">
                                                                                                                <label class="control-label col-md-4">User Role</label>
                                                                                                                <div class="col-md-8">
                                                                                                                    <label class="control-label"><strong>@if(isset($user->roles[0])){{$user->roles[0]->name}}@endif</strong></label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    {{--<div class="form-group"></div>--}}
                                                                                                </form>
                                                                                            @endif
                                                                                        </div>
                                                                                    </form>
                                                                                    <!-- END EMPLOYEE DETAILS TAB -->
                                                                                    <!-- EMPLOYEE PHOTO TAB -->
                                                                                    <form method="post" action="{{url('users')}}/{{$user->id}}" enctype="multipart/form-data" class="tab-pane @if($active_tab == "tab_1_4")active @endif" id="tab_1_4">
                                                                                        <div>

                                                                                            <div class="form-group">
                                                                                                <div class="fileinput fileinput-@if(isset($user->avatar->filename)){{trim('exists')}}@else{{trim('new')}}@endif text-center" data-provides="fileinput" style="max-width:320px">
                                                                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/> </div>
                                                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                                                                                        <img src="{{config('constants.base_url')}}/{{config('constants.user_avatar_large')}}{{@$user->avatar->filename}}" alt="" />
                                                                                                    </div>
                                                                                                    <div>
                                                                                                <span class="btn default btn-file">
                                                                                                    <span class="fileinput-new"> Select image </span>
                                                                                                    <span class="fileinput-exists"> Change </span>
                                                                                                    <input type="file" name="user_profile_pic" accept="image/*" class="wt-image">
                                                                                                </span>
                                                                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput" onclick="return removeUserProfilePic(this)"> Remove </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                @csrf
                                                                                                <input type="hidden" name="_method" value="PUT">
                                                                                                <hr/>
                                                                                            </div>
                                                                                            <div class="margin-top-20">
                                                                                                <input type="hidden" name="existUserProfilePic" id="existUserProfilePic" value="0">
                                                                                                <button type="submit" class="btn green"  name="active_tab" value="tab_1_4">Submit</button>
                                                                                                <button type="reset" class="btn default">Reset</button>
                                                                                            </div><br/>





















                                                                                        </div>
                                                                                    </form>
                                                                                    <!-- END EMPLOYEE PHOTO TAB -->
                                                                                @if(Auth::user()->id == @$id || Auth::user()->hasRole('admin'))
                                                                                    <!-- CHANGE PASSWORD TAB -->
                                                                                        <form method="post" action="{{url('users')}}/{{$user->id}}" enctype="multipart/form-data" class="tab-pane @if($active_tab == "tab_1_5") active @endif" id="tab_1_5">
                                                                                            <div>
                                                                                                <h4 class="tab-title">Change Password</h4>
                                                                                                <!-- BEGIN FORM-->
                                                                                                {{--<form action="{{config('constants.base_url')}}/users/{{$id}}" method="post" id="password-form" class="wt-form-groups">--}}
                                                                                                @if(!Auth::User()->hasRole('admin'))
                                                                                                    <div class="form-group">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12">
                                                                                                                <label class="control-label  ">Current Password</label>
                                                                                                                <div class=" " >
                                                                                                                    <input type="password" class="form-control" name="current_password" placeholder="" required>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                            @endif
                                                                                            <!--/row-->
                                                                                                <div class="form-group">
                                                                                                    <div class="row">
                                                                                                        @csrf
                                                                                                        <input type="hidden" name="_method" value="PUT">
                                                                                                        <div class="col-md-12">
                                                                                                            <label class="control-label  ">New Password</label>
                                                                                                            <div class=" ">
                                                                                                                <input type="password" class="form-control new-password"  title="Should have at least one uppercase letter,lower case letter,numeric value and, special character. Must be more than 6 characters long." name="new_password" placeholder="" required>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12">
                                                                                                            <label class="control-label ">Confirm Password</label>
                                                                                                            <div class="  password-error">
                                                                                                                <input type="password" class="form-control confirm-password" title="Should have at least one uppercase letter,lower case letter,numeric value and, special character. Must be more than 6 characters long." name="confirm_password" placeholder="" required>
                                                                                                                <span class="help-block" style="display: none">
                                                                                                                Password doesn't match.
                                                                                                            </span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="col-md-offset-4 ">
                                                                                                                <input type="hidden" name="submit_change_password" value="submitChangePassword">
                                                                                                                {{--<input type="hidden" name="active_tab" value="tab_1_5">--}}
                                                                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                                                <input name="_method" type="hidden" value="PUT" >
                                                                                                                <button type="submit" class="btn green submit-password" name="active_tab" value="tab_1_5">Submit</button>
                                                                                                                <button type="reset" class="btn default">Reset</button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            {{--</form>--}}
                                                                                            <!-- END FORM-->
                                                                                            </div>
                                                                                            <!-- END CHANGE PASSWORD TAB -->
                                                                                        </form>
                                                                                    @endif


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{--</form>--}}
                                                                </div>
                                                            </div>
                                                            <!-- END PROFILE CONTENT -->
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
                </div>
                <!-- END PAGE CONTENT INNER -->
            </div>
        </div>
        <!-- END PAGE CONTENT BODY -->
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
@endsection