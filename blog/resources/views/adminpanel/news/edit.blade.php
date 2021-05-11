@extends('adminpanel.layout.app')
@section('content')
<div class="container-fluid mg-t-20">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
            <div class="left-content">
            <h4 class="content-title mb-1">სიახლის რედაქტირება</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">AdminPanel</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit News</li>
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
                    <form action="{{ route('admin.news.update', $news_info->id) }}" method="post" enctype="multipart/form-data" class="parsley-style-1" id="selectForm2" name="selectForm2">
                        @csrf
                        @method('PATCH')
                        <div class="">
                            <div class="row mg-b-20">
                                <div class="parsley-input col-md-6" id="fnWrapper">
                                    <label>სათაური: <span class="tx-danger">*</span></label>
                                    <input class="form-control" data-parsley-class-handler="#fnWrapper" name="title" value="{{ $news_info->title }}" placeholder="Enter firstname" required type="text">
                                </div>
                        </div>
                        <div class="">
                            <div class="row mg-b-20">
                                <div class="parsley-input col-md-6" id="fnWrapper">
                                    <div class="parsley-input col-md-6" id="fnWrapper">
                                        <textarea name="desc">{{ $news_info->desc_ka }}</textarea>
                                        <script>
                                                CKEDITOR.replace( 'desc' );
                                        </script>
                                    </div>
                                </div>
                        </div>
                        <!-- parsley-checkbox -->
                        <div class="wd-250" id="cbErrorContainer2"></div>
                        <div class="parsley-select wd-250 mg-t-30" id="slWrapper2">
                            <p class="mg-b-10">აირჩიეთ კატეგორია<span class="tx-danger">*</span></p>

                            <select class="form-control select2" data-parsley-class-handler="#slWrapper2" data-parsley-errors-container="#slErrorContainer2" name="category" data-placeholder="Choose one" required>
                                @foreach ($cats as $cat)
                                <option value="{{ $cat->id }}" {{ $cat->id == $news_info->cat_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                @endforeach                     
                            </select>
                            <div id="slErrorContainer2"></div>
                        </div>
                        <br>
                        <div>
                                <h6 class="card-title mb-1">ფოტოს ატვირთვა</h6>
                            </div>
                            <div>
                                <input id="demo" type="file" name="image" accept=".jpg, .png, image/jpeg, image/png" multiple>
                            </div>
                        </div>
                        <div class="mg-t-30">
                            <button class="btn btn-main-primary pd-x-20" type="submit">რედაქტირება</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->


</div>
@endsection