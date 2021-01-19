<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::with('post')->paginate(5);

        return view('admin.comments.index', compact('comments'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        if ($comment->user_id != auth()->user()->id && auth()->user()->is_admin == false) {
            //flash()->overlay("You can't delete other peoples comment.");
            $this->flashError("Você não pode deletar comentários de outras pessoas");

            return redirect('/admin/posts');
        }

        $this->flashConfirmation();
        $comment->delete();
        //flash()->overlay('Comment deleted successfully.');
        //$this->flashSuccess("Comentário excluido com sucesso!");

        return redirect('/admin/comments');
    }
}
