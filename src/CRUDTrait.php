<?php namespace CI4Xpander_CRUD;

trait CRUDTrait
{
    protected $_isCRUD = true;

    public function index()
    {}

    public function data()
    {}

    public function create()
    {}

    protected function _action_create()
    {}

    public function update()
    {}

    protected function _action_update()
    {}

    public function delete()
    {}

    protected function _action_delete()
    {}
}