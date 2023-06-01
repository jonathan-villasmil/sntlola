<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('haveaccess', 'product.index');

        $text = $request->get('text');

        $categorySelected_id = $request->get('category');

        $categoryCondition = (isset($categorySelected_id) && $categorySelected_id>0) ? "=":">";

        $categories = Category::all()->sortBy('name');

        $category = Category::where('name','LIKE',$text)->first();

        if (!$category) {
            $category_id=null;
        } else {
            $category_id = $category->id;
        }

        $products = Product::orderBy('id', 'DESC')->where('category_id', $categoryCondition, "$categorySelected_id")
        ->where(function($q) use ($text,$category_id){
            $q->where('name', 'LIKE', "%$text%")
            ->orwhere('description', 'LIKE', "%$text%")
            ->orwhere('category_id','=',"$category_id")
            ->orwhere('id','=',"$text");
        })
        ->paginate(21);

        return view('admin/products.index', compact('products','categories'))
        ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('haveaccess', 'product.create');
        $category = Category::all();
        $product = new Product;
        return view('admin/products.create', ['product' => $product, 'category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProductRequest $request, Category $category)
    {
        $this->authorize('haveaccess', 'product.store');
        $validateData = $request->validated();
        $product = Product::create($validateData);

        return redirect()->route('products.index')->with('status', 'Product Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $this->authorize('haveaccess', 'product.show');
        return view('admin/products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $this->authorize('haveaccess', 'product.edit');
        $category = Category::all();
        return view('admin/products.edit', ['product' => $product, 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveProductRequest $request, Product $product)
    {
        $this->authorize('haveaccess', 'product.update');
        $product->update($request->validated());
        session()->flash('status', 'Product Updated!');

        return redirect()->route('products.show', $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->authorize('haveaccess', 'product.destroy');
        $product->delete();

        return to_route('products.index')->with('status', 'Product deleted!');
    }

    public function search(Request $request){
       $categorySelected_id = $request->get('category');

       $categories = Category::all();
       
       switch ($categorySelected_id) {
        case 'empty':
            $products = Product::orderBy('id', 'DESC')->get();
            break;
        case 'all':
            $products = Product::orderBy('id', 'DESC')->get();
            break;
        default:
            $products = Product::where('category_id', $categorySelected_id)->get();
            break;
       }

    //    if($categorySelected_id){
    //     $products = Product::where('category_id', $categorySelected_id)->get();
    //    }else{
    //     $products = Product::all();
    //    }

       return view('admin/products.index', compact('products', 'categories'));
    }

    public function indexStocks()
    {
        $products = Product::orderBy('id', 'asc')->get();

        return view('admin/products.stocks', ['products' => $products]);
    }

    public function updatedStock(Request $request)
    {
        //recoger datos
        $products = $request->all();
        $products = $request->except('_token', '_method');
        
        foreach ($products['product_id'] as $key => $product_id) {

            $quantity = $products['quantity'][$key];
            //dd($product);
            if ($quantity > 0) {
                $product = Product::find($product_id);
                $product->stock =  $quantity;
                $product->save();
            }

            //comprobar que el dato ha sido cambiado
            //if ($nuevosDatos == $datosAnteriores) {
                // Los datos siguen siendo los mismos, no han sido modificados
            //} else {
                // Los datos han sido modificados
            //}


            //condición que crea un lista por categorias y sus productos y se envia por correo electronico
            //if($quantity <= $quantity->min){}
                //dd($product->stock);
        }        
        
            return redirect()->back()->with('status', 'Stock Updated!');
    }

    public function questionsProductQuantities(Product $product){
        //recorrer la tabla productos cada dia y revisa el stock para saber si es inferior al stock minimo
        $products = Product::orderBy('id', 'asc')->get();
        
        $questions = [];
        
        foreach($products as $product){
            if($product->stock <= 3){ //sustituimos por $product->stockmin
                $question = "¿Tienes " .$product->name . "?, pensamos que tiene una cantidad inferior a su cantidad minima?";
                array_push($questions , $question);
            }
        }
        //dd($questions);

        return view('admin/products.questionsQuantities', ['product' => $product, 'questions' => $questions]);
        
    }
}
