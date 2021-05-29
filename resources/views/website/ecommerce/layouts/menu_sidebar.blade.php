<div class="categories-menu text-uppercase home3-bg2 home3-categories-menu click" >
    <i class="fa fa-list-ul"></i>
    <span>All Categories</span>
</div>
<div class="menu-container home3-menu-container home3-hover toggole" style="{{ $_SERVER['REQUEST_URI'] != '/'?'display: none':'' }}">
    <ul>
        @foreach (App\Models\MainCategory::orderBy('sequence','ASC')->with('related_categories')->get() as $main_category)

            <li class="menu_item_li">
                <a href="{{ route('website_main_category_products',$main_category->slug) }}">
                    <i class="fa fa-laptop"></i>

                    {{ $main_category->name }}

                    @if ($main_category->related_categories()->count())
                        <i class="fa fa-angle-right pull-right"></i>
                    @endif
                </a>
                @if ($main_category->related_categories()->count())
                    <ul class="megamenu-2 home3-megamenu-2 box-shadow">
                        @foreach ($main_category->related_categories as $category)
                            <li>
                                <a href="{{ route('website_category_products',['main_category'=>$main_category->slug,'category'=>$category->slug]) }}">
                                    <i class="fa fa-circle-o"></i>
                                    {{ $category->name }}

                                    @if ($category->related_sub_categories()->count())
                                        <i class="fa fa-angle-right pull-right"></i>
                                    @endif
                                </a>

                                @if ($category->related_sub_categories()->count())
                                    <ul>
                                        @foreach ($category->related_sub_categories()->get() as $sub_category)
                                            <li>
                                                <a href="{{ route('website_sub_category_products',[
                                                            'main_category'=>$main_category->slug,
                                                            'category'=>$category->slug,
                                                            'sub_category'=>$sub_category->slug,
                                                        ]) }}">{{ $sub_category->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach


        <li class="show_more_li">
            <a href="#" class="show_more_menu_btn">
                <i class="fa fa-plus"></i>
                Show More
            </a>
        </li>
        <li class="show_less_li" style="display: none;">
            <a href="#" class="show_less_menu_btn">
                <i class="fa fa-minus"></i>
                Show Less
            </a>
        </li>
    </ul>
</div>
