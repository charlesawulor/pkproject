<?php

namespace App\Admin\Controllers;

use App\legacy;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LegacyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'legacy';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new legacy());

        $grid->column('id', __('Id'));
        $grid->column('volume', __('Volume'));
        $grid->column('topic', __('Topic'));
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
        $show = new Show(legacy::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('volume', __('Volume'));
        $show->field('topic', __('Topic'));
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
        $form = new Form(new legacy());
          

        $form->text('volume', __('Volume'));
        $form->text('topic', __('Topic'));


        return $form;
    }
}
