<?php

namespace App\Http\Controllers;

use App\Models\ReplyToReview;
use Illuminate\Http\Request;

class ReplyToReviewController extends Controller
{
    public function reply(Request $request, $id)
{
    $request->validate([
        'admin_reply' => 'required|string|max:1000',
    ]);

    $review = ReplyToReview::findOrFail($id);
    $review->admin_reply = $request->admin_reply;
    $review->save();

    return redirect()->back()->with('success', 'Reply sent successfully!');
}

}