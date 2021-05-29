<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">{{ $title }}</h4>
        {{--<ol class="breadcrumb">
            @php
                dd($_SERVER);
                $path_info = $_SERVER['PATH_INFO'];
                $path_info = explode('/',$path_info);
            @endphp
            @foreach ($path_info as $item)
                <li class="breadcrumb-item">
                    <a href="javaScript:void();">{{ $item }}</a>
                </li>
            @endforeach
        </ol>--}}
    </div>
</div>
<!-- End Breadcrumb-->
