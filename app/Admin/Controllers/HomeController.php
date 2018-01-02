<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Dashboard');
            $content->description('Description...');

            $content->row(Dashboard::title());


            $content->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });

            /**
             * add chartJs
             */
            /*$content->header('Chart');
            $content->description('chartJs');
            $content->row(view('admin.chart.bar'));

            $content->header('Chart');
            $content->description('chartJs-radar');
            $content->row(view('admin.chart.radar'));*/


            $content->row(function (Row $row){
                $row->column(4,function (Column $column){

                    $column->row(view('admin.chart.bar'));
                });
                $row->column(4,function (Column $column){
                    $column->row(view('admin.chart.radar'));
                });
                $row->column(4,function (Column $column){
                    $column->row(view('admin.chart.pie'));
                });
            });


        });
    }
}
