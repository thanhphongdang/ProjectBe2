<?php

namespace App\Http\Controllers;

use App\Models\Customer_Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CustomerReviewsController extends Controller
{
    public function customerReviews()
    {
        //
        $customerReviews = Customer_Reviews::all();
        return view('page.AdminTraLoiDanhGia', compact('customerReviews'));
    }

    // Hiển thị dữ liệu khách hàng đán giá sản phẩm
    public function displayCustomerReviews($id)
    {

       $customerReview = Customer_Reviews::find($id);

        $data = [
            "customerReviews" => $customerReview
        ];
        return view('page.AdminTraLoiDanhGia', $data);

        
    }

    // Admin phản hồi lại phần đánh giá của khách hàng
    public function reply(Request $request)
    {
        Log::info('Reply request received', ['id' => $request->id, 'replyText' => $request->replyText]);

        try {
            Log::info('Request all data', $request->all());

            $review = Customer_Reviews::find($request->id);

            if (!$review) {
                Log::warning('Review not found for reply', ['id' => $request->id]);
                return response()->json(['success' => false, 'message' => 'Review not found.']);
            }

            $review->admin_reply = $request->replyText;
            $review->save();

            Log::info('Reply saved successfully', ['id' => $review->id]);

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            Log::error('Error saving reply', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return response()->json(['success' => false, 'message' => 'Server error occurred.', 'error' => $e->getMessage()]);
        }
    }

    /**
     * Xóa phần phản hồi đánh giá sản phẩm của khách hàng
     */
    public function deleteCustomerReviews($id) {
        $customerReview = Customer_Reviews::destroy($id);

        return redirect()->route('home')->withSuccess('Deleted successfully');
    }
}