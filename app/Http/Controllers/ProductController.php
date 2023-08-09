<?php
 
namespace App\Http\Controllers;
 
//use App\Models\User;
use Illuminate\View\View;
use App\Models\Product;
 
class ProductController extends Controller
{
    public function index(): View
    {
        return view('product', ['products'=> Product::all()]);
    }

    public function detail($id): View
    {
        $product = Product::find($id);
        $user = auth()->user();
        $intent = $user->createSetupIntent();
        return view('product-detail', compact('product', 'intent'));
    }

    

    

}

?>