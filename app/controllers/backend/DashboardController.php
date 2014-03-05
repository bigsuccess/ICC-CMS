<?php namespace Backend;
use BackendController;
use View;
class DashboardController extends BackendController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return View::make('backend.dashboards.index');
    }

}
