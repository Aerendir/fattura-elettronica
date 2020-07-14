<?php

################################################################################
#INIZIO FILE XML
################################################################################

/*
$root = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<p:FatturaElettronica
    xmlns:ds="http://www.w3.org/2000/09/xmldsig#"
    xmlns:p="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    versione="FPR12"
    xsi:schemaLocation="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2
    ./schema/fattura_1.2.xsd"
/>
XML;


$xml = new SimpleXMLElement($root);


# 1  FatturaElettronicaHeader
$FatturaElettronicaHeader = $xml->addChild('FatturaElettronicaHeader');

# 1.1 DatiTrasmissione
$DatiTrasmissione = $FatturaElettronicaHeader->addChild('DatiTrasmissione');

# 1.1.1 IdTrasmittente
$IdTrasmittente = $DatiTrasmissione->addChild('IdTrasmittente');

# 1.1.1.1 IdPaese
$IdPaese = $IdTrasmittente->addChild('IdPaese', 'IT');

# 1.1.1.2 IdCodice
$IdCodice = $IdTrasmittente->addChild('IdCodice', '1234567890');
*/
/*
# 1.1.2 ProgressivoInvio => NUMERO PROGRESSIVO DELLA FT
$ProgressivoInvio = $DatiTrasmissione->addChild('ProgressivoInvio');

# 1.1.3 FormatoTrasmissione => FPA12[Per pubblica amministrazione] FPR12[per cliente privato]
$FormatoTrasmissione = $DatiTrasmissione->addChild('FormatoTrasmissione');

# 1.1.4 CodiceDestinatario
$CodiceDestinatario = $DatiTrasmissione->addChild('CodiceDestinatario');

#1.1.5 ContattiTrasmittente => Dati relativi ai contatti del trasmittente
$ContattiTrasmittente = $DatiTrasmissione->addChild('ContattiTrasmittente');

#1.1.5.1 Telefono
$Telefono = $ContattiTrasmittente->addChild('Telefono');

#1.1.5.2 Email
$Email = $ContattiTrasmittente->addChild('Email');

#1.1.6 PECDestinatario
$PECDestinatario = $DatiTrasmissione->addChild('PECDestinatario');


# 1.2 CedentePrestatore
$CedentePrestatore = $FatturaElettronicaHeader->addChild('CedentePrestatore');

# 1.2.1 DatiAnagrafici
$DatiAnagrafici = $CedentePrestatore->addChild('DatiAnagrafici');

# 1.2.1.1 IdFiscaleIVA
$IdFiscaleIVA = $DatiAnagrafici->addChild('IdFiscaleIVA');

# 1.2.1.1.1 IdPaese
$IdPaese = $IdFiscaleIVA->addChild('IdPaese');

# 1.2.1.1.2 IdCodice
$IdCodice = $IdFiscaleIVA->addChild('IdCodice');

# 1.2.1.2 CodiceFiscale
$CodiceFiscale = $DatiAnagrafici->addChild('CodiceFiscale');

# 1.2.1.3 Anagrafica
$Anagrafica = $DatiAnagrafici->addChild('Anagrafica');

# 1.2.1.3.1 Denominazione
$Denominazione = $Anagrafica->addChild('Denominazione');

# 1.2.1.3.2 Nome
$Nome = $Anagrafica->addChild('Nome');

# 1.2.1.3.3 Cognome
$Cognome = $Anagrafica->addChild('Cognome');

# 1.2.1.3.4 Titolo
$Titolo = $Anagrafica->addChild('Titolo');

# 1.2.1.3.5 CodiceEORI
$CodEORI = $Anagrafica->addChild('CodEORI');

# 1.2.1.4 AlboProfessionale
$AlboProfessionale = $DatiAnagrafici->addChild('AlboProfessionale');

# 1.2.1.5 ProvinciaAlbo
$ProvonciaAlbo = $DatiAnagrafici->addChild('ProvinciaAlbo');

# 1.2.1.6 NumeroIscrizioneAlbo
$NumeroIscrizioneAlbo = $DatiAnagrafici->addChild('NumeroIscrizioneAlbo');

# 1.2.1.7 DataIscrizioneAlbo
$ProvonciaAlbo = $DatiAnagrafici->addChild('ProvinciaAlbo');

# 1.2.1.8 RegimeFiscale
$RegimeFiscale = $DatiAnagrafici->addChild('RegimeFiscale');

# 1.2.2 Sede
$Sede = $CedentePrestatore->addChild('Sede');

# 1.2.2.1 Indirizzo
$Indirizzo = $Sede->addChild('Indirizzo');

# 1.2.2.2 <NumeroCivico>
$NumeroCivico = $Sede->addChild('NumeroCivico');

# 1.2.2.3 <CAP>
$CAP = $Sede->addChild('CAP');

# 1.2.2.4 <Comune>
$Comune = $Sede->addChild('Comune');

# 1.2.2.5 <Provincia>
$Provincia = $Sede->addChild('Provincia');

# 1.2.2.6 <Nazione>
$Nazione = $Sede->addChild('Nazione');

# 1.2.3 <StabileOrganizzazione
$StabileOrganizzazione = $CedentePrestatore->addChild('StabileOrganizzazione');

# 1.2.3.1 Indirizzo
$Indirizzo = $StabileOrganizzazione->addChild('Indirizzo');

# 1.2.3.2 <NumeroCivico>
$NumeroCivico = $StabileOrganizzazione->addChild('NumeroCivico');

# 1.2.3.3 <CAP>
$CAP = $StabileOrganizzazione->addChild('CAP');

# 1.2.3.4 <Comune>
$Comune = $StabileOrganizzazione->addChild('Comune');

# 1.2.3.5 <Provincia>
$Provincia = $StabileOrganizzazione->addChild('Provincia');

# 1.2.3.6 <Nazione>
$Nazione = $StabileOrganizzazione->addChild('Nazione');

# 1.2.4 IscrizioneREA
$IscrizioneREA = $CedentePrestatore->addChild('IscrizioneREA');

# 1.2.4.1 Ufficio
$Ufficio = $IscrizioneREA->addChild('Ufficio');

# 1.2.4.2 NumeroREA
$NumeroREA = $IscrizioneREA->addChild('NumeroREA');

# 1.2.4.3 CapitaleSociale
$CapitaleSociale = $IscrizioneREA->addChild('CapitaleSociale');

# 1.2.4.4 SocioUnico
$SocioUnico = $IscrizioneREA->addChild('SocioUnico');

# 1.2.4.5 StatoLiquidazione
$StatoLiquidazione = $IscrizioneREA->addChild('StatoLiquidazione');

# 1.2.5 Contatti
$Contatti = $CedentePrestatore->addChild('Contatti');

# 1.2.5.1 Telefono
$Telefono = $Contatti->addChild('Telefono');

# 1.2.5.1 Fax
$Fax = $Contatti->addChild('Fax');

# 1.2.5.1 Email
$Email = $Contatti->addChild('Email');

# 1.2.6 RiferimentoAmministrazione
$RiferimentoAmministrazione = $CedentePrestatore->addChild('RiferimentoAmministrazione');

# 1.3 RappresentanteFiscale
$RappresentanteFiscale = $FatturaElettronicaHeader->addChild('RappresentanteFiscale');

# 1.3.1 <DatiAnagrafici>
$DatiAnagrafici = $RappresentanteFiscale->addChild('DatiAnagrafici');

# 1.3.1.1 <IdFiscaleIVA>
$IdFiscaleIVA = $DatiAnagrafici->addChild('IdFiscaleIVA');

# 1.3.1.1.1 <IdPaese>
$IdPaese = $IdFiscaleIVA->addChild('IdPaese');

#1.3.1.1.2 <IdCodice>
$IdCodice = $IdFiscaleIVA->addChild('IdCodice');

# 1.3.1.2 <CodiceFiscale>
$CodiceFiscale = $DatiAnagrafici->addChild('CodiceFiscale');

# 1.3.1.3 <Anagrafica>
$Anagrafica = $DatiAnagrafici->addChild('Anagrafica');

# 1.3.1.3.1 <Denominazione>
$Denominazione = $Anagrafica->addChild('Denominazione');

#1.3.1.3.2 <Nome>
$Nome = $Anagrafica->addChild('Nome');

#1.3.1.3.3 <Cognome>
$Cognome = $Anagrafica->addChild('Cognome');

#1.3.1.3.4 <Titolo>
$Titolo = $Anagrafica->addChild('Titolo');

# 1.3.1.3.5 <CodEORI>
$CodEORI = $Anagrafica->addChild('CodEORI');

# 1.4 CessionarioCommittente
$CessionarioCommittente = $FatturaElettronicaHeader->addChild('CessionarioCommittente');

#1.4.1 <DatiAnagrafici>
$DatiAnagrafici = $CessionarioCommittente->addChild('DatiAnagrafici');

#1.4.1.1 <IdFiscaleIVA>
$IdFiscaleIVA = $DatiAnagrafici->addChild('IdFiscaleIVA');

#1.4.1.1.1 <IdPaese>
$IdPaese = $IdFiscaleIVA->addChild('IdPaese');

#1.4.1.1.2 <IdCodice>
$IdCodice = $IdFiscaleIVA->addChild('IdCodice');

# 1.4.1.2 <CodiceFiscale>
$CodiceFiscale = $DatiAnagrafici->addChild('CodiceFiscale');

# 1.4.1.3 <Anagrafica>
$Anagrafica = $DatiAnagrafici->addChild('Anagrafica');

# 1.4.1.3.1 <Denominazione>
$Denominazione = $Anagrafica->addChild('Denominazione');

#1.4.1.3.2 <Nome>
$Nome = $Anagrafica->addChild('Nome');

#1.4.1.3.3 <Cognome>
$Cognome = $Anagrafica->addChild('Cognome');

#1.4.1.3.4 <Titolo>
$Titolo = $Anagrafica->addChild('Titolo');

# 1.4.1.3.5 <CodEORI>
$CodEORI = $Anagrafica->addChild('CodEORI');

# 1.4.2 Sede
$Sede = $CessionarioCommittente->addChild('Sede');

# 1.4.2.1 Indirizzo
$Indirizzo = $Sede->addChild('Indirizzo');

# 1.4.2.2 <NumeroCivico>
$NumeroCivico = $Sede->addChild('NumeroCivico');

# 1.4.2.3 <CAP>
$CAP = $Sede->addChild('CAP');

# 1.4.2.4 <Comune>
$Comune = $Sede->addChild('Comune');

# 1.4.2.5 <Provincia>
$Provincia = $Sede->addChild('Provincia');

# 1.4.2.6 <Nazione>
$Nazione = $Sede->addChild('Nazione');

# 1.4.3 <StabileOrganizzazione
$StabileOrganizzazione = $CessionarioCommittente->addChild('StabileOrganizzazione');

# 1.4.3.1 Indirizzo
$Indirizzo = $StabileOrganizzazione->addChild('Indirizzo');

# 1.4.3.2 <NumeroCivico>
$NumeroCivico = $StabileOrganizzazione->addChild('NumeroCivico');

# 1.4.3.3 <CAP>
$CAP = $StabileOrganizzazione->addChild('CAP');

# 1.4.3.4 <Comune>
$Comune = $StabileOrganizzazione->addChild('Comune');

# 1.4.3.5 <Provincia>
$Provincia = $StabileOrganizzazione->addChild('Provincia');

# 1.4.3.6 <Nazione>
$Nazione = $StabileOrganizzazione->addChild('Nazione');

# 1.4.4 <RappresentanteFiscale>
$RappresentanteFiscale = $CessionarioCommittente->addChild('RappresentanteFiscale');

# 1.4.4.1 <IdFiscaleIVA>
$IdFiscaleIVA = $RappresentanteFiscale->addChild('IdFiscaleIVA');

# 1.4.4.1.1 <IdPaese>
$IdPaese = $IdFiscaleIVA->addChild('IdPaese');

# 1.4.4.1.2 <IdCodice>
$IdCodice = $IdFiscaleIVA->addChild('IdCodice');

# 1.4.4.2 <Denominazione>
$Denominazione = $RappresentanteFiscale->addChild('Denominazione');

# 1.4.4.3 <Nome>
$Nome = $RappresentanteFiscale->addChild('Nome');

# 1.4.4.4 <Cognome>
$Cognome = $RappresentanteFiscale->addChild('Cognome');

# 1.5 <TerzoIntermediarioOSoggettoEmittente>
$TerzoIntermediarioOSoggettoEmittente = $FatturaElettronicaHeader->addChild('TerzoIntermediarioOSoggettoEmittente');

# 1.5.1 <DatiAnagrafici>
$DatiAnagrafici = $TerzoIntermediarioOSoggettoEmittente->addChild('DatiAnagrafici');

#1.5.1.1 <IdFiscaleIVA>
$IdFiscaleIVA = $DatiAnagrafici->addChild('IdFiscaleIVA');

#1.5.1.1.1 <IdPaese>
$IdPaese = $IdFiscaleIVA->addChild('IdPaese');

#1.5.1.1.2 <IdCodice>
$IdCodice = $IdFiscaleIVA->addChild('IdCodice');

#1.5.1.2 <CodiceFiscale>
$CodiceFiscale = $DatiAnagrafici->addChild('CodiceFiscale');

#1.5.1.3 <Anagrafica>
$Anagrafica = $DatiAnagrafici->addChild('Anagrafica');

#1.5.1.3.1 <Denominazione>
$Denominazione = $Anagrafica->addChild('Denominazione');

#1.5.1.3.2 <Nome>
$Nome = $Anagrafica->addChild('Nome');

#1.5.1.3.3 <Cognome>
$Cognome = $Anagrafica->addChild('Cognome');

#1.5.1.3.4 <Titolo>
$Titolo = $Anagrafica->addChild('Titolo');

#1.5.1.3.5 <CodEORI>
$CodEORI = $Anagrafica->addChild('CodEORI');

# 1.6 SoggettoEmittente
$SoggettoEmittente = $FatturaElettronicaHeader->addChild('SoggettoEmittente');



##POSSIBILE CICLARE TUTTO FatturaElettronicaBody IN CASO DI PIU' FT IN UNICA PRESENTAZIONE

# 2 FatturaElettronicaBody
$FatturaElettronicaBody = $xml->addChild('FatturaElettronicaBody');

# 2.1 DatiGenerali
$DatiGenerali = $FatturaElettronicaBody->addChild('DatiGenerali');

# 2.1.1 <DatiGeneraliDocumento>
$DatiGeneraliDocumento = $DatiGenerali->addChild('DatiGeneraliDocumento');

#2.1.1.1 <TipoDocumento>
$TipoDocumento = $DatiGeneraliDocumento->addChild('TipoDocumento');

#2.1.1.2 <Divisa>
$Divisa = $DatiGeneraliDocumento->addChild('Divisa');

# 2.1.1.3 <Data>
$Data = $DatiGeneraliDocumento->addChild('Data');

# 2.1.1.4 <Numero>
$Numero = $DatiGeneraliDocumento->addChild('Numero');

# 2.1.1.5 <DatiRitenuta>
$DatiRitenuta = $DatiGeneraliDocumento->addChild('DatiRitenuta');

# 2.1.1.5.1 <TipoRitenuta>
$TipoRitenuta = $DatiRitenuta->addChild('TipoRitenuta');

#2.1.1.5.2 <ImportoRitenuta>
$ImportoRitenuta = $DatiRitenuta->addChild('ImportoRitenuta');

#2.1.1.5.3 <AliquotaRitenuta>
$AliquotaRitenuta = $DatiRitenuta->addChild('AliquotaRitenuta');

#2.1.1.5.4 <CausalePagamento>
$CasualePagamento = $DatiRitenuta->addChild('CasualePagamento');

#2.1.1.6 <DatiBollo>
$DatiBollo = $DatiGeneraliDocumento->addChild('DatiBollo');

#2.1.1.6.1 <BolloVirtuale>
$BolloVirtuale = $DatiBollo->addChild('BolloVirtuale');

#2.1.1.6.2 <ImportoBollo>
$ImportoBollo = $DatiBollo->addChild('ImportoBollo');

#2.1.1.7 <DatiCassaPrevidenziale>
$DatiCassaPrevidenziale = $DatiGeneraliDocumento->addChild('DatiCassaPrevidenziale');

#2.1.1.7.1 <TipoCassa>
$TipoCassa = $DatiCassaPrevidenziale->addChild('TipoCassa');

#2.1.1.7.2 <AlCassa>
$AlCassa = $DatiCassaPrevidenziale->addChild('AlCassa');

#2.1.1.7.3 <ImportoContributoCassa>
$ImportoContributoCassa = $DatiCassaPrevidenziale->addChild('ImportoContributoCassa');

#2.1.1.7.4 <ImponibileCassa>
$ImponibileCassa = $DatiCassaPrevidenziale->addChild('ImponibileCassa');

#2.1.1.7.5 <AliquotaIVA>
$AliquotaIVA = $DatiCassaPrevidenziale->addChild('AliquotaIVA');

#2.1.1.7.6 <Ritenuta>
$Ritenuta = $DatiCassaPrevidenziale->addChild('Ritenuta');

#2.1.1.7.7 <Natura>
$Natura = $DatiCassaPrevidenziale->addChild('Natura');

#2.1.1.7.8 <RiferimentoAmministrazione>
$RiferimentoAmministrazione = $DatiCassaPrevidenziale->addChild('RiferimentoAmministrazione');

#2.1.1.8 <ScontoMaggiorazione>
$ScontoMaggiorazione = $DatiGeneraliDocumento->addChild('ScontoMaggiorazione');

#2.1.1.8.1 <Tipo>
$Tipo = $ScontoMaggiorazione->addChild('Tipo');

#2.1.1.8.2 <Percentuale>
$Percentuale = $ScontoMaggiorazione->addChild('Percentuale');

#2.1.1.8.3 <Importo>
$Importo = $ScontoMaggiorazione->addChild('Importo');

#2.1.1.9 <ImportoTotaleDocumento>
$ImportoTotaleDocumento = $DatiGeneraliDocumento->addChild('ImportoTotaleDocumento');

#2.1.1.10 <Arrotondamento>
$Arrotondamento = $DatiGeneraliDocumento->addChild('Arrotondamento');

#2.1.1.11 <Causale>
$Causale = $DatiGeneraliDocumento->addChild('Causale');

#2.1.1.12 <Art73>
$Art73 = $DatiGeneraliDocumento->addChild('Art73');

# 2.1.2 <DatiOrdineAcquisto>
$DatiOrdineAcquisto = $DatiGenerali->addChild('DatiOrdineAcquisto');

#2.1.2.1 <RiferimentoNumeroLinea>
$RiferimentoNumeroLinea = $DatiOrdineAcquisto->addChild('RiferimentoNumeroLinea');

#2.1.2.2 <IdDocumento>
$IdDocumento = $DatiOrdineAcquisto->addChild('IdDocumento');

#2.1.2.3 <Data>
$Data = $DatiOrdineAcquisto->addChild('Data');

#2.1.2.4 <NumItem>
$NumItem = $DatiOrdineAcquisto->addChild('NumItem');

#2.1.2.5 <CodiceCommessaConvenzione>
$CodiceCommessaConvenzione = $DatiOrdineAcquisto->addChild('CodiceCommessaConvenzione');

#2.1.2.6 <CodiceCUP>
$CodiceCUP = $DatiOrdineAcquisto->addChild('CodiceCUP');

#2.1.2.7 <CodiceCIG>
$CodiceCIG = $DatiOrdineAcquisto->addChild('CodiceCIG');

#2.1.3 <DatiContratto>
$DatiContratto = $DatiGenerali->addChild('DatiContratto');

#2.1.4 <DatiConvenzione>
$DatiConvenzione = $DatiGenerali->addChild('DatiConvenzione');

#2.1.5 <DatiRicezione>
$DatiRicezione = $DatiGenerali->addChild('DatiRicezione');

#2.1.6 <DatiFattureCollegate>
$DatiFattureCollegate = $DatiGenerali->addChild('DatiFattureCollegate');

#2.1.7 <DatiSAL>
$DatiSAL = $DatiGenerali->addChild('DatiSAL');

#2.1.7.1 <RiferimentoFase>
$RiferimentoFase = $DatiSAL->addChild('RiferimentoFase');

#2.1.8 <DatiDDT>
$DatiDDT = $DatiGenerali->addChild('DatiDDT');

#2.1.8.1 <NumeroDDT>
$NumeroDDT = $DatiDDT->addChild('NumeroDDT');

#2.1.8.2 <DataDDT>
$DataDDT = $DatiDDT->addChild('DataDDT');

#2.1.8.3 <RiferimentoNumeroLinea>
$RiferimentoNumeroLinea = $DatiDDT->addChild('RiferimentoNumeroLinea');

#2.1.9 <DatiTrasporto>
$DatiTrasporto = $DatiGenerali->addChild('DatiTrasporto');

#2.1.9.1 <DatiAnagraficiVettore>
$DatiAnagraficiVettore = $DatiTrasporto->addChild('DatiAnagraficiVettore');

#2.1.9.1.1 <IdFiscaleIVA>
$IdFiscaleIVA = $DatiAnagraficiVettore->addChild('IdFiscaleIVA');

#2.1.9.1.1.1 <IdPaese>
$IdPaese = $IdFiscaleIVA->addChild('IdPaese');

#2.1.9.1.1.2 <IdCodice>
$IdCodice = $IdFiscaleIVA->addChild('ICodice');

#2.1.9.1.2 <CodiceFiscale>
$CodiceFiscale = $DatiAnagraficiVettore->addChild('CodiceFiscale');

#2.1.9.1.3 <Anagrafica>
$Anagrafica = $DatiAnagraficiVettore->addChild('Anagrafica');

#2.1.9.1.3.1 <Denominazione>
$Denominazione = $Anagrafica->addChild('Denominazione');

#2.1.9.1.3.2 <Nome>
$Nome = $Anagrafica->addChild('Nome');

#2.1.9.1.3.3 <Cognome>
$Cognome = $Anagrafica->addChild('Cognome');

#2.1.9.1.3.4 <Titolo>
$Titolo = $Anagrafica->addChild('Titolo');

#2.1.9.1.3.5 <CodEORI>
$CodEORI = $Anagrafica->addChild('CodEORI');

#2.1.9.1.4 <NumeroLicenzaGuida>
$NumeroLicenzaGuida = $DatiAnagraficiVettore->addChild('NumeroLicenzaGuida');

#2.1.9.2 <MezzoTrasporto>
$MezzoTrasporto = $DatiTrasporto->addChild('MezzoTrasporto');

#2.1.9.3 <CausaleTrasporto>
$CausaleTrasporto = $DatiTrasporto->addChild('CausaleTrasporto');

#2.1.9.4 <NumeroColli>
$NumeroColli = $DatiTrasporto->addChild('NumeroColli');

#2.1.9.5 <Descrizione>
$Descrizione = $DatiTrasporto->addChild('Descrizione');

#2.1.9.6 <UnitaMisuraPeso>
$UnitaMisuraPeso = $DatiTrasporto->addChild('UnitaMisuraPeso');

#2.1.9.7 <PesoLordo>
$PesoLordo = $DatiTrasporto->addChild('PesoLordo');

#2.1.9.8 <PesoNetto>
$PesoNetto = $DatiTrasporto->addChild('PesoNetto');

#2.1.9.9 <DataOraRitiro>
$DataOraRitiro = $DatiTrasporto->addChild('DataOraRitiro');

#2.1.9.10 <DataInizioTrasporto>
$DataInizioTrasporto = $DatiTrasporto->addChild('DataInizioTrasporto');

#2.1.9.11 <TipoResa>
$TipoResa = $DatiTrasporto->addChild('TipoResa');

#2.1.9.12 <IndirizzoResa>
$IndirizzoResa = $DatiTrasporto->addChild('IndirizzoResa');

#2.1.9.12.1 <Indirizzo>
$Indirizzo = $IndirizzoResa->addChild('Indirizzo');

#2.1.9.12.2 <NumeroCivico>
$NumeroCivico = $IndirizzoResa->addChild('NumeroCivico');

#2.1.9.12.3 <CAP>
$CAP = $IndirizzoResa->addChild('CAP');

#2.1.9.12.4 <Comune>
$Comune = $IndirizzoResa->addChild('Comune');

#2.1.9.12.5 <Provincia>
$Provincia = $IndirizzoResa->addChild('Provincia');

#2.1.9.12.6 <Nazione>
$Nazione = $IndirizzoResa->addChild('Nazione');

#2.1.10 <FatturaPrincipale>
$FatturaPrincipale = $DatiGenerali->addChild('FatturaPrincipale');

#2.1.10.1 <NumeroFatturaPrincipale>
$NumeroFatturaPrincipale = $FatturaPrincipale->addChild('NumeroFatturaPrincipale');

#2.1.10.2 <DataFatturaPrincipale>
$DataFatturaPrincipale = $FatturaPrincipale->addChild('DataFatturaPrincipale');

#2.2 <DatiBeniServizi>
$DatiBeniServizi = $FatturaElettronicaBody->addChild('DatiBeniServizi');

#CICLARE DETTAGLIO LINEE PER OGNI RIGA DI FT

# 2.2.1 <DettaglioLinee>
$DettaglioLinee = $DatiBeniServizi->addChild('DettaglioLinee');

#2.2.1.1 <NumeroLinea>
$NumeroLinea = $DettaglioLinee->addChild('NumeroLinea');

#2.2.1.2 <TipoCessionePrestazione>
$TipoCessionePrestazione = $DettaglioLinee->addChild('TipoCessionePrestazione');

#2.2.1.3 <CodiceArticolo>
$CodiceArticolo = $DettaglioLinee->addChild('CodiceArticolo');

#2.2.1.3.1 <CodiceTipo>
$CodiceTipo = $CodiceArticolo->addChild('CodiceTipo');

#2.2.1.3.2 <CodiceValore>
$CodiceValore = $CodiceArticolo->addChild('CodiceValore');

#2.2.1.4 <Descrizione>
$Descrizione = $DettaglioLinee->addChild('Descrizione');

#2.2.1.5 <Quantita>
$Quantita = $DettaglioLinee->addChild('Quantita');

#2.2.1.6 <UnitaMisura>
$UnitaMisura = $DettaglioLinee->addChild('UnitaMisura');

#2.2.1.7 <DataInizioPeriodo>
$DataInizioPeriodo = $DettaglioLinee->addChild('DataInizioPeriodo');

#2.2.1.8 <DataFinePeriodo>
$DataFinePeriodo = $DettaglioLinee->addChild('DataFinePeriodo');

#2.2.1.9 <PrezzoUnitario>
$PrezzoUnitario = $DettaglioLinee->addChild('PrezzoUnitario');

#2.2.1.10 <ScontoMaggiorazione>
$ScontoMaggiorazione = $DettaglioLinee->addChild('ScontoMaggiorazione');

#2.2.1.10.1 <Tipo>
$Tipo = $ScontoMaggiorazione->addChild('Tipo');

#2.2.1.10.2 <Percentuale>
$Percentuale = $ScontoMaggiorazione->addChild('Percentuale');

#2.2.1.10.3 <Importo>
$Importo = $ScontoMaggiorazione->addChild('Importo');

#2.2.1.11 <PrezzoTotale>
$PrezzoTotale = $DettaglioLinee->addChild('PrezzoTotale');

#2.2.1.12 <AliquotaIVA>
$AliquotaIVA = $DettaglioLinee->addChild('AliquotaIVA');

#2.2.1.13 <Ritenuta>
$Ritenuta = $DettaglioLinee->addChild('Ritenuta');

#2.2.1.14 <Natura>
$Natura = $DettaglioLinee->addChild('Natura');

#2.2.1.15 <RiferimentoAmministrazione>
$RiferimentoAmministrazione = $DettaglioLinee->addChild('RiferimentoAmministrazione');

#2.2.1.16 <AltriDatiGestionali>
$AltriDatiGestionali = $DettaglioLinee->addChild('AltriDatiGestionali');

#2.2.1.16.1 <TipoDato>
$TipoDato = $AltriDatiGestionali->addChild('TipoDato');

#2.2.1.16.2 <RiferimentoTesto>
$RiferimentoTesto = $AltriDatiGestionali->addChild('RiferimentoTesto');

#2.2.1.16.3 <RiferimentoNumero>
$RiferimentoNumero = $AltriDatiGestionali->addChild('RiferimentoNumero');

#2.2.1.16.4 <RiferimentoData>
$RiferimentoData = $AltriDatiGestionali->addChild('RiferimentoData');

#2.2.2 <DatiRiepilogo>
$DatiRiepilogo = $DatiBeniServizi->addChild('DatiRiepilogo');

#2.2.2.1 <AliquotaIVA>
$AliquotaIVA = $DatiRiepilogo->addChild('AliquotaIVA');

#2.2.2.2 <Natura>
$Natura = $DatiRiepilogo->addChild('Natura');

#2.2.2.3 <SpeseAccessorie>
$SpeseAccessorie = $DatiRiepilogo->addChild('SpeseAccessorie');

#2.2.2.4 <Arrotondamento>
$Arrotondamento = $DatiRiepilogo->addChild('Arrotondamento');

#2.2.2.5 <ImponibileImporto>
$ImponibileImporto = $DatiRiepilogo->addChild('ImponibileImporto');

#2.2.2.6 <Imposta>
$Imposta = $DatiRiepilogo->addChild('Imposta');

#2.2.2.7 <EsigibilitaIVA>
$EsigibilitaIVA = $DatiRiepilogo->addChild('EsigibilitaIVA');

#2.2.2.8 <RiferimentoNormativo>
$RiferimentoNormativo = $DatiRiepilogo->addChild('RiferimentoNormativo');

#2.3 <DatiVeicoli>
$DatiVeicoli = $FatturaElettronicaBody->addChild('DatiVeicoli');

#2.3.1 <Data>
$Data = $DatiVeicoli->addChild('Data');

#2.3.2 <TotalePercorso>
$TotalePercorso = $DatiVeicoli->addChild('TotalePercorso');

#2.4 <DatiPagamento>
$DatiPagamento = $FatturaElettronicaBody->addChild('DatiPagamento');

#2.4.1 <CondizioniPagamento>
$CondizioniPagamento = $DatiPagamento->addChild('CondizioniPagamento');

#2.4.2 <DettaglioPagamento>
$DettaglioPagamento = $DatiPagamento->addChild('DettaglioPagamento');

#2.4.2.1 <Beneficiario>
$Beneficiario = $DettaglioPagamento->addChild('Beneficiario');

#2.4.2.2 <ModalitaPagamento>
$ModalitaPagamento = $DettaglioPagamento->addChild('ModalitaPagamento');

#2.4.2.3 <DataRiferimentoTerminiPagamento>
$DataRiferimentoTerminiPagamento = $DettaglioPagamento->addChild('DataRiferimentoTerminiPagamento');

#2.4.2.4 <GiorniTerminiPagamento>
$GiorniTerminiPagamento = $DettaglioPagamento->addChild('Beneficiario');

#2.4.2.5 <DataScadenzaPagamento>
$DataScadenzaPagamento = $DettaglioPagamento->addChild('DataScadenzaPagamento');

#2.4.2.6 <ImportoPagamento>
$ImportoPagamento = $DettaglioPagamento->addChild('ImportoPagamento');

#2.4.2.7 <CodUfficioPostale>
$CodUfficioPostale = $DettaglioPagamento->addChild('CodUfficioPostale');

#2.4.2.8 <CognomeQuietanzante>
$CognomeQuietanzante = $DettaglioPagamento->addChild('CognomeQuietanzante');

#2.4.2.9 <NomeQuietanzante>
$NomeQuietanzante = $DettaglioPagamento->addChild('NomeQuietanzante');

#2.4.2.10 <CFQuietanzante>
$CFQuietanzante = $DettaglioPagamento->addChild('CFQuietanzante');

#2.4.2.11 <TitoloQuietanzante>
$TitoloQuietanzante = $DettaglioPagamento->addChild('TitoloQuietanzante');

#2.4.2.12 <IstitutoFinanziario>
$IstitutoFinanziario = $DettaglioPagamento->addChild('IstitutoFinanziario');

#2.4.2.13 <IBAN>
$IBAN = $DettaglioPagamento->addChild('IBAN');

#2.4.2.14 <ABI>
$ABI = $DettaglioPagamento->addChild('ABI');

#2.4.2.15 <CAB>
$CAB = $DettaglioPagamento->addChild('CAB');

#2.4.2.16 <BIC>
$BIC = $DettaglioPagamento->addChild('BIC');

#2.4.2.17 <ScontoPagamentoAnticipato>
$ScontoPagamentoAnticipato = $DettaglioPagamento->addChild('ScontoPagamentoAnticipato');

#2.4.2.18 <DataLimitePagamentoAnticipato>
$DataLimitePagamentoAnticipato = $DettaglioPagamento->addChild('DataLimitePagamentoAnticipato');

#2.4.2.19 <PenalitaPagamentiRitardati>
$PenalitaPagamentiRitardati = $DettaglioPagamento->addChild('PenalitaPagamentiRitardati');

#2.4.2.20 <DataDecorrenzaPenale>
$DataDecorrenzaPenale = $DettaglioPagamento->addChild('DataDecorrenzaPenale');

#2.4.2.21 <CodicePagamento>
$CodicePagamento = $DettaglioPagamento->addChild('CodicePagamento');

#2.5 Allegati
$Allegati = $FatturaElettronicaBody->addChild('Allegati');

#2.5.1 <NomeAttachment>
$NomeAttachment = $Allegati->addChild('NomeAttachment');

#2.5.2 <AlgoritmoCompressione>
$AlgoritmoCompressione = $Allegati->addChild('AlgoritmoCompressione');

#2.5.3 <FormatoAttachment>
$FormatoAttachment = $Allegati->addChild('FormatoAttachment');

#2.5.4 <DescrizioneAttachment>
$DescrizioneAttachment = $Allegati->addChild('DescrizioneAttachment');

#2.5.5 <Attachment>
$Attachment = $Allegati->addChild('Attachment');
*/

