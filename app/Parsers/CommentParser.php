<?php


namespace App\Parsers;

use App\Repos\CommentRepo;
use Goutte\Client;
use Illuminate\Support\Facades\Log;

class CommentParser
{
    const PAGE_PARSE_LIMIT = 10;
    const REQ_SLEEP_TIME = 1;
    /**
     * @var Client
     */
    private $client;
    /**
     * @var CommentRepo
     */
    public $repo;

    public function __construct()
    {
        $this->client = new Client();
        $this->repo = new CommentRepo();
    }

    public function parse($method, $url, $page)
    {
        while ($page < $this::PAGE_PARSE_LIMIT && !$this->repo->alreadyProcessedCommentFound) {
            sleep($this::REQ_SLEEP_TIME);
            try {
                $crawler = $this->client->request($method, $url . $page);
                $crawler->filter('div[class^="ty-discussion-post"]')->each(function ($node) {
                    $id = preg_replace('/[^0-9]/', '', $node->attr('id'));
                    if (!empty($id)) {
                        if (empty($this->repo->getStoredMaxCommentID())) {
                            //First run
                            $breakPoint = true;
                            if (!$this->repo->hasComment($id)) {
                                $this->repo->addComment($id, $node->text());
                            }
                        } elseif ($id > $this->repo->getStoredMaxCommentID()) {
                            $this->repo->addComment($id, $node->text());
                        }
                    }
                });
                $page++;
            } catch (\Exception $exception) {
                Log::error($exception->getMessage());
                break;
            }
        }
        if (!empty($this->repo->getCurrentMaxCommentID())) {
            $this->repo->setStoredMaxCommentID($this->repo->getCurrentMaxCommentID());

        }
    }
}
