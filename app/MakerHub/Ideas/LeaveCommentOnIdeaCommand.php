<?php namespace MakerHub\Ideas;

class LeaveCommentOnIdeaCommand {

    /**
     * @var string
     */
    public $user_id;

    /**
     * @var string
     */
    public $idea_id;

    /**
     * @var string
     */
    public $body;

    /**
     * @param string user_id
     * @param string idea_id
     * @param string body
     */
    public function __construct($user_id, $idea_id, $body)
    {
        $this->user_id = $user_id;
        $this->idea_id = $idea_id;
        $this->body = $body;
    }

}