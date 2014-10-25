<?php

class AthletesController extends \BaseController {

	/**
	 * Display a listing of athletes
	 *
	 * @return Response
	 */
	public function index()
	{

        return  View::make('athletes.index');
	}

	/**
	 * Show the form for creating a new athlete
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('athletes.create');
	}

	/**
	 * Store a newly created athlete in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $ath = new Athlete();

        $firstname = Input::all();

        Athlete::create($firstname);

	/*	$validator = Validator::make($data = Input::all(), Athlete::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Athlete::create($data);

		return Redirect::route('athletes.index');
	*/

        return $firstname;
	}

	/**
	 * Display the specified athlete.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$athlete = Athlete::findOrFail($id);

		return View::make('athletes.show', compact('athlete'));
	}

	/**
	 * Show the form for editing the specified athlete.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$athlete = Athlete::find($id);

		return View::make('athletes.edit', compact('athlete'));
	}

	/**
	 * Update the specified athlete in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$athlete = Athlete::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Athlete::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$athlete->update($data);

		return Redirect::route('athletes.index');
	}

	/**
	 * Remove the specified athlete from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Athlete::destroy($id);

		return Redirect::route('athletes.index');
	}

}
