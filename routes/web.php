<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function() {

    $this->post('deposit', 'BalanceController@depositStore')->name('deposit.store'); # BALANCE STORE
    $this->get('deposit', 'BalanceController@deposit')->name('balance.deposit'); # BALANCE DEPOSIT
    $this->get('balance', 'BalanceController@index')->name('admin.balance'); # BALANCE

    $this->get('/', 'AdminController@index')->name('admin.home'); # ADMIN

});

$this->get('/', 'Site\SiteController@index')->name('home'); # HOME

Auth::routes();
