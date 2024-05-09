<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'comment' => 'required|max:50',
        ];
    }

    public function attributes()
    {
        return [
            'comment.required' => ':attribute の入力をお願いします',
            'comment.max' => ':attribute の入力は50文字以内でお願いします',
        ];
    }
}   
