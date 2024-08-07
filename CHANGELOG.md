# Change Log
## [2.0.8] 2024-07-11
- Add phone number into PBX_BILLING
- Fix single payment method issue
- Minor PHP 8.2+ fixes

## [2.0.7] 2024-02-27
- Fix Order state in some cases
- Fix compatibility with Magento 2.4.6 & PHP 8.2
- Update IP whitelist information

## [2.0.6] 2023-02-08
- Add 3DS exemption
- Update 3DSv2 fields
- HMAC auth
- Fix Magento 2.4.5 & PHP 8 compatibility
- Set CB mode to simple mode instead of multi
- Fix possible invalid value for CountryCode

## [2.0.4] 2021-03-16
- fixing name of model Creditagricole

## [2.0.3] 2021-03-16
- minor colorising changes

## [2.0.2] 2021-03-16

- Improve compatibility with Magento 2.4
- Force 3DSv2 for every cards
- Fix template related error during checkout
- Fix refund & capture action on orders
- Remove grayscale effect on cards logo
- Merge all credits cards to one single method

## [2.0.1] 2020-10-16

- Add 3DSv2 support

## [2.0.0] 2019-03-07

- Code : Implementation du Csrf (incompatible avec PHP < 7.1)
- Composer: PHP 7.1.3+ (Magento 2.3)

## [1.0.11] 2019-02-06

### Corrections
- BO : Correction du problème d'encryption des champs hmackey et password

## [1.0.10] 2018-12-20

### Corrections
- Code : Correction d'une erreur d'exception dans onIPNError()
- Branding : Correction d'une classe nom colorisée

## [1.0.9] 2017-12-20

### Modifications
- Composer : Toutes versions de PHP 7.x
- Composer : Suppression du 'require' pour magento/framework

## [1.0.8] 2017-11-09

### Corrections
- Code : suppression des classes dans "Model/Resource/Payment" inutiles avec un namespace incorrect
- FO - Cache : gestion mise en cache des pages (problématique si page en cache est une 404)
- Code - Injection de dépendances : correction erreur de compilation et utilisation

### Modifications
- Branding : passage "Paybox by Verifone" à "Verifone e-commerce"
- Traductions : termes manquants en anglais dans la configuration du module
- Code : nettoyage PSR-2 et Magento Extension Quality Program Coding Standard

### Ajouts
- FO - Paiement : gabarit pour informations de paiement dans le détail commande et les e-mails client

## [1.0.7] 2017-07-04

### Corrections
- Facturation : envoi de l'e-mail lors de la capture
- FO - Paiement : suppression erreur sur validation du module si un autre moyen de paiement est choisi

### Modifications
- Code : nettoyage PSR-2 et adaptations pour validation MarketPlace Magento

## [1.0.6] 2017-03-09

### Corrections
- IPN : mise en conformité des paramètres "Call number" / "Transaction"
- IPN : modification de l'enregistrements des transactions non valides (saisie de coordonnées bancaires invalides, ...) pour création de transaction vide => correction du problème d'actions Back Office qui avant cela utilisaient la 1ère transaction invalide de capture comme transaction parente
- Paiement : nettoyage du panier et de la commande en cas de paiement refusé ou annulé

### Modifications
- Code : nettoyage PSR-2 et adaptations pour validation MarketPlace Magento

## [1.0.5] 2016-11-15

### Ajouts
- Paiement : possibilité d'utiliser la page de paiement Verifone e-commerce RWD
- PayPal : paramétrage spécifique lors de l'appel à la plateforme de paiement

## [1.0.4] 2016-11-15

### Corrections
- Bloc Redirect : pas de cache et registre spécifique

## [1.0.3] 2016-11-09

### Corrections
- Observer : correction des problèmes avec "additional_data" depuis la version 2.0.1 de Magento
- JS Redirect :  modification de la méthode de redirection vers Paybox. Redirection après orderPlaced

## [1.0.2] 2016-10-26

### Corrections
- Observer : paramètres d'appels obligatoires manquants
- ACL : déclaration BO incorrecte

## [1.0.1] 2016-10-25

### Ajouts
- Paiement : ajout du paramètre de version pour suivi des transactions par Verifone e-commerce
- Configuration : gestion du multi-devise pour le paiement avec possibilité de forcer le paiement avec la devise par défaut ou de laisser le choix au client parmi les devises disponibles

### Modifications
- Traductions

### Corrections
- FO - Paiement : correction pour fonctionnement en sous-dossier ou sous-domaine
