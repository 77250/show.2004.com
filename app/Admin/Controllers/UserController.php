<?php

namespace App\Admin\Controllers;

use App\Model\UserModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'UserModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new UserModel());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('tel', __('Tel'));
        $grid->column('ega', __('Ega'));
        $grid->column('cname', __('Cname'));

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
        $show = new Show(UserModel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('tel', __('Tel'));
        $show->field('ega', __('Ega'));
        $show->field('cname', __('Cname'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new UserModel());

        $form->text('name', __('Name'));
        $form->text('tel', __('Tel'));
        $form->text('ega', __('Ega'));
        $form->text('cname', __('Cname'));

        return $form;
    }
}
