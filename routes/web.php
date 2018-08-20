<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    $this->get('ferramentas_cadastradas', 'FerramentaController@index')->name('admin.ferramenta');
    
    $this->get('/', 'AdminController@index')->name('admin.home');
});

$this->get('/', 'Site\SiteController@index')->name('home');


Auth::routes();