//-----------------------------------------------------------FINE INFO XML

function libxml_display_error($error)
{
    $return = "<br/>\n";
    switch ($error->level) {
        case LIBXML_ERR_WARNING:
            $return .= "<b>Warning $error->code</b>: ";
            break;
        case LIBXML_ERR_ERROR:
            $return .= "<b>Error $error->code</b>: ";
            break;
        case LIBXML_ERR_FATAL:
            $return .= "<b>Fatal Error $error->code</b>: ";
            break;
    }
    $return .= trim($error->message);
    if ($error->file) {
        $return .=    " in <b>$error->file</b>";
    }
    $return .= " on line <b>$error->line</b>\n";

    return $return;
}

function libxml_display_errors() {
    $errors = libxml_get_errors();
    foreach ($errors as $error) {
        print libxml_display_error($error);
    }
    libxml_clear_errors();
}

// Enable user error handling
libxml_use_internal_errors(true);

// $document = $xml->asXML();
$root = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<p:FatturaElettronica xmlns:p="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" versione="FPR12" xsi:schemaLocation="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd">
    <FatturaElettronicaHeader>
        <DatiTrasmissione>
            <IdTrasmittente>
                <IdPaese>IT</IdPaese>
                <IdCodice>01234567890</IdCodice>
            </IdTrasmittente>
            <ProgressivoInvio>00001</ProgressivoInvio>
            <FormatoTrasmissione>FPR12</FormatoTrasmissione>
            <CodiceDestinatario>ABC1234</CodiceDestinatario>
            <ContattiTrasmittente />
        </DatiTrasmissione>
        <CedentePrestatore>
            <DatiAnagrafici>
                <IdFiscaleIVA>
                    <IdPaese>IT</IdPaese>
                    <IdCodice>01234567890</IdCodice>
                </IdFiscaleIVA>
                <Anagrafica>
                    <Denominazione>SOCIETA' ALPHA SRL</Denominazione>
                </Anagrafica>
                <RegimeFiscale>RF19</RegimeFiscale>
            </DatiAnagrafici>
            <Sede>
                <Indirizzo>VIALE ROMA 543</Indirizzo>
                <CAP>07100</CAP>
                <Comune>SASSARI</Comune>
                <Provincia>SS</Provincia>
                <Nazione>IT</Nazione>
            </Sede>
        </CedentePrestatore>
        <CessionarioCommittente>
            <DatiAnagrafici>
                <CodiceFiscale>09876543210</CodiceFiscale>
                <Anagrafica>
                    <Denominazione>DITTA BETA</Denominazione>
                </Anagrafica>
            </DatiAnagrafici>
            <Sede>
                <Indirizzo>VIA TORINO 38-B</Indirizzo>
                <CAP>00145</CAP>
                <Comune>ROMA</Comune>
                <Provincia>RM</Provincia>
                <Nazione>IT</Nazione>
            </Sede>
        </CessionarioCommittente>
    </FatturaElettronicaHeader>
    <FatturaElettronicaBody>
        <DatiGenerali>
            <DatiGeneraliDocumento>
                <TipoDocumento>TD01</TipoDocumento>
                <Divisa>EUR</Divisa>
                <Data>2014-12-18</Data>
                <Numero>123</Numero>
                <Causale>LA FATTURA FA RIFERIMENTO AD UNA OPERAZIONE AAAA BBBBBBBBBBBBBBBBBB CCC DDDDDDDDDDDDDDD E FFFFFFFFFFFFFFFFFFFF GGGGGGGGGG HHHHHHH II LLLLLLLLLLLLLLLLL MMM NNNNN OO PPPPPPPPPPP QQQQ RRRR SSSSSSSSSSSSSS</Causale>
                <Causale>SEGUE DESCRIZIONE CAUSALE NEL CASO IN CUI NON SIANO STATI SUFFICIENTI 200 CARATTERI AAAAAAAAAAA BBBBBBBBBBBBBBBBB</Causale>
            </DatiGeneraliDocumento>
            <DatiOrdineAcquisto>
                <RiferimentoNumeroLinea>1</RiferimentoNumeroLinea>
                <IdDocumento>66685</IdDocumento>
                <NumItem>1</NumItem>
            </DatiOrdineAcquisto>
            <DatiContratto>
                <RiferimentoNumeroLinea>1</RiferimentoNumeroLinea>
                <IdDocumento>123</IdDocumento>
                <Data>2012-09-01</Data>
                <NumItem>5</NumItem>
                <CodiceCUP>123abc</CodiceCUP>
                <CodiceCIG>456def</CodiceCIG>
            </DatiContratto>
            <DatiTrasporto>
                <DatiAnagraficiVettore>
                    <IdFiscaleIVA>
                        <IdPaese>IT</IdPaese>
                        <IdCodice>24681012141</IdCodice>
                    </IdFiscaleIVA>
                    <Anagrafica>
                        <Denominazione>Trasporto spa</Denominazione>
                    </Anagrafica>
                </DatiAnagraficiVettore>
                <DataOraConsegna>2012-10-22T16:46:12.000+02:00</DataOraConsegna>
            </DatiTrasporto>
        </DatiGenerali>
        <DatiBeniServizi>
            <DettaglioLinee>
                <NumeroLinea>1</NumeroLinea>
                <Descrizione>DESCRIZIONE DELLA FORNITURA</Descrizione>
                <Quantita>5.00</Quantita>
                <PrezzoUnitario>1.00</PrezzoUnitario>
                <PrezzoTotale>5.00</PrezzoTotale>
                <AliquotaIVA>22.00</AliquotaIVA>
            </DettaglioLinee>
            <DatiRiepilogo>
                <AliquotaIVA>22.00</AliquotaIVA>
                <ImponibileImporto>5.00</ImponibileImporto>
                <Imposta>1.10</Imposta>
                <EsigibilitaIVA>I</EsigibilitaIVA>
            </DatiRiepilogo>
        </DatiBeniServizi>
        <DatiPagamento>
            <CondizioniPagamento>TP01</CondizioniPagamento>
            <DettaglioPagamento>
                <ModalitaPagamento>MP01</ModalitaPagamento>
                <DataScadenzaPagamento>2015-01-30</DataScadenzaPagamento>
                <ImportoPagamento>6.10</ImportoPagamento>
            </DettaglioPagamento>
        </DatiPagamento>
    </FatturaElettronicaBody>
