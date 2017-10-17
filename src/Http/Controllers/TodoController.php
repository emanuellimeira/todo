<?php
namespace Elc\Todo\Http\Controllers;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use Prettus\Repository\Criteria\RequestCriteria;
use Elc\Todo\Repositories\TodoRepositoryInterface;

class TodoController extends Controller
{
	private $todoRepo;
	public function __construct(TodoRepositoryInterface $todoRepo)
	{
		$this->todoRepo = $todoRepo;
	}
	public function index()
	{
        $todos = $this->todoRepo->getDesc();
		return view('todo::index', compact('todos'));
		
		// return json
		// return $this->todoRepo->getDesc();
	}

	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        //$t = $this->todo->create()
        //return $request;

        $input = $request->all();

        $todo = $this->todoRepo->create($input);

        //Flash::success('Feed saved successfully.');

        return redirect(route('todo.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = $this->todoRepo->getById($id);
        return view('todo::show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->todoRepo->delete($id);

        Flash::success('Feed deleted successfully.');

        return redirect(route('todo.index'));
    }
}