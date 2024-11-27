export function getServer(){

    const server = window.location;
    let BASE_URI;
    let PATH_NAME;

    switch (server.hostname) {
        case 'localhost':
            PATH_NAME = server.pathname.split('/')[1] + '/';
            BASE_URI = server.origin + '/' + PATH_NAME;
            break;
        case 'sitespublinet1.com.br':
            PATH_NAME = server.pathname.split('/')[2] + '/';
            BASE_URI = server.origin + '/projetos/' + PATH_NAME;
            break;
        default:
            PATH_NAME = '/';
            BASE_URI = server.origin + PATH_NAME;
            break;
    }

    return { BASE_URI, PATH_NAME };
}