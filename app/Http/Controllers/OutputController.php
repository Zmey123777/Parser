<?php

namespace App\Http\Controllers;

use App\Models\News;
use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

/**
 * Fetch news from DB
 */
class OutputController extends Controller
{
    /**
     * Fetch news records from DB to a collection
     *
     * @param Request $request
     * @return Collection|\Illuminate\Http\Response
     */
    public function outputNews(Request $request): Collection|\Illuminate\Http\Response
    {
        try {
            $sortColumn = $request->query('sort') ?? 'id';
            $columnPresented = $request->query('columns');
            $columnArray = $columnPresented ? explode(',', $columnPresented) : '*';
            return response(['status' => 200 , 'data' => News::orderBy($sortColumn, 'DESC')
                ->get($columnArray)])->header('Content-type', 'application/json; charset=UTF-8');
        } catch (\Exception | \Error $error ) {
            return response(['status' => 417, 'message' =>$error->getMessage()],417);

        }
    }
}
