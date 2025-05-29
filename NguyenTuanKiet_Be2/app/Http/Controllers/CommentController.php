<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
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


    
    public function listComment()
    {
        if(Auth::check()) {
        $comments = Comment::all(); // hoặc with() nếu cần quan hệ
            return view('desgin.Comment.listComment', compact('comments')); // <-- truyền đúng
        }

        return redirect("login")->with('error', 'Bạn cần đăng nhập');
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

        if ($comment->user_id != Auth::id()) {
            return back()->with('error', 'Unauthorized');
        }

        $comment->delete();

        return back()->with('success', 'Comment deleted');
    }
}