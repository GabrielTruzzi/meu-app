<?php

Route::get('/livro','LivroController@listar');

Route::get('/livro/criar','LivroController@criar');

Route::post('/livro/criar','LivroController@salvar');

Route::get('/pessoa','PessoaController@listar');

Route::get('/pessoa/criar','PessoaController@criar');

Route::post('/pessoa/criar','PessoaController@salvar');