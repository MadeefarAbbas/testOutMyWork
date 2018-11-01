@extends('layouts.backend')
@section('content')
    <!-- BEGIN CONTAINER -->
    {{--{{dd($post_obj->title)}}--}}
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

                                        <span class="caption-subject font-purple-soft bold uppercase"> {{$company_obj->name}} - Posts  </span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn green circle " href="{{url('company')}}/{{$company_obj->id}}/posts/create">+Add Company Post</a>
                                        {{--<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">--}}
                                            {{--<i class="fa fa-question"></i>--}}
                                        {{--</a>--}}
                                    </div>
                                </div>
                                <div class="portlet-body margin-bottom-20">
                                    <div class="row">
                                        @include('layouts.backend.left-sidebar')
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active in" id="tab_1_1">

                                                    @if(session()->get('status') != null)
                                                        <div class="alert alert-success">
                                                            <button class="close" data-close="alert"></button>
                                                            {{ session()->get('status') }}<br>
                                                        </div>
                                                    @endif

                                                        @include('flash::message')

                                                    <div class="portlet-body bg-white margin-bottom-20">
                                                        <div class="mt-element-list">
                                                            <div class="mt-list-head list-news ext-1 font-white bg-green">
                                                                <div class="list-head-title-container">
                                                                    <h3 class="list-title">Posts</h3>
                                                                </div>
                                                            </div>
                                                            <div class="mt-list-container list-news ext-1">
                                                                @if($post_obj)

                                                                <ul>
                                                                    @php
                                                                        $flag = 0;
                                                                    @endphp
                                                                    @foreach($post_obj as $post)
                                                                        @php
                                                                            $flag = 1;
                                                                        @endphp
                                                                        <li class="mt-list-item">
                                                                        <div class="list-icon-container">


                                                                            <a href="{{url('company')}}/{{@$company_obj->id}}/posts/{{$post->id}}/edit">
                                                                                <i class="fa fa-angle-right"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="list-thumb">
                                                                           @if(@$post->post_image->filename)
                                                                            <a href="javascript:;">
                                                                                <img alt=""  src="{{config('constants.base_url')}}/{{config('constants.post_logo_image_large')}}{{@$post->post_image->filename}}">


                                                                            @else
                                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" style="width:80px; height: 80px;" />
                                                                            @endif
                                                                            </a>





                                                                                <div class="clearfix"></div>
                                                                                <div class="actions">
                                                                                    <a href="{{url('company')}}/{{$company_obj->id}}/posts/{{$post->id}}/edit">
                                                                                        <i class="fa fa-edit fa-lg  margin-top-10" style="color:#0abc0a;"></i>
                                                                                    </a>
                                                                                    <a  href="{{url('company')}}/{{$company_obj->id}}/posts/{{$post->id}}/delete" class="sure-to-delete">
                                                                                        <i class="fa fa-trash fa-lg margin-top-10 pull-right" style="color: #e73d4a"> </i>
                                                                                    </a>

                                                                                </div>

                                                                                <div class="clearfix"></div>




                                                                        </div>

                                                                        <div class="col-xs-6 col-sm-5 pull-right">
                                                                            <div class="col-xs-6">
                                                                                <a href="javascript:;" class="pull-right">
                                                                                    <img alt="" class="img-responsive" src="assets/global/img/portfolio/600x600/3.jpg">
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-xs-6">
                                                                                <a href="javascript:;" class="pull-right">
                                                                                    <img alt="" class="img-responsive" src="assets/global/img/portfolio/600x600/3.jpg">
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="list-datetime bold uppercase font-dark"> {{$post->created_at}}   </div>
                                                                        <div class="list-item-content">
                                                                            <h3 class="uppercase">

                                                                                <a href="{{url('company')}}/{{@$company_obj->id}}/posts/{{$post->id}}/edit">
                                                                                    {{$post->title}}
                                                                                </a>
                                                                            </h3>

                                                                            <p>{{$post->description}}</p>
                                                                        </div>
                                                                    </li>
                                                                        @endforeach

                                                                </ul>
                                                                @endif
                                                                @if($flag == 0)
                                                                    <div class="padding-tb-20" style="padding-left: 10px;">No any post found.</div></li>
                                                                @endif
                                                            </div>
                                                        </div>

                                                            <center>
                                                                {{@$post_obj->render()}}
                                                            </center>

                                                    </div>

                                                </div>
                                                <!--
                                                <hr/>
                                                <div class="form-actions text-center">
                                                    <button type="button" class="btn btn-default uppercase ">Cancel</button>
                                                    <button type="submit" class="btn btn-success uppercase ">Submit</button>
                                                </div>
                                                -->

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