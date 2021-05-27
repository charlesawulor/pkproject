<?php

namespace App\Admin\Controllers;

use App\whyaimachinelearn;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class whyaimachinelearnController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'whyaimachinelearn';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new whyaimachinelearn());

        $grid->column('id', __('Id'));
        $grid->column('why_aimachinelearn', __('Why aimachinelearn'));
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
        $show = new Show(whyaimachinelearn::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('why_aimachinelearn', __('Why aimachinelearn'));
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
        $form = new Form(new whyaimachinelearn());

        $form->text('why_aimachinelearn', __('Why aimachinelearn'));

        return $form;
    }
}
