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

$members = array(
		'CHARSET' => 'UTF-8',
		'MembersArea' => 'Jäsenalue',
		'PublicMembersArea' => 'Julkiset jäsenten alueella',
		'MemberCard' => 'Jäsen-kortti',
		'SubscriptionCard' => 'Tilaus-kortti',
		'Member' => 'Jäsen',
		'Members' => 'Jäsenet',
		'MemberAccount' => 'Kirjaudu',
		'ShowMember' => 'Näytä jäsenen kortti',
		'UserNotLinkedToMember' => 'Käyttäjää ei liity jäseneksi',
		'MembersTickets' => 'Jäsenet Liput',
		'FundationMembers' => 'Säätiön jäsenet',
		'Attributs' => 'Määritteet',
		'ErrorMemberTypeNotDefined' => 'Jäsen tyyppiä ei ole määritelty',
		'ListOfPublicMembers' => 'Luettelo yleisistä jäseniä',
		'ListOfValidatedPublicMembers' => 'Luettelo validoitujen yleisön jäsenet',
		'ErrorThisMemberIsNotPublic' => 'Tämä jäsen ei ole julkinen',
		'ErrorMemberIsAlreadyLinkedToThisThirdParty' => 'Toinen jäsen <b>(nimi: %s, kirjautuminen: %s)</b> on jo liitetty kolmasosaa <b>osapuoli %s.</b> Poista tämä ensimmäiseksi, koska kolmas osapuoli ei voi yhdistää vain jäsen (ja päinvastoin).',
		'ErrorUserPermissionAllowsToLinksToItselfOnly' => 'Turvallisuussyistä sinun täytyy myöntää oikeudet muokata kaikki käyttäjät pystyvät linkki jäsenen käyttäjä, joka ei ole sinun.',
		'ThisIsContentOfYourCard' => 'Tämä on yksityiskohtaiset tiedot kortin',
		'CardContent' => 'Sisältö jäsennimesi kortti',
		'SetLinkToUser' => 'Linkki on Dolibarr käyttäjä',
		'SetLinkToThirdParty' => 'Linkki on Dolibarr kolmannen osapuolen',
		'MembersCards' => 'Jäsenet tulostaa kortit',
		'MembersList' => 'Luettelo jäsenistä',
		'MembersListToValid' => 'Luettelo luonnoksen jäsenten (jotka on vahvistettu)',
		'MembersListValid' => 'Luettelo voimassa jäseniä',
		'MembersListUpToDate' => 'Luettelo voimassa jäsenille ajantasaista tilaamisesta',
		'MembersListNotUpToDate' => 'Luettelo voimassa jäsenten tilaajamaksut vanhentunut',
		'MembersListResiliated' => 'Luettelo resiliated jäseniä',
		'MembersListQualified' => 'Luettelo pätevistä jäsenistä',
		'MenuMembersToValidate' => 'Luonnos jäseniä',
		'MenuMembersValidated' => 'Validoidut jäseniä',
		'MenuMembersUpToDate' => 'Ajan jäsenten',
		'MenuMembersNotUpToDate' => 'Vanhentunut jäseniä',
		'MenuMembersResiliated' => 'Resiliated jäseniä',
		'MembersWithSubscriptionToReceive' => 'Jäsenet Merkintäoikeuksien vastaanottaa',
		'DateAbonment' => 'Tilaus päivämäärän',
		'DateSubscription' => 'Tilaus päivämäärän',
		'DateNextSubscription' => 'Seuraava tilaus',
		'DateEndSubscription' => 'Tilaus lopetuspäivämäärää',
		'EndSubscription' => 'Lopeta tilaus',
		'SubscriptionId' => 'Tilaus id',
		'MemberId' => 'Jäsen id',
		'NewMember' => 'Uusi jäsen',
		'NewType' => 'Uusi jäsen tyyppi',
		'MemberType' => 'Jäsen tyyppi',
		'MemberTypeId' => 'Jäsen tyyppi id',
		'MemberTypeLabel' => 'Jäsen tyyppi etiketti',
		'MembersTypes' => 'Jäsenet tyypit',
		'MembersAttributes' => 'Jäsenet attributes',
		'SearchAMember' => 'Etsi jäsen',
		'MemberStatusDraft' => 'Luonnos (on vahvistettu)',
		'MemberStatusDraftShort' => 'Validoida',
		'MemberStatusActive' => 'Validoidut (odottaa tilaus)',
		'MemberStatusActiveShort' => 'Validoidut',
		'MemberStatusActiveLate' => 'merkintäaika päättyi',
		'MemberStatusActiveLateShort' => 'Lakkaa',
		'MemberStatusPaid' => 'Tilaus ajan tasalla',
		'MemberStatusPaidShort' => 'Ajan tasalla',
		'MemberStatusResiliated' => 'Resiliated jäsen',
		'MemberStatusResiliatedShort' => 'Resiliated',
		'MembersStatusToValid' => 'Luonnos jäseniä',
		'MembersStatusToValidShort' => 'Luonnos jäseniä',
		'MembersStatusValidated' => 'Validoidut jäseniä',
		'MembersStatusPaid' => 'Tilaus ajan tasalla',
		'MembersStatusPaidShort' => 'Ajan tasalla',
		'MembersStatusNotPaid' => 'Tilaus vanhentunut',
		'MembersStatusNotPaidShort' => 'Vanhentunut',
		'MembersStatusResiliated' => 'Resiliated jäseniä',
		'MembersStatusResiliatedShort' => 'Resiliated jäseniä',
		'NewCotisation' => 'Uusi rahoitusosuus',
		'PaymentSubscription' => 'Uusi osuus maksu',
		'EditMember' => 'Muokkaa jäsenluetteloa',
		'SubscriptionEndDate' => 'Tilaus päättymispäivämäärän',
		'MembersTypeSetup' => 'Jäsenet tyyppi setup',
		'NewSubscription' => 'Uusi tilaus',
		'NewSubscriptionDesc' => 'Tämän lomakkeen avulla voit tallentaa tilauksen uutena jäsenenä säätiön. Jos haluat uudistaa tilauksen (jos on jo jäsen), ota yhteyttä säätiön hallituksen sijasta sähköpostitse %s.',
		'Subscription' => 'Tilaus',
		'Subscriptions' => 'Tilaukset',
		'SubscriptionLate' => 'Myöhäinen',
		'SubscriptionNotReceived' => 'Tilaus koskaan saanut',
		'SubscriptionLateShort' => 'Myöhäinen',
		'SubscriptionNotReceivedShort' => 'Koskaan saanut',
		'ListOfSubscriptions' => 'Luettelo tilaukset',
		'SendCardByMail' => 'Lähetä kortti',
		'AddMember' => 'Lisää jäsen',
		'MemberType' => 'Jäsen tyyppi',
		'NoTypeDefinedGoToSetup' => 'Jäsen tyypit määritelty. Go to setup - Jäsenet tyypit',
		'NewMemberType' => 'Uusi jäsen tyyppi',
		'WelcomeEMail' => 'Tervetuloa e-mail',
		'SubscriptionRequired' => 'Vaatii tilauksen',
		'EditType' => 'Muokkaa jäsen tyyppi',
		'DeleteType' => 'Poistaa',
		'VoteAllowed' => 'Äänestys sallittua',
		'Physical' => 'Fyysinen',
		'Moral' => 'Moraalinen',
		'MorPhy' => 'Moraalinen / Fysikaaliset',
		'Reenable' => 'Ottaa ne uudelleen',
		'ResiliateMember' => 'Resiliate jäseneksi',
		'ConfirmResiliateMember' => 'Oletko varma, että haluat resiliate tämä jäsen?',
		'DeleteMember' => 'Poista jäseneksi',
		'ConfirmDeleteMember' => 'Oletko varma, että haluat poistaa tämän jäsenen (poistaminen jäsen poistaa kaikki hänen tilaukset)?',
		'DeleteSubscription' => 'Poista tilaus',
		'ConfirmDeleteSubscription' => 'Oletko varma, että haluat poistaa tämän tilauksen?',
		'Filehtpasswd' => 'htpasswd tiedosto',
		'ValidateMember' => 'Validate jäseneksi',
		'ConfirmValidateMember' => 'Oletko varma, että haluat vahvistaa tämän jäsen?',
		'FollowingLinksArePublic' => 'Seuraavat linkit ovat avoinna sivua ei ole suojattu millään Dolibarr lupaa. Ne eivät ole formated sivua, jos esimerkkinä osoittaakseen, miten listan jäsenille tietokantaan.',
		'PublicMemberList' => 'Julkiset jäsenluetteloa',
		'BlankSubscriptionForm' => 'Merkintälomake',
		'BlankSubscriptionFormDesc' => 'Dolibarr voi tarjota sinulle julkista URL jotta ulkopuolisia vierailijoita pyytää tilata perusta. Jos online-maksu moduuli on käytössä, maksuvälineenä myös automaattisesti säädetään.',
		'EnablePublicSubscriptionForm' => 'Ota yleisölle auto-merkintälomakkeen',
		'MemberPublicLinks' => 'Julkiset linkit / sivut',
		'ExportDataset_member_1' => 'Jäsenet ja tilaukset',
		'ImportDataset_member_1' => 'Jäsenet',
		'LastMembers' => 'Viimeisin %s jäseniä',
		'LastMembersModified' => 'Viimeisin %s muunnettu jäseniä',
		'LastSubscriptionsModified' => 'Viimeksi %s muutettu liittymät',
		'AttributeName' => 'Attribuutin nimi',
		'FieldEdition' => 'Alalla painos %s',
		'String' => 'String',
		'Text' => 'Teksti',
		'Int' => 'Int',
		'Date' => 'Päivämäärä',
		'DateAndTime' => 'Päivämäärä ja kellonaika',
		'PublicMemberCard' => 'Osakkeenomistajan julkinen kortti',
		'MemberNotOrNoMoreExpectedToSubscribe' => 'Jäsen tai ei ole enää odotettavissa tilata',
		'AddSubscription' => 'Lisää tilaus',
		'ShowSubscription' => 'Näytä tilaus',
		'MemberModifiedInDolibarr' => 'Jäsen muutettu Dolibarr',
		'SendAnEMailToMember' => 'Lähetä tiedot sähköpostitse jäsen',
		'DescADHERENT_AUTOREGISTER_NOTIF_MAIL_SUBJECT' => 'Subject of the e-mail received in case of auto-inscription of a guest',
		'DescADHERENT_AUTOREGISTER_NOTIF_MAIL' => 'E-mail received in case of auto-inscription of a guest',
		'DescADHERENT_AUTOREGISTER_MAIL_SUBJECT' => 'Viestin aihe ja jäsen autosubscription',
		'DescADHERENT_AUTOREGISTER_MAIL' => 'Sähköpostitse jäsenen autosubscription',
		'DescADHERENT_MAIL_VALID_SUBJECT' => 'EMail aihe jäsen validointi',
		'DescADHERENT_MAIL_VALID' => 'EMail jäsenen validointi',
		'DescADHERENT_MAIL_COTIS_SUBJECT' => 'EMail aihe tilaamisesta',
		'DescADHERENT_MAIL_COTIS' => 'EMail merkitsemisen',
		'DescADHERENT_MAIL_RESIL_SUBJECT' => 'EMail aihe jäsen résiliation',
		'DescADHERENT_MAIL_RESIL' => 'EMail jäsenen résiliation',
		'DescADHERENT_MAIL_FROM' => 'Sender EMail automaattisen sähköpostit',
		'DescADHERENT_ETIQUETTE_TYPE' => 'Etiketit muodossa',
		'DescADHERENT_ETIQUETTE_TEXT' => 'Text printed on member address sheets',
		'DescADHERENT_CARD_TYPE' => 'Muotoile korttien sivu',
		'DescADHERENT_CARD_HEADER_TEXT' => 'Teksti painettu päälle jäsen kortit',
		'DescADHERENT_CARD_TEXT' => 'Teksti painettu jäsen kortit',
		'DescADHERENT_CARD_TEXT_RIGHT' => 'Teksti on painettu jäsen kortit (yhdenmukaistettava oikealla)',
		'DescADHERENT_CARD_FOOTER_TEXT' => 'Teksti painettu pohjaan jäsen kortit',
		'GlobalConfigUsedIfNotDefined' => 'Teksti on määritelty säätiön moduulissa asennusohjelma käyttää, jos ei määritellä tässä',
		'MayBeOverwrited' => 'Tämä teksti voidaan overwrited arvosta määritelty jäsenen mukaan',
		'ShowTypeCard' => 'Näytä tyyppi \' %s\'',
		'HTPasswordExport' => 'htpassword tiedosto sukupolven',
		'NoThirdPartyAssociatedToMember' => 'Kolmansista osapuolista ei näihin jäsen',
		'ThirdPartyDolibarr' => 'Dolibarr kolmannen osapuolen',
		'MembersAndSubscriptions' => 'Jäsenet ja Suscriptions',
		'MoreActions' => 'Täydentäviä toimia tallennus',
		'MoreActionBankDirect' => 'Luo suoraan tiliotteensa takia',
		'MoreActionBankViaInvoice' => 'Luo lasku ja ennakkomaksu',
		'MoreActionInvoiceOnly' => 'Luo laskun maksua',
		'LinkToGeneratedPages' => 'Luo käyntikorttini',
		'LinkToGeneratedPagesDesc' => 'Tässä näytössä voit luoda PDF-tiedostoja käyntikortit kaikki jäsenet tai tietyssä jäsenvaltiossa.',
		'DocForAllMembersCards' => 'Luo käyntikortteja kaikkien jäsenten (malli lähtö todella setup: <b>%s)</b>',
		'DocForOneMemberCards' => 'Luo käyntikortit erityisesti jäsen (malli lähtö todella setup: <b>%s)</b>',
		'DocForLabels' => 'Luo osoite arkkia (malli lähtö todella setup: <b>%s)</b>',
		'SubscriptionPayment' => 'Tilaus maksu',
		'LastSubscriptionDate' => 'Viimeinen merkintäpäivä',
		'LastSubscriptionAmount' => 'Viime merkinnän määrästä',
		'MembersStatisticsByCountries' => 'Jäsenten tilastot maittain',
		'MembersStatisticsByState' => 'Jäsenten tilastot valtio / lääni',
		'MembersStatisticsByTowne' => 'Jäsenten tilastot kaupunki',
		'NbOfMembers' => 'Jäsenmäärä',
		'NoValidatedMemberYet' => 'Ei validoitu jäsenet pitivät',
		'MembersByCountryDesc' => 'Tämä ruutu näyttää tilastoja jäseniä maittain. Graphic riippuu kuitenkin Googlen online-käyrä palvelu ja on käytettävissä vain, jos internet-yhteys toimii.',
		'MembersByStateDesc' => 'Tämä ruutu näyttää tilastoja jäsenistä valtion / maakuntien / kantonissa.',
		'MembersByTownDesc' => 'Tämä ruutu näyttää tilastoja jäsenille kaupungin.',
		'MembersStatisticsDesc' => 'Valitse tilastot haluat lukea ...',
		'MenuMembersStats' => 'Tilasto',
		'LastMemberDate' => 'Viimeinen Tulokas',
		'Nature' => 'Luonto',
		'Public' => 'Tiedot ovat julkisia',
		'Exports' => 'Vienti',
		'NewMemberbyWeb' => 'Uusi jäsen. Odottaa hyväksyntää',
		'NewMemberForm' => 'Uusi jäsen lomake',
		'SubscriptionsStatistics' => 'Tilastot tilauksista',
		'NbOfSubscriptions' => 'Kappaletta',
		'AmountOfSubscriptions' => 'Määrä liittymää',
		'TurnoverOrBudget' => 'Liikevaihto (yritykselle) tai budjetti (ja säätiö)',
		'DefaultAmount' => 'Oletus määrä tilauksen',
		'CanEditAmount' => 'Matkailija voi valita / muokata määrä merkitsemästään',
		'MEMBER_NEWFORM_PAYONLINE' => 'Hyppää integroitu verkossa maksusivulla',
		'Associations' => 'Perustukset',
		'Collectivités' => 'Organisaatiot',
		'Particuliers' => 'Henkilökohtainen',
		'Entreprises' => 'Yritykset',
		'DOLIBARRFOUNDATION_PAYMENT_FORM' => 'Voit tehdä tilauksen maksun avulla pankkisiirrolla sivulla <a target="_blank" href="http://wiki.dolibarr.org/index.php/Subscribe#To_subscribe_making_a_bank_transfer">http://wiki.dolibarr.org/index.php/Subscribe</a> . <br> Voit maksaa luottokortilla tai PayPal, klikkaa painiketta sivun alalaidassa. <br>',
		'ErrorBadValueForDate' => 'Erreur : La date de fin d\'adhésion ne doit être ni égale ni inférieure à la date de début.',
		'NewAttribute' => 'Nouvel attribut',
		'AttributeCode' => 'Code de l\'attribut',
		'OptionalFieldsSetup' => 'Configuration des champs optionnels',
		'DescADHERENT_MAILMAN_LISTS' => 'Liste(s) à la quelle (auxquelles) inscrire les nouveaux adhérents (séparés par une virgule)',
		'MembersStatisticsByTown' => 'Statistiques des membres par ville',
		'CardMember' => 'Carte d\'adhérent'
);
?>