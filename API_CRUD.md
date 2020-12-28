# CRUD dengan Laravel pada RESTFUL API

## Langkah - Langkah
### 1. Membuat projek dengan Laravel
Untuk membuat sebuah projek pada laravel, pada CMD lalu arahkan cmd ke file directory yang ingin dituju. Lalu ketikan `composer create-project --prefer-dist laravel/laravel="^7.0" warung_abah`. Pada kutipan kode `warung_abah `adalah nama file dari project yang dibuat.

### 2. Mengatur Routing pada Laravel
Untuk mengatur routing/endpoint, hal yang dilakukan adalah pada folder projek tadi, pergi ke routes -> api.php. Namun sebelum mengaturnya, kita terlebih dahulu membuat Controller untuk menaruh  Atur kode seperti dibawah
`class ProductController extends Controller
{
    function post(Request: $request) {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->active = $request->active;
        $product->description = $request->description;

        $product->save();

        return response()->json(
            [
                "message" => "POST Method Success",
                "data" => $product
            ]
        );
    }
    
    function get() {
        $data = Product::all();

        return response()->json(
            [
                "message" => "Success",
                "data" => $data
            ]
        );
    }

    function getById($id) {
        $data = Product::where('id',$id)->get();
        return response()->json(
            [
                "message" => "Success",
                "data" => $data
            ]
        );
    }

    

    function put($id, Request $request) {

        $product = Product::where('id',$id);
        if($product) { 
            $product = new Product;
            $product->name = $request->name ? $request->name : $product->name;
            $product->price = $request->price ? $request->price : $product->price
            $product->quantity = $request->quantity ? $request->quantity : $product->quantity;
            $product->active = $request->active ? $request->active : $product->active;
            $product->description = $request->description ? $request->description : $product->description;
            
            $product->save();
            return response()->json(
            [
                "message" => "PUT Method Success",
                "data" => $product
            ]
        );
    }

        return response()->json(
            [
                "message" =>"Product with id" . $id ." not found"
            ],400
        );

    }


    function delete($id) {
        $product = Product::find('id',$id)->first();

        if($product) {
        return response()->json(
            [
                "message" => "DELETE Product id " . $id . " success"
            ]
        );
    } 
    return response()->json(
        [
            "message" => "Product with id " .$id." not found"
        ],400
    );
    }`

Setelah itu, atur settingan pada api.php, pada folder routs seperti dibawah ini:

`Route::get('/products', 'ProductController@get');`

`Route::get('/products{id}', 'ProductController@getByiD');`

`Route::post('/products', 'ProductController@post');`

`Route::put('/products', 'ProductController@put');`

`Route::delete('/products', 'ProductController@delete');`

### 3. Menghubungkan Database ke Project Laravel
Hal yang dilakukan pertama adalah memigrasikan dari Laravel ke database dengan menggunakan perintah `php artisan make:migration create_table_products`, lalu untuk mengatur dan menambah keys pada databasenya adalah pada folder database didalam folder warung_abah, dengan menambah seperti pada kode berikut:

`
            $table->bigIncrements('id');

            $table->string('name');

            $table->integer('price');

            $table->integer('quantity');

            $table->boolean('active')->default(false);

            $table->text('description');

            $table->timestamps();
        `

### 3. Memberi Fitur Simpan, Ubah, dan Hapus
Setelah menghubungkan projek file kita ke database serta menambahk beberapa keys, yang kita lakukan berikutnya adalah dengan menambah fitur Simpan, Ubah, dan Hapus

`
class ProductController extends Controller
{
    function post(Request: $request) {

        $product = new Product;

        $product->name = $request->name;

        $product->price = $request->price;

        $product->quantity = $request->quantity;

        $product->active = $request->active;

        $product->description = $request->description;

        $product->save();

        return response()->json(
            [
                "message" => "POST Method Success",

                "data" => $product
            ]
        );
    }
    
    function get() {
        $data = Product::all();

        return response()->json(
            [
                "message" => "Success",
                "data" => $data
            ]
        );
    }

    function getById($id) {
        $data = Product::where('id',$id)->get();
        return response()->json(
            [
                "message" => "Success",
                "data" => $data
            ]
        );
    }

    

    function put($id, Request $request) {

        $product = Product::where('id',$id);
        if($product) { 
            $product = new Product;
            $product->name = $request->name ? $request->name : $product->name;
            $product->price = $request->price ? $request->price : $product->price
            $product->quantity = $request->quantity ? $request->quantity : $product->quantity;
            $product->active = $request->active ? $request->active : $product->active;
            $product->description = $request->description ? $request->description : $product->description;
            
            $product->save();
            return response()->json(
            [
                "message" => "PUT Method Success",
                "data" => $product
            ]
        );
    }

        return response()->json(
            [
                "message" =>"Product with id" . $id ." not found"
            ],400
        );

    }


    function delete($id) {
        $product = Product::find('id',$id)->first();

        if($product) {
        return response()->json(
            [
                "message" => "DELETE Product id " . $id . " success"
            ]
        );
    } 
    return response()->json(
        [
            "message" => "Product with id " .$id." not found"
        ],400
    );
    }}
