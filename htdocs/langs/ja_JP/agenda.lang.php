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

$agenda = array(
		'CHARSET' => 'UTF-8',
		'Actions' => 'イベント',
		'ActionsArea' => 'イベントエリア（アクションとタスク）',
		'Agenda' => '議題',
		'Agendas' => 'アジェンダ',
		'Calendar' => 'カレンダー',
		'Calendars' => 'カレンダー',
		'LocalAgenda' => 'ローカルカレンダー',
		'AffectedTo' => '影響を受ける',
		'DoneBy' => 'によって行われ',
		'Event' => 'Event',
		'Events' => 'イベント',
		'MyEvents' => '自分のイベント',
		'OtherEvents' => 'その他のイベント',
		'ListOfActions' => 'イベントのリスト',
		'Location' => '場所',
		'EventOnFullDay' => '一日のイベント',
		'SearchAnAction' => 'イベント/タスクを検索',
		'MenuToDoActions' => 'すべての不完全なイベント',
		'MenuDoneActions' => 'すべての終了イベント',
		'MenuToDoMyActions' => '私の不完全なイベント',
		'MenuDoneMyActions' => '私の終了イベント',
		'ListOfEvents' => 'Speedealingイベントのリスト',
		'ActionsAskedBy' => 'によって報告されたイベント',
		'ActionsToDoBy' => 'イベントへの影響を受けた',
		'ActionsDoneBy' => 'によって行われたイベント',
		'AllMyActions' => 'すべての私のイベント/タスク',
		'AllActions' => 'すべてのイベント/タスク',
		'ViewList' => 'リストビュー',
		'ViewCal' => '月間表示',
		'ViewDay' => '日表示',
		'ViewWeek' => '週ビュー',
		'ViewWithPredefinedFilters' => '定義済みのフィルタを使用して表示',
		'AutoActions' => '議題の自動充填',
		'AgendaAutoActionDesc' => 'ここではSpeedealingが自動的に議題でイベントを作成するイベントを定義します。何も（デフォルトで）チェックされていない場合のみ、手動アクションが議題に含まれています。',
		'AgendaSetupOtherDesc' => 'このページでは、外部のカレンダーにあなたのSpeedealingイベントのエクスポートを許可するオプションが用意されています（サンダーバード、Googleカレンダー、...）',
		'AgendaExtSitesDesc' => 'このページでは、Speedealingの議題にそれらのイベントを表示するにはカレンダーの外部ソースを宣言することができます。',
		'ActionsEvents' => 'Speedealingが自動的に議題でアクションを作成する対象のイベント',
		'PropalValidatedInSpeedealing' => 'Proposal %s validated',
		'InvoiceValidatedInSpeedealing' => 'Invoice %s validated',
		'InvoiceBackToDraftInSpeedealing' => 'Invoice %s go back to draft status',
		'OrderValidatedInSpeedealing' => 'Order %s validated',
		'OrderApprovedInSpeedealing' => 'Order %s approved',
		'OrderBackToDraftInSpeedealing' => 'Order %s go back to draft status',
		'OrderCanceledInSpeedealing' => 'Order %s canceled',
		'InterventionValidatedInSpeedealing' => 'Intervention %s validated',
		'ProposalSentByEMail' => '電子メールで送信商業提案%s',
		'OrderSentByEMail' => '電子メールで送信、顧客の注文%s',
		'InvoiceSentByEMail' => '電子メールで送信顧客の請求書%s',
		'SupplierOrderSentByEMail' => '電子メールで送信サプライヤの注文%s',
		'SupplierInvoiceSentByEMail' => '電子メールで送信サプライヤの請求書%s',
		'ShippingSentByEMail' => '電子メールで送信出荷%s',
		'InterventionSentByEMail' => '電子メールで送信介入%s',
		'NewCompanyToSpeedealing' => 'Third party created',
		'DateActionPlannedStart' => '計画開始日',
		'DateActionPlannedEnd' => '計画終了日',
		'DateActionDoneStart' => '実際の開始日',
		'DateActionDoneEnd' => '実際の終了日',
		'DateActionStart' => '開始日',
		'DateActionEnd' => '終了日',
		'AgendaUrlOptions1' => 'また、出力をフィルタリングするには、次のパラメータを追加することができます。',
		'AgendaUrlOptions2' => '<b>ログインは= %s</b>に影響を受けた、またはユーザー<b>%s</b>によって行われ、作成されたアクションに出力を制限する。',
		'AgendaUrlOptions3' => 'ユーザー<b>%s</b>によって作成されたアクションに出力を制限loginA <b>に= %s。</b>',
		'AgendaUrlOptions4' => 'ユーザー<b>%s</b>に影響を受けたアクションに出力を制限する<b>logint = %s。</b>',
		'AgendaUrlOptions5' => 'ユーザー<b>%s</b>によって行われたアクションへの出力を制限する<b>logind = %s。</b>',
		'AgendaShowBirthdayEvents' => '誕生日の連絡先を表示する',
		'AgendaHideBirthdayEvents' => '誕生日の接点を隠す',
		'Activities' => 'Activities',
		'NewActions' => 'News<br>Actions',
		'DoActions' => 'Actions<br>in progress',
		'SumMyActions' => 'Actions done<br>by me this year',
		'SumActions' => 'Actions in total<br>this year',
		'DateEchAction' => 'Deadline',
		'StatusActionTooLate' => 'Action delay',
		'MyTasks' => 'My tasks',
		'MyDelegatedTasks' => 'My delegated tasks',
		'ProdPlanning' => 'Planning of production',
		// External Sites ical
		'ExportCal' => '輸出カレンダー',
		'ExtSites' => '外部カレンダーをインポートする',
		'ExtSitesEnableThisTool' => '議題に外部カレンダーを表示する',
		'ExtSitesNbOfAgenda' => 'カレンダーの数',
		'AgendaExtNb' => 'カレンダーNB %s',
		'ExtSiteUrlAgenda' => '。iCalファイルにアクセスするためのURL',
		'ExtSiteNoLabel' => '全く説明がありません'
);
?>