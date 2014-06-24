<?php

class EntryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$entries = Entry::all();

		$expenses = 0;
		$income = 0;

		// Build up totals
		foreach ($entries as $entry) {
			// if income
			if ($entry->difference > 0) {
				$income += $entry->difference;
			} else {
				// if not
				$expenses += $entry->difference;
			}
		}

		// Generate balance
		$balance = $income - $expenses;

		return View::make('all_entries')->with(array(
			'entries' => $entries,
			'balance' => $balance,
			'expenses' => $expenses,
			'income' => $income
			));
		//return View::make('all_entries')->with('entries', $entries);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$entry = Entry::find($id);
		$entry->delete();

		return Redirect::to('/')->with('result', 'Deletion completed.');
	}


}
