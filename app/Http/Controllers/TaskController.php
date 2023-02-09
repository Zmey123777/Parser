<?php

namespace App\Http\Controllers;

use App\Models\News;

/**
 * Class for scheduler
 */
class TaskController extends Controller
{
    /**
     * Make objects of this class callable
     *
     * @param News $parser
     * @return void
     */
    public function __invoke(News $parser): void
    {
        $parser->processNews();
    }
}

