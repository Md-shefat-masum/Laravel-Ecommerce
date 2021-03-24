<ul class="fm_image_list">
    @foreach ($images as $item)
        <li>
            <div class="image_body">
                <input type="checkbox" data-name="{{ $item->name }}" value="{{ $item->id }}" class="form-control fm_checkbox">
                <div class="controls">
                    <i class="icon-options-vertical icons"></i>
                    <ul>
                        <li><a href="#"><i class="icon-magnifier icons"></i> View</a></li>
                        <li><a href="{{ route('admin_fm_delete_file',$item->id) }}" class="delete_btn"><i class="icon-trash icons"></i> Delete</a></li>
                    </ul>
                </div>
                <img src="/{{ $item->name }}" alt="product image">
            </div>
        </li>
    @endforeach
</ul>
