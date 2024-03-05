<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

    public function index()
    {
        $threads = Thread::with('user')->withCount('topic')->get();

        return view('threads.index', compact('threads'));
    }
}

