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
                                        <span class="caption-subject font-purple-soft bold uppercase"> {{@$company_obj->name}}
                                            - Edit Post  </span>
                                    </div>
                                    {{--<div class="actions">--}}
                                        {{--<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">--}}
                                            {{--<i class="fa fa-question"></i>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    <div class="actions">
                                        <a class="btn green circle" href="{{url('company')}}/{{$company_obj->id}}/posts/{{$company_post_obj->id}}">
                                            View Post
                                        </a>
                                    </div>

                                </div>
                                <div class="portlet-body margin-bottom-20">
                                    <div class="row">
                                        @include('layouts.backend.left-sidebar')
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active in" id="tab_1_1">

                                                    @if(session()->get('status') != null)
                                                        <div class="col-md-12 alert alert-success">
                                                            <button class="close" data-close="alert"></button>
                                                            {{ session()->get('status') }}<br>
                                                        </div>
                                                    @endif
                                                        @include('flash::message')


                                                    @if($errors->any())
                                                        <div class="alert alert-danger">
                                                            <button class="close" data-close="alert"></button>
                                                            @foreach($errors->all() as $error)
                                                                {{$error}}<br>
                                                            @endforeach

                                                        </div>

                                                    @endif

                                                    <form method="post" action="{{config('constants.base_url')}}/company/{{@$company_obj->id}}/posts/{{@$company_post_obj->id}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="PUT">
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label>Title</label>

                                                                <input name="title" type="text"
                                                                       value="{{@$company_post_obj->title}}"
                                                                       class="form-control" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                                <textarea name="description"  rows="5" class="form-control" required>{{@$company_post_obj->description}}</textarea>
                                                            </div>


                                                        </div>


                                                       <div>

                                                           <div class="col-md-3">


                                                               <div class="form-group">
                                                                   <div class="fileinput fileinput-@if(isset($company_post_obj->post_image->filename)){{trim('exists')}}@else{{trim('new')}}@endif text-center" data-provides="fileinput" style="max-width:320px">
                                                                       <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                           <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/> </div>
                                                                       <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                                                           <img src="{{config('constants.base_url')}}/{{config('constants.post_logo_image_large')}}{{@$company_post_obj->post_image->filename}}" alt="" />
                                                                       </div>
                                                                       <div>
                                                                            <span class="btn default btn-file">
                                                                                <span class="fileinput-new"> Select image </span>
                                                                                <span class="fileinput-exists"> Change </span>
                                                                                <input type="file" name="post_logo_image" accept="image/*" class="wt-image">
                                                                            </span>
                                                                           <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput" onclick="return removeCompanyPostPic(this)"> Remove </a>
                                                                       </div>
                                                                   </div>

                                                               </div>
                                                               <div class="margin-top-20">
                                                                   <input type="hidden" name="existCompanyPostPic" id="existCompanyPostPic" value="0">

                                                               </div><br/>

                                                           </div>


                                                        {{--<div class="col-md-3">--}}
                                                            {{--<div class="form-group">--}}
                                                                {{--<div class="fileinput text-center fileinput-new"--}}
                                                                     {{--data-provides="fileinput" style="max---}}
{{--width:320px">--}}
                                                                    {{--<div class="fileinput-new thumbnail"--}}
                                                                         {{--style="width: 200px; height: 150px;">--}}
                                                                        {{--<img src="{{config('constants.base_url')}}/{{config('constants.post_logo_image_large')}}{{@$company_post_obj->post_image->filename}}" alt="">--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="fileinput-preview fileinput-exists thumbnail"--}}
                                                                         {{--style="max-width: 200px; max---}}
{{--height: 150px; line-height: 150px;"></div>--}}
                                                                    {{--<div>--}}
                                                                            {{--<span class="btn default btn-file">--}}
                                                                                {{--<span class="fileinput-new"> Select image </span>--}}
                                                                                {{--<span class="fileinput-exists"> Change </span>--}}

                                                                                {{--<input type="file"--}}
                                                                                       {{--name="post_logo_image"--}}
                                                                                       {{--accept="image/*"--}}
                                                                                       {{--class="wt-image">--}}
                                                                            {{--</span>--}}
                                                                        {{--<a href="javascript:;"--}}
                                                                           {{--class="btn default fileinput-exists"--}}
                                                                           {{--data-dismiss="fileinput"--}}
                                                                           {{--onclick="" target="_blank"> Remove </a>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}

                                                            {{--</div>--}}
                                                            {{--<div class="margin-top-20">--}}
                                                                {{--<!--<input type="hidden" name="existEmployeePic" id="existEmployeePic" value="1">--}}
                                                                {{--<input type="hidden" name="_token" value="YXNpk1Nj7Zv4KoayN20uF1OfVl5mFsmXwYD7GBOS">--}}
                                                                {{--<input name="_method" type="hidden" value="PUT">--}}
                                                                {{--<input type="hidden" name="submit_product_logo_image" value="submit_product_logo_image">-->--}}


                                                            {{--</div>--}}
                                                            {{--<br>--}}
                                                        {{--</div>--}}
                                                       </div>


                                                        <div class="clearfix"></div>

                                                        <div class="col-md-12 gallery_images margin-top-20 ">
                                                            <h4>Gallery Images </h4>
                                                            <hr class="no-margin">

                                                            @if(@$company_post_obj->post_gallary_image)

                                                                <div class=" margin-top-10  convention">
                                                                    <!-- .row -->
                                                                    <div class="row">
                                                                        @foreach($company_post_obj->post_gallary_image as $image_obj)
                                                                            <div class="col-xs-6 col-sm-4 col-md-3">
                                                                                <div class="mt-element-overlay">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="mt-overlay-3">
                                                                                                <a class="btn-popup-image"
                                                                                                   data-title="{{@$image_obj->filename}}"
                                                                                                   data-url="{{config('constants.base_url')}}/{{config('constants.post_gallary_image')}}{{@$image_obj->filename}}"
                                                                                                   data-toggle="modal"
                                                                                                   data-target=".company-item-popup">
                                                                                                    <img src="{{config('constants.base_url')}}/{{config('constants.post_gallary_image_large')}}{{@$image_obj->filename}}"
                                                                                                         class="img-responsive">
                                                                                                    {{--<div class="mt-overlay">--}}
                                                                                                    {{--<h2>Webicosoft1</h2>--}}
                                                                                                    {{--<a class="mt-info" href="http://localhost/workype/company/1/edit">Learn More</a>--}}
                                                                                                    {{--</div>--}}
                                                                                                </a>

                                                                                                <a class="sure-to-delete" href="{{url('company')}}/{{$company_obj->id}}/posts/{{$company_post_obj->id}}/media/{{$image_obj->id}}/delete">
                                                                                                    <i   class="fa fa-trash fa-lg" style=" border: 2px solid #32c5d2; background-color: white; border-radius: 50px; padding: 10px; color:black; position: absolute; top: 0; right: 0;"></i>

                                                                                                </a>

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
                                                                <div class="modal fade company-item-popup"
                                                                     tabindex="-1" role="dialog"
                                                                     aria-labelledby="myLargeModalLabel-1"
                                                                     aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">

                                                                            <div class="modal-header">
                                                                                <button type="button" class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-hidden="true">×
                                                                                </button>
                                                                                <h4 id="gallery-popup-image-title"
                                                                                    class="modal-title"
                                                                                    id="myLargeModalLabel-1"></h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <img id="company-item-image-popup"
                                                                                     src=""
                                                                                     class="img-responsive img-rounded center-block"
                                                                                     alt="">
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

                                                            <button type="submit" class="btn btn-success uppercase ">
                                                                Submit
                                                            </button>
                                                            <a href="{{url('company')}}/{{$company_obj->id}}/posts" class="btn btn-default uppercase ">
                                                                Cancel
                                                            </a>
                                                        </div>


                                                    </form>


                                                    <div wt-copy="field" style="display:none; ">
                                                        <div wt-duplicate="field" class="margin-top-10">
                                                            <input type="text"
                                                                   class="form-control col-md-10 margin-bottom-10"
                                                                   style="width:95%;" name="features[]">
                                                            <a href="javascript:;" wt-delete="field"><i
                                                                        class="margin-top-10 margin-bottom-10 margin-left-5 fa fa-trash fa-lg"></i></a>

                                                        </div>
                                                    </div>

                                                    <div wt-copy="benefits" style="display:none; ">
                                                        <div wt-duplicate="benefits" class="margin-top-10">
                                                            <input type="text"
                                                                   class="form-control col-md-10 margin-bottom-10"
                                                                   style="width:95%;" name="benefits[]">
                                                            <a href="javascript:;" wt-delete="benefits"><i
                                                                        class="margin-top-10 margin-bottom-10 margin-left-5 fa fa-trash fa-lg"></i></a>

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