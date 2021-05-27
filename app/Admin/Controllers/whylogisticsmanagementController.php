<?php

namespace App\Admin\Controllers;

use App\whylogisticsmanagement;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class whylogisticsmanagementController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'whylogisticsmanagement';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new whylogisticsmanagement());

        $grid->column('id', __('Id'));
        $grid->column('why_logistics', __('Why logistics'));
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
        $show = new Show(whylogisticsmanagement::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('why_logistics', __('Why logistics'));
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
        $form = new Form(new whylogisticsmanagement());

        $form->text('why_logistics', __('Why logistics'));

        return $form;
    }
}
