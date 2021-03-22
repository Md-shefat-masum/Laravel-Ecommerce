<div class="">
    {{-- <input type="text" class="form-control" id="input-21" placeholder="Name" /> --}}
    <div class="select_body d-flex justify-content-between align-items-center">
        <select name="{{ $name }}{{$attributes?'[]':''}}" id="select{{ $name }}" {{ $attributes }} class="form-control {{$class}}">
            @foreach ($collection as $key=>$item)
                <option {{ $key==0?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <button class="btn btn-info" data-toggle="modal" data-target="#{{$name}}Modal" type="button" title="add new brand"><i class="fa fa-plus"></i></button>
    </div>

    <span class="text-danger {{ $name }}"></span>
</div>

<div class="modal fade" id="{{ $name }}Modal" tabindex="-1" aria-labelledby="{{ $name }}ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase" id="{{ $name }}ModalLabel">{{ str_replace('_',' ',str_replace('_id','',$name)) }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <forms action="{{ $action }}" data-target_select="select{{ $name }}" class="component_form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="preloader component_preloader"></div>

                <div class="modal-body">
                    @foreach ($fields as $key => $item)
                        @php
                            $item = (object) $item;
                        @endphp
                        <div class="form-group">
                            <label for="input-{{ $item->name.$key.uniqid(10) }}" class=" col-form-label">{{ $item->name }}</label>
                            <div class="">
                                @if ($item->type == 'textarea')
                                    <textarea type="{{ $item->type }}" name="{{ $item->name }}" class="form-control" id="input-{{$item->name.$key.uniqid(10)}}" placeholder="{{ $item->name }}"></textarea>
                                @endif

                                @if ($item->type == 'select')
                                    <div class="d-flex justify-content-between align-items-center">
                                        <select name="{{ $item->name }}" class="form-control" id="input-{{$item->name.$key.uniqid(10)}}">

                                        </select>
                                        <button type="button" class="btn btn-info load_options" data-url="{{ $item->option_route }}"><i class="fa fa-recycle"></i></button>
                                    </div>
                                    {{-- <textarea type="{{ $item->type }}" name="{{ $item->name }}" class="form-control" id="input-{{$item->name.$key.uniqid(10)}}" placeholder="{{ $item->name }}"></textarea> --}}
                                @endif

                                @if($item->type == 'text' || $item->type == 'file')
                                    <input type="{{ $item->type }}" name="{{ $item->name }}" class="form-control" id="input-{{$item->name.$key.uniqid(10)}}" placeholder="{{ $item->name }}" />
                                @endif
                                <span class="text-danger {{ $item->name }} "></span>

                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="component_form_submit btn btn-primary">Submit</button>
                </div>
            </forms>
        </div>
    </div>
</div>
