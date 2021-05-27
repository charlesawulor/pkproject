<?php

namespace App\Admin\Controllers;

use App\product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

use App\category;

class productController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new product());

        $grid->column('id', __('Id'));
        $grid->column('category_id', __('Category'));
        $grid->column('category_name', __('Category'));
        $grid->column('image', __('Image'));
        $grid->column('product_name', __('Product name'));
        $grid->column('product_description', __('Product description'));
        $grid->column('product_price', __('Product price'));
        $grid->column('quantity', __('Quantity'));
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
        $show = new Show(product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category'));
        $show->field('category_name', __('Category'));
        $show->field('image', __('Image'));
        $show->field('product_name', __('Product name'));
        $show->field('product_description', __('Product description'));
        $show->field('product_price', __('Product price'));
        $show->field('quantity', __('Quantity'));
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
        $form = new Form(new product());

        $form->select('category_id')->options(category::all()->pluck('category','id'));
        $form->select('category_name')->options(category::all()->pluck('category','category'));
        $form->image('image', __('Image'));
        $form->text('product_name', __('Product name'));
        $form->textarea('product_description', __('Product description'));
        $form->text('product_price', __('Product price'));
        $form->text('quantity', __('Quantity'));

        return $form;
    }
}
