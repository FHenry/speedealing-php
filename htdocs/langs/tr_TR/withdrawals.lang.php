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

$withdrawals = array(
		'CHARSET' => 'UTF-8',
		'StandingOrdersArea' => 'Ödeme talimatları alanı',
		'CustomersStandingOrdersArea' => 'Müşteri ödeme talimatları alanı',
		'StandingOrders' => 'Ödeme talimatları',
		'StandingOrder' => 'Ödeme talimatları',
		'NewStandingOrder' => 'Yeni ödeme talimatları',
		'StandingOrderToProcess' => 'İşlenecek',
		'StandingOrderProcessed' => 'İşlenmiş',
		'Withdrawals' => 'Para çekmeler',
		'Withdrawal' => 'Para çekme',
		'WithdrawalsReceipts' => 'Para çekme makbuzları',
		'WithdrawalReceipt' => 'Para çekme makbuzu',
		'WithdrawalReceiptShort' => 'Makbuz',
		'LastWithdrawalReceipts' => 'Son %s para çekme makbuzu',
		'WithdrawedBills' => 'Parası çekilmiş faturalar',
		'WithdrawalsLines' => 'Para çekme satırları',
		'RequestStandingOrderToTreat' => 'Ödeme talimatları işleme isteği',
		'RequestStandingOrderTreated' => 'Ödeme talimatlarının işlenmesi isteği isteği',
		'CustomersStandingOrders' => 'Müşteri ödeme talimatları',
		'CustomerStandingOrder' => 'Müşteri ödeme talimatları',
		'NbOfInvoiceToWithdraw' => 'Para çekme istekli fatura sayısı',
		'NbOfInvoiceToWithdrawWithInfo' => 'Banka hesabı tanımlı müşterilere ait para çekme istekli fatura sayısı',
		'InvoiceWaitingWithdraw' => 'Fatura tahsilat için bekliyor',
		'AmountToWithdraw' => 'Çekilecek tutar',
		'WithdrawsRefused' => 'Reddedilen para çekmeler',
		'NoInvoiceToWithdraw' => '"Para çekme" ödeme biçiminde bekleyen hiç müşteri faturasıyok. Fatura kartında \'Para çekme\' sekmesine bir istek yapın.',
		'ResponsibleUser' => 'Sorumlu kullanıcı',
		'WithdrawalsSetup' => 'Para çekme kurulumu',
		'WithdrawStatistics' => 'Para çekme istatistikleri',
		'WithdrawRejectStatistics' => 'Para çekme reddedilme istatistikleri',
		'LastWithdrawalReceipt' => 'Son %s para çekme makbuzu',
		'MakeWithdrawRequest' => 'Bir para çekme isteği oluştur',
		'ThirdPartyBankCode' => 'Üçüncü parti banka kodu',
		'ThirdPartyDeskCode' => 'Üçüncü parti şube kodu',
		'NoInvoiceCouldBeWithdrawed' => 'Hiçbir fatura için para çekme işlemi başarılamadı. Firma faturalarının geçerli bir BAN\'ı olduğunu kontrol edin.',
		'ClassCredited' => 'Alacak olarak sınıflandır',
		'ClassCreditedConfirm' => 'Bu para çekme makbuzunu bankanıza alacak olarak sınıflandırmak istediğinizden emin misiniz?',
		'TransData' => 'İletim tarihi',
		'TransMetod' => 'İletim yöntemi',
		'Send' => 'Gönder',
		'Lines' => 'Satırlar',
		'StandingOrderReject' => 'Bir ret düzenle',
		'InvoiceRefused' => 'Fatura reddedildi',
		'WithdrawalRefused' => 'Para çekme reddedildi',
		'WithdrawalRefusedConfirm' => 'Dernek için bir para çekme reddedilme işlemi girmek istediğinizden emin misiniz',
		'RefusedData' => 'Ret Tarihi',
		'RefusedReason' => 'Ret nedeni',
		'RefusedInvoicing' => 'Rettin faturalandırılması',
		'NoInvoiceRefused' => 'Reddi borç yazmayın',
		'InvoiceRefused' => 'Fatura reddedildi',
		'Status' => 'Durum',
		'StatusUnknown' => 'Bilinmeyen',
		'StatusWaiting' => 'Bekliyor',
		'StatusTrans' => 'İletildi',
		'StatusCredited' => 'Kredilendirilmiş',
		'StatusRefused' => 'Reddedildi',
		'StatusMotif0' => 'Belirtilmemiş',
		'StatusMotif1' => 'Yetersiz karşılık',
		'StatusMotif2' => 'Anlaşmazlık yazısı',
		'StatusMotif3' => 'Çekme talimatı yok',
		'StatusMotif4' => 'Müşteri siparişi',
		'StatusMotif5' => 'İşletilemez RIB',
		'StatusMotif6' => 'Bakiyesiz hesap',
		'StatusMotif7' => 'Mahkeme kararıyla',
		'StatusMotif8' => 'Başka bir nedenle',
		'CreateAll' => 'Hepsini çek',
		'CreateGuichet' => 'Sadece ofis',
		'CreateBanque' => 'Sadece banka',
		'OrderWaiting' => 'İşlem için bekliyor',
		'NotifyTransmision' => 'Para çekme iletimleri',
		'NotifyEmision' => 'Para çekme emisyonu',
		'NotifyCredit' => 'Kredi çekme',
		'NumeroNationalEmetter' => 'Ulusal İletim Numarası',
		'PleaseSelectCustomerBankBANToWithdraw' => 'Çekmek için müşteri banka hesabı hakkında bilgi seçin',
		'WithBankUsingRIB' => 'RIB kullanan banka hesapları için',
		'WithBankUsingBANBIC' => 'IBAN/BIC/SWIFT kullanan banka hesapları için',
		'BankToReceiveWithdraw' => 'Para çekilecek banka hesabı',
		'CreditDate' => 'Alacak tarihi',
		'WithdrawalFileNotCapable' => 'Ülkeniz için para çekme makbuzu dosyası oluşturulamıyor',
		'ShowWithdraw' => 'Para çekme göster',
		'IfInvoiceNeedOnWithdrawPaymentWontBeClosed' => 'Faturaya henüz enaz bir ödeme tahsilatı işlenmemişse, ödendi olarak ayarlanamaz.',
		'DoStandingOrdersBeforePayments' => 'Bu sekmeler ödeme talimatı istemenizi sağlar. Bitirildiğinde faturayı kapatmak için ödemeyi yazabilirsiniz.',
		////// Notifications
		'InfoCreditSubject' => 'Banka tarafından ödenen %s ödeme talimatı',
		'InfoCreditMessage' => '%s Ödeme talimatı banka tarafından ödenmiştir<br>Ödeme tarihi: %s',
		'InfoTransSubject' => '%s Ödeme talimatının bankaya iletilmesi',
		'InfoTransMessage' => '%s Ödeme talimatı bankaya %s %s tarafından iletilmiştir.<br><br>',
		'InfoTransData' => 'Tutarı: %s<br> Yöntemi: %s<br>Tarihi: %s',
		'InfoFoot' => 'Bu Dolibarr tarafından otomatik gönderilen bir mesajtır',
		'InfoRejectSubject' => 'Ödeme talimatı reddedildi',
		'InfoRejectMessage' => 'Merhaba, <br><br> %s firmasına ait %s faturasının %s tutarındaki ödeme talimatı banka tarafından reddedilmiştir.<br><br>--<br>%$',
		'ModeWarning' => 'Gerçek mod için seçenek ayarlanmamış, bu simülasyondan sonra durdururuz'
);
?>