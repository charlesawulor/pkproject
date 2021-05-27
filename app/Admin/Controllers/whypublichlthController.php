<?php

namespace App\Admin\Controllers;

use App\whypublichlth;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class whypublichlthController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'whypublichlth';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new whypublichlth());

        $grid->column('id', __('Id'));
        $grid->column('why_public_health', __('Why public health'));
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
        $show = new Show(whypublichlth::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('why_public_health', __('Why public health'));
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
        $form = new Form(new whypublichlth());

        $form->text('why_public_health', __('Why public health'));

        return $form;
    }
}
