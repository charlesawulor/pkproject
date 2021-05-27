<?php

namespace App\Admin\Controllers;

use App\whyaviationmanagement;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class whyaviationmanagementController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'whyaviationmanagement';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new whyaviationmanagement());

        $grid->column('id', __('Id'));
        $grid->column('why_aviation', __('Why Aviation Management'));
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
        $show = new Show(whyaviationmanagement::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('why_aviation', __('Why Aviation Management'));
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
        $form = new Form(new whyaviationmanagement());

        $form->text('why_aviation', __('Why Aviation Management'));

        return $form;
    }
}
