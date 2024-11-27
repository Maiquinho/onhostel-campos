<?php

use core\Router;

/*
/-------------------------------------------------------------------------------
/ Rotas da Aplicação
/-------------------------------------------------------------------------------
/
/ Abaixo estão todas as rotas cadastradas, na primera sessão estão as rotas do
/ site, logo em seguida estão localizadas as rotas da área admin.
/
*/


// Inicialização do roteamento
$router = new Router();


/*
/-------------------------------------------------------------------------------
/ Rotas do Site
/-------------------------------------------------------------------------------
*/

// Página Home
$router->get('/', 'SiteController@index');

// Página Empresa
$router->get('/o-hostel', 'SiteController@about');


// Informações (busca uma página de SEO final)
$router->get('/informacoes/{slug}', 'SiteController@article');

// Informações (busca uma página de SEO final)
$router->post('/informacoes/{slug}', 'SiteController@articleAction');

// Informações (busca todas as páginas de SEO)
$router->get('/informacoes', 'SiteController@articles');


// Página Galeria
$router->get('/galeria', 'SiteController@gallery');

// Página Reservas
// $router->get('/reservas', 'SiteController@booking');


// Página de obrigado
$router->get('/obrigado', 'SiteController@contactThanks');

// Página como chegar
$router->get('/como-chegar-no-hostel', 'SiteController@howToArrive');

// Página de contato
$router->get('/contato', 'SiteController@contact');

// Página de contato (valida o POST enviado do formulário)
$router->post('/contato', 'SiteController@contactAction');



// Página Termos e condições
$router->get('/termos-e-condicoes', 'SiteController@termsAndConditions');

// Página Política de Privacidade
$router->get('/politica-de-privacidade', 'SiteController@privacyPolitics');

// Página Mapa do Site
$router->get('/mapa-do-site', 'SiteController@sitemap');



/*
/-------------------------------------------------------------------------------
/ Rotas do Admin
/-------------------------------------------------------------------------------
*/


// Tela de Login
$router->get('/admin/login', 'LoginAdmController@signin');

// Tela de Login (Valida o POST com os dados de login)
$router->post('/admin/login', 'LoginAdmController@signinAction');



// Logout (efetua o logout)
$router->get('/admin/logout', 'LogoutAdmController@signout');

// Tela de Dashboard (Home)
$router->get('/admin/', 'AdminController@index');

// Tela de Perfil
$router->get('/admin/profile', 'AdminController@profile');



// Assets (deleta o asset de acordo com o {id})
$router->get('/admin/assets/{id}/delete', 'AssetController@deleteAsset');
// Assets (edita o asset de acordo com o {id})
$router->get('/admin/assets/{id}/edit', 'AssetController@editAsset');
// Assets (recebe os dados do POST do asset editado)
$router->post('/admin/assets/{id}/edit', 'AssetController@editAssetAction');
// Assets (pega os dados de visualização do asset de acordo com o {id})
$router->get('/admin/assets/{id}/', 'AssetController@getAsset');
// Assets (tela de cadastro de um novo asset)
$router->get('/admin/assets/new', 'AssetController@newAsset');
// Assets (recebe o POST com os dados da tela de cadastro do asset)
$router->post('/admin/assets/new', 'AssetController@newAssetAction');
// Assets (mostra todos)
$router->get('/admin/assets', 'AssetController@index');



// Banners (deleta o banner de acordo com o {id})
$router->get('/admin/banners/{id}/delete', 'BannerController@deleteBanner');
// Banners (edita o banner de acordo com o {id})
$router->get('/admin/banners/{id}/edit', 'BannerController@editBanner');
// Banners (recebe os dados do POST do banner editado)
$router->post('/admin/banners/{id}/edit', 'BannerController@editBannerAction');
// Banners (pega os dados de visualização do banner de acordo com o {id})
$router->get('/admin/banners/{id}/', 'BannerController@getBanner');
// Banners (tela de cadastro de um novo banner)
$router->get('/admin/banners/new', 'BannerController@newBanner');
// Banners (recebe o POST com os dados da tela de cadastro do banner)
$router->post('/admin/banners/new', 'BannerController@newBannerAction');
// Banners (mostra todos)
$router->get('/admin/banners', 'BannerController@index');



// Galeria (deleta a galeria de acordo com o {id})
$router->get('/admin/gallery/{id}/delete', 'GalleryController@deleteGallery');
// Galeria (edita a galeria de acordo com o {id})
$router->get('/admin/gallery/{id}/edit', 'GalleryController@editGallery');
// Galeria (recebe os dados do POST da galeria editado)
$router->post('/admin/gallery/{id}/edit', 'GalleryController@editGalleryAction');
// Galeria (pega os dados de visualização da galeria de acordo com o {id})
$router->get('/admin/gallery/{id}/', 'GalleryController@getGallery');
// Galeria (tela de cadastro de uma nova galeria)
$router->get('/admin/gallery/new', 'GalleryController@newGallery');
// Galeria (recebe o POST com os dados da tela de cadastro da galeria)
$router->post('/admin/gallery/new', 'GalleryController@newGalleryAction');
// Galeria (mostra todas)
$router->get('/admin/gallery', 'GalleryController@index');



