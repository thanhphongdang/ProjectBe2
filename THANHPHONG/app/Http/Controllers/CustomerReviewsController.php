<?php

namespace App\Http\Controllers;

use App\Models\Customer_Reviews;
use Illuminate\Http\Request;

class CustomerReviewsController extends Controller
{
    public function customerReviews()
    {
        //
        $customerReviews = Customer_Reviews::all();
        return view('desgin.AdminTraLoiDanhGia', compact('customerReviews'));
    }


    // Admin phản hồi lại phần đánh giá của khách hàng
    public function reply(Request $request)
    {
        $review = Customer_Reviews::find($request->id);

        if (!$review) {
            return response()->json(['success' => false, 'message' => 'Review not found.']);
        }

        $review->admin_reply = $request->replyText;
        $review->save();

        return response()->json(['success' => true]);
    }

    /**
     * Xóa phần phản hồi đánh giá sản phẩm của khách hàng
     */
    public function deleteCustomerReviews($id) {
        Customer_Reviews::destroy($id);

        return redirect()->route('home')->with('success', 'Review deleted successfully.');
    }
}