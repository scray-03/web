@extends('adminpanel.layout.app')
@section('content')
<div class="container-fluid mg-t-20">

    <!-- breadcrumb -->

    <div class="breadcrumb-header justify-content-between">

                            <div class="left-content">
            <h4 class="content-title mb-1">Form Validation</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
                </ol>
            </nav>
        </div>

    </div>
    <!-- breadcrumb -->

    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Custom Style Invalid Messages
                    </div>
                    <p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
                    <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data" class="parsley-style-1" id="selectForm2" name="selectForm2">
                        @csrf
                        <div class="">
                            <div class="row mg-b-20">
                                <div class="parsley-input col-md-6" id="fnWrapper">
                                    <label>სათაური: <span class="tx-danger">*</span></label>
                                    <input class="form-control" data-parsley-class-handler="#fnWrapper" name="title" placeholder="Enter firstname" required type="text">
                                </div>
                        </div>
                        <div class="">
                            <div class="row mg-b-20">
                                <div class="parsley-input col-md-6" id="fnWrapper">
                                    <label>აღწერა: <span class="tx-danger">*</span></label>
                                    <input class="form-control" data-parsley-class-handler="#fnWrapper" name="desc" placeholder="Enter firstname" required type="text">
                                </div>
                        </div>
                        <!-- parsley-checkbox 
                        <div class="wd-250" id="cbErrorContainer2"></div>
                        <div class="parsley-select wd-250 mg-t-30" id="slWrapper2">
                            <p class="mg-b-10">აირჩიეთ კატეგორია<span class="tx-danger">*</span></p>

                            <select class="form-control select2" data-parsley-class-handler="#slWrapper2" data-parsley-errors-container="#slErrorContainer2" data-placeholder="Choose one" required="">
                                <option label="Choose one">
                                </option>
                                <option value="Firefox">
                                    Firefox
                                </option>
                                <option value="Chrome">
                                    Chrome
                                </option>
                                <option value="Safari">
                                    Safari
                                </option>
                                <option value="Opera">
                                    Opera
                                </option>
                                <option value="Internet Explorer">
                                    Internet Explorer
                                </option>
                            </select>
                            <div id="slErrorContainer2"></div>
                        </div> -->
                        <br>
                        <div>
                                <h6 class="card-title mb-1">File Upload style 03</h6>
                                <p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
                            </div>
                            <div>
                                <input id="demo" type="file" name="image" accept=".jpg, .png, image/jpeg, image/png, html, zip, css,js" multiple>
                            </div>
                        </div>
                        <div class="mg-t-30">
                            <button class="btn btn-main-primary pd-x-20" type="submit">Validate Form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->


</div>
@endsection