@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_cumb',['title'=>'Create'])
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Create Sub Category</div>
                            <hr />
                            <form method="POST" class="insert_form" action="{{ route('sub_category.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="preloader"></div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Select Main Catetgory</label>
                                    <div class="col-sm-10">
                                        {{-- <input type="text" name="name" class="form-control" id="input-21" placeholder="Name" /> --}}
                                        <select name="main_category_id" class="form-control" id="main_category">
                                            {{-- <option value="">Select</option> --}}
                                            @foreach ($maincategory as $key=>$item)
                                                <option {{$key==0?'selected':''}} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger main_category_id"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Select Catetgory</label>
                                    <div class="col-sm-10">
                                        {{-- <input type="text" name="name" class="form-control" id="input-21" placeholder="Name" /> --}}
                                        <select name="category_id" class="form-control" id="category">
                                            {{-- <option value="">Select</option> --}}
                                            @foreach ($category as $key=>$item)
                                                <option {{$key==0?'selected':''}} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger category_id"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="input-21" placeholder="Name" />
                                        <span class="text-danger name"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Icon</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="icon" class="form-control" id="input-21"/>
                                        <span class="text-danger icon"></span>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> ADD</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->

    @push('cjs')
        <script>
            $('#main_category').on('change',function(){
                let value = $(this).val();
                $.get("/admin/product/get-all-cateogory-selected-by-main-category/"+value,(res)=>{
                    $('#category').html(res);
                })
            })
        </script>
    @endpush

@endsection



