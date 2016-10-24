<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - English
*
* Author: Ben Edmunds
*         ben.edmunds@gmail.com
*         @benedmunds
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.14.2010
*
* Description:  English language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful']            = 'Cuenta Correctamente creada';
$lang['account_creation_unsuccessful']          = 'No se puede crear la cuenta';
$lang['account_creation_duplicate_email']       = 'Email ya existe o no válido';
$lang['account_creation_duplicate_identity']    = 'Identificador existente o Inválido';
$lang['account_creation_missing_default_group'] = 'Grupo por defecto no asignado';
$lang['account_creation_invalid_default_group'] = 'Nombre de Grupo no válido';


// Password
$lang['password_change_successful']          = 'Password correctamente cambiado';
$lang['password_change_unsuccessful']        = 'No se puede cambiar el Password';
$lang['forgot_password_successful']          = 'Restablecer contraseña Correo electrónico enviado';
$lang['forgot_password_unsuccessful']        = 'No es posible restablecer contraseña';

// Activation
$lang['activate_successful']                 = 'Cuenta activada';
$lang['activate_unsuccessful']               = 'No se puede activar la cuenta';
$lang['deactivate_successful']               = 'Duenta Desactvada';
$lang['deactivate_unsuccessful']             = 'No se puede desactivar la cuenta';
$lang['activation_email_successful']         = 'email de activación enviado';
$lang['activation_email_unsuccessful']       = 'No se puede enviar el email de activación';

// Login / Logout
$lang['login_successful']                    = 'Acceso concedido';
$lang['login_unsuccessful']                  = 'Datos de acceso incorrectos';
$lang['login_unsuccessful_not_active']       = 'La cuenta está inactiva';
$lang['login_timeout']                       = 'Temporalemnte fuera de servicio.  Prueba más tarde.';
$lang['logout_successful']                   = 'Desconectado correctamente';

// Account Changes
$lang['update_successful']                   = 'Información de la cuenta atualizada';
$lang['update_unsuccessful']                 = 'No es posible actulizar los datos';
$lang['delete_successful']                   = 'Usuario Borrado';
$lang['delete_unsuccessful']                 = 'No es posible borrar el usuario';

// Groups
$lang['group_creation_successful']           = 'Grupo creado correctamente';
$lang['group_already_exists']                = 'El nombre del grupo ya existe';
$lang['group_update_successful']             = 'Detalles del grupo actualizado';
$lang['group_delete_successful']             = 'Grupo borrado';
$lang['group_delete_unsuccessful']           = 'No es posible borrar el grupo';
$lang['group_delete_notallowed']             = 'No puede borrar el grupo de administradores';
$lang['group_name_required']                 = 'El nombre del grupo es requerido';
$lang['group_name_admin_not_alter']          = 'El nombre del grupo de administradores no puede ser cambiado';

// Activation Email
$lang['email_activation_subject']            = 'Activación de cuenta';
$lang['email_activate_heading']              = 'cuenta activada por %s';
$lang['email_activate_subheading']           = 'por favor Clik para %s.';
$lang['email_activate_link']                 = 'Activa tu cuenta';

// Forgot Password Email
$lang['email_forgotten_password_subject']    = 'Verificación de Contraseña olvidada';
$lang['email_forgot_password_heading']       = 'Password cambiado por %s';
$lang['email_forgot_password_subheading']    = 'Pulsa este link para %s.';
$lang['email_forgot_password_link']          = 'Cambiar password';

// New Password Email
$lang['email_new_password_subject']          = 'Nuevo Password';
$lang['email_new_password_heading']          = 'Nuevo Password para %s';
$lang['email_new_password_subheading']       = 'Tu password ha sido cambiado por: %s';
