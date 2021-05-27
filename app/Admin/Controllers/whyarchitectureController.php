<?php

namespace App\Admin\Controllers;

use App\whyarchitecture;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class whyarchitectureController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'whyarchitecture';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new whyarchitecture());

        $grid->column('id', __('Id'));
        $grid->column('why_architecture', __('Why architecture'));
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
        $show = new Show(whyarchitecture::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('why_architecture', __('Why architecture'));
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
        $form = new Form(new whyarchitecture());

        $form->text('why_architecture', __('Why architecture'));

        return $form;
    }
}
