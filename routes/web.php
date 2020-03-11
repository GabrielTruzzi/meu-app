<?php

Route::get('/','LivroController@listar');

Route::get('/livro/criar','LivroController@criar');

Route::post('/livro/criar','LivroController@salvar');