// Destaques (deleta o destaque de acordo com o {id})
$router->get('/admin/highlights/{id}/delete', 'HighlightController@deleteHighlight');
// Destaques (edita o destaque de acordo com o {id})
$router->get('/admin/highlights/{id}/edit', 'HighlightController@editHighlight');
// Destaques (recebe os dados do POST do destaque editado)
$router->post('/admin/highlights/{id}/edit', 'HighlightController@editHighlightAction');
// Destaques (pega os dados de visualização do destaque de acordo com o {id})
$router->get('/admin/highlights/{id}/', 'HighlightController@getHighlight');
// Destaques (tela de cadastro de um novo destaque)
$router->get('/admin/highlights/new', 'HighlightController@newHighlight');
// Destaques (recebe o POST com os dados da tela de cadastro do destaque)
$router->post('/admin/highlights/new', 'HighlightController@newHighlightAction');
// Destaques (mostra todos)
$router->get('/admin/highlights', 'HighlightController@index');



// Depoimentos (deleta o depoimento de acordo com o {id})
$router->get('/admin/testimonials/{id}/delete', 'TestimonialController@deleteTestimonial');
// Depoimentos (edita o depoimento de acordo com o {id})
$router->get('/admin/testimonials/{id}/edit', 'TestimonialController@editTestimonial');
// Depoimentos (recebe os dados do POST do depoimento editado)
$router->post('/admin/testimonials/{id}/edit', 'TestimonialController@editTestimonialAction');
// Depoimentos (pega os dados de visualização do depoimento de acordo com o {id})
$router->get('/admin/testimonials/{id}/', 'TestimonialController@getTestimonial');
// Depoimentos (tela de cadastro de um novo depoimento)
$router->get('/admin/testimonials/new', 'TestimonialController@newTestimonial');
// Depoimentos (recebe o POST com os dados da tela de cadastro do depoimento)
$router->post('/admin/testimonials/new', 'TestimonialController@newTestimonialAction');
// Depoimentos (mostra todos)
$router->get('/admin/testimonials', 'TestimonialController@index');



// Páginas de SEO (deleta a página de SEO de acordo com a {slug})
$router->get('/admin/pages/{slug}/delete', 'PageController@deletePage');
// Páginas de SEO (edita a página de SEO de acordo com a {slug})
$router->get('/admin/pages/{slug}/edit', 'PageController@editPage');
// Páginas de SEO (recebe os dados do POST da página de SEO editada)
$router->post('/admin/pages/{slug}/edit', 'PageController@editPageAction');
// Páginas de SEO (pega os dados de visualização da página de SEO de acordo com a {slug})
$router->get('/admin/pages/{slug}/', 'PageController@getPage');
// Páginas de SEO (tela de cadastro de um nova página de SEO)
$router->get('/admin/pages/new', 'PageController@newPage');
// Páginas de SEO (recebe o POST com os dados da tela de cadastro da página de SEO)
$router->post('/admin/pages/new', 'PageController@newPageAction');
// Páginas de SEO (mostra todas)
$router->get('/admin/pages', 'PageController@index');



// // Blog (deleta o post de acordo com a {slug})
// $router->get('/admin/blog/{slug}/delete', 'PostController@deletePost');
// // Blog (edita o post de acordo com a {slug})
// $router->get('/admin/blog/{slug}/edit', 'PostController@editPost');
// // Blog (recebe os dados por POST do post editado)
// $router->post('/admin/blog/{slug}/edit', 'PostController@editPostAction');
// // Blog (pega os dados de visualização do post de acordo com a {slug})
// $router->get('/admin/blog/{slug}/', 'PostController@getPost');
// // Blog (tela de cadastro de um novo post)
// $router->get('/admin/blog/new', 'PostController@newPost');
// // Blog (recebe o POST com os dados da tela de cadastro do post)
// $router->post('/admin/blog/new', 'PostController@newPostAction');
// // Blog (mostra todas)
// $router->get('/admin/blog', 'PostController@index');



// Usuários (deleta o usuário de acordo com o {username})
$router->get('/admin/users/{username}/delete', 'UserController@deleteUser');
// Usuários (edita o usuário de acordo com o {username})
$router->get('/admin/users/{username}/edit', 'UserController@editUser');
// Usuários (recebe os dados do POST do usuário editado)
$router->post('/admin/users/{username}/edit', 'UserController@editUserAction');
// Usuários (pega os dados de visualização do usuário de acordo com o {username})
$router->get('/admin/users/{username}/', 'UserController@getUser');
// Usuários (tela de cadastro de um novo usuário)
$router->get('/admin/users/new', 'UserController@newUser');
// Usuários (recebe o POST com os dados da tela de cadastro do usuário)
$router->post('/admin/users/new', 'UserController@newUserAction');
// Usuários (mostra todos)
$router->get('/admin/users', 'UserController@index');



/*
/-------------------------------------------------------------------------------
/ Rotas da API
/-------------------------------------------------------------------------------
*/


// Produtos (mostra todos)
$router->get('/api/searchbar', 'ApiController@index');

// Produtos (mostra todos)
$router->get('/api/products', 'ApiController@getAllProducts');

// Contacts (mostra todos)
$router->get('/api/contacts', 'ApiController@contacts');