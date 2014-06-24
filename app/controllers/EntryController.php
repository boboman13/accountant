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

		// Generate balance; note, expenses are negative, so add.
		$balance = $income + $expenses;

		return View::make('all_entries')->with(array(
			'entries' => $entries,
			'balance' => $balance,
			'expenses' => $expenses,
			'income' => $income
			));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('new_entry');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validator = Validator::make($input,
			array(
				'date' => 'required',
				'difference' => 'required',
				'invoice_id' => '',
				'description' => 'required',
				'notes' => ''
				)
			);

		if ($validator->fails()) {
			echo 'Uh oh, you bad. Error: ' . var_dump($validator->messages()) . '.';
		} else {
			$entry = new Entry();
			$entry->date = Input::get('date');
			$entry->difference = Input::get('difference');
			$entry->invoice_id = Input::get('invoice_id');
			$entry->description = Input::get('description');
			$entry->notes = Input::get('notes');

			$entry->save();

			return Redirect::to('/')->with('result', 'Entry created.');
		}
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
		$entry = Entry::find($id);
		return View::make('edit_entry')->with(array(
			'date' => $entry->date,
			'difference' => $entry->difference,
			'invoice_id' => $entry->invoice_id,
			'description' => $entry->description,
			'notes' => $entry->notes,
			'id' => $entry->id,
			));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$entry = Entry::find($id);
		$entry->date = Input::get('date');
		$entry->difference = Input::get('difference');
		$entry->invoice_id = Input::get('invoice_id');
		$entry->description = Input::get('description');
		$entry->notes = Input::get('notes');

		$entry->save();

		return Redirect::to('/')->with('result', 'Edited successfully.');
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
