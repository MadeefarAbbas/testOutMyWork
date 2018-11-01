@extends('layouts.backend')
@section('content')
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
                        <div class="company-details">
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="portlet light border border-grey">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-social-dribbble font-purple-soft"></i>
                                                <span class="caption-subject font-purple-soft bold uppercase">{{@$company_obj->name}}</span>
                                            </div>
                                            {{--<div class="actions">--}}
                                                {{--<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">--}}
                                                    {{--<i class="fa fa-question"></i>--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                        </div>
                                        <div class="portlet-body margin-bottom-20">
                                            <ul class="nav nav-tabs">
                                                <li class="<?php if(!isset($_GET['product_id']) && !isset($_GET['post_id'])) echo 'active';?>">
                                                    <a href="#tab_1_1" data-toggle="tab" aria-expanded="true"> Company </a>
                                                </li>
                                                <li class="<?php if(isset($_GET['product_id'])) echo 'active';?>">
                                                    <a href="#tab_1_2" data-toggle="tab" aria-expanded="false"> Products </a>
                                                </li>

                                                <li class="<?php if(isset($_GET['post_id'])) echo 'active';?>">
                                                    <a href="#tab_1_2_1" data-toggle="tab" aria-expanded="false"> Posts </a>
                                                </li>

                                                <li class="">
                                                    <a href="#tab_1_3" data-toggle="tab" aria-expanded="false"> Technology </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_1_4" data-toggle="tab"> Convention </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_1_5" data-toggle="tab"> Contact </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade <?php if(!isset($_GET['product_id']) && !isset($_GET['post_id'])) echo 'active';?> in" id="tab_1_1">
                                                    <div class="well">
                                                        <h3>
                                                            @if(@$company_obj->company_image->filename)
                                                                <img style="width: 60px; margin-top:-5px;" src="{{config('constants.base_url')}}/{{config('constants.company_logo_large').@$company_obj->company_image->filename}}">
                                                            @endif
                                                                {{$company_obj->name}}
                                                        </h3>
                                                        <p>{{$company_obj->description}}</p>
                                                        <div class="type-row">
                                                            <b>Company Type</b>
                                                            <span>

                                                                @if(@$company_obj->company_type_details)
                                                                    {{$company_obj->company_type_details->name}}
                                                                @else
                                                                    N/A
                                                                @endif

                                                            </span>
                                                        </div>
                                                        <div class="type-row">
                                                            <b>Product Type</b>
                                                            <span>
                                                                @if(@\App\WC_Models\ProductType::find($company_obj->company_product_details->fk_product_type_id)->name)
                                                                    {{@\App\WC_Models\ProductType::find($company_obj->company_product_details->fk_product_type_id)->name}}
                                                                @else
                                                                    N/A
                                                                @endif


                                                            </span>
                                                        </div>
                                                        <div class="type-row">
                                                            <b>Specialties</b>
                                                            <span>

                                                              @if(@$company_obj->company_specialities)
                                                                    @php $company_names = ''; @endphp
                                                                    @foreach($company_obj->company_specialities as $company_speciality)
                                                                        @php
                                                                            $company_names .= $company_speciality->name.', ';
                                                                        @endphp
                                                                    @endforeach

                                                                    {{rtrim($company_names,', ')}}
                                                                @else
                                                                    <center>N/A</center>
                                                                @endif
                                                            </span>

                                                        </div>
                                                        <div class="type-row inline-block">
                                                            <b>Website</b>
                                                            <span>
                                                                <a href="{{@$company_obj->contact->website ?? '#'}}" target="_blank">
                                                                    {{@$company_obj->contact->website ??  'N/A' }}
                                                                </a>
                                                            </span> <b>Esbablished</b> <span>@php echo date('F d, Y', strtotime(@$company_obj->established_year)) ?? 'N/A'; @endphp</span>

                                                            @if(isset($company_obj->company_size_details->from))
                                                            <b>Company Size</b>
                                                            <span>{{$company_obj->company_size_details->from}}{{$company_obj->company_size_details->to}} employees</span>
                                                            @else
                                                                <b>Company Size  </b><span>N/A</span>
                                                            @endif

                                                        </div>

                                                        @if(@$company_obj->address_details->address || @$company_obj->address_details->country )
                                                        <div class="type-row">
                                                            <b>Headquarters</b>
                                                            <span>{{@$company_obj->address_details->address}} {{@$company_obj->address_details->city}} {{@$company_obj->address_details->zip_code}} {{@$company_obj->address_details->province}} {{@$company_obj->address_details->country}}</span>
                                                        </div>
                                                        @endif

                                                        <br>
                                                        <div class="type-row">
                                                            @if(@$company_obj->company_primary_actor->email)
                                                            <b>Primary Contact</b>

                                                            <span>
                                                                <a href="{{route('users.show' , $company_obj->company_primary_actor->id)}}" target="_blank" class="btn btn-default">{{@$company_obj->company_primary_actor->first_name}} {{@$company_obj->company_primary_actor->last_name}}</a>
                                                                <a href="mailto:<?php echo @$company_obj->company_primary_actor->email; ?>" class="btn btn-default">{{@$company_obj->company_primary_actor->email}}</a>
                                                              @if($company_obj->verified !=0)

                                                                  @if(Auth::user()->id !=$company_obj->fk_user_primary)
                                                                <a href="{{url('company')}}/{{$company_obj->id}}/chatter" class="btn btn-default">Talk Now</a>
                                                                 @endif
                                                                  @endif
                                                            </span>
                                                                @endif

                                                        </div>
                                                        <div class="type-row">
                                                            @if(@$company_obj->company_help_contact->email)
                                                            <b>Help Contact</b>
                                                            <span>

                                                                <a href="{{route('users.show' , $company_obj->company_help_contact->id)}}" target="_blabk" class="btn btn-default">{{@$company_obj->company_help_contact->first_name}} {{@$company_obj->company_help_contact->last_name}}</a>
                                                                <a href="mailto:<?php echo @$company_obj->company_help_contact->email; ?>" class="btn btn-default">{{@$company_obj->company_help_contact->email}}</a>

                                                                {{--<a href="javascript:;" class="btn btn-default">{{@$company_obj->company_help_contact->email}}</a>--}}
                                                                {{--<a href="javascript:;" class="btn btn-default">Chat</a>--}}

                                                            </span>
                                                                @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade product <?php if(isset($_GET['product_id'])) echo 'active in';?>" id="tab_1_2">
                                                    <div class="well ">
                                                        @php

                                                            if(isset($_GET['product_id'])) {
                                                              $company_product_obj = @$company_obj->products()->where('id',$_GET['product_id'])->first();

                                                            } else {
                                                                $company_product_obj = @$company_obj->products()->orderBy('id','desc')->first();
                                                            }

                                                        @endphp
                                                        @if($company_product_obj)
                                                            <div class="row">
                                                            <div class="col-sm-6">
                                                                <h3>
                                                                    @if(@$company_product_obj->product_image->filename)
                                                                    <img src="{{config('constants.base_url')}}/uploads/company-products/product-image/small/{{@$company_product_obj->product_image->filename}}" class="img-thumbnail" width="70">
                                                                    @endif
                                                                    {{@$company_product_obj->title}}
                                                                </h3>
                                                                <p>{{@$company_product_obj->overview}}</p>


                                                                <!-- <div class="row">
                                                                    <div class="col-xs-6"><img src="assets/global/img/portfolio/600x600/3.jpg" class="img-responsive"></div>
                                                                    <div class="col-xs-6"><img src="assets/global/img/portfolio/600x600/3.jpg" class="img-responsive"></div>
                                                                </div> -->
                                                                <hr>
                                                                <h4 class="font-green bold">Features</h4>
                                                                <ul>
                                                                    @php $features = json_decode($company_product_obj->features); @endphp


                                                                    @if(!empty(@$features[0]))

                                                                        @foreach($features as $feature)
                                                                            @if($feature)
                                                                                <li>{{$feature}}</li>
                                                                            @endif

                                                                        @endforeach
                                                                    @else
                                                                        <li>N/A</li>
                                                                    @endif

                                                                </ul>
                                                                <hr>
                                                                <h4 class="font-green bold">Benefits</h4>
                                                                <!-- <p>Fully automated Tracking Algorithm can detect Configuration 0 to 6 and Frame length 0 to 8.</p>
                                                                <p>The TSR-T1 support a wide dynamic input bandwidth from 0 to 4Ghz, so TSR-T1 can be work with RF signal or IF signal without any consideration.</p>
                                                                -->

                                                                <ul>
                                                                    @php $benefits = json_decode($company_product_obj->benefits); @endphp

                                                                    @if(!empty(@$benefits[0]))
                                                                        @foreach($benefits as $benefit)
                                                                            @if($benefit)
                                                                                <li>{{$benefit}}</li>
                                                                            @endif
                                                                        @endforeach
                                                                    @else
                                                                        <li>N/A</li>
                                                                    @endif

                                                                </ul>


                                                            </div>
                                                            <div class="col-sm-6">
                                                                {{--<h5><img src="assets/global/img/portfolio/600x600/2.jpg" class="img-thumbnail" width="50"> World smallest TDD-LTE Repeater</h5>--}}
                                                                {{--<p><b>What is the benefit of JSC-A480 ?</b><br>--}}
                                                                    {{--A JSC-A480 is specially designed and have different architecture with conventional repeater.<br>--}}
                                                                    {{--World Smallest TDD-LTE Repeater  which compliance with 3GPP requirement| <a href="javascript:;">Only one</a>|<br>--}}
                                                                    {{--Used one chip based high integrated semiconductor chipset  | <a href="javascript:;">Advanced Technology</a> |<br>--}}
                                                                    {{--Self organization software check the mobile signal environment and control--}}
                                                                    {{--the Repeater | <a href="javascript:;">Smart AI algorithm</a> |<br>--}}
                                                                    {{--Repeater work perfectly even 1 bar signal somewhere in your home | <a href="javascript:;">Great performance</a> |<br>--}}
                                                                    {{--Trouble free operation with fully automated system | <a href="javascript:;">Pug &amp; Play</a> |<br>--}}
                                                                    {{--Field proven technology in China, India , North America</p>--}}
                                                                {{--<div class="row">--}}
                                                                    {{--<div class="col-xs-12"><img src="assets/global/img/portfolio/600x600/6.jpg" class="img-responsive"></div>--}}
                                                                {{--</div>--}}
                                                                @if($company_product_obj->product_gallery->count() > 0)

                                                                <h4 class="font-green bold  ">Gallery Images</h4>
                                                                <hr>

                                                                @endif

                                                                @if(@$company_product_obj->product_gallery())

                                                                    <div class=" margin-top-20  convention">
                                                                        <!-- .row -->
                                                                        <div class="row">
                                                                            @foreach($company_product_obj->product_gallery as $image_obj)
                                                                                <div class="col-xs-12 col-sm-12 col-md-4">
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

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                        <!-- /.row -->

                                                                    </div>


                                                                @else
                                                                    N/A
                                                                @endif
                                                            </div>
                                                        </div>
                                                            <center>
                                                                {{--<a href="{{url('company')}}/{{$company_obj->id}}/products">--}}

                                                                    {{--<button class=" btn btn-md circle alert-green margin-top-20 text-center uppercase">View  More</button>--}}
                                                                {{--</a>--}}
                                                            </center>
                                                            <div class="clearfix"></div>

                                                        @else
                                                            N/A
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="tab-pane fade product <?php if(isset($_GET['post_id'])) echo 'active in';?>" id="tab_1_2_1">
                                                    <div class="well">
                                                        @php

                                                        if(isset($_GET['post_id'])) {
                                                             $company_post_obj = @$company_obj->posts()->where('id',$_GET['post_id'])->first();

                                                           } else {
                                                               $company_post_obj = @$company_obj->posts()->orderBy('id','desc')->first();
                                                       }
                                                        @endphp
                                                        @if($company_post_obj)
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <h3>
                                                                        @if(@$company_post_obj->post_image->filename)
                                                                            <img src="{{config('constants.base_url')}}/uploads/company-posts/post-image/small/{{@$company_post_obj->post_image->filename}}" class="img-thumbnail" width="50">
                                                                        @endif
                                                                        {{@$company_post_obj->title}}
                                                                    </h3>
                                                                    <p>{{@$company_post_obj->description}}</p>


                                                                    <!-- <div class="row">
                                                                        <div class="col-xs-6"><img src="assets/global/img/portfolio/600x600/3.jpg" class="img-responsive"></div>
                                                                        <div class="col-xs-6"><img src="assets/global/img/portfolio/600x600/3.jpg" class="img-responsive"></div>
                                                                    </div> -->

                                                                </div>
                                                                <div class="col-sm-6">
                                                                    {{--<h5><img src="assets/global/img/portfolio/600x600/2.jpg" class="img-thumbnail" width="50"> World smallest TDD-LTE Repeater</h5>--}}
                                                                    {{--<p><b>What is the benefit of JSC-A480 ?</b><br>--}}
                                                                    {{--A JSC-A480 is specially designed and have different architecture with conventional repeater.<br>--}}
                                                                    {{--World Smallest TDD-LTE Repeater  which compliance with 3GPP requirement| <a href="javascript:;">Only one</a>|<br>--}}
                                                                    {{--Used one chip based high integrated semiconductor chipset  | <a href="javascript:;">Advanced Technology</a> |<br>--}}
                                                                    {{--Self organization software check the mobile signal environment and control--}}
                                                                    {{--the Repeater | <a href="javascript:;">Smart AI algorithm</a> |<br>--}}
                                                                    {{--Repeater work perfectly even 1 bar signal somewhere in your home | <a href="javascript:;">Great performance</a> |<br>--}}
                                                                    {{--Trouble free operation with fully automated system | <a href="javascript:;">Pug &amp; Play</a> |<br>--}}
                                                                    {{--Field proven technology in China, India , North America</p>--}}
                                                                    {{--<div class="row">--}}
                                                                    {{--<div class="col-xs-12"><img src="assets/global/img/portfolio/600x600/6.jpg" class="img-responsive"></div>--}}
                                                                    {{--</div>--}}
                                                                    @if($company_post_obj->post_gallary_image->count() > 0)
                                                                    <h4 class="font-green bold  ">Gallery Images</h4>
                                                                    <hr>
                                                                    @endif

                                                                    @if(@$company_post_obj->post_gallary_image())

                                                                        <div class=" margin-top-20  convention">
                                                                            <!-- .row -->
                                                                            <div class="row">
                                                                                @foreach($company_post_obj->post_gallary_image as $image_obj)
                                                                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                                                                        <div class="mt-element-overlay">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="mt-overlay-3">
                                                                                                        <a class="btn-popup-image" data-title="{{$image_obj->filename}}" data-url="{{config('constants.base_url')}}/uploads/company-posts/gallery/{{$image_obj->filename}}"  data-toggle="modal" data-target=".company-item-popup">
                                                                                                            <img src="{{config('constants.base_url')}}/uploads/company-posts/gallery/large/{{$image_obj->filename}}" class="img-responsive">
                                                                                                            {{--<div class="mt-overlay">--}}
                                                                                                            {{--<h2>Webicosoft1</h2>--}}
                                                                                                            {{--<a class="mt-info" href="http://localhost/workype/company/1/edit">Learn More</a>--}}
                                                                                                            {{--</div>--}}
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


                                                                    @else
                                                                        N/A
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <center>
                                                                {{--<a href="{{url('company')}}/{{$company_obj->id}}/products">--}}

                                                                {{--<button class=" btn btn-md circle alert-green margin-top-20 text-center uppercase">View  More</button>--}}
                                                                {{--</a>--}}
                                                            </center>
                                                            <div class="clearfix"></div>

                                                        @else
                                                            N/A
                                                        @endif
                                                    </div>



                                                </div>


                                                <!--  Modal content (placed outside of div as it was not working fine within div)-->
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













                                                <div class="tab-pane fade" id="tab_1_3">
                                                    <div class="well">
                                                        <p>{{@$company_obj->technology ?? 'N/A'}}</p>
                                                     </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab_1_4">
                                                    <div class="well">
                                                        <p>{{@$company_obj->convention ?? 'N/A'}}</p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab_1_5">
                                                    <div class="well">
                                                        <div class="type-row">
                                                            <b>Phone No:</b>
                                                            <span>
                                                                {{@$company_obj->contact->phone ?? "N/A"}}
                                                            </span>

                                                        </div><br>
                                                        <div class="type-row">
                                                            <b>Email:</b>
                                                            <span>
                                                           <a href="mailto:<?php echo @$company_obj->contact->email; ?>" class="btn btn-default">{{@$company_obj->contact->email ?? "N/A"}} </a>

                                                                {{--{{@$company_obj->contact->email ?? "N/A"}}--}}
                                                            </span>

                                                        </div><br>
                                                        <div class="type-row">
                                                            <b>Skype:</b>
                                                            <span>
                                                                {{@$company_obj->contact->skype ?? "N/A"}}
                                                            </span>

                                                        </div><br>
                                                        <div class="type-row">
                                                            <b>Website:</b>
                                                            <span>
                                                                {{@$company_obj->contact->website ?? "N/A"}}
                                                            </span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 sidebar pl-sm-0">
                                    <div class="portlet light border border-grey">





                                        <div class="portlet-title">
                                            <div class="caption">
                                                <span class="uppercase">Recent Posts</span>
                                            </div>
                                            @if(Auth::id() == $company_obj->fk_user_id)
                                            <div class="actions">
                                                <a href="{{url('company')}}/{{$company_obj->id}}/posts/create" class="btn btn-circle btn-default"><i class="fa fa-plus"></i> New Post </a>
                                            </div>
                                                @endif
                                        </div>

                                        <div class="portlet-body">

                                                @php
                                                    $company_posts_obj = @$company_obj->posts()->orderBy('id','desc')->take(3)->get();


                                                @endphp


                                                @if($company_posts_obj)
                                                    @foreach($company_posts_obj as $company_post_obj)
                                                    <a href="{{url('company')}}/{{$company_obj->id}}/posts/{{$company_post_obj->id}}">
                                                            @if(@$company_post_obj->post_image->filename)
                                                                <img style="width: 30px; margin-top:-5px;" src="{{config('constants.base_url')}}/{{config('constants.post_logo_image_large').@$company_post_obj->post_image->filename}}">
                                                            @endif

                                                            <b>{{$company_post_obj->title}}  </b>
                                                    </a>

                                                            <hr class="margin-top-5 margin-bottom-5">
                                                                <p>
                                                            {{$company_post_obj->description}}
                                                        </p>
                                                    @endforeach
                                                @endif

                                        </div>
                                        <div class="clearfix"></div>




                                        {{--<div class="portlet-title">--}}
                                            {{--<div class="caption">--}}
                                                {{--<span class="uppercase">Recent Updates</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="actions">--}}
                                                {{--<a href="javascript:;" class="btn btn-circle btn-default"><i class="fa fa-plus"></i>  Post Media </a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="portlet-body">--}}
                                            {{--<p>We’ve undertaken an amazing journey with Sam Schmidt. See the story so far: <a href="http://webicosoft.com" target="_blank">http://webicosoft.com</a></p>--}}
                                            {{--<h5>Youtube Video</h5>--}}
                                            {{--<iframe src="http://www.youtube.com/embed/Y_nJIp0UqI0" width="100%" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>--}}
                                            {{--<h5>Vimeo Video</h5>--}}
                                            {{--<iframe src="https://player.vimeo.com/video/66140585" width="100%" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>--}}
                                        {{--</div>--}}



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
    </div>
@endsection