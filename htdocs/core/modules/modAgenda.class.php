<?php
/* Copyright (C) 2003,2005 Rodolphe Quiedeville <rodolphe@quiedeville.org>
 * Copyright (C) 2003      Jean-Louis Bergamo   <jlb@j1b.org>
 * Copyright (C) 2004-2008 Laurent Destailleur  <eldy@users.sourceforge.net>
 * Copyright (C) 2004      Sebastien Di Cintio  <sdicintio@ressource-toi.org>
 * Copyright (C) 2004      Benoit Mortier       <benoit.mortier@opensides.be>
 * Copyright (C) 2009-2011 Regis Houssin        <regis@dolibarr.fr>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
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

/**
 *		\defgroup   agenda     Module agenda
 *      \brief      Module pour gerer l'agenda et actions
 *      \file       htdocs/core/modules/modAgenda.class.php
 *      \ingroup    agenda
 *      \brief      Fichier de description et activation du module agenda
 */
include_once(DOL_DOCUMENT_ROOT ."/core/modules/DolibarrModules.class.php");

/**
 *      \class      modAgenda
 *      \brief      Classe de description et activation du module Adherent
 */
class modAgenda extends DolibarrModules
{

	/**
	 *   Constructor. Define names, constants, directories, boxes, permissions
	 *
	 *   @param      DoliDB		$db      Database handler
	 */
	function modAgenda($db)
	{	
		parent::__construct($db);
		
		$this->values->numero = 2400;

		$this->values->family = "projects";
		// Module label (no space allowed), used if translation string 'ModuleXXXName' not found (where XXX is value of numeric property 'numero' of module)
		$this->values->name = preg_replace('/^mod/i','',get_class($this));
		$this->values->description = "Gestion de l'agenda et des actions";
		$this->values->version = 'dolibarr';                        // 'experimental' or 'dolibarr' or version
		// Key used in llx_const table to save module status enabled/disabled (where MYMODULE is value of property name of module in uppercase)
		$this->values->const_name = 'MAIN_MODULE_'.strtoupper($this->values->name);
		$this->values->special = 0;
		$this->values->picto='action';

		// Data directories to create when module is enabled
		$this->values->dirs = array("/agenda/temp");

		// Config pages
		//-------------
		$this->values->config_page_url = array("agenda.php");

		// Dependancies
		//-------------
		$this->values->depends = array();
		$this->values->requiredby = array();
		$this->values->langfiles = array("companies");

		// Constantes
		//-----------
		$this->values->const = array();
		$this->values->const[0]  = array("MAIN_AGENDA_ACTIONAUTO_COMPANY_CREATE","chaine","1");
        $this->values->const[1]  = array("MAIN_AGENDA_ACTIONAUTO_CONTRACT_VALIDATE","chaine","1");
        $this->values->const[2]  = array("MAIN_AGENDA_ACTIONAUTO_PROPAL_VALIDATE","chaine","1");
        $this->values->const[3]  = array("MAIN_AGENDA_ACTIONAUTO_PROPAL_SENTBYMAIL","chaine","1");
        $this->values->const[4]  = array("MAIN_AGENDA_ACTIONAUTO_ORDER_VALIDATE","chaine","1");
        $this->values->const[5]  = array("MAIN_AGENDA_ACTIONAUTO_ORDER_SENTBYMAIL","chaine","1");
        $this->values->const[6]  = array("MAIN_AGENDA_ACTIONAUTO_BILL_VALIDATE","chaine","1");
        $this->values->const[7]  = array("MAIN_AGENDA_ACTIONAUTO_BILL_PAYED","chaine","1");
        $this->values->const[8]  = array("MAIN_AGENDA_ACTIONAUTO_BILL_CANCEL","chaine","1");
        $this->values->const[9]  = array("MAIN_AGENDA_ACTIONAUTO_BILL_SENTBYMAIL","chaine","1");
        $this->values->const[10] = array("MAIN_AGENDA_ACTIONAUTO_ORDER_SUPPLIER_VALIDATE","chaine","1");
        $this->values->const[11] = array("MAIN_AGENDA_ACTIONAUTO_BILL_SUPPLIER_VALIDATE","chaine","1");
        $this->values->const[12] = array("MAIN_AGENDA_ACTIONAUTO_SHIPPING_VALIDATE","chaine","1");
        $this->values->const[13] = array("MAIN_AGENDA_ACTIONAUTO_SHIPPING_SENTBYMAIL","chaine","1");

		// New pages on tabs
		// -----------------
		$this->values->tabs = array();

		// Boxes
		//------
		$this->values->boxes = array();
		$this->values->boxes[0][1] = "box_actions.php";

		// Permissions
		//------------
		$this->values->rights = array();
		$this->values->rights_class = 'agenda';
		$r=0;

		// $this->values->rights[$r][0]     Id permission (unique tous modules confondus)
		// $this->values->rights[$r][1]     Libelle par defaut si traduction de cle "PermissionXXX" non trouvee (XXX = Id permission)
		// $this->values->rights[$r][2]     Non utilise
		// $this->values->rights[$r][3]     1=Permis par defaut, 0=Non permis par defaut
		// $this->values->rights[$r][4]     Niveau 1 pour nommer permission dans code
		// $this->values->rights[$r][5]     Niveau 2 pour nommer permission dans code
		// $r++;

		$this->values->rights[$r][0] = 2401;
		$this->values->rights[$r][1] = 'Read actions/tasks linked to his account';
		$this->values->rights[$r][2] = 'r';
		$this->values->rights[$r][3] = 1;
		$this->values->rights[$r][4] = 'myactions';
		$this->values->rights[$r][5] = 'read';
		$r++;

		$this->values->rights[$r][0] = 2402;
		$this->values->rights[$r][1] = 'Create/modify actions/tasks linked to his account';
		$this->values->rights[$r][2] = 'w';
		$this->values->rights[$r][3] = 0;
		$this->values->rights[$r][4] = 'myactions';
		$this->values->rights[$r][5] = 'create';
		$r++;

		$this->values->rights[$r][0] = 2403;
		$this->values->rights[$r][1] = 'Delete actions/tasks linked to his account';
		$this->values->rights[$r][2] = 'w';
		$this->values->rights[$r][3] = 0;
		$this->values->rights[$r][4] = 'myactions';
		$this->values->rights[$r][5] = 'delete';
		$r++;

		$this->values->rights[$r][0] = 2411;
		$this->values->rights[$r][1] = 'Read actions/tasks of others';
		$this->values->rights[$r][2] = 'r';
		$this->values->rights[$r][3] = 0;
		$this->values->rights[$r][4] = 'allactions';
		$this->values->rights[$r][5] = 'read';
		$r++;

		$this->values->rights[$r][0] = 2412;
		$this->values->rights[$r][1] = 'Create/modify actions/tasks of others';
		$this->values->rights[$r][2] = 'w';
		$this->values->rights[$r][3] = 0;
		$this->values->rights[$r][4] = 'allactions';
		$this->values->rights[$r][5] = 'create';
		$r++;

		$this->values->rights[$r][0] = 2413;
		$this->values->rights[$r][1] = 'Delete actions/tasks of others';
		$this->values->rights[$r][2] = 'w';
		$this->values->rights[$r][3] = 0;
		$this->values->rights[$r][4] = 'allactions';
		$this->values->rights[$r][5] = 'delete';
		$r++;

		// Main menu entries
		$this->values->menu = array();			// List of menus to add
		$r=0;

		// Add here entries to declare new menus
		// Example to declare the Top Menu entry:
		// $this->values->menu[$r]=array(	'fk_menu'=>0,			// Put 0 if this is a top menu
		//							'type'=>'top',			// This is a Top menu entry
		//							'titre'=>'MyModule top menu',
		//							'mainmenu'=>'mymodule',
		//							'url'=>'/mymodule/pagetop.php',
		//							'langs'=>'mylangfile',	// Lang file to use (without .lang) by module. File must be in langs/code_CODE/ directory.
		//							'position'=>100,
		//							'enabled'=>'1',			// Define condition to show or hide menu entry. Use '$conf->mymodule->enabled' if entry must be visible if module is enabled.
		//							'perms'=>'1',			// Use 'perms'=>'$user->rights->mymodule->level1->level2' if you want your menu with a permission rules
		//							'target'=>'',
		//							'user'=>2);				// 0=Menu for internal users, 1=external users, 2=both
		// $r++;
		$this->values->menu[$r]=array('fk_menu'=>0,
													'type'=>'top',
		    '_id'=>'menu:agenda',
													'titre'=>'Agenda',
													'mainmenu'=>'agenda',
													'url'=>'/comm/action/listactions.php',
													'langs'=>'agenda',
													'position'=>100,
													'perms'=>'$user->rights->agenda->myactions->read',
													'enabled'=>'$conf->agenda->enabled',
													'target'=>'',
													'user'=>2);
		$r++;

		$this->values->menu[$r]=array('fk_menu'=>'menu:agenda',
			'_id'=>'menu:actionagenda',
													'type'=>'left',
													'titre'=>'Actions',
													'mainmenu'=>'agenda',
													'url'=>'/comm/action/listactions.php?mainmenu=agenda&amp;leftmenu=agenda',
													'langs'=>'agenda',
													'position'=>100,
													'perms'=>'$user->rights->agenda->myactions->read',
													'enabled'=>'$conf->agenda->enabled',
													'target'=>'',
													'user'=>2);
		$r++;
		$this->values->menu[$r]=array('fk_menu'=>'menu:actionagenda',
			'_id'=>'menu:newaction',
													'type'=>'left',
													'titre'=>'NewAction',
													'mainmenu'=>'agenda',
													'url'=>'/comm/action/fiche.php?mainmenu=agenda&amp;leftmenu=agenda&amp;action=create',
													'langs'=>'commercial',
													'position'=>101,
													'perms'=>'($user->rights->agenda->myactions->create||$user->rights->agenda->allactions->create)',
													'enabled'=>'$conf->agenda->enabled',
													'target'=>'',
													'user'=>2);
		$r++;
		// Calendar
		$this->values->menu[$r]=array('fk_menu'=>'menu:actionagenda',
			'_id'=>'menu:actioncalendar',
													'type'=>'left',
													'titre'=>'Calendar',
													'mainmenu'=>'agenda',
													'url'=>'/comm/action/index.php?mainmenu=agenda&amp;leftmenu=agenda',
													'langs'=>'agenda',
													'position'=>102,
													'perms'=>'$user->rights->agenda->myactions->read',
													'enabled'=>'$conf->agenda->enabled',
													'target'=>'',
													'user'=>2);
		$r++;
		$this->values->menu[$r]=array('fk_menu'=>'menu:actioncalendar',
			'_id'=>'menu:MenuToDoMyActions',
													'type'=>'left',
													'titre'=>'MenuToDoMyActions',
													'mainmenu'=>'agenda',
													'url'=>'/comm/action/index.php?mainmenu=agenda&amp;leftmenu=agenda&amp;status=todo&amp;filter=mine',
													'langs'=>'agenda',
													'position'=>103,
													'perms'=>'$user->rights->agenda->myactions->read',
													'enabled'=>'$conf->agenda->enabled',
													'target'=>'',
													'user'=>2);
		$r++;
		$this->values->menu[$r]=array('fk_menu'=>'menu:actioncalendar',
			'_id'=>'menu:MenuDoneMyActions',
													'type'=>'left',
													'titre'=>'MenuDoneMyActions',
													'mainmenu'=>'agenda',
													'url'=>'/comm/action/index.php?mainmenu=agenda&amp;leftmenu=agenda&amp;status=done&amp;filter=mine',
													'langs'=>'agenda',
													'position'=>104,
													'perms'=>'$user->rights->agenda->myactions->read',
													'enabled'=>'$conf->agenda->enabled',
													'target'=>'',
													'user'=>2);
		$r++;
		$this->values->menu[$r]=array('fk_menu'=>'menu:actioncalendar',
			'_id'=>'menu:MenuToDoActions',
													'type'=>'left',
													'titre'=>'MenuToDoActions',
													'mainmenu'=>'agenda',
													'url'=>'/comm/action/index.php?mainmenu=agenda&amp;leftmenu=agenda&amp;status=todo',
													'langs'=>'agenda',
													'position'=>105,
													'perms'=>'$user->rights->agenda->allactions->read',
													'enabled'=>'$user->rights->agenda->allactions->read',
													'target'=>'',
													'user'=>2);
		$r++;
		$this->values->menu[$r]=array('fk_menu'=>'menu:actioncalendar',
			'_id'=>'menu:MenuDoneActions',
													'type'=>'left',
													'titre'=>'MenuDoneActions',
													'mainmenu'=>'agenda',
													'url'=>'/comm/action/index.php?mainmenu=agenda&amp;leftmenu=agenda&amp;status=done',
													'langs'=>'agenda',
													'position'=>106,
													'perms'=>'$user->rights->agenda->allactions->read',
													'enabled'=>'$user->rights->agenda->allactions->read',
													'target'=>'',
													'user'=>2);
		$r++;
		// List
		$this->values->menu[$r]=array('fk_menu'=>'menu:agenda',
			'_id'=>'menu:agendaList',
													'type'=>'left',
													'titre'=>'List',
													'mainmenu'=>'agenda',
													'url'=>'/comm/action/listactions.php?mainmenu=agenda&amp;leftmenu=agenda',
													'langs'=>'agenda',
													'position'=>112,
													'perms'=>'$user->rights->agenda->myactions->read',
													'enabled'=>'$conf->agenda->enabled',
													'target'=>'',
													'user'=>2);
		$r++;
		$this->values->menu[$r]=array('fk_menu'=>'menu:agendaList',
			'_id'=>'menu:MenuToDoMyActions',
													'type'=>'left',
													'titre'=>'MenuToDoMyActions',
													'mainmenu'=>'agenda',
													'url'=>'/comm/action/listactions.php?mainmenu=agenda&amp;leftmenu=agenda&amp;status=todo&amp;filter=mine',
													'langs'=>'agenda',
													'position'=>113,
													'perms'=>'$user->rights->agenda->myactions->read',
													'enabled'=>'$conf->agenda->enabled',
													'target'=>'',
													'user'=>2);
		$r++;
		$this->values->menu[$r]=array('fk_menu'=>'menu:agendaList',
			'_id'=>'menu:MenuDoneMyActions',
													'type'=>'left',
													'titre'=>'MenuDoneMyActions',
													'mainmenu'=>'agenda',
													'url'=>'/comm/action/listactions.php?mainmenu=agenda&amp;leftmenu=agenda&amp;status=done&amp;filter=mine',
													'langs'=>'agenda',
													'position'=>114,
													'perms'=>'$user->rights->agenda->myactions->read',
													'enabled'=>'$conf->agenda->enabled',
													'target'=>'',
													'user'=>2);
		$r++;
		$this->values->menu[$r]=array('fk_menu'=>'menu:agendaList',
			'_id'=>'menu:MenuToDoActions',
													'type'=>'left',
													'titre'=>'MenuToDoActions',
													'mainmenu'=>'agenda',
													'url'=>'/comm/action/listactions.php?mainmenu=agenda&amp;leftmenu=agenda&amp;status=todo',
													'langs'=>'agenda',
													'position'=>115,
													'perms'=>'$user->rights->agenda->allactions->read',
													'enabled'=>'$user->rights->agenda->allactions->read',
													'target'=>'',
													'user'=>2);
		$r++;
		$this->values->menu[$r]=array('fk_menu'=>'menu:agendaList',
			'_id'=>'menu:MenuDoneActions',
													'type'=>'left',
													'titre'=>'MenuDoneActions',
													'mainmenu'=>'agenda',
													'url'=>'/comm/action/listactions.php?mainmenu=agenda&amp;leftmenu=agenda&amp;status=done',
													'langs'=>'agenda',
													'position'=>116,
													'perms'=>'$user->rights->agenda->allactions->read',
													'enabled'=>'$user->rights->agenda->allactions->read',
													'target'=>'',
													'user'=>2);
		$r++;
		// Reports
		$this->values->menu[$r]=array('fk_menu'=>'menu:agenda',
			'_id'=>'menu:agendaReportings',
													'type'=>'left',
													'titre'=>'Reportings',
													'mainmenu'=>'agenda',
													'url'=>'/comm/action/rapport/index.php?mainmenu=agenda&amp;leftmenu=agenda',
													'langs'=>'agenda',
													'position'=>120,
													'perms'=>'$user->rights->agenda->allactions->read',
													'enabled'=>'$conf->agenda->enabled',
													'target'=>'',
													'user'=>2);
		$r++;


		// Exports
		//--------
		$r=0;

		// $this->values->export_code[$r]          Code unique identifiant l'export (tous modules confondus)
		// $this->values->export_label[$r]         Libelle par defaut si traduction de cle "ExportXXX" non trouvee (XXX = Code)
		// $this->values->export_permission[$r]    Liste des codes permissions requis pour faire l'export
		// $this->values->export_fields_sql[$r]    Liste des champs exportables en codif sql
		// $this->values->export_fields_name[$r]   Liste des champs exportables en codif traduction
		// $this->values->export_sql[$r]           Requete sql qui offre les donnees a l'export
	}


	/**
	 *		Function called when module is enabled.
	 *		The init function add constants, boxes, permissions and menus (defined in constructor) into Dolibarr database.
	 *		It also creates data directories
	 *
     *      @param      string	$options    Options when enabling module ('', 'noboxes')
	 *      @return     int             	1 if OK, 0 if KO
	 */
	function init($options='')
	{
		// Prevent pb of modules not correctly disabled
		//$this->values->remove($options);

		$sql = array();

		return $this->values->_init($sql,$options);
	}

	/**
	 *		Function called when module is disabled.
	 *      Remove from database constants, boxes and permissions from Dolibarr database.
	 *		Data directories are not deleted
	 *
     *      @param      string	$options    Options when enabling module ('', 'noboxes')
	 *      @return     int             	1 if OK, 0 if KO
	 */
	function remove($options='')
	{
		$sql = array();

		return $this->values->_remove($sql,$options);
	}

}
?>