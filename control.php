<?

$_URL = $_GET['url'];



switch ($_URL){
    case 'index':
        $_VIEW = $_URL;
        break;
    case 'catalogo':
        $_VIEW = $_URL;
        break;
    case 'personaliza_paso_uno':
        $_VIEW = $_URL;
        break;
    case 'producto_detalle':
        $_VIEW = $_URL;
        break;
    case 'personaliza_paso_dos':
        $_VIEW = $_URL;
        break;
    case 'personaliza_paso_tres':
        $_VIEW = $_URL;
        break;
    case 'personaliza_paso_cuatro':
        $_VIEW = $_URL;
        break;
    case 'personaliza_uno':
        $_VIEW = $_URL;
        break;
    case 'personaliza_dos':
        $_VIEW = $_URL;
        break;
    case 'personaliza_tres':
        $_VIEW = $_URL;
        break;
    case 'personaliza_cuatro':
        $_VIEW = $_URL;
        break;
    case 'cita_uno':
        $_VIEW = $_URL;
        break;
    case 'cita_dos':
        $_VIEW = $_URL;
        break;
    case 'cita_tres':
        $_VIEW = $_URL;
        break;
    case 'cita_cuatro':
        $_VIEW = $_URL;
        break;
    case 'contacto':
        $_VIEW = $_URL;
        break;
    case 'tyc':
        $_VIEW = $_URL;
        break;
    case 'nosotros':
        $_VIEW = $_URL;
        break;
    case 'fac':
        $_VIEW = $_URL;
        break;
    case 'blog':
        $_VIEW = $_URL;
        break;
    case 'blog_item':
        $_CONTAINER= false;
        $_VIEW = $_URL;
        break;
    default:
        $_VIEW = '404';
        break;
}



//exit(0);



include_once 'layaut.php';


?>