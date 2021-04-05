<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Image;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\Publication;
use App\Models\Size;
use App\Models\Status;
use App\Models\SubCategory;
use App\Models\Unit;
use App\Models\Vendor;
use App\Models\Writer;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        MainCategory::truncate();
        Category::truncate();
        SubCategory::truncate();
        Brand::truncate();
        Writer::truncate();
        Publication::truncate();
        Color::truncate();
        Size::truncate();
        Unit::truncate();
        Vendor::truncate();
        Product::truncate();
        Image::truncate();
        Status::truncate();

        // \App\Models\User::factory(10)->create();

        $category = [
            'main_category' => [
                "Men's" => [
                    "Gent's Watch" => [
                        'rolex',
                        'casio',
                        'apple'
                    ],
                    "Clothing" => [
                        "t-shirt",
                        "Panjabi"
                    ],
                    "Grooming & Wellness" => [
                        'body spray',
                        "Suit"
                    ],
                ],
                "Women's" => [
                    "Saree" => [
                        'jamdani',
                        'silk'
                    ],
                    "Kurti" => [
                        "boil",
                        "jamidari",
                        "katan"
                    ],
                    "Jewelry" => [
                        'nekless',
                        "breslate",
                        "nupur"
                    ],
                ],
                "Baby & Kids" => [
                    "Toys-Games" => [
                        "auto cars",
                        "Tic Toe",
                        "Cricket"
                    ],
                    "Kids Footwer" => [
                        "shoe",
                        "moja"
                    ],
                    "Baby Food" => [
                        "milk",
                        "Dano",
                        "nido",
                        "oats"
                    ]
                ],
                "Food & Grocery" => [
                    "Rice" => [
                        'Ataf',
                        "chini gura",
                    ],
                    "Dal" => [
                        "mosur",
                        "mas kolai",
                        "mug"
                    ],
                    "Oil" => [
                        'soyabin',
                        'Sorisa'
                    ]
                ],
                "Medicine" => [
                    "Cream" => [
                        'vetnovate',
                        'oral gel'
                    ],
                    "Gel" => [
                        'burn cream'
                    ],
                    "Spray" => [
                        'moov',
                    ]
                ],
                "Mobile" => [
                    "Maximus" => [
                        "mobile",
                        "ear-phone"
                    ],
                    "Huwaui" => [
                        "mobile",
                        "ear-phone"
                    ],
                    "Remax" => [
                        "mobile",
                        "ear-phone"
                    ]
                ],
                "Home & Kitchen" => [
                    "Knife" => [],
                    "Spice" => [],
                    "Noodles" => []
                ],
                "Books" => [
                    "History" => [],
                    "Islamic" => [],
                    "Nobel" => []
                ],
                "Service" => [
                    'Desktop' => [],
                    "Laptop" => [],
                    "Ink" => []
                ],
                "Computer" => [
                    'mouse' => [],
                    "monitor" => [],
                    "keyboard" => []
                ],
                "Stationery" => [
                    "Pen" => [],
                    "pencil" => [],
                    "Table" => []
                ],
                "Gift Item" => [
                    "show peice" => [],
                    "Photo Frame" => [],
                    "Doll" => []
                ],
                "Hot Deal" => [
                    "Combo Offer" => [],
                    "Special Offer" => []
                ],
            ]
        ];

        foreach ($category['main_category'] as $key => $value) {
            // dd($key, $value);
            $main_id = MainCategory::insertGetId([
                'name' => $key,
                'creator' => 1,
                'slug' => Str::slug(strtolower($key)),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);

            foreach ($value as $key2 => $value2) {
                $category_id = Category::insertGetId([
                    'name' => $key2,
                    'main_category_id' => $main_id,
                    'creator' => 1,
                    'slug' => Str::slug(strtolower($key2)),
                    'created_at' => Carbon::now()->toDateTimeString(),
                ]);

                foreach ($value2 as $key3 => $value3) {
                    SubCategory::insert([
                        'name' => $value3,
                        'main_category_id' => $main_id,
                        'category_id' => $category_id,
                        'creator' => 1,
                        'slug' => Str::slug(strtolower($value3)),
                        'created_at' => Carbon::now()->toDateTimeString(),
                    ]);
                }
            }
        }

        // brand
        $data = [
            [
                'name' => 'nike',
                'logo' => 'http://lorempixel.com/200/200/transport/1/',
                'creator' => 1,
                'slug' => 'nike',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'adidas',
                'logo' => 'http://lorempixel.com/200/200/transport/2/',
                'creator' => 1,
                'slug' => 'adidas',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'pila',
                'logo' => 'http://lorempixel.com/200/200/transport/3/',
                'creator' => 1,
                'slug' => 'pila',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'gucci',
                'logo' => 'http://lorempixel.com/200/200/transport/4/',
                'creator' => 1,
                'slug' => 'gucci',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'puma',
                'logo' => 'http://lorempixel.com/200/200/transport/5/',
                'creator' => 1,
                'slug' => 'puma',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'arong',
                'logo' => 'http://lorempixel.com/200/200/transport/6/',
                'creator' => 1,
                'slug' => 'arong',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'easy',
                'logo' => 'http://lorempixel.com/200/200/transport/7/',
                'creator' => 1,
                'slug' => 'easy',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'bobin',
                'logo' => 'http://lorempixel.com/200/200/transport/8/',
                'creator' => 1,
                'slug' => 'bobin',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'zink',
                'logo' => 'http://lorempixel.com/200/200/transport/9/',
                'creator' => 1,
                'slug' => 'zink',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'men look',
                'logo' => 'http://lorempixel.com/200/200/transport/10/',
                'creator' => 1,
                'slug' => 'men-look',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Brand::insert($data);

        // writer
        $data = [
            [
                'name' => strtolower('ABDUL WAHEED KHAN'),
                'image' => 'http://lorempixel.com/200/200/people/1/',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('ABDUL WAHEED KHAN')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('ABDULLA YUSUF ALI'),
                'image' => 'http://lorempixel.com/200/200/people/2/',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('ABDULLA YUSUF ALI')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('AKM SHAFI'),
                'image' => 'http://lorempixel.com/200/200/people/3/',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('AKM SHAFI')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('ABDUL-MUNIM AL-HASHIMI'),
                'image' => 'http://lorempixel.com/200/200/people/4/',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('ABDUL-MUNIM AL-HASHIMI')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('ABDUL MALIK MUJAHID'),
                'image' => 'http://lorempixel.com/200/200/people/5/',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('ABDUL MALIK MUJAHID')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Writer::insert($data);

        // publication
        $data = [
            [
                'name' => strtolower('GOODWORD'),
                'image' => 'http://lorempixel.com/200/200/business/1/',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('GOODWORD')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('Onnesha Prokashon'),
                'image' => 'http://lorempixel.com/200/200/business/2/',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('Onnesha Prokashon')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('Adiyat Prokashoni'),
                'image' => 'http://lorempixel.com/200/200/business/3/',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('Adiyat Prokashoni')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('Anowar Library'),
                'image' => 'http://lorempixel.com/200/200/business/4/',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('Anowar Library')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('Art Publication'),
                'image' => 'http://lorempixel.com/200/200/business/5/',
                'description' => str_shuffle("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, numquam?"),
                'creator' => 1,
                'slug' => str::slug(strtolower('Art Publication')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Publication::insert($data);

        // color
        $data = [
            [
                'name' => strtolower('red'),
                'creator' => 1,
                'slug' => str::slug(strtolower('red')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('sayan'),
                'creator' => 1,
                'slug' => str::slug(strtolower('sayan')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('pink'),
                'creator' => 1,
                'slug' => str::slug(strtolower('pink')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('green'),
                'creator' => 1,
                'slug' => str::slug(strtolower('green')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('skyblue'),
                'creator' => 1,
                'slug' => str::slug(strtolower('skyblue')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('gray'),
                'creator' => 1,
                'slug' => str::slug(strtolower('gray')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('white'),
                'creator' => 1,
                'slug' => str::slug(strtolower('white')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('black'),
                'creator' => 1,
                'slug' => str::slug(strtolower('black')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('yellow'),
                'creator' => 1,
                'slug' => str::slug(strtolower('yellow')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Color::insert($data);

        // size
        $data = [
            [
                'name' => strtolower('XS'),
                'creator' => 1,
                'slug' => str::slug(strtolower('XS')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('S'),
                'creator' => 1,
                'slug' => str::slug(strtolower('s')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('M'),
                'creator' => 1,
                'slug' => str::slug(strtolower('m')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('L'),
                'creator' => 1,
                'slug' => str::slug(strtolower('l')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('XL'),
                'creator' => 1,
                'slug' => str::slug(strtolower('XL')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('XXL'),
                'creator' => 1,
                'slug' => str::slug(strtolower('XXL')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('XXXL'),
                'creator' => 1,
                'slug' => str::slug(strtolower('XXXL')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],

        ];
        Size::insert($data);

        // unit
        $data = [
            [
                'name' => strtolower('meter'),
                'creator' => 1,
                'slug' => str::slug(strtolower('meter')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('kg'),
                'creator' => 1,
                'slug' => str::slug(strtolower('kg')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('litre'),
                'creator' => 1,
                'slug' => str::slug(strtolower('liter')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('pcs'),
                'creator' => 1,
                'slug' => str::slug(strtolower('pcs')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('foot'),
                'creator' => 1,
                'slug' => str::slug(strtolower('foot')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('inch'),
                'creator' => 1,
                'slug' => str::slug(strtolower('inch')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('gallon'),
                'creator' => 1,
                'slug' => str::slug(strtolower('gallon')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Unit::insert($data);

        // status
        $data = [
            [
                'name' => strtolower('Active'),
                'serial' => 1,
                'creator' => 1,
                'slug' => str::slug(strtolower('active')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('Pending'),
                'serial' => 2,
                'creator' => 1,
                'slug' => str::slug(strtolower('Pending')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('processing'),
                'serial' => 3,
                'creator' => 1,
                'slug' => str::slug(strtolower('processing')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('shipping'),
                'serial' => 4,
                'creator' => 1,
                'slug' => str::slug(strtolower('shipping')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('delivered'),
                'serial' => 5,
                'creator' => 1,
                'slug' => str::slug(strtolower('delivered')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('canceled'),
                'serial' => 6,
                'creator' => 1,
                'slug' => str::slug(strtolower('canceled')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('draft'),
                'serial' => 7,
                'creator' => 1,
                'slug' => str::slug(strtolower('draft')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],

        ];
        Status::insert($data);

        // Vendor
        $data = [
            [
                'name' => strtolower('Mr.Tutul'),
                'email' => 'tutul@gmail.com',
                'address' => 'jatrabari',
                'creator' => 1,
                'slug' => str::slug(strtolower('tutul')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('Mr.yousuf'),
                'email' => 'yousuf@gmail.com',
                'address' => 'danmondi',
                'creator' => 1,
                'slug' => str::slug(strtolower('yousuf')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('Mr.sajid'),
                'email' => 'sajid@gmail.com',
                'address' => 'cittagon',
                'creator' => 1,
                'slug' => str::slug(strtolower('sajid')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Vendor::insert($data);

        // images
        for ($i = 1; $i <= 18; $i++) {
            Image::insert([
                'name' => 'dummy_products/' . $i . ".jpg",
                'creator' => 1,
                'created_at' => Carbon::now()->toDateTimeString()
            ]);
        }

        // Products
        DB::table('main_category_product')->truncate();
        DB::table('category_product')->truncate();
        DB::table('product_sub_category')->truncate();
        DB::table('color_product')->truncate();
        DB::table('product_size')->truncate();
        DB::table('product_unit')->truncate();
        DB::table('product_vendor')->truncate();
        DB::table('product_writer')->truncate();
        DB::table('product_publication')->truncate();
        DB::table('image_product')->truncate();

        // insert 20 product
        $product_names = [
            "Men's Wash Denim Pant - Ad003 - 7arnf",
            "CUSTOM MADE FASHION SNEAKERS",
            "Cotton Panjabi (Yellow)",
            "China Cotton Fabric Formal Shirt",
            "Karchupi One Piece",
            "Gold Plated Color Beats Locket Pendant",
            "Women's Fashionable Shirt",
            "Kids toys collection1",
            "Plastic Remote Control World Racing",
            "kodomo bath (gentle soft)",
            "Nokshipitha",
            "Teer sugar",
            "Radhuni biryani masala",
            "Shrimp shutki",
            "Pran Tomato Ketchup",
            "Black Seed",
            "Kheshari Dal",
            "Pran Mustard Oil",
            "Maggi Coconut Milk Powder",
            "Ruchi Mixed Fruit Jam",
        ];
        for ($i = 0; $i < 20; $i++) {

            $product = new Product();
            $product->name = $product_names[$i];
            $product->brand_id = rand(1, Brand::count());
            $product->tax = 15;
            $product->price = rand(200, 600);
            $product->sku = 'SKU' . rand(500, 5000);
            $product->stock = rand(700, 1000);
            $product->discount = rand(0, 20);
            $product->expiration_date = Carbon::now()->year . '-12-12';
            $product->minimum_amount = rand(10, 20);
            $product->free_delivery = rand(0, 1);
            $product->total_view = rand(50, 200);
            $product->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, molestias!";
            $product->features = "<ul><li>Lorem ipsum dolor</li><li>Lorem ipsum dolor</li><li>Lorem ipsum dolor</li><li>Lorem ipsum dolor</li></ul>";
            $product->thumb_image = "dummy_products/" . rand(1, 18) . ".jpg";
            $product->creator = 1;
            $product->created_at = Carbon::now()->toDateTimeString();
            $product->save();
            $product->code = 'PRO-' . Carbon::now()->year . Carbon::now()->month . $product->id;
            $product->slug = Str::slug($product->name) . '-' . Carbon::now()->year . Carbon::now()->month . $product->id;
            $product->save();

            DB::table('main_category_product')->insert(
                ['main_category_id' => 1, 'product_id' => $product->id]
            );

            DB::table('category_product')->insert([
                ['category_id' => 1, 'product_id' => $product->id],
                ['category_id' => 2, 'product_id' => $product->id],
                ['category_id' => 3, 'product_id' => $product->id]
            ]);

            DB::table('product_sub_category')->insert([
                ['sub_category_id' => 1, 'product_id' => $product->id],
                ['sub_category_id' => 2, 'product_id' => $product->id],
                ['sub_category_id' => 3, 'product_id' => $product->id]
            ]);

            DB::table('color_product')->insert(
                ['color_id' => 1, 'product_id' => $product->id],
                ['color_id' => 2, 'product_id' => $product->id],
                ['color_id' => 3, 'product_id' => $product->id]
            );

            DB::table('product_size')->insert([
                ['size_id' => 1, 'product_id' => $product->id],
                ['size_id' => 2, 'product_id' => $product->id],
                ['size_id' => 3, 'product_id' => $product->id]
            ]);

            DB::table('product_unit')->insert([
                ['unit_id' => 1, 'product_id' => $product->id],
                ['unit_id' => 2, 'product_id' => $product->id],
                ['unit_id' => 3, 'product_id' => $product->id]
            ]);

            DB::table('product_vendor')->insert([
                ['vendor_id' => 1, 'product_id' => $product->id],
                ['vendor_id' => 2, 'product_id' => $product->id],
            ]);

            DB::table('product_writer')->insert([
                ['writer_id' => 1, 'product_id' => $product->id],
                ['writer_id' => 2, 'product_id' => $product->id],
            ]);

            DB::table('product_publication')->insert([
                ['publication_id' => 1, 'product_id' => $product->id],
                ['publication_id' => 2, 'product_id' => $product->id],
            ]);

            DB::table('image_product')->insert([
                ['image_id' => rand(1, 5), 'product_id' => $product->id],
                ['image_id' => rand(6, 10), 'product_id' => $product->id],
                ['image_id' => rand(11, 15), 'product_id' => $product->id],
                ['image_id' => rand(16, 18), 'product_id' => $product->id],
            ]);
        }
    }
}
