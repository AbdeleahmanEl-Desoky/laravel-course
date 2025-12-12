@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>Product</h1>

            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Product</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">Product <small></small></h3>

                    <form action="" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                                    <a href="{{ route('categories.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> add category</a>

                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>لاسم بالعربي</th>
                                <th>name (en)</th>
                                <th>الوصف بالعربي</th>
                                <th>description (en)</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($categories as $index=>$category)        
                                <tr>
                                    <td>{{$index+1  }}</td>
                                    <td>{{ $category->name_ar }}</td>
                                    <td>{{ $category->name_en }}</td>
                                    <td> {{ $category->description_ar  }}</td>
                                    <td>{{ $category->description_en }}<td>
                                    <td>
                                        <a href="{{ route('categories.edit',$category->id) }}">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                                
                            </tbody>
                        </table><!-- end of table -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
