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
		'Bill' => 'Fatura',
		'Bills' => 'Faturas',
		'BillsCustomers' => 'Faturas a Clientes',
		'BillsCustomer' => 'Customer\'s invoice',
		'BillsSuppliers' => 'Faturas de Fornecedores',
		'BillsCustomersUnpaid' => 'Faturas de Clientes Pendentes de Cobrança',
		'BillsCustomersUnpaidForCompany' => 'Unpaid customer\'s invoices for %s',
		'BillsSuppliersUnpaid' => 'Faturas de Fornecedores Pendentes de Pagamento',
		'BillsSuppliersUnpaidForCompany' => 'Unpaid supplier\'s invoices for %s',
		'BillsUnpaid' => 'Unpaid',
		'BillsLate' => 'Atrasos de Pagamento',
		'BillsStatistics' => 'Estatísticas faturas a clientes',
		'BillsStatisticsSuppliers' => 'Estatísticas faturas de Fornecedores',
		'DisabledBecauseNotErasable' => 'Disabled because can not be erased',
		'InvoiceStandard' => 'Fatura Standard',
		'InvoiceStandardAsk' => 'Fatura Standard',
		'InvoiceStandardDesc' => 'Este tipo de fatura é a fatura tradicional. Também é conhecida como <b>Fatura de Débito</b>.',
		'InvoiceDeposit' => 'Depositar Fatura',
		'InvoiceDepositAsk' => 'Depositar Fatura',
		'InvoiceDepositDesc' => 'Este tipo de fatura é feita com um depósito quando foi recebido.',
		'InvoiceProForma' => 'Fatura Pro-Forma',
		'InvoiceProFormaAsk' => 'Fatura Pro-Forma',
		'InvoiceProFormaDesc' => '<b>Fatura Pro-Forma</b> é uma verdadeira imagem de uma fatura, mas não tem valor contábil.',
		'InvoiceReplacement' => 'Fatura Retificativa',
		'InvoiceReplacementAsk' => 'Fatura Retificativa da Fatura',
		'InvoiceReplacementDesc' => 'A <b>fatura retificativa</b> serve para cancelar e para substituir uma fatura existente em que ainda não existe pagamentos.<br><br>Nota: só uma fatura sem nenhum pagamento pode retificarse. Sim esta última não está fechada, passará automaticamente ao estado\'abandonada\'.',
		'InvoiceAvoir' => 'Nota de Crédito',
		'InvoiceAvoirAsk' => 'Nota de Crédito para Corrigir a Fatura',
		'InvoiceAvoirDesc' => 'A <b>Nota de Crédito</b> é uma fatura negativa destinada a compensar um valor de uma fatura que difere do valor realmente pago (por ter pago a mais ou por devolução de produtos, por Exemplo).<br><br>Nota: Tenha em conta que a fatura original a corrigir deve ter sido fechada (\' paga\' ou \' paga parcialmente \') para poder realizar uma nota de crédito.',
		'ReplaceInvoice' => 'Retificar a Fatura %s',
		'ReplacementInvoice' => 'Substituição da Fatura',
		'ReplacedByInvoice' => 'Substituído por Fatura %s',
		'ReplacementByInvoice' => 'Substituído por Fatura',
		'CorrectInvoice' => 'Correção de Fatura %s',
		'CorrectInvoice' => 'Correção de Fatura %s',
		'CorrectionInvoice' => 'Correção de Fatura',
		'UsedByInvoice' => 'Aplicar sobre a fatura %s',
		'ConsumedBy' => 'Consumida por',
		'NotConsumed' => 'Sem Consumo',
		'NoReplacableInvoice' => 'Sem Faturas Retificáveis',
		'NoInvoiceToCorrect' => 'Sem Faturas a Corrigir',
		'InvoiceHasAvoir' => 'Corrigida por um ou mais recibos',
		'CardBill' => 'Ficha Fatura',
		'PredefinedInvoices' => 'Fatura Predefinida',
		'Invoice' => 'Fatura',
		'Invoices' => 'Faturas',
		'InvoiceLine' => 'Linha de Fatura',
		'BillLines' => 'Invoice lines',
		'InvoiceCustomer' => 'Fatura a Cliente',
		'CustomerInvoice' => 'Fatura a Clientes',
		'CustomersInvoices' => 'Faturas de Clientes',
		'SupplierInvoice' => 'Fatura de Fornecedor',
		'SuppliersInvoices' => 'Faturas de Fornecedores',
		'SupplierBill' => 'Fatura de Fornecedor',
		'SupplierBills' => 'Faturas de Fornecedores',
		'Payment' => 'Pagamento',
		'PaymentBack' => 'Reembolso',
		'Payments' => 'Pagamentos',
		'PaymentsBack' => 'Reembolsos',
		'DatePayment' => 'Data de Pagamento',
		'DeletePayment' => 'Eliminar o Pagamento',
		'ConfirmDeletePayment' => 'Tem certeza que quer eliminar este pagamento?',
		'ConfirmConvertToReduc' => 'Quer converter este deposito numa redução futura?<br>O valor deste deposito ficará guardado para este cliente. Poderá utiliza-lo para reduzir o valor de uma próxima fatura do cliente.',
		'SupplierPayments' => 'Pagamentos a Fornecedores',
		'ReceivedPayments' => 'Pagamentos Recebidos',
		'ReceivedCustomersPayments' => 'Pagamentos Recebidos de Cliente',
		'ReceivedCustomersPaymentsToValid' => 'Pagamentos Recebidos de Cliente a Confirmar',
		'PaymentsReportsForYear' => 'Relatórios de Pagamentos de %s',
		'PaymentsReports' => 'Relatórios de Pagamentos',
		'PaymentsAlreadyDone' => 'Pagamentos Efetuados',
		'PaymentRule' => 'Payment rule',
		'PaymentMode' => 'Forma de Pagamento',
		'PaymentConditions' => 'Tipo de Pagamento',
		'PaymentConditionsShort' => 'Tipo de Pagamento',
		'PaymentAmount' => 'Valor a Pagar',
		'ValidatePayment' => 'Validar Pagamento',
		'PaymentHigherThanReminderToPay' => 'Pagamento superior ao resto a pagar',
		'HelpPaymentHigherThanReminderToPay' => 'Attention, the payment amount of one or more bills is higher than the rest to pay. <br> Edit your entry, otherwise confirm and think about creating a credit note of the excess received for each overpaid invoices.',
		'ClassifyPaid' => 'Classify \'Paid\'',
		'ClassifyPaidPartially' => 'Classify \'Paid partially\'',
		'ClassifyCanceled' => 'Classificar \'Cancelado\'',
		'ClassifyClosed' => 'Classificar \'Encerrado\'',
		'CreateBill' => 'Criar Fatura',
		'AddBill' => 'Criar Fatura ou Deposito',
		'DeleteBill' => 'Eliminar Fatura',
		'SearchACustomerInvoice' => 'Procurar uma fatura de cliente',
		'SearchASupplierInvoice' => 'Procurar uma fatura de fornecedor',
		'CancelBill' => 'Anular uma Fatura',
		'SendRemindByMail' => 'Enviar Lembrete',
		'DoPayment' => 'Emitir Pagamento',
		'DoPaymentBack' => 'Emitir Reembolso',
		'ConvertToReduc' => 'Converter em Redução Futura',
		'EnterPaymentReceivedFromCustomer' => 'Adicionar pagamento recebido de cliente',
		'EnterPaymentDueToCustomer' => 'Realizar pagamento de recibos ao cliente',
		'DisabledBecauseRemainderToPayIsZero' => 'Desativar já que o resto a pagar é 0',
		'Amount' => 'Valor',
		'PriceBase' => 'Preço Base',
		'BillStatus' => 'Estado da fatura',
		'BillStatusDraft' => 'Rascunho (A Confirmar)',
		'BillStatusPaid' => 'Paid',
		'BillStatusPaidBackOrConverted' => 'Paid or converted into discount',
		'BillStatusConverted' => 'Converter em Desconto',
		'BillStatusCanceled' => 'Abandonada',
		'BillStatusValidated' => 'Validada (A Pagar)',
		'BillStatusStarted' => 'Paga Parcialmente',
		'BillStatusNotPaid' => 'Not paid',
		'BillStatusClosedUnpaid' => 'Closed (unpaid)',
		'BillStatusClosedPaidPartially' => 'Paid (partially)',
		'BillShortStatusDraft' => 'Rascunho',
		'BillShortStatusPaid' => 'Paid',
		'BillShortStatusPaidBackOrConverted' => 'Processed',
		'BillShortStatusConverted' => 'Tratada',
		'BillShortStatusCanceled' => 'Abandonada',
		'BillShortStatusValidated' => 'Validada',
		'BillShortStatusStarted' => 'Iniciada',
		'BillShortStatusNotPaid' => 'Not paid',
		'BillShortStatusClosedUnpaid' => 'Closed',
		'BillShortStatusClosedPaidPartially' => 'Paid (partially)',
		'PaymentStatusToValidShort' => 'A Confirmar',
		'ErrorVATIntraNotConfigured' => 'Número de ICMS intracomunitario ainda não configurado',
		'ErrorNoPaiementModeConfigured' => 'Não existe definido modo de pagamento por default. Corrigir a partir do módulo fatura',
		'ErrorCreateBankAccount' => 'Criar uma conta bancária e em seguida, vá para configuração do painel do módulo de fatura para definir modos de pagamento',
		'ErrorBillNotFound' => 'Fatura %s inexistente',
		'ErrorInvoiceAlreadyReplaced' => 'Erro, quer Confirmar uma fatura que retifica a fatura %s. Mas esta última já está retificada pela fatura %s.',
		'ErrorDiscountAlreadyUsed' => 'Erro, a remessa já está entregue',
		'ErrorInvoiceAvoirMustBeNegative' => 'Erro, uma fatura de tipo deposito deve ter um valor negativo',
		'ErrorInvoiceOfThisTypeMustBePositive' => 'Erro, uma fatura deste tipo deve ter um valor positivo',
		'ErrorCantCancelIfReplacementInvoiceNotValidated' => 'Erro, não pode cancelar uma fatura que tenha sido substituída por uma outra fatura e que está ainda em projeto',
		'BillFrom' => 'Emissor',
		'BillTo' => 'Enviar a',
		'ActionsOnBill' => 'Ações Sobre a fatura',
		'NewBill' => 'Nova Fatura',
		'Prélèvements' => 'Débito Direto',
		'Prélèvements' => 'Débito Direto',
		'LastBills' => 'As %s últimas faturas',
		'LastCustomersBills' => 'As %s últimas faturas a clientes',
		'LastSuppliersBills' => 'As %s últimas faturas de Fornecedores',
		'AllBills' => 'Todas as faturas',
		'OtherBills' => 'Outras faturas',
		'DraftBills' => 'Rascunho de Faturas',
		'CustomersDraftInvoices' => 'Rascunho de Faturas a Clientes',
		'SuppliersDraftInvoices' => 'Rascunho de Faturas de Fornecedores',
		'Unpaid' => 'Unpaid',
		'ConfirmDeleteBill' => 'Tem certeza que quer eliminar esta fatura?',
		'ConfirmValidateBill' => 'Tem certeza que quer confirmar esta fatura com a referencia <b>%s</b> ?',
		'ConfirmUnvalidateBill' => 'Tem certeza de que deseja voltar a fatura: <b> %s </b> ao status de rascunho?',
		'ConfirmClassifyPaidBill' => 'Are you sure you want to change invoice <b>%s</b> to status paid ?',
		'ConfirmCancelBill' => 'Tem certeza que quer anular a fatura <b>%s</b> ?',
		'ConfirmCancelBillQuestion' => 'Por qué Razão quer abandonar a fatura?',
		'ConfirmClassifyPaidPartially' => 'Are you sure you want to change invoice <b>%s</b> to status paid ?',
		'ConfirmClassifyPaidPartiallyQuestion' => 'This invoice has not been paid completely. What are reasons for you to close this invoice ?',
		'ConfirmClassifyPaidPartiallyReasonAvoir' => 'Remainder to pay <b>(%s %s)</b> is a discount granted because payment was made before term. I regularise the VAT with a credit note.',
		'ConfirmClassifyPaidPartiallyReasonDiscountNoVat' => 'Remainder to pay <b>(%s %s)</b> is a discount granted because payment was made before term. I accept to lose the VAT on this discount.',
		'ConfirmClassifyPaidPartiallyReasonDiscountVat' => 'Remainder to pay <b>(%s %s)</b> is a discount granted because payment was made before term. I recover the VAT on this discount without a credit note.',
		'ConfirmClassifyPaidPartiallyReasonBadCustomer' => 'Bad customer',
		'ConfirmClassifyPaidPartiallyReasonProductReturned' => 'Products partially returned',
		'ConfirmClassifyPaidPartiallyReasonOther' => 'Amount abandoned for other reason',
		'ConfirmClassifyPaidPartiallyReasonDiscountNoVatDesc' => 'This choice is possible if your invoice have been provided with suitable comment. (Example «Only the tax corresponding to the price that have been actually paid gives rights to deduction»)',
		'ConfirmClassifyPaidPartiallyReasonDiscountVatDesc' => 'In some countries, this choice might be possible only if your invoice contains correct note.',
		'ConfirmClassifyPaidPartiallyReasonAvoirDesc' => 'Use this choice if all other does not suit',
		'ConfirmClassifyPaidPartiallyReasonBadCustomerDesc' => 'A <b>bad customer</b> is a customer that refuse to pay his debt.',
		'ConfirmClassifyPaidPartiallyReasonProductReturnedDesc' => 'This choice is used when payment is not complete because some of products were returned',
		'ConfirmClassifyPaidPartiallyReasonOtherDesc' => 'Use this choice if all other does not suit, for example in following situation:<br>- payment not complete because some products were shipped back<br>- amount claimed too important because a discount was forgotten<br>In all cases, amount over-claimed must be corrected in accountancy system by creating a credit note.',
		'ConfirmClassifyAbandonReasonOther' => 'Outro',
		'ConfirmClassifyAbandonReasonOtherDesc' => 'Esta eleição será para qualquer outro caso. Por Exemplo a raíz da intenção de Criar uma fatura retificativa.',
		'ConfirmCustomerPayment' => 'Confirma o processo  deste pagamento de <b>%s</b> %s ?',
		'ConfirmValidatePayment' => 'Tem certeza que quer Confirmar este pagamento (Nenhuma modificação é possível uma vez o pagamento este validado)?',
		'ValidateBill' => 'Confirmar Fatura',
		'UnvalidateBill' => 'Desaprovar Fatura',
		'NumberOfBills' => 'N� de Faturas',
		'NumberOfBillsByMonth' => 'N� de faturas por mês',
		'AmountOfBills' => 'Valor das Faturas',
		'AmountOfBillsByMonthHT' => 'Quantidade de faturas por mês (sem ICMS)',
		'ShowSocialContribution' => 'Mostrar contribução social',
		'ShowBill' => 'Ver Fatura',
		'ShowInvoice' => 'Ver Fatura',
		'ShowInvoiceReplace' => 'Ver fatura retificativa',
		'ShowInvoiceAvoir' => 'Ver Deposito',
		'ShowInvoiceDeposit' => 'Ver Fatura Depositada',
		'ShowPayment' => 'Ver Pagamento',
		'File' => 'Arquivo',
		'AlreadyPaid' => 'Already paid',
		'AlreadyPaidNoCreditNotesNoDeposits' => 'Already paid (without credit notes and deposits)',
		'Abandoned' => 'Abandonada',
		'RemainderToPay' => 'Falta a Pagar',
		'RemainderToTake' => 'Falta Cobrar',
		'AmountExpected' => 'Valor Reclamado',
		'ExcessReceived' => 'Recebido em Excesso',
		'EscompteOffered' => 'Desconto (Pronto pagamento)',
		'SendBillRef' => 'Enviar Fatura %s',
		'SendReminderBillRef' => 'Lembrete Fatura %s',
		'StandingOrders' => 'Débitos Diretos',
		'StandingOrder' => 'Débito Direto',
		'NoDraftBills' => 'Nenhuma Fatura Rascunho',
		'NoOtherDraftBills' => 'Nenhuma Outra Fatura Rascunho',
		'RefBill' => 'Ref. Fatura',
		'ToBill' => 'A Faturar',
		'RemainderToBill' => 'Falta Faturar',
		'SendBillByMail' => 'Enviar a fatura por E-Mail',
		'SendReminderBillByMail' => 'Enviar um lembrete por E-Mail',
		'RelatedCommercialProposals' => 'Orçamentos Associados',
		'MenuToValid' => 'A Confirmar',
		'DateMaxPayment' => 'Data limite de Pagamento',
		'DateEcheance' => 'Data Vencimento',
		'DateInvoice' => 'Data Faturação',
		'NoInvoice' => 'Nenhuma Fatura',
		'ClassifyBill' => 'Classificar a Fatura',
		'NoSupplierBillsUnpaid' => 'No suppliers invoices unpaid',
		'SupplierBillsToPay' => 'Faturas de Fornecedores a Pagar',
		'CustomerBillsUnpaid' => 'Faturas de Clientes Pendentes de Cobrança',
		'DispenseMontantLettres' => 'Faturas preparadas por processos mecânicos estão isentas da ordem em letras',
		'DispenseMontantLettres' => 'Faturas preparadas por processos mecânicos estão isentas da ordem em letras',
		'NonPercuRecuperable' => 'Sem Recuperação',
		'SetConditions' => 'Definir Condições de Pagamento',
		'SetMode' => 'Definir Modo de Pagamento',
		'SetDate' => 'Definir Data',
		'SelectDate' => 'Select a date',
		'Billed' => 'Faturado',
		'RepeatableInvoice' => 'Fatura em Massa',
		'RepeatableInvoices' => 'Faturas em Massa',
		'Repeatable' => 'Em Massa',
		'Repeatables' => 'Em Massa',
		'ChangeIntoRepeatableInvoice' => 'Modificar em Massa',
		'CreateRepeatableInvoice' => 'Criar Fatura Predefinida',
		'CreateFromRepeatableInvoice' => 'Criar a partir de uma fatura pré-definida',
		'CustomersInvoicesAndInvoiceLines' => 'Faturas a clientes e linhas de faturas',
		'CustomersInvoicesAndPayments' => 'Faturas a clientes e pagamentos',
		'ExportDataset_invoice_1' => 'Faturas a clientes e linhas de fatura',
		'ExportDataset_invoice_2' => 'Faturas a clientes e pagamentos',
		'ProformaBill' => 'Fatura Pro-Forma:',
		'Reduction' => 'Redução',
		'ReductionShort' => 'Desc.',
		'Reductions' => 'Descontos',
		'ReductionsShort' => 'Desc.',
		'Discount' => 'Desconto',
		'Discounts' => 'Descontos',
		'AddDiscount' => 'Adicionar Desconto',
		'AddRelativeDiscount' => 'Create relative discount',
		'EditRelativeDiscount' => 'Alterar Desconto Relativo',
		'AddGlobalDiscount' => 'Adicionar Desconto Fixo',
		'EditGlobalDiscounts' => 'Alterar Descontos Globais',
		'AddCreditNote' => 'Create credit note',
		'ShowDiscount' => 'Ver o Depósito',
		'ShowReduc' => 'Show the deduction',
		'RelativeDiscount' => 'Desconto Relativo',
		'GlobalDiscount' => 'Desconto Fixo',
		'CreditNote' => 'Depósito',
		'CreditNotes' => 'Recibos',
		'Deposit' => 'Depósito',
		'Deposits' => 'Depósitos',
		'DiscountFromCreditNote' => 'Desconto resultante do deposito %s',
		'DiscountFromDeposit' => 'Pagamentos a partir de depósito na fatura %s',
		'AbsoluteDiscountUse' => 'Este tipo de crédito não pode ser usado em um projeto antes da sua validação',
		'CreditNoteDepositUse' => 'O projeto deve ser validado para utilizar este tipo de crédito',
		'NewGlobalDiscount' => 'Novo Desconto fixo',
		'NewRelativeDiscount' => 'New relative discount',
		'NoteReason' => 'Nota/Motivo',
		'ReasonDiscount' => 'Motivo',
		'DiscountOfferedBy' => 'Acordado por',
		'DiscountStillRemaining' => 'Descontos fixos Pendentes',
		'DiscountAlreadyCounted' => 'Descontos fixos já aplicados',
		'BillAddress' => 'Endereço de Faturação',
		'HelpEscompte' => 'Um <b>Desconto</b> é um desconto acordado sobre uma fatura dada, a um cliente que realizou o seu pagamento muito antes do vencimiento.',
		'HelpAbandonBadCustomer' => 'Este valor foi esquecido (cliente classificado como devedor) e considera-se como uma perda excepcional.',
		'HelpAbandonOther' => 'Este valor foi abandonado já que se tratava de um erro de faturação (mal introdução de dados, fatura sustituida por outra).',
		'IdSocialContribution' => 'Id Gasto Social',
		'PaymentId' => 'Id Pagamento',
		'InvoiceId' => 'Id Fatura',
		'InvoiceRef' => 'Ref. Fatura',
		'InvoiceDateCreation' => 'Data de Criação da Fatura',
		'InvoiceStatus' => 'Estado Fatura',
		'InvoiceNote' => 'Nota Fatura',
		'InvoicePaid' => 'Invoice paid',
		'PaymentNumber' => 'Número de Pagamento',
		'RemoveDiscount' => 'Eliminar Desconto',
		'WatermarkOnDraftBill' => 'Marca de água em faturas rascunho (nada se está vazia)',
		'InvoiceNotChecked' => 'No invoice selected',
		'CloneInvoice' => 'Clonar Fatura',
		'ConfirmCloneInvoice' => 'Tem certeza que quer clonar esta fatura?',
		'DisabledBecauseReplacedInvoice' => 'Ação desativada porque é uma fatura substituida',
		'DescTaxAndDividendsArea' => 'This area presents a summary of all payments made for tax or social contributions. Only records with payment during the fixed year are included here.',
		'NbOfPayments' => 'Nb of payments',
		'SplitDiscount' => 'Split discount in two',
		'ConfirmSplitDiscount' => 'Are you sure you want to split this discount of <b>%s</b> %s into 2 lower discounts ?',
		'TypeAmountOfEachNewDiscount' => 'Input amount for each of two parts :',
		'TotalOfTwoDiscountMustEqualsOriginal' => 'Total of two new discount must be equal to original discount amount.',
		'ConfirmRemoveDiscount' => 'Are you sure you want to remove this discount ?',
		'RelatedBill' => 'Fatura Anexo',
		'RelatedBills' => 'Faturas Anexos',
		// PaymentConditions
		'PaymentConditionShortRECEP' => 'Pronto Pagamento',
		'PaymentConditionRECEP' => 'Pronto Pagamento',
		'PaymentConditionShort30D' => '30 Dias',
		'PaymentCondition30D' => 'Pagamento a 30 Dias',
		'PaymentConditionShort30DENDMONTH' => '30 Dias Fim do Mês',
		'PaymentCondition30DENDMONTH' => 'Pagamento a 30 Dias até ao Fim do Mês',
		'PaymentConditionShort60D' => '60 Dias',
		'PaymentCondition60D' => 'Pagamento a 60 Dias',
		'PaymentConditionShort60DENDMONTH' => '60 Dias Fim de Mês',
		'PaymentCondition60DENDMONTH' => 'Pagamento a 60 Dias até ao Fim do Mês',
		'PaymentConditionShortPT_DELIVERY' => 'Delivery',
		'PaymentConditionPT_DELIVERY' => 'On delivery',
		'PaymentConditionShortPT_ORDER' => 'On order',
		'PaymentConditionPT_ORDER' => 'On order',
		'PaymentConditionShortPT_5050' => '50-50',
		'PaymentConditionPT_5050' => '50%% in advance, 50%% on delivery',
		// PaymentType
		'PaymentTypeVIR' => 'Transferência Bancaria',
		'PaymentTypeShortVIR' => 'Transferência',
		'PaymentTypePRE' => 'Débito Direto Bancario',
		'PaymentTypeShortPRE' => 'Débito Direto',
		'PaymentTypeLIQ' => 'Espécie',
		'PaymentTypeShortLIQ' => 'Espécies',
		'PaymentTypeCB' => 'Cartão',
		'PaymentTypeShortCB' => 'Cartão',
		'PaymentTypeCHQ' => 'Cheque',
		'PaymentTypeShortCHQ' => 'Cheque',
		'PaymentTypeTIP' => 'Em Dinheiro',
		'PaymentTypeShortTIP' => 'Em Dinheiro',
		'PaymentTypeVAD' => 'Pagamento On Line',
		'PaymentTypeShortVAD' => 'Pagamento On Line',
		'PaymentTypeTRA' => 'Letra',
		'PaymentTypeShortTRA' => 'Letra',
		'BankDetails' => 'Dados Bancários',
		'BankCode' => 'Código Banco',
		'DeskCode' => 'Código Balcão',
		'BankAccountNumber' => 'Número Conta',
		'BankAccountNumberKey' => 'Dígito Control',
		'Residence' => 'Domicilio',
		'IBANNumber' => 'Código IBAN',
		'IBAN' => 'IBAN',
		'BIC' => 'BIC/SWIFT',
		'BICNumber' => 'Código BIC/SWIFT',
		'ExtraInfos' => 'Informações Complementares',
		'RegulatedOn' => 'Pagar o',
		'ChequeNumber' => 'Cheque N�',
		'ChequeOrTransferNumber' => 'Cheque/Transferência n�',
		'ChequeMaker' => 'Emissor do Cheque',
		'ChequeBank' => 'Banco do Cheque',
		'NetToBePaid' => 'Neto a Pagar',
		'PhoneNumber' => 'Telf.',
		'FullPhoneNumber' => 'Telefone',
		'TeleFax' => 'Fax',
		'PrettyLittleSentence' => 'Aceito o pagamento mediante cheques a meu nome dos valores em divida, na qualidade de membro de uma empresa autorizada pela Administração Fiscal.',
		'IntracommunityVATNumber' => 'Número de ICMS Intracomunitario',
		'PaymentByChequeOrderedTo' => 'Pagamento Mediante Cheque Nominativo a %s enviado a',
		'PaymentByChequeOrderedToShort' => 'Pagamento Mediante Cheque Nominativo a',
		'SendTo' => '- A Enviar Para',
		'PaymentByTransferOnThisBankAccount' => 'Pagamento Mediante Trasferência Sobre a Conta Bancária Seguinte',
		'VATIsNotUsedForInvoice' => '* ICMS não aplicável  art-293B do CGI',
		'LawApplicationPart1' => 'Por aplicação da lei 80.335 de 12/05/80',
		'LawApplicationPart2' => 'As mercadoriias permanecem em propiedade de',
		'LawApplicationPart3' => 'Vendedor até cobrança completa de',
		'LawApplicationPart4' => 'Os Seus Preços',
		'LimitedLiabilityCompanyCapital' => 'SRL com capital de',
		'UseLine' => 'Apply',
		'UseDiscount' => 'Aplicar Desconto',
		'UseCredit' => 'Utilizar Crédito',
		'UseCreditNoteInInvoicePayment' => 'Reduzir o pagamento com este depósito',
		'MenuChequeDeposits' => 'Depósito de Cheques',
		'MenuCheques' => 'Administração Cheques',
		'MenuChequesReceipts' => 'Fichas',
		'NewChequeDeposit' => 'Novo Depósito',
		'ChequesReceipts' => 'Ficha Emissão de Cheques',
		'ChequesArea' => 'Área Emissão de Cheques',
		'ChequeDeposits' => 'Depósito de Cheques',
		'Cheques' => 'Cheques',
		'CreditNoteConvertedIntoDiscount' => 'Este depósito converteu-se em %s',
		'UsBillingContactAsIncoiveRecipientIfExist' => 'Utilizar o endereço do contato de cliente de faturação da fatura em vez do endereço do Fornecedor como destinatário das faturas',
		'ShowUnpaidAll' => 'Mostrar todas as faturas',
		'ShowUnpaidLateOnly' => 'Mostrar apenas faturas em Atraso',
		'PaymentInvoiceRef' => 'Pagamento Fatura %s',
		'ValidateInvoice' => 'Validate invoice',
		'Cash' => 'Cash',
		'Reported' => 'Delayed',
		'DisabledBecausePayments' => 'Not possible since there is some payments',
		'CantRemovePaymentWithOneInvoicePaid' => 'Can\'t remove payment since there is at least one invoice classified payed',
		'ExpectedToPay' => 'Expected payment',
		'PayedByThisPayment' => 'Payed by this payment',
		'ClosePaidInvoicesAutomatically' => 'Classificar como "Pago".',
		'AllCompletelyPayedInvoiceWillBeClosed' => 'Todos os pagamentos que continuam sem pagar vão ser automaticamente fechados com status "Pago"',
		////////// Types de contacts //////////
		'TypeContact_facture_internal_SALESREPFOLL' => 'Representative following-up customer invoice',
		'TypeContact_facture_external_BILLING' => 'Customer invoice contact',
		'TypeContact_facture_external_SHIPPING' => 'Customer shipping contact',
		'TypeContact_facture_external_SERVICE' => 'Customer service contact',
		'TypeContact_invoice_supplier_internal_SALESREPFOLL' => 'Representative following-up supplier invoice',
		'TypeContact_invoice_supplier_external_BILLING' => 'Supplier invoice contact',
		'TypeContact_invoice_supplier_external_SHIPPING' => 'Supplier shipping contact',
		'TypeContact_invoice_supplier_external_SERVICE' => 'Supplier service contact',
		// crabe PDF Model
		'PDFCrabeDescription' => 'Modelo de fatura completo  (ICMS,  método de pagamento a mostrar, logotipo...)',
		// oursin PDF Model
		'PDFOursinDescription' => 'Modelo de fatura completo  (ICMS, métodos de pagamento, entregas, nome do projeto, referencias de orçamento, logotipo...)',
		// NumRef Modules
		'TerreNumRefModelDesc1' => 'Mostrarr número com formato %syymm-nnnn padrão para faturas e %syymm-nnnn para notas de crédito onde yy é o ano, mm mês e nnnn é uma seq�ência, sem interrupção e não pode mostrar o valor 0',
		'TerreNumRefModelError' => 'O projeto começa começado por $syymm já existe e não é compatível com este modelo de seq�ência. Remova-o ou renomei-o para ativar este módulo.'
);
?>