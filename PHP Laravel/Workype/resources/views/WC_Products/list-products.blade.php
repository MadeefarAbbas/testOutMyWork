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
                                        <span class="caption-subject font-purple-soft bold uppercase"> {{$company_obj->name}} - Products  </span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn green circle " href="{{url('company')}}/{{$company_obj->id}}/products/create">+Add Company Product</a>
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
                                                                    <h3 class="list-title">Products</h3>
                                                                </div>
                                                            </div>
                                                            <div class="mt-list-container list-news ext-1">
                                                                @if($company_products_obj)

                                                                <ul>
                                                                    @php
                                                                        $flag = 0;
                                                                    @endphp
                                                                    @foreach($company_products_obj as $company_product_obj)
                                                                        @php
                                                                            $flag = 1;
                                                                        @endphp
                                                                        <li class="mt-list-item">
                                                                        <div class="list-icon-container">
                                                                            <a href="{{url('company')}}/{{$company_obj->id}}/products/{{$company_product_obj->id}}/edit">
                                                                                <i class="fa fa-angle-right"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="list-thumb">
                                                                            <div>
                                                                                <a href="javascript:;">
                                                                                    @if(@$company_product_obj->product_image->filename)
                                                                                        <img alt=""  src="{{config('constants.base_url')}}/uploads/company-products/product-image/large/{{@$company_product_obj->product_image->filename}}">
                                                                                    @else
                                                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" style="width:80px; height: 80px;" />
                                                                                    @endif
                                                                                </a>

                                                                                <div class="clearfix"></div>
                                                                                <div class="actions">
                                                                                    <a href="{{url('company')}}/{{$company_obj->id}}/products/{{$company_product_obj->id}}/edit">
                                                                                        <i class="fa fa-edit fa-lg  margin-top-10" style="color:#0abc0a;"></i>
                                                                                    </a>
                                                                                    <a href="{{url('company')}}/{{$company_obj->id}}/products/{{$company_product_obj->id}}/delete">
                                                                                        <i class="fa fa-trash sure-to-delete fa-lg margin-top-10 pull-right" style="color: #e73d4a"> </i>
                                                                                    </a>

                                                                                </div>

                                                                                <div class="clearfix"></div>
                                                                            </div>


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

                                                                        <div class="list-datetime bold uppercase font-dark"> {{$company_product_obj->created_at}}   </div>
                                                                        <div class="list-item-content">
                                                                            <h3 class="uppercase">
                                                                                <a href="{{url('company')}}/{{$company_obj->id}}/products/{{$company_product_obj->id}}">{{$company_product_obj->title}}</a>
                                                                            </h3>
                                                                            <p>{{$company_product_obj->overview}}</p>
                                                                        </div>
                                                                    </li>
                                                                        @endforeach

                                                                </ul>
                                                                @endif
                                                                @if($flag == 0)
                                                                    <div class="padding-tb-20" style="padding-left:10px;">No any company product found.</div></li>


                                                                @endif
                                                            </div>
                                                        </div>
                                                        <center>
                                                        {{@$company_products_obj->render()}}
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