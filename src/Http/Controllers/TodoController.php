<?php
namespace Elc\Todo\Http\Controllers;

use Elc\Todo\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use Elc\Todo\Repositories\TodoRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class TodoController extends Controller
{
	private $todo;
	public function __construct(TodoRepository $todo)
	{
		$this->todo = $todo;
	}
	public function index()
	{
		
		
		$todos = $this->todo->getDesc();
		return view('todo::index', compact('todos'));
		
		// return json
		// return $this->todo->getDesc();
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

        $todo = $this->todo->create($input);

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
        //
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
        $this->todo->delete($id);
        return redirect(route('todo.index'));
    }
}