<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin'], function() {
    $this->get('admin', 'AdminController@index')->name('admin.home'); # ADMIN
});

$this->get('/', 'Site\SiteController@index')->name('home'); # HOME

Auth::routes();
