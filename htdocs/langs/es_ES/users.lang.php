<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$users = array(
		'CHARSET' => 'UTF-8',
		'UserCard' => 'Ficha usuario',
		'ContactCard' => 'Ficha contacto',
		'GroupCard' => 'Ficha grupo',
		'NoContactCard' => 'No hay ficha entre los contactos',
		'Permission' => 'Derecho',
		'Permissions' => 'Derechos',
		'EditPassword' => 'Modificar contraseña',
		'SendNewPassword' => 'Enviar nueva contraseña',
		'ReinitPassword' => 'Generar nueva contraseña',
		'PasswordChangedTo' => 'Contraseña modificada en: %s',
		'SubjectNewPassword' => 'Su contraseña Dolibarr',
		'AvailableRights' => 'Permisos disponibles',
		'OwnedRights' => 'Permisos tenidos',
		'GroupRights' => 'Permisos de grupo',
		'UserRights' => 'Permisos usuario',
		'UserGUISetup' => 'Interfaz usuario',
		'DisableUser' => 'Desactivar',
		'DisableAUser' => 'Desactivar un usuario',
		'DeleteUser' => 'Eliminar',
		'DeleteAUser' => 'Eliminar un usuario',
		'DisableGroup' => 'Desactivar',
		'DisableAGroup' => 'Desactivar un grupo',
		'EnableAUser' => 'Reactivar un usuario',
		'EnableAGroup' => 'Reactivar un grupo',
		'DeleteGroup' => 'Eliminar',
		'DeleteAGroup' => 'Eliminar un grupo',
		'ConfirmDisableUser' => '¿Está seguro de querer desactivar al usuario <b>%s</b> ?',
		'ConfirmDisableGroup' => '¿Está seguro de querer desactivar al grupo <b>%s</b> ?',
		'ConfirmDeleteUser' => '¿Está seguro de querer eliminar al usuario <b>%s</b> ?',
		'ConfirmDeleteGroup' => '¿Está seguro de querer eliminar al grupo <b>%s</b> ?',
		'ConfirmEnableUser' => '¿Está seguro de querer reactivar al usuario <b>%s</b> ?',
		'ConfirmEnableGroup' => '¿Está seguro de querer reactivar al grupo <b>%s</b> ?',
		'ConfirmReinitPassword' => '¿Está seguro de querer generar una nueva contraseña al usuario <b>%s</b> ?',
		'ConfirmSendNewPassword' => '¿Está seguro de querer enviar una nueva contraseña al usuario <b>%s</b> ?',
		'NewUser' => 'Nuevo usuario',
		'CreateUser' => 'Crear usuario',
		'SearchAGroup' => 'Buscar un grupo',
		'SearchAUser' => 'Buscar un usuario',
		'LoginNotDefined' => 'El usuario no está definido',
		'NameNotDefined' => 'el nombre no está definido',
		'ListOfUsers' => 'Listado de usuarios',
		'Administrator' => 'Administrador',
		'SuperAdministrator' => 'Super Administrador',
		'SuperAdministratorDesc' => 'Administrador global',
		'AdministratorDesc' => 'Administrador de la entidad',
		'DefaultRights' => 'Permisos por defecto',
		'DefaultRightsDesc' => 'Defina aquí los permisos <b>por defecto</b>, es decir: los permisos que se asignarán automáticamente a un nuevo usuario en el momento de su creación (Ver la ficha usuario para cambiar los permisos a un usuario existente).',
		'DolibarrUsers' => 'Usuarios Dolibarr',
		'LastName' => 'Apellidos',
		'FirstName' => 'Nombre',
		'ListOfGroups' => 'Listado de grupos',
		'NewGroup' => 'Nuevo grupo',
		'CreateGroup' => 'Crear el grupo',
		'RemoveFromGroup' => 'Eliminar del grupo',
		'PasswordChangedAndSentTo' => 'Contraseña cambiada y enviada a <b>%s</b>.',
		'PasswordChangeRequestSent' => 'Petición de cambio de contraseña para <b>%s</b> enviada a <b>%s</b>.',
		'MenuUsersAndGroups' => 'Usuarios y grupos',
		'LastGroupsCreated' => 'Los %s últimos grupos creados',
		'LastUsersCreated' => 'Los %s últimos usuarios creados',
		'ShowGroup' => 'Ver grupo',
		'ShowUser' => 'Ver usuario',
		'NonAffectedUsers' => 'Usuarios no destinados al grupo',
		'UserModified' => 'Usuario correctamente modificado',
		'GroupModified' => 'Grupo %s modificado',
		'PhotoFile' => 'Archivo foto',
		'UserWithDolibarrAccess' => 'Usuario con acceso a Dolibarr',
		'ListOfUsersInGroup' => 'Listado de usuarios de este grupo',
		'ListOfGroupsForUser' => 'Listado de grupos de este usuario',
		'UsersToAdd' => 'Usuario a añadir a este grupo',
		'GroupsToAdd' => 'Grupos a añadir a este usuario',
		'NoLogin' => 'Sin usuario',
		'LinkToCompanyContact' => 'Enlace terceros / contactos',
		'LinkedToDolibarrMember' => 'Enlace miembro',
		'LinkedToDolibarrUser' => 'Enlace usuario Dolibarr',
		'LinkedToDolibarrThirdParty' => 'Enlace tercero Dolibarr',
		'CreateDolibarrLogin' => 'Crear una cuenta de usuario',
		'CreateDolibarrThirdParty' => 'Crear un tercero',
		'LoginAccountDisable' => 'La cuenta está desactivada, indique un nuevo login para activarla.',
		'LoginAccountDisableInDolibarr' => 'La cuenta está desactivada en Dolibarr',
		'LoginAccountDisableInLdap' => 'La cuenta está desactivada en el dominio',
		'UsePersonalValue' => 'Utilizar valores personalizados',
		'GuiLanguage' => 'Idioma del interfaz',
		'InternalUser' => 'Usuario interno',
		'MyInformations' => 'Mi información',
		'ExportDataset_user_1' => 'Usuarios Dolibarr y atributos',
		'DomainUser' => 'Usuario de dominio',
		'Reactivate' => 'Reactivar',
		'CreateInternalUserDesc' => 'Esta pantalla permite crear un usuario interno de su empresa/institución. Para crear un usuario externo (cliente, proveedor...) utilice el botón "Crear una cuenta de usuario" que se encuentra en la ficha de contacto del tercero en cuestión.',
		'InternalExternalDesc' => 'Un usuario <b>interno</b> es un usuario que pertenece a su empresa/institución.<br>Un usuario <b>externo</b> es un usuario cliente, proveedor u otro.<br><br>En los 2 casos, los permisos de usuarios definen los derechos de acceso, pero el usuario externo puede además tener  un gestor de menús diferente al usuario interno (véase Inicio - Configuración - Visualización)',
		'PermissionInheritedFromAGroup' => 'El permiso se concede ya que lo hereda de un grupo al cual pertenece el usuario.',
		'Inherited' => 'Heredado',
		'UserWillBeInternalUser' => 'El usuario creado será un usuario interno (ya que no está ligado a un tercero en particular)',
		'UserWillBeExternalUser' => 'El usuario creado será un usuario externo (ya que está ligado a un tercero en particular)',
		'IdPhoneCaller' => 'ID llamante (teléfono)',
		'UserLogged' => 'Usuario %s conectado',
		'UserLogoff' => 'Usuario %s desconectado',
		'NewUserCreated' => 'usuario %s creado',
		'NewUserPassword' => 'Passord cambiado para %s',
		'EventUserModified' => 'Usuario %s modificado',
		'UserDisabled' => 'Usuario %s deshailitado',
		'UserEnabled' => 'Usuario %s activado',
		'UserDeleted' => 'Usuario %s eliminado',
		'NewGroupCreated' => 'Grupo %s creado',
		'GroupModified' => 'Grupo %s modificado',
		'GroupDeleted' => 'Grupo %s eliminado',
		'ConfirmCreateContact' => '¿Está seguro de querer crear una cuenta Dolibarr para este contacto?',
		'ConfirmCreateLogin' => '¿Está seguro de que desea crear una cuenta Dolibarr para este miembro?',
		'ConfirmCreateThirdParty' => '¿Está seguro de querer crear un tercero para este miembro?',
		'LoginToCreate' => 'Login a crear',
		'NameToCreate' => 'Nombre del tercero a crear',
		'YourRole' => 'Sus roles',
		'YourQuotaOfUsersIsReached' => '¡Ha llegado a su cuota de usuarios activos!',
		'NbOfUsers' => 'Nº de usuarios',
		'DontDowngradeSuperAdmin' => 'Sólo un superadmin puede degradar un superadmin',
		'NewDatabase' => 'Nouvelle base de données',
		'CreateDatabase' => 'Créer la base de données',
		'ListOfDatabases' => 'Liste des bases de données',
		'ListOfUsersInDatabase' => 'Liste des utilisateurs liés à la base de données',
		'ListOfRolesInDatabase' => 'Liste des groupes liés à la base de données',
		'DeleteADatabase' => 'Suppression d\'une database',
		'ConfirmDatabase' => 'Êtes-vous sûr de vouloir supprimer la base de données <b>%s</b> ?',
		'NonAffectedGroupsDatabase' => 'Groupes non affectés à la base de données',
		'NonAffectedUsersDatabase' => 'Utilisateurs non affectés à la base de données',
		'Collaborators' => 'Collaborateurs',
		'Profiles' => 'Profils collaborateurs'
);
?>