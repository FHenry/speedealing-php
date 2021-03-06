<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

$users = array(
		'CHARSET' => 'UTF-8',
		'UserCard' => 'Пользователь карточки',
		'ContactCard' => 'Контакт-карты',
		'GroupCard' => 'Группа карту',
		'NoContactCard' => 'Нет контактов между картой',
		'Permission' => 'Разрешение',
		'Permissions' => 'Разрешения',
		'EditPassword' => 'Изменить пароль',
		'SendNewPassword' => 'Отправить новый пароль',
		'ReinitPassword' => 'Создать новый пароль',
		'PasswordChangedTo' => 'Пароль изменен на: %s',
		'SubjectNewPassword' => 'Ваш новый пароль для Speedealing',
		'AvailableRights' => 'Доступные разрешения',
		'OwnedRights' => 'Собственное разрешение',
		'GroupRights' => 'Группа разрешений',
		'UserRights' => 'Пользователь разрешений',
		'UserGUISetup' => 'Пользователь Настройка дисплея',
		'DisableUser' => 'Выключать',
		'DisableAUser' => 'Отключение пользователя',
		'DeleteUser' => 'Удалить',
		'DeleteAUser' => 'Удалить пользователя',
		'DisableGroup' => 'Выключать',
		'DisableAGroup' => 'Отключить группу',
		'EnableAUser' => 'Включить пользователя',
		'EnableAGroup' => 'Включить группы',
		'DeleteGroup' => 'Удалить',
		'DeleteAGroup' => 'Удалить группу',
		'ConfirmDisableUser' => 'Вы уверены, что хотите, чтобы отключить <b>пользователя %s?</b>',
		'ConfirmDisableGroup' => 'Вы уверены, что хотите отключить <b>группа %s?</b>',
		'ConfirmDeleteUser' => 'Вы уверены, что хотите удалить <b>пользователя %s?</b>',
		'ConfirmDeleteGroup' => 'Вы уверены, что хотите удалить <b>группу %s?</b>',
		'ConfirmEnableUser' => 'Вы уверены, что хотите, чтобы <b>пользователь %s?</b>',
		'ConfirmEnableGroup' => 'Вы уверены, что хотите, чтобы <b>группа %s?</b>',
		'ConfirmReinitPassword' => 'Вы уверены, что хотите, чтобы создать новый пароль для <b>пользователя %s?</b>',
		'ConfirmSendNewPassword' => 'Вы уверены, что хотите создать и отправить новый пароль для <b>пользователя %s?</b>',
		'NewUser' => 'Новый пользователь',
		'CreateUser' => 'Создать пользователя',
		'SearchAGroup' => 'Поиск группы',
		'SearchAUser' => 'Поиск пользователей',
		'LoginNotDefined' => 'Логин не определены.',
		'NameNotDefined' => 'Имя не определено.',
		'ListOfUsers' => 'Список пользователей',
		'Administrator' => 'Администратор',
		'SuperAdministrator' => 'Супер Администратор',
		'SuperAdministratorDesc' => 'Администратор со всеми правами',
		'AdministratorDesc' => 'Администратора лица',
		'DefaultRights' => 'По умолчанию разрешения',
		'DefaultRightsDesc' => 'Определить здесь умолчанию разрешения, что автоматически предоставляются новые созданные пользователем.',
		'SpeedealingUsers' => 'Speedealing users',
		'LastName' => 'Имя',
		'FirstName' => 'Имя',
		'ListOfGroups' => 'Список групп',
		'NewGroup' => 'Новая группа',
		'CreateGroup' => 'Создать группу',
		'RemoveFromGroup' => 'Удалить из группы',
		'PasswordChangedAndSentTo' => 'Пароль изменен и направил <b>в %s.</b>',
		'PasswordChangeRequestSent' => 'Запрос на изменение пароля <b>для %s направлено %s.</b>',
		'MenuUsersAndGroups' => 'И Пользователи Группы',
		'LastGroupsCreated' => 'Последнее %s созданы группы',
		'LastUsersCreated' => 'Последнее %s пользователей создаются',
		'ShowGroup' => 'Показать группы',
		'ShowUser' => 'Показать пользователей',
		'NonAffectedUsers' => 'Расходы пользователей',
		'UserModified' => 'Пользователь изменен успешно',
		'GroupModified' => 'Группа успешно изменен',
		'PhotoFile' => 'Фото файл',
		'UserWithSpeedealingAccess' => 'User with Speedealing access',
		'ListOfUsersInGroup' => 'Список пользователей в эту группу',
		'ListOfGroupsForUser' => 'Список групп для этого пользователя',
		'UsersToAdd' => 'Пользователи, чтобы добавить к этой группе',
		'GroupsToAdd' => 'Группы, чтобы добавить к этому пользователю',
		'NoLogin' => 'Нет входа',
		'LinkToCompanyContact' => 'Ссылка на сторонние / контакт',
		'LinkedToSpeedealingMember' => 'Link to member',
		'LinkedToSpeedealingUser' => 'Link to Speedealing user',
		'LinkedToSpeedealingThirdParty' => 'Link to Speedealing third party',
		'CreateSpeedealingLogin' => 'Create a user',
		'CreateSpeedealingThirdParty' => 'Create a third party',
		'LoginAccountDisable' => 'Учетная запись отключена, поставить новую регистрационную информацию, чтобы активировать ее.',
		'LoginAccountDisableInSpeedealing' => 'Account disabled in Speedealing.',
		'LoginAccountDisableInLdap' => 'Счет-инвалидов в домене.',
		'UsePersonalValue' => 'Использование личных ценностей',
		'GuiLanguage' => 'Язык интерфейса',
		'InternalUser' => 'Внутренний пользователь',
		'MyInformations' => 'Мои данные',
		'ExportDataset_user_1' => 'Speedealing пользователей и свойства',
		'DomainUser' => 'Домен пользователя %s',
		'Reactivate' => 'Возобновить',
		'CreateInternalUserDesc' => 'Эта форма позволяет пользователю создаст внутри вашей компании / Фонд. Для создания внешнего пользователя (заказчика, поставщика, ...), использовать кнопку "Создать Speedealing пользователя" от третьего лица карточку контакта.',
		'InternalExternalDesc' => '<b>Внутреннего</b> пользователя является пользователем, который является частью вашей компании / Фонд. <br> <b>Внешний</b> пользователь клиента, поставщика или другого. <br><br> В обоих случаях разрешение определяет права на Speedealing, а также внешних пользователей могут иметь разные меню менеджера, чем внутреннего пользователя (См. начало - настройки - дисплей)',
		'PermissionInheritedFromAGroup' => 'Разрешение предоставляется, поскольку унаследовал от одного из пользователей в группы.',
		'Inherited' => 'Унаследованный',
		'UserWillBeInternalUser' => 'Созданный пользователь будет внутреннего пользователя (потому что не связаны с определенным третьим лицам)',
		'UserWillBeExternalUser' => 'Созданный пользователь будет внешний пользователь (из-за связанных с определенной третьей стороны)',
		'IdPhoneCaller' => 'Идентификатор телефона абонента',
		'UserLogged' => 'Пользователь% связаны с',
		'UserLogoff' => 'Пользователь %s выхода',
		'NewUserCreated' => 'Пользователь %s создали',
		'NewUserPassword' => 'Смена пароля для %s',
		'EventUserModified' => 'Пользователь% с измененными',
		'UserDisabled' => 'Пользователь %s-инвалидов',
		'UserEnabled' => 'Пользователь %s активированного',
		'UserDeleted' => 'Пользователь %s удален',
		'NewGroupCreated' => 'Группа создала %s',
		'GroupModified' => 'Группа успешно изменен',
		'GroupDeleted' => 'Группа удалить %s',
		'ConfirmCreateContact' => 'Вы уверены, что Ю. хотите создать Speedealing счета для этого обратиться?',
		'ConfirmCreateLogin' => 'Вы уверены, что хотите создать учетную запись для Speedealing этот член?',
		'ConfirmCreateThirdParty' => 'Вы уверены, что хотите создать третью сторону для этого члена?',
		'LoginToCreate' => 'Логин для создания',
		'NameToCreate' => 'Имя третьей стороной для создания',
		'YourRole' => 'Ваша роль',
		'YourQuotaOfUsersIsReached' => 'Квота активных пользователей будет достигнута!',
		'NbOfUsers' => 'Кол-во пользователей',
		'DontDowngradeSuperAdmin' => 'Только суперамин может понизить суперамин',
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