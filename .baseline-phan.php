<?php
/**
 * This is an automatically generated baseline for Phan issues.
 * When Phan is invoked with --load-baseline=path/to/baseline.php,
 * The pre-existing issues listed in this file won't be emitted.
 *
 * This file can be updated by invoking Phan with --save-baseline=path/to/baseline.php
 * (can be combined with --load-baseline)
 */
return [
    // # Issue statistics:
    // PhanUnreferencedClass : 15+ occurrences
    // PhanTypeMissingReturnReal : 8 occurrences
    // PhanReadOnlyPrivateProperty : 6 occurrences
    // PhanUnreferencedPrivateProperty : 6 occurrences
    // PhanUnreferencedPublicMethod : 6 occurrences
    // PhanParamSignatureMismatch : 5 occurrences
    // PhanParamSignatureRealMismatchReturnType : 5 occurrences
    // PhanUndeclaredTypeReturnType : 5 occurrences
    // PhanUndeclaredInterface : 2 occurrences
    // PhanUnreferencedPublicClassConstant : 2 occurrences
    // PhanUnreferencedUseNormal : 2 occurrences
    // PhanUnusedPublicFinalMethodParameter : 1 occurrence

    // Currently, file_suppressions and directory_suppressions are the only supported suppressions
    'file_suppressions' => [
        'src/FatturaElettronica.php' => ['PhanUnreferencedClass', 'PhanUnreferencedPublicMethod'],
        'src/Model/Body.php' => ['PhanParamSignatureMismatch', 'PhanParamSignatureRealMismatchReturnType', 'PhanTypeMissingReturnReal', 'PhanUndeclaredTypeReturnType', 'PhanUnreferencedClass', 'PhanUnreferencedPrivateProperty'],
        'src/Model/FatturaElettronica.php' => ['PhanTypeMissingReturnReal', 'PhanUnreferencedPrivateProperty', 'PhanUnreferencedUseNormal', 'PhanUnusedPublicFinalMethodParameter'],
        'src/Model/Header.php' => ['PhanTypeMissingReturnReal', 'PhanUnreferencedUseNormal'],
        'src/Model/Header/DatiTrasmissione.php' => ['PhanReadOnlyPrivateProperty'],
        'src/Model/Header/DatiTrasmissione/ContattiTrasmittente.php' => ['PhanUnreferencedClass'],
        'src/Model/Type/EmailType.php' => ['PhanUndeclaredInterface', 'PhanUnreferencedClass', 'PhanUnreferencedPublicMethod'],
        'src/Model/Type/IdFiscaleType.php' => ['PhanUnreferencedClass'],
        'src/Model/Type/TelefonoType.php' => ['PhanUndeclaredInterface', 'PhanUnreferencedClass', 'PhanUnreferencedPublicMethod'],
        'src/Psr/Body/AllegatiInterface.php' => ['PhanUnreferencedClass'],
        'src/Psr/Body/BeniServiziInterface.php' => ['PhanUnreferencedClass'],
        'src/Psr/Body/DatiGeneraliInterface.php' => ['PhanUnreferencedClass'],
        'src/Psr/Body/DatiPagamentoInterface.php' => ['PhanUnreferencedClass'],
        'src/Psr/Body/DatiVeicoliInterface.php' => ['PhanUnreferencedClass'],
        'src/Psr/Header/CedentePrestatoreInterface.php' => ['PhanUnreferencedClass'],
        'src/Psr/Header/CessionarioCommittenteInterface.php' => ['PhanUnreferencedClass'],
        'src/Psr/Header/DatiTrasmissioneInterface.php' => ['PhanUnreferencedPublicClassConstant'],
        'src/Psr/Header/RappresentanteFiscaleInterface.php' => ['PhanUnreferencedClass'],
        'src/Psr/Header/SoggettoEmittenteInterface.php' => ['PhanUnreferencedClass'],
        'src/Psr/Header/TerzoIntermediarioOSoggettoEmittenteInterface.php' => ['PhanUnreferencedClass'],
        'src/Psr/Type/EmailTypeInterface.php' => ['PhanUnreferencedClass'],
        'src/Psr/Type/TelefonoTypeInterface.php' => ['PhanUnreferencedClass'],
        'src/Validator/Validator.php' => ['PhanUnreferencedClass', 'PhanUnreferencedPublicMethod'],
    ],
    // 'directory_suppressions' => ['src/directory_name' => ['PhanIssueName1', 'PhanIssueName2']] can be manually added if needed.
    // (directory_suppressions will currently be ignored by subsequent calls to --save-baseline, but may be preserved in future Phan releases)
];