</p:FatturaElettronica>
XML;
$dom = new \DOMDocument();
$dom->loadXML($root);

if (!$dom->schemaValidate('/Users/Aerendir/Documents/JooServer/_Projects/SerendipityHQ/Libraries/fattura-elettronica/src/Validator/../Schemas/1.2.xsd')) {
    print '<b>DOMDocument::schemaValidate() Generated Errors!</b>';
    libxml_display_errors();
}

var_dump($root);

die;


$filename= "FatturaElettronica".date("YmdHis");
$filename_xml= $filename.".xml";
$filename_zip= $filename.".zip";



//CREO
$targetDir = 'MIO_PATH';


if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777,true);
}


//CREO IL FILE ZIP => FACCIO IL DOWNLOAD => ELIMINO I 2 FILE CON ESTENSIONE .XML E .ZIP
$zip = new ZipArchive;
if ($zip->open( $targetDir.DIRECTORY_SEPARATOR.$filename_zip,  ZipArchive::CREATE))
{
    $zip->addFile( $targetDir.DIRECTORY_SEPARATOR.$filename_xml, $filename_xml);
    $zip->close();


    $direct_download =true;
    if($direct_download== true)
    {

        $file = $targetDir.DIRECTORY_SEPARATOR.$filename_xml;

        // DEVO FARE QUESTO BLOCCO PROG ALTRIMENTI IL DOWNLOAD FILE ZIP MI SCARICA UN FILE CORROTTO
        if (headers_sent())
        {
            ajax_risp(FALSE, 'HTTP header already sent');
        }
        else
        {
            if (!is_file($file))
            {
                header($_SERVER['SERVER_PROTOCOL'].' 404 Not Found');
                ajax_risp(FALSE, 'File NOT Found' );
            }
            else if (!is_readable($file))
            {
                header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
                ajax_risp(FALSE, 'File NOT Readable');
            }
            else
            {
                while (ob_get_level())
                {
                    ob_end_clean();
                }

                ob_start();

                header($_SERVER['SERVER_PROTOCOL'].' 200 OK');
                header("Content-Type: application/zip");
                header("Content-Transfer-Encoding: Binary");
                header("Content-Length: ".filesize($file));
                header('Pragma: no-cache');
                header("Content-Disposition: attachment; filename=\"".basename($file)."\"");

                ob_flush();
                ob_clean();

                readfile($file);
                //exit;
                unlink($targetDir.DIRECTORY_SEPARATOR.$filename_xml);
                unlink($targetDir.DIRECTORY_SEPARATOR.$filename_zip);

                exit;

            }
        }


    }

    else
    {
        ajax_risp(TRUE, "File ".$filename_zip." Correttamente Creato",$filename);
    }
}
else
{
    ajax_risp(FALSE,'Errore creazione zip file!');
}

//--------------------------------------------

?>
