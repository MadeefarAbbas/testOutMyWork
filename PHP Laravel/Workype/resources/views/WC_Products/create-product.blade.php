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
                                        <span class="caption-subject font-purple-soft bold uppercase"> {{$company_obj->name}} - Add Product  </span>
                                    </div>
                                    {{--<div class="actions">--}}
                                        {{--<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">--}}
                                            {{--<i class="fa fa-question"></i>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="portlet-body margin-bottom-20">
                                    <div class="row">
                                      @include('layouts.backend.left-sidebar')
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active in" id="tab_1_1">

                                                    @if($errors->any())
                                                        <div class="alert alert-danger">
                                                            <button class="close" data-close="alert"></button>
                                                            @foreach($errors->all() as $error)
                                                                {{$error}}<br>
                                                            @endforeach

                                                        </div>

                                                    @endif


                                                        <form method="post" action="{{config('constants.base_url')}}/company/{{$company_obj->id}}/products" enctype="multipart/form-data">
                                                        @csrf

                                                                <div class="col-md-9">
                                                                    <div class="form-group">
                                                                        <label>Title</label>
                                                                        <input type="hidden" name="fk_company_id" value="{{$company_obj->id}}">
                                                                        <input name="title" type="text" class="form-control" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Overview</label>
                                                                        <textarea name="overview" class="form-control auto-expand " required></textarea>
                                                                    </div>


                                                                   <div class="features margin-top-20">
                                                                       <h4>Features </h4>
                                                                       <hr class="no-margin">
                                                                       <div wt-paste="field" class="margin-top-20">

                                                                           <div class="clearfix"></div>

                                                                           <input  type="text" class="form-control col-md-12 margin-bottom-10" style="width:100%;" name="features[]">
                                                                       </div>


                                                                       <div class="pull-right">
                                                                           <a href="javascript:;" wt-more="field" class="btn btn-primary ">+Add More</a>
                                                                       </div>
                                                                       <div class="clearfix"></div>
                                                                   </div>


                                                                    <div class="benefits">
                                                                        <h4>Benefits </h4>
                                                                        <hr class="no-margin">

                                                                        <div wt-paste="benefits" class="margin-top-20">

                                                                            <div class="clearfix"></div>

                                                                            <input  type="text" class="form-control col-md-12 margin-bottom-10" style="width:100%;" name="benefits[]">

                                                                        </div>
                                                                        <div class="pull-right">
                                                                            <a href="javascript:;" wt-more="benefits" class="btn btn-primary ">+Add More</a></a>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>

                                                                </div>




                                                        <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <div class="fileinput text-center fileinput-new" data-provides="fileinput" style="max-
width:320px">
                                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                                                            </div>
                                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-
height: 150px; line-height: 150px;"></div>
                                                                            <div>
                                                                            <span class="btn default btn-file">
                                                                                <span class="fileinput-new"> Select image </span>
                                                                                <span class="fileinput-exists"> Change </span>

                                                                                <input type="file" name="product_logo_image" accept="image/*" class="wt-image">
                                                                            </span>
                                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"
                                                                                   onclick="" target="_blank"> Remove </a>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="margin-top-20">
                                                                        <!--<input type="hidden" name="existEmployeePic" id="existEmployeePic" value="1">
                                                                        <input type="hidden" name="_token" value="YXNpk1Nj7Zv4KoayN20uF1OfVl5mFsmXwYD7GBOS">
                                                                        <input name="_method" type="hidden" value="PUT">
                                                                        <input type="hidden" name="submit_product_logo_image" value="submit_product_logo_image">-->


                                                                    </div><br>
                                                                </div>



                                                        <div class="clearfix"></div>




                                                        <div class=" col-md-12 gallery_images margin-top-20 ">
                                                            <h4>Gallery Images </h4>
                                                            <hr class="no-margin">

                                                            <div class="form-group padding-tb-20">

                                                                <input type="file" name="gallery_images[]" multiple>
                                                            </div>


                                                        </div>




                                                        <hr/>
                                                        <div class=" col-md-12 form-actions pull-left">
                                                            <button type="submit" class="btn btn-success uppercase ">Submit</button>
                                                            <button type="reset" class="btn btn-default uppercase ">Reset</button>
                                                        </div>




                                                    </form>


                                                    <div wt-copy="field" style="display:none; ">
                                                        <div wt-duplicate="field" class="margin-top-10">
                                                            <input  type="text" class="form-control col-md-10 margin-bottom-10" style="width:90%;" name="features[]">
                                                            <p class="trash_style">
                                                                <a href="javascript:;" wt-delete="field"><i class=" trash_inner margin-top-10  fa fa-trash fa-lg" ></i></a>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div wt-copy="benefits" style="display:none; ">
                                                        <div wt-duplicate="benefits" class="margin-top-10">
                                                            <input  type="text" class="form-control col-md-10 margin-bottom-10" style="width:90%;" name="benefits[]">
                                                            <p class="trash_style">
                                                                <a href="javascript:;" wt-delete="field"><i class=" trash_inner margin-top-10  fa fa-trash fa-lg" ></i></a>
                                                            </p>
                                                        </div>
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