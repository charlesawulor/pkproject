<?php

namespace App\Admin\Controllers;

use App\phdcareerprospectaviationmanagement;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class phdcareerprospectaviationmanagementController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'phdcareerprospectaviationmanagement';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new phdcareerprospectaviationmanagement());

        $grid->column('id', __('Id'));
        $grid->column('career_prospect', __('Career prospect'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(phdcareerprospectaviationmanagement::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('career_prospect', __('Career prospect'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new phdcareerprospectaviationmanagement());

        $form->text('career_prospect', __('Career prospect'));

        return $form;
    }
}
