<?php


namespace App\Repos;


use Illuminate\Support\Facades\Storage;

class CommentRepo
{
    protected $comments = [];
    public $alreadyProcessedCommentFound = false;
    public $currentStoredMaxCommentID = 0;
    public $currentMaxCommentID = 0;

    public function addComment($id, $comment)
    {
        $this->comments[$id] = $comment;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function hasComment($id)
    {
        $res = !empty($this->comments[$id]);
        $this->alreadyProcessedCommentFound = $res;
        return $res;
    }

    public function getCurrentMaxCommentID()
    {
        krsort($this->comments);
        return key($this->comments) ?? 0;
    }

    public function setCurrentMaxCommentID($id)
    {
        return $this->currentMaxCommentID = $id;
    }

    public function getStoredMaxCommentID()
    {
        if (empty($this->currentStoredMaxCommentID)) {
            if (Storage::disk('local')->exists('stored_max_comment_id.dat')) {
                $storedMacCommentID = (int)Storage::get('stored_max_comment_id.dat');;
            } else {
                $storedMacCommentID = 0;
            }
            $this->currentStoredMaxCommentID = $storedMacCommentID;
        }
        return $this->currentStoredMaxCommentID;
    }

    public function setStoredMaxCommentID($id)
    {
        return Storage::disk('local')->put('stored_max_comment_id.dat', $id);
    }
}
