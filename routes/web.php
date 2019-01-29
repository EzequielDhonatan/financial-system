<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function() {

    $this->post('withdrawn', 'BalanceController@withdrawnStore')->name('withdrawn.store');
    $this->get('withdrawn', 'BalanceController@withdrawn')->name('balance.withdrawn');

    $this->post('deposit', 'BalanceController@depositStore')->name('deposit.store');
    $this->get('deposit', 'BalanceController@deposit')->name('balance.deposit');
    $this->get('balance', 'BalanceController@index')->name('admin.balance');

    $this->get('/', 'AdminController@index')->name('admin.home'); # ADMIN

});

$this->get('/', 'Site\SiteController@index')->name('home'); # HOME

Auth::routes();
