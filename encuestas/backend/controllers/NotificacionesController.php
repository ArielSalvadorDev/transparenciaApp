<?php
class NotificacionesController
{
    //lista las notificaciones filtrandolas por id
    public function listarNotificacionesSubidasController($idUsuario)
    {
        $respuesta = NotificacionesModel::listarNotificacionesSubidasModel($idUsuario);
        foreach ($respuesta as $key => $value)
        {
            echo '  <li class="notification notification-unread">
                        <a href="index.php?action=documento&n_doc='.$value['n_doc'].'">
                            <div class="image"><img src="'.$value['foto'].'" alt="Avatar"></div>
                            <div class="notification-info">
                                <div class="text"><span class="user-name">'.$value['nombres'].' '.$value['apellidos'].'</span><small>.</small></div>
                                <span class="date">'.$value['contenido'].'</span>
                            </div>
                        </a>
                    </li>';
        }
    }
    public function totalNotificacionesSubidasController($idUsuario)
    {
        $respuesta = NotificacionesModel::totalNotificacionesSubidasModel($idUsuario);
        return (int)$respuesta['total'];
    }
    //CAMBIA EL STATUS DE LA NOTIFICACION PARA QUE CAMBIE A LEIDA Y YA NO APAREZCA COMO NOTIFICAICON NUEVA
    public function cambiarStatusController($n_doc)
    {
        $respuesta = NotificacionesModel::cambiarStatusModel('mensajes', $n_doc);
    }
    //DEVUELVE LA DESCRIPCION DE LA NOTIFICACION PARA COMPARAR LAS NOTIFICACIONES
    public function descNotificacionController($n_doc)
    {
        $respuesta = NotificacionesModel::descNotificacionModel('mensajes', $n_doc);
        return $respuesta;
    }
    //ELIMINAR NOTIFICACIONES 
    public function eliminarMsjController($n_doc)
    {
        $respuesta = NotificacionesModel::eliminarMsjModel('mensajes', $n_doc);
    }
}