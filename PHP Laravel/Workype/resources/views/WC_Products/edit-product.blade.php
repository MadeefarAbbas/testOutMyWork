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
                                        <span class="caption-subject font-purple-soft bold uppercase"> {{$company_obj->name}} - Edit Product ({{$company_product_obj->title}})  </span>
                                    </div>
                                    <div class="actions">

                                        <a class="btn green circle" href="{{url('company')}}/{{$company_obj->id}}/products/{{$company_product_obj->id}}">
                                            View product
                                        </a>

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
                                                    @if($errors->any())
                                                        <div class="alert alert-danger">
                                                            <button class="close" data-close="alert"></button>
                                                            @foreach($errors->all() as $error)
                                                                {{$error}}<br>
                                                            @endforeach

                                                        </div>

                                                    @endif

                                                        @if(session()->get('status') != null)
                                                            <div class="col-md-12 alert alert-success">
                                                                <button class="close" data-close="alert"></button>
                                                                {{ session()->get('status') }}<br>
                                                            </div>
                                                        @endif

                                                        @include('flash::message')



                                                        <form method="post" action="{{config('constants.base_url')}}/company/{{$company_obj->id}}/products/{{$company_product_obj->id}}" enctype="multipart/form-data">
                                                        @csrf
                                                            <input type="hidden" name="_method" value="PUT">

                                                                <div class="col-md-9">
                                                                    <div class="form-group">
                                                                        <label>Title</label>
                                                                        <input type="hidden" name="fk_company_id" value="{{$company_obj->id}}">
                                                                        <input name="title" type="text" class="form-control"  value="{{$company_product_obj->title}}" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Overview</label>
                                                                        <textarea name="overview" class="form-control" required>{{$company_product_obj->overview}}</textarea>
                                                                    </div>


                                                                   <div class="features margin-top-20">
                                                                       <h4>Features </h4>
                                                                       <hr class="no-margin">
                                                                       <div wt-paste="field" class="margin-top-20">

                                                                           <div class="clearfix"></div>
                                                                           @php $features = json_decode($company_product_obj->features); @endphp
                                                                           @if($features)
                                                                               @foreach($features as $feature)
                                                                                   <div wt-duplicate="field" class="margin-top-10">
                                                                                        <input  type="text" class="form-control col-md-10 margin-bottom-10" style="width:93%;" name="features[]" value="{{$feature}}">
                                                                                       <p class="trash_style">
                                                                                           <a href="javascript:;" wt-delete="field"><i class=" trash_inner margin-top-10  fa fa-trash fa-lg" ></i></a>
                                                                                       </p>                                                                                       <div class="clearfix"></div>
                                                                                   </div>
                                                                               @endforeach
                                                                          @endif

                                                                       </div>
                                                                       <div class="pull-right">
                                                                           <a href="javascript:;" wt-more="field" class="btn btn-primary " style="margin-right: 10px;">+Add More</a>
                                                                       </div>
                                                                       <div class="clearfix"></div>
                                                                   </div>

                                                                    <div class="benefits margin-top-20">
                                                                        <h4>Benefits</h4>
                                                                        <hr class="no-margin">

                                                                        <div wt-paste="benefits" class="margin-top-20">

                                                                            <div class="clearfix"></div>

                                                                            @php $benefits = json_decode($company_product_obj->benefits);  @endphp
                                                                            @if($benefits)
                                                                                @foreach($benefits as $benefit)
                                                                                    <div wt-duplicate="benefits" class="margin-top-10">
                                                                                        <input  type="text" class="form-control col-md-10 margin-bottom-10" style="width:93%;" name="benefits[]" value="{{$benefit}}">
                                                                                        <p class="trash_style">
                                                                                            <a href="javascript:;" wt-delete="benefits"><i class=" trash_inner margin-top-10  fa fa-trash fa-lg" ></i></a>
                                                                                        </p>                                                                                        <div class="clearfix"></div>
                                                                                    </div>
                                                                                @endforeach
                                                                            @endif
                                                                        </div>

                                                                        <div class="pull-right">
                                                                            <a href="javascript:;" wt-more="benefits" class="btn btn-primary " style="margin-right: 10px;">+Add More</a></a>
                                                                        </div>
                                                                        <div class="clearfix"></div>

                                                                    </div>
                                                                </div>

                                                        <div class="col-md-3">


                                                            <div class="form-group">
                                                                <div class="fileinput fileinput-@if(isset($company_product_obj->product_image->filename)){{trim('exists')}}@else{{trim('new')}}@endif text-center" data-provides="fileinput" style="max-width:320px">
                                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/> </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                                                        <img src="@if (isset($company_product_obj->product_image->filename)) {{config('constants.base_url')."/uploads/company-products/product-image/large/".$company_product_obj->product_image->filename}}@endif" alt="" />
                                                                    </div>
                                                                    <div>
                                                                            <span class="btn default btn-file">
                                                                                <span class="fileinput-new"> Select image </span>
                                                                                <span class="fileinput-exists"> Change </span>
                                                                                <input type="file" name="product_logo_image" accept="image/*" class="wt-image">
                                                                            </span>
                                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput" onclick="return removeCompanyProductPic(this)"> Remove </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="margin-top-20">
                                                                <input type="hidden" name="existCompanyProductPic" id="existCompanyProductPic" value="0">

                                                            </div><br/>

                                                       </div>


                                                        <div class="clearfix"></div>






                                                        <div class="col-md-12 gallery_images margin-top-20 ">
                                                            <h4>Gallery Images </h4>
                                                            <hr class="no-margin">

                                                            @if($company_product_obj->product_gallery())

                                                                <div class=" margin-top-10  convention">
                                                                    <!-- .row -->
                                                                    <div class="row">
                                                                        @foreach($company_product_obj->product_gallery as $image_obj)
                                                                            <div class="col-xs-6 col-sm-4 col-md-3">
                                                                            <div class="mt-element-overlay">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="mt-overlay-3">
                                                                                            <a class="btn-popup-image" data-title="{{$image_obj->filename}}" data-url="{{config('constants.base_url')}}/uploads/company-products/gallery/{{$image_obj->filename}}"  data-toggle="modal" data-target=".company-item-popup">
                                                                                                <img src="{{config('constants.base_url')}}/uploads/company-products/gallery/large/{{$image_obj->filename}}" class="img-responsive">
                                                                                                {{--<div class="mt-overlay">--}}
                                                                                                {{--<h2>Webicosoft1</h2>--}}
                                                                                                {{--<a class="mt-info" href="http://localhost/workype/company/1/edit">Learn More</a>--}}
                                                                                                {{--</div>--}}
                                                                                            </a>

                                                                                                <p class="trash_style" style="margin-top: 10px">
                                                                                                    <a href="{{url('company')}}/{{$company_obj->id}}/products/{{$company_product_obj->id}}/media/{{$image_obj->id}}/delete" class="sure-to-delete"><i class=" trash_inner margin-top-10  fa fa-trash fa-lg" style="margin-right: 7px" ></i></a>
                                                                                                </p>



                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                    <!-- /.row -->

                                                                </div>



                                                                <!--  Modal content for the mixer image example -->
                                                                <div class="modal fade company-item-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-1" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">

                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                <h4 id="gallery-popup-image-title" class="modal-title" id="myLargeModalLabel-1"></h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <img id="company-item-image-popup" src="" class="img-responsive img-rounded center-block" alt="">
                                                                            </div>
                                                                        </div><!-- /.modal-content -->
                                                                    </div><!-- /.modal-dialog -->
                                                                </div><!-- /.modal mixer image -->

                                                            @endif



                                                            <div class="form-group padding-tb-20">

                                                                <input type="file" name="gallery_images[]" multiple>
                                                            </div>


                                                        </div>




                                                        <hr/>
                                                        <div class="form-actions col-md-12 pull-left">
                                                            <button type="submit" class="btn btn-success uppercase ">Submit</button>
                                                            <a href="{{url('company')}}/{{$company_obj->id}}/products" class="btn btn-default uppercase ">Cancel</a>

                                                        </div>




                                                    </form>


                                                    <div wt-copy="field" style="display:none; ">
                                                        <div wt-duplicate="field" class="margin-top-10">
                                                            <input  type="text" class="form-control col-md-10 margin-bottom-10" style="width:93%;" name="features[]">
                                                            <p class="trash_style">
                                                                <a href="javascript:;" wt-delete="field"><i class=" trash_inner margin-top-10  fa fa-trash fa-lg" ></i></a>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div wt-copy="benefits" style="display:none; ">
                                                        <div wt-duplicate="benefits" class="margin-top-10">
                                                            <input  type="text" class="form-control col-md-10 margin-bottom-10" style="width:93%;" name="benefits[]">
                                                            <p class="trash_style">
                                                                <a href="javascript:;" wt-delete="benefits"><i class=" trash_inner margin-top-10  fa fa-trash fa-lg" ></i></a>
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