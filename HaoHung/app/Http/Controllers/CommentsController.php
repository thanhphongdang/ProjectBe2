<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;
use App\Models\User; // Added User model import
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    //
    //
   public function createComment(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'product_id' => 'required|exists:products,id',
        ]);

        Comment::create([
            'product_id' => $request->product_id,
            'user_id' => auth()->id(),
            'content' => $request->content,
            'parent_id' => $request->parent_id, // có thể null
        ]);

        return back()->with('success', 'Đã thêm bình luận.');
    }

    public function Comment(){
        
        return view('desgin.Comment.listComment');
    }

    public function ListAdminComment(){
        $comments = Comment::all();
        return view('page.list-comments', compact('comments'));
    }

    public function listComment()
    {
        $products = Product::all(); // Lấy toàn bộ sản phẩm

        if(Auth::check()) {
            $comments = Comment::all(); // hoặc with() nếu cần quan hệ
            return view('page.list-comments', compact('comments')); // <-- truyền đúng
        }

        return redirect("login")->with('error', 'Bạn cần đăng nhập');
    }
    
    public function listProductsComment()
    {
        //
        $products = Product::all();
        $users = User::all();
        $comments = Comment::all();
        return view('page.add-comments', compact('products', 'users', 'comments'));
    }

    public function index($product_id) {
         $comments = Comment::where('product_id', $product_id)
        ->whereNull('parent_id')
        ->with('replies', 'user')
        ->get();

         return view('desgin.Comment.listComment', [
            'comments' => $comments,
            'product_id' => $product_id  // 👈 Bắt buộc truyền dòng này!
        ]);
    }

     public function destroy($id) {
        $comment = Comment::findOrFail($id);

       

        $comment->delete();

        return back()->with('thanhcong', 'Đã xóa thành công!');
    }

    
}
