@extends('adminpanel.layout.app')
@section('content')
<div class="container-fluid mg-t-20">

    <!-- breadcrumb -->

    <div class="breadcrumb-header justify-content-between">

                            <div class="left-content">
            <h4 class="content-title mb-2">Hi, welcome back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Analytics &amp; Monitoring</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="row row-sm">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-striped table-bordered text-nowrap" style="width:100%">
                            <thead>
                                <tr class="bold">
                                    <th class="border-bottom-0">სათაური </th>
                                    <th class="border-bottom-0">ატვირთვის დრო</th>
                                    <th class="border-bottom-0">რედაქტირება</th>
                                    <th class="border-bottom-0">წაშლა</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold"><div class="d-flex"><span class="mg-l-10 mg-t-7">სათაური</span></div></td>
                                    <td class="font-weight-bold"><div class="d-flex"><span class="mg-l-10 mg-t-7">ატვირთვის დრო</span></div></td>
                                    <td><button type="button" class="btn btn-primary">რედაქტირება</button>												</td>
                                    <td><button type="button" class="btn btn-danger">წაშლა</button>												</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row close -->
</div>
<!-- Container closed -->

</div>
<!-- main-content closed -->
@endsection