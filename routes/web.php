<?php

Route::get('/{livro}','LivroController@listar');

Route::get('/livro/criar','LivroController@criar');
