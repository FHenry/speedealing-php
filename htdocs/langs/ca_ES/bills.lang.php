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

$bills = array(
		'CHARSET' => 'UTF-8',
		'Bill' => 'Factura',
		'Bills' => 'Factures',
		'BillsCustomers' => 'Factures a clients',
		'BillsCustomer' => 'Factures al client',
		'BillsSuppliers' => 'Factures de proveïdors',
		'BillsCustomersUnpaid' => 'Factures a clients pendents de cobrament',
		'BillsCustomersUnpaidForCompany' => 'Factures a clients pendents de cobrament de %s',
		'BillsSuppliersUnpaid' => 'Factures de proveïdors pendents de pagament',
		'BillsSuppliersUnpaidForCompany' => 'Factures de proveïdors pendents de pagament de %s',
		'BillsUnpaid' => 'Pendents de pagament',
		'BillsLate' => 'Retard en el pagament',
		'BillsStatistics' => 'Estadístiques factures a clients',
		'BillsStatisticsSuppliers' => 'Estadístiques factures de proveïdors',
		'DisabledBecauseNotErasable' => 'Desactivat per no ser eliminable',
		'InvoiceStandard' => 'Factura estàndard',
		'InvoiceStandardAsk' => 'Factura estàndard',
		'InvoiceStandardDesc' => 'Aquest tipus de factura és la factura tradicional. També es coneix com <b>factura de dèbit</ b> (del verb deure).',
		'InvoiceDeposit' => 'Factura de bestreta',
		'InvoiceDepositAsk' => 'Factura de bestreta',
		'InvoiceDepositDesc' => 'La <b>factura de bestreta</b> és el tipus de factura que es crea a la recepció d\'una bestreta, si no és possible realitzar el pagament sobre una factura definitiva.',
		'InvoiceProForma' => 'Factura proforma',
		'InvoiceProFormaAsk' => 'Factura proforma',
		'InvoiceProFormaDesc' => 'La <b>factura proforma</b> és la imatge d\'una factura definitiva, però que no té cap valor comptable.',
		'InvoiceReplacement' => 'Factura rectificativa',
		'InvoiceReplacementAsk' => 'Factura rectificativa de la factura',
		'InvoiceReplacementDesc' => 'La <b>factura rectificativa</ b> serveix per a cancel·lar i per substituir una factura existent sobre la qual encara no hi ha pagaments.<br>Nota: Només una factura sense cap pagament pot rectificarse. Si aquesta última no està tancada, passarà automàticament al estad \'abandonada\'.',
		'InvoiceAvoir' => 'Abonament',
		'InvoiceAvoirAsk' => 'Abonament per corregir la factura',
		'InvoiceAvoirDesc' => 'El <b>abonament</ b> és una factura negativa destinada a compensar un import de factura que difereix de l\'import realment pagat (per haver pagat de més o per devolució de productes, per exemple).',
		'ReplaceInvoice' => 'Rectificar la factura %s',
		'ReplacementInvoice' => 'Rectificació factura',
		'ReplacedByInvoice' => 'Rectificada per la factura %s',
		'ReplacementByInvoice' => 'Rectificada per factura',
		'CorrectInvoice' => 'Correcció factura %s',
		'CorrectInvoice' => 'Correcció factura %s',
		'CorrectionInvoice' => 'Correcció',
		'UsedByInvoice' => 'Aplicat a la factura',
		'ConsumedBy' => 'Consumit per',
		'NotConsumed' => 'No consumit',
		'NoReplacableInvoice' => 'Sense factures rectificables',
		'NoInvoiceToCorrect' => 'Sense factures a corregir',
		'InvoiceHasAvoir' => 'Corregida per un o mes abonaments',
		'CardBill' => 'Fitxa factura',
		'PredefinedInvoices' => 'Factura predefinida',
		'Invoice' => 'Factura',
		'Invoices' => 'Factures',
		'InvoiceLine' => 'Línia de factura',
		'BillLines' => 'Invoice lines',
		'InvoiceCustomer' => 'Factura a client',
		'CustomerInvoice' => 'Factura a client',
		'CustomersInvoices' => 'Factures a clientes',
		'SupplierInvoice' => 'Factura de proveïdor',
		'SuppliersInvoices' => 'Factures de proveïdors',
		'SupplierBill' => 'Factura de proveïdor',
		'SupplierBills' => 'Factures de proveïdors',
		'Payment' => 'Pagament',
		'PaymentBack' => 'Reembossament',
		'Payments' => 'Pagaments',
		'PaymentsBack' => 'Reembossaments',
		'DatePayment' => 'Data de pagament',
		'DeletePayment' => 'Eliminar el pagament',
		'ConfirmDeletePayment' => 'Esteu segur de voler eliminar aquest pagament?',
		'ConfirmConvertToReduc' => 'Vol convertir aquest abonament en una reducció futura?<br>L\'import d\'aquest abonament s\'emmagatzema per a aquest client. Podrà utilitzar-se per reduir l\'import d\'una propera factura del client.',
		'SupplierPayments' => 'Pagaments a proveïdors',
		'ReceivedPayments' => 'Pagaments rebuts',
		'ReceivedCustomersPayments' => 'Pagaments rebuts de client',
		'ReceivedCustomersPaymentsToValid' => 'Pagaments rebuts de client a validar',
		'PaymentsReportsForYear' => 'Informes de pagaments de %s',
		'PaymentsReports' => 'Informes de pagaments',
		'PaymentsAlreadyDone' => 'Pagaments efectuats',
		'PaymentRule' => 'Payment rule',
		'PaymentMode' => 'Forma de pagament',
		'PaymentConditions' => 'Condicions de pagament',
		'PaymentConditionsShort' => 'Condicions pagament',
		'PaymentAmount' => 'Import pagament',
		'ValidatePayment' => 'Validar aquest pagament',
		'PaymentHigherThanReminderToPay' => 'Pagament superior a la resta a pagar',
		'HelpPaymentHigherThanReminderToPay' => 'Atenció, l\'import del pagament d\'una o més factures és superior a la resta a pagar.<br>Corregiu la entrada, en cas contrari, confirmeu i pensi en crear un abonament d\'allò percebut en excés per cada factura sobrepagada.',
		'ClassifyPaid' => 'Classificar \'Pagat\'',
		'ClassifyPaidPartially' => 'Classificar \'Pagat parcialment\'',
		'ClassifyCanceled' => 'Classificar \'Abandonat\'',
		'ClassifyClosed' => 'Classificar \'Tancat\'',
		'CreateBill' => 'Crear factura',
		'AddBill' => 'Crear factura o abonament',
		'DeleteBill' => 'Eliminar factura',
		'SearchACustomerInvoice' => 'Cercar una factura a client',
		'SearchASupplierInvoice' => 'Cercar una factura de proveïdor',
		'CancelBill' => 'Anul·lar una factura',
		'SendRemindByMail' => 'Enviar recordatori',
		'DoPayment' => 'Emetre pagament',
		'DoPaymentBack' => 'Emetre reembossament',
		'ConvertToReduc' => 'Convertir en reducció futura',
		'EnterPaymentReceivedFromCustomer' => 'Afegir pagament rebut de client',
		'EnterPaymentDueToCustomer' => 'Fer pagament d\'abonaments al client',
		'DisabledBecauseRemainderToPayIsZero' => 'Desactivar ja que la resta a pagar és 0',
		'Amount' => 'Import',
		'PriceBase' => 'Preu base',
		'BillStatus' => 'Estat de la factura',
		'BillStatusDraft' => 'Esborrany (a validar)',
		'BillStatusPaid' => 'Pagada',
		'BillStatusPaidBackOrConverted' => 'Reemborsada o convertida en reducció',
		'BillStatusConverted' => 'Convertida en reducció',
		'BillStatusCanceled' => 'Abandonada',
		'BillStatusValidated' => 'Validada (a pagar)',
		'BillStatusStarted' => 'Pagada parcialment',
		'BillStatusNotPaid' => 'Pendent de pagament',
		'BillStatusClosedUnpaid' => 'Tancada (pendent de pagament)',
		'BillStatusClosedPaidPartially' => 'Pagada (parcialment)',
		'BillShortStatusDraft' => 'Esborrany',
		'BillShortStatusPaid' => 'Pagada',
		'BillShortStatusPaidBackOrConverted' => 'Processada',
		'BillShortStatusConverted' => 'Tractada',
		'BillShortStatusCanceled' => 'Abandonada',
		'BillShortStatusValidated' => 'Validada',
		'BillShortStatusStarted' => 'Començada',
		'BillShortStatusNotPaid' => 'Pendent de cobrament',
		'BillShortStatusClosedUnpaid' => 'Tancada',
		'BillShortStatusClosedPaidPartially' => 'Pagada',
		'PaymentStatusToValidShort' => 'A validar',
		'ErrorVATIntraNotConfigured' => 'Número d\'IVA intracomunitari encara no configurat',
		'ErrorNoPaiementModeConfigured' => 'No hi ha definit mode de pagament per defecte. Corregir des del mòdul factura',
		'ErrorCreateBankAccount' => 'Crea un compte bancari i després en la configuració del mòdul factura definir els modes de pagament',
		'ErrorBillNotFound' => 'Factura %s inexistent',
		'ErrorInvoiceAlreadyReplaced' => 'Error, vol validar una factura que rectifica la factura %s. Però aquesta última ja està rectificada per la factura %s.',
		'ErrorDiscountAlreadyUsed' => 'Error, la remesa ja està assignada',
		'ErrorInvoiceAvoirMustBeNegative' => 'Error, una factura de tipus Abonament ha de tenir un import negatiu',
		'ErrorInvoiceOfThisTypeMustBePositive' => 'Error, una factura d\'aquest tipus ha de tenir un import positiu',
		'ErrorCantCancelIfReplacementInvoiceNotValidated' => 'Error, no és possible cancel·lar una factura que ha estat substituïda per una altra que es troba en l\'estat \'esborrany\'.',
		'BillFrom' => 'Emissor',
		'BillTo' => 'Enviar a',
		'ActionsOnBill' => 'Eventos sobre la factura',
		'NewBill' => 'Nova factura',
		'Prélèvements' => 'Domiciliacions',
		'Prélèvements' => 'Domiciliacions',
		'LastBills' => 'Les %s últimes factures',
		'LastCustomersBills' => 'Les %s últimes factures a clients',
		'LastSuppliersBills' => 'Les %s últimes factures de proveïdors',
		'AllBills' => 'Totes les factures',
		'OtherBills' => 'Altres factures',
		'DraftBills' => 'Factures esborrany',
		'CustomersDraftInvoices' => 'Factures a clients esborrany',
		'SuppliersDraftInvoices' => 'Factures de proveïdors esborrany',
		'Unpaid' => 'Pendents',
		'ConfirmDeleteBill' => 'Esteu segur de voler eliminar aquesta factura?',
		'ConfirmValidateBill' => 'Esteu segur de voler validar aquesta factura amb la referència <b>%s</b>?',
		'ConfirmUnvalidateBill' => 'Esteu segur de voler tornar la factura <b>%s</b> a l\'estat esborrany?',
		'ConfirmClassifyPaidBill' => 'Esteu segur de voler classificar la factura <b>%s</b> com pagada?',
		'ConfirmCancelBill' => 'Esteu segur de voler anul·lar la factura <b>%s</b>?',
		'ConfirmCancelBillQuestion' => 'Per quina raó vol abandonar la factura?',
		'ConfirmClassifyPaidPartially' => 'Esteu segur de voler classificar la factura <b>%s</b> com pagada?',
		'ConfirmClassifyPaidPartiallyQuestion' => 'Aquesta factura no ha estat totalment pagada. Per què vol classificar-la com a pagada?',
		'ConfirmClassifyPaidPartiallyReasonAvoir' => 'La resta a pagar <b>(%s %s)</b> s\'ha regularitzat (ja que article s\'ha tornat, oblidat lliurar, descompte no definit ...) mitjançant un abonament',
		'ConfirmClassifyPaidPartiallyReasonDiscountNoVat' => 'La resta a pagar <b>(%s %s)</b> és un descompte acordat després de la facturació. Accepto perdre l\'IVA d\'aquest descompte',
		'ConfirmClassifyPaidPartiallyReasonDiscountVat' => 'La resta a pagar <b>(%s %s)</b> és un descompte',
		'ConfirmClassifyPaidPartiallyReasonBadCustomer' => 'Client morós',
		'ConfirmClassifyPaidPartiallyReasonProductReturned' => 'Productes retornats en part',
		'ConfirmClassifyPaidPartiallyReasonOther' => 'D\'altra raó',
		'ConfirmClassifyPaidPartiallyReasonDiscountNoVatDesc' => 'Aquesta elecció és possible si la seva factura es provingera de la menció adequada. (Exemple: "descompte net d\'impostos")',
		'ConfirmClassifyPaidPartiallyReasonDiscountVatDesc' => 'Aquesta elecció és possible si la seva factura es provingera de la menció adequada. (Exemple: menció per la qual es defineix el descompte o de la classe "només l\'impost que correspon al preu efectivament pagat causa dret a deducció")',
		'ConfirmClassifyPaidPartiallyReasonAvoirDesc' => 'Aquesta elecció és l\'elecció que s\'ha de prendre si les altres no són aplicables',
		'ConfirmClassifyPaidPartiallyReasonBadCustomerDesc' => 'Un <b>client morós </b> és un client que no vol regularitzar el seu deute.',
		'ConfirmClassifyPaidPartiallyReasonProductReturnedDesc' => 'Aquesta elecció és possible si el cas de pagament incomplet és arran d\'una devolució de part dels productes',
		'ConfirmClassifyPaidPartiallyReasonOtherDesc' => 'Aquesta elecció serà possible, per exemple, en els casos següents:<br>-pagament parcial ja que una partida de productes s\'ha tornat. <br> - Reclamat per no lliurar productes de la factura <br>En tots els casos, la reclamació s\'ha de regularitzar mitjançant un abonament',
		'ConfirmClassifyAbandonReasonOther' => 'Altre',
		'ConfirmClassifyAbandonReasonOtherDesc' => 'Aquesta elecció serà per a qualsevol altre cas. Per exemple arran de la intenció de crear una factura rectificativa.',
		'ConfirmCustomerPayment' => '¿Confirmeu el procés d\'aquest pagament de <b>%s</b>%s?',
		'ConfirmValidatePayment' => 'Esteu segur de voler validar aquest pagament (cap modificació és possible un cop el pagament estigui validat)?',
		'ValidateBill' => 'Validar factura',
		'UnvalidateBill' => 'Tornar factura a esborrany',
		'NumberOfBills' => 'Nº de factures',
		'NumberOfBillsByMonth' => 'Nº de factures per mes',
		'AmountOfBills' => 'Import de les factures',
		'AmountOfBillsByMonthHT' => 'Import de les factures per mes (Sense IVA)',
		'ShowSocialContribution' => 'Mostrar contribució social',
		'ShowBill' => 'Veure factura',
		'ShowInvoice' => 'Veure factura',
		'ShowInvoiceReplace' => 'Veure factura rectificativa',
		'ShowInvoiceAvoir' => 'Veure abonament',
		'ShowInvoiceDeposit' => 'Mostrar factura d\'acompte',
		'ShowPayment' => 'Veure pagament',
		'File' => 'Fitxer',
		'AlreadyPaid' => 'Ja pagat',
		'AlreadyPaidNoCreditNotesNoDeposits' => 'Ja pagat (exclosos els abonaments i bestretes)',
		'Abandoned' => 'Abandonada',
		'RemainderToPay' => 'Queda per pagar',
		'RemainderToTake' => 'Queda per cobrar',
		'AmountExpected' => 'Import reclamat',
		'ExcessReceived' => 'Rebut en excés',
		'EscompteOffered' => 'Descompte (pagament aviat)',
		'SendBillRef' => 'Enviament de la factura %s',
		'SendReminderBillRef' => 'Recordatori de la factura %s',
		'StandingOrders' => 'Domiciliacions',
		'StandingOrder' => 'Domiciliació',
		'NoDraftBills' => 'Cap factura esborrany',
		'NoOtherDraftBills' => 'Cap altra factura esborrany',
		'RefBill' => 'Ref. factura',
		'ToBill' => 'A facturar',
		'RemainderToBill' => 'Queda per facturar',
		'SendBillByMail' => 'Enviar la factura per E-Mail',
		'SendReminderBillByMail' => 'Enviar un recordatori per E-Mail',
		'RelatedCommercialProposals' => 'Pressupostos associats',
		'MenuToValid' => 'A validar',
		'DateMaxPayment' => 'Data límit de pagament',
		'DateEcheance' => 'Data venciment',
		'DateInvoice' => 'Data facturació',
		'NoInvoice' => 'Cap factura',
		'ClassifyBill' => 'Classificar la factura',
		'NoSupplierBillsUnpaid' => 'Cap factura de proveïdor pendent de pagament',
		'SupplierBillsToPay' => 'Factures de proveïdors a pagar',
		'CustomerBillsUnpaid' => 'Factures a clients pendents de cobrament',
		'DispenseMontantLettres' => 'Les factures redactactades per processos mecànics estan exemptes de l\'ordre en lletres',
		'DispenseMontantLettres' => 'Les factures redactactades per processos mecànics estan exemptes de l\'ordre en lletres',
		'NonPercuRecuperable' => 'No percebut recuperable',
		'SetConditions' => 'Definir condicions de pagament',
		'SetMode' => 'Definir mode de pagament',
		'SetDate' => 'Definir data',
		'SelectDate' => 'Seleccioneu una data',
		'Billed' => 'Facturat',
		'RepeatableInvoice' => 'Factura recurrent',
		'RepeatableInvoices' => 'Factures recurrents',
		'Repeatable' => 'Recurrent',
		'Repeatables' => 'Recurrents',
		'ChangeIntoRepeatableInvoice' => 'Modificar com a recurrent',
		'CreateRepeatableInvoice' => 'Crear factura recurrent',
		'CreateFromRepeatableInvoice' => 'Crear desde factura recurrent',
		'CustomersInvoicesAndInvoiceLines' => 'Factures a clients i línies de factures',
		'CustomersInvoicesAndPayments' => 'Factures a clients i pagaments',
		'ExportDataset_invoice_1' => 'Factures a clients i línies de factura',
		'ExportDataset_invoice_2' => 'Factures a clients i pagaments',
		'ProformaBill' => 'Factura proforma:',
		'Reduction' => 'Reducció',
		'ReductionShort' => 'Dto.',
		'Reductions' => 'Descomptes',
		'ReductionsShort' => 'Dto.',
		'Discount' => 'Descompte',
		'Discounts' => 'Descomptes',
		'AddDiscount' => 'Crear descompte fix',
		'AddRelativeDiscount' => 'Crear descompte relatiu',
		'EditRelativeDiscount' => 'Editar descompte relatiu',
		'AddGlobalDiscount' => 'Crear descompte fixe',
		'EditGlobalDiscounts' => 'Editar descompte fixe',
		'AddCreditNote' => 'Crear factura de pagament',
		'ShowDiscount' => 'Veure el abonament',
		'ShowReduc' => 'Visualitzar la deducció',
		'RelativeDiscount' => 'Descompte relatiu',
		'GlobalDiscount' => 'Descompte fixe',
		'CreditNote' => 'Abonament',
		'CreditNotes' => 'Abonaments',
		'Deposit' => 'Bestreta',
		'Deposits' => 'Bestretes',
		'DiscountFromCreditNote' => 'Descompte resultant del abonament %s',
		'DiscountFromDeposit' => 'Pagaments de la factura de bestreta %s',
		'AbsoluteDiscountUse' => 'Aquest tipus de crèdit no es pot utilitzar en una factura abans de la seva validació',
		'CreditNoteDepositUse' => 'La factura ha d\'estar validada per poder utilitzar aquest tipus de crèdits',
		'NewGlobalDiscount' => 'Nou descompte fixe',
		'NewRelativeDiscount' => 'Nou descompte',
		'NoteReason' => 'Nota/Motiu',
		'ReasonDiscount' => 'Motiu',
		'DiscountOfferedBy' => 'Acordat per',
		'DiscountStillRemaining' => 'Descomptes fixes pendents',
		'DiscountAlreadyCounted' => 'Descomptes fixes ja aplicats',
		'BillAddress' => 'Direcció de facturació',
		'HelpEscompte' => 'Un <b>descompte</b> és un descompte acordat sobre una factura donada, a un client que va realitzar el seu pagament molt abans del venciment.',
		'HelpAbandonBadCustomer' => 'Aquest import es va abandonar (client jutjat com morós) i es considera com una pèrdua excepcional.',
		'HelpAbandonOther' => 'Aquest import es va abandonar ja que es tractava d\'un error de facturació (mala introducció de dades, factura substituïda per una altra).',
		'IdSocialContribution' => 'ID càrega social',
		'PaymentId' => 'ID pagament',
		'InvoiceId' => 'Id factura',
		'InvoiceRef' => 'Ref. factura',
		'InvoiceDateCreation' => 'Data creació factura',
		'InvoiceStatus' => 'Estat factura',
		'InvoiceNote' => 'Nota factura',
		'InvoicePaid' => 'Factura pagada',
		'PaymentNumber' => 'Número de pagament',
		'RemoveDiscount' => 'Eliminar descompte',
		'WatermarkOnDraftBill' => 'Marca d\'aigua en factures esborrany (res si està buida)',
		'InvoiceNotChecked' => 'Cap factura pendent està seleccionada',
		'CloneInvoice' => 'Clonar factura',
		'ConfirmCloneInvoice' => 'Esteu segur de voler clonar aquesta factura?',
		'DisabledBecauseReplacedInvoice' => 'Acció desactivada perquè és una factura reemplaçada',
		'DescTaxAndDividendsArea' => 'Aquesta pantalla resumeix la llista de tots els impostos i les càrregues socials exigides per a un any determinat. La data presa en compte és el període de pagament.',
		'NbOfPayments' => 'Nº de pagaments',
		'SplitDiscount' => 'Dividir el dte. en dos',
		'ConfirmSplitDiscount' => 'Esteu segur de voler dividir el descompte de <b>%s</b> %s en 2 descomptes més petits?',
		'TypeAmountOfEachNewDiscount' => 'Indiqui l\'import per a cada part:',
		'TotalOfTwoDiscountMustEqualsOriginal' => 'La suma de l\'import dels 2 nous descomptes deu ser la mateixa que l\'import del descompte a dividir.',
		'ConfirmRemoveDiscount' => 'Esteu segur de voler eliminar aquest descompte?',
		'RelatedBill' => 'Factura associada',
		'RelatedBills' => 'Factures associades',
		// PaymentConditions
		'PaymentConditionShortRECEP' => 'A la recepció',
		'PaymentConditionRECEP' => 'A la recepció de la factura',
		'PaymentConditionShort30D' => '30 dies',
		'PaymentCondition30D' => 'Pagament a 30 dies',
		'PaymentConditionShort30DENDMONTH' => '30 dies fi de mes',
		'PaymentCondition30DENDMONTH' => 'Pagament als 30 dies a fi de mes',
		'PaymentConditionShort60D' => '60 dies',
		'PaymentCondition60D' => 'Pagament als 60 dies',
		'PaymentConditionShort60DENDMONTH' => '60 dies a fi de mes',
		'PaymentCondition60DENDMONTH' => 'Pagament als 60 dies a fi de mes',
		'PaymentConditionShortPT_DELIVERY' => 'Al lliurament',
		'PaymentConditionPT_DELIVERY' => 'Pagament al lliurament',
		'PaymentConditionShortPT_ORDER' => 'Comanda',
		'PaymentConditionPT_ORDER' => 'A la recepció de la comanda',
		'PaymentConditionShortPT_5050' => '50/50',
		'PaymentConditionPT_5050' => 'Pagament 50%% per avançat, 50%% al lliurament',
		// PaymentType
		'PaymentTypeVIR' => 'Transferència bancària',
		'PaymentTypeShortVIR' => 'Transferència',
		'PaymentTypePRE' => 'Domiciliació bancària',
		'PaymentTypeShortPRE' => 'Domiciliació',
		'PaymentTypeLIQ' => 'Efectiu',
		'PaymentTypeShortLIQ' => 'Efectiu',
		'PaymentTypeCB' => 'Targeta',
		'PaymentTypeShortCB' => 'Targeta',
		'PaymentTypeCHQ' => 'Xec',
		'PaymentTypeShortCHQ' => 'Xec',
		'PaymentTypeTIP' => 'Ingrés en compte',
		'PaymentTypeShortTIP' => 'Ingrés',
		'PaymentTypeVAD' => 'Pagament On Line',
		'PaymentTypeShortVAD' => 'Pagament On Line',
		'PaymentTypeTRA' => 'Lletra de canvi',
		'PaymentTypeShortTRA' => 'Lletra',
		'BankDetails' => 'Dades bancàries',
		'BankCode' => 'Codi banc',
		'DeskCode' => 'Cod. sucursal',
		'BankAccountNumber' => 'Número compte',
		'BankAccountNumberKey' => 'D. C.',
		'Residence' => 'Domiciliació',
		'IBANNumber' => 'Codi IBAN',
		'IBAN' => 'IBAN',
		'BIC' => 'BIC/SWIFT',
		'BICNumber' => 'Codi BIC/SWIFT',
		'ExtraInfos' => 'Informacions complementàries',
		'RegulatedOn' => 'Pagar el',
		'ChequeNumber' => 'Xec nº',
		'ChequeOrTransferNumber' => 'Xec/Transerència nº',
		'ChequeMaker' => 'Emissor del xec',
		'ChequeBank' => 'Banc del xec',
		'NetToBePaid' => 'Net a pagar',
		'PhoneNumber' => 'Tel.',
		'FullPhoneNumber' => 'Telèfon',
		'TeleFax' => 'Fax',
		'PrettyLittleSentence' => 'Accepto el pagament mitjançant xecs al meu nom de les sumes degudes, en la meva qualitat de membre d\'una empresa autoritzada per l\'Administració Fiscal.',
		'IntracommunityVATNumber' => 'Número d\'IVA intracomunitari',
		'PaymentByChequeOrderedTo' => 'Pagament mitjançant xec nominatiu a %s enviat a',
		'PaymentByChequeOrderedToShort' => 'Pagament mitjançant xec nominatiu a',
		'SendTo' => 'enviat a',
		'PaymentByTransferOnThisBankAccount' => 'Pagament mitjançant transferència sobre el compte bancari següent',
		'VATIsNotUsedForInvoice' => '* IVA no aplicable art-293B del CGI',
		'LawApplicationPart1' => 'Per aplicació de la llei 80.335 de 12.05.80',
		'LawApplicationPart2' => 'les mercaderies romanen en propietat de',
		'LawApplicationPart3' => 'venedor fins al cobrament de',
		'LawApplicationPart4' => 'els seus preus',
		'LimitedLiabilityCompanyCapital' => 'SRL amb capital de',
		'UseLine' => 'Aplicar',
		'UseDiscount' => 'Aplicar descompte',
		'UseCredit' => 'Utilitzar crèdit',
		'UseCreditNoteInInvoicePayment' => 'Reduir el pagament amb aquest crèdit',
		'MenuChequeDeposits' => 'Remeses',
		'MenuCheques' => 'Gestió xecs',
		'MenuChequesReceipts' => 'Llista',
		'NewChequeDeposit' => 'Nou dipòsit',
		'ChequesReceipts' => 'Llistat remeses',
		'ChequesArea' => 'Àrea remeses',
		'ChequeDeposits' => 'Dipòsit de xecs',
		'Cheques' => 'Xecs',
		'CreditNoteConvertedIntoDiscount' => 'Aquest abonament s\'ha convertit en %s',
		'UsBillingContactAsIncoiveRecipientIfExist' => 'Utilitzar l\'adreça del contacte de client de facturació de la factura en comptes de la direcció del tercer com a destinatari de les factures',
		'ShowUnpaidAll' => 'Mostrar tots els pendents',
		'ShowUnpaidLateOnly' => 'Mostrar els pendents en retard només',
		'PaymentInvoiceRef' => 'Pagament factura %s',
		'ValidateInvoice' => 'Validar factura',
		'Cash' => 'Efectiu',
		'Reported' => 'Ajornat',
		'DisabledBecausePayments' => 'No disponible ja que hi ha pagaments',
		'CantRemovePaymentWithOneInvoicePaid' => 'Eliminació impossible quan hi ha almenys una factura classificada com a pagada.',
		'ExpectedToPay' => 'Esperant el pagament',
		'PayedByThisPayment' => 'Pagada per aquest pagament',
		'ClosePaidInvoicesAutomatically' => 'Classificar com "Pagades" les factures i facures rectificatives completament pagades.',
		'AllCompletelyPayedInvoiceWillBeClosed' => 'Totes les factures amb una resta a pagar 0 seran automàticament tancades a l\'estat "Pagada".',
		////////// Types de contacts //////////
		'TypeContact_facture_internal_SALESREPFOLL' => 'Responsable seguiment factura a client',
		'TypeContact_facture_external_BILLING' => 'Contacte client facturació',
		'TypeContact_facture_external_SHIPPING' => 'Contacte client entregues',
		'TypeContact_facture_external_SERVICE' => 'Contacte client serveis',
		'TypeContact_invoice_supplier_internal_SALESREPFOLL' => 'Responsable seguiment factures de proveïdor',
		'TypeContact_invoice_supplier_external_BILLING' => 'Contacte proveïdor facturació',
		'TypeContact_invoice_supplier_external_SHIPPING' => 'Contacte proveïdor entregues',
		'TypeContact_invoice_supplier_external_SERVICE' => 'Contacte proveïdor serveis',
		// crabe PDF Model
		'PDFCrabeDescription' => 'Model de factura complet (model recomanat per defecte)',
		// oursin PDF Model
		'PDFOursinDescription' => 'Model de factura complet (model alternatiu)',
		// NumRef Modules
		'TerreNumRefModelDesc1' => 'Retorna el nombre sota el format %syymm-nnnn per a les factures i %syymm-nnnn per als abonaments on yy és l\'any, mm. el mes i nnnn un comptador seqüencial sense ruptura i sense permanència a 0',
		'TerreNumRefModelError' => 'A bill starting with $syymm already exists and is not compatible with this model of sequence. Remove it or rename it to activate this module.'
);
?>