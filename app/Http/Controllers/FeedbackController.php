<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{
    public function addFeedback(Request $request, $article_id)
    {
    	$data = $request->all();
    	$data['article_id'] = $article_id;
    	Feedback::create($data);
    	return response()->json(['message' => 'Thêm comment thành công']);
    }

    public function deleteFeedback($id)
    {
        Feedback::find($id)->delete();
        return response()->json(['message', 'Xóa thành công']);
    }

    public function edit($id)
    {
    	$feedback = Feedback::where('id', $id)->first();
    	return $feedback;
    }

    public function update(Request $request, $id)
    {
    	Feedback::find($id)->update($request->all());
    	return response()->json(['message', 'Sửa thành công']);
    }
}
