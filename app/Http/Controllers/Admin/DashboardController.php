<?php namespace Starter\Http\Controllers\Admin;

class DashboardController extends Controller {

	/**
	 * Create a new controller instance.
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
    public function index()
    {
        return view('admin/dashboard');
    }

}
