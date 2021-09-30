# Dokumentation

## Allgemein

Mit diesem Shopware 6 Plugin ist es möglich verschiedene Formen von Produktfeeds zu erstellen.
Dateiformate XML, CSV und TXT sind unterstützt

## Konfiguration

### Temmplate

Das Template ist ein [twig Template](https://twig.symfony.com/) mit dem es möglich ist, alle Use Cases abzudecken.

Es ist möglich mit Schleifen oder Bedingungen zu verwenden, 
um den Feed komplett auf die eigenen Anforderungen anzupassen.

Ist auch möglich einfach die Standardtemplates zu verwenden, die beim Erstellen eines Feeds angeboten werden.

### Variablen

Es sind verschiedenste Variablen möglich, die beim Template verwendet werden können.

#### products

Das ist Variable die wahrscheinlich in jedem Feed verwendet wird

Es ist eine Liste an Produkten, entweder sind das wirklich alle Produkte
oder wenn ein Filter angegeben ist, sind es alle Produkte die nach dem Filtern noch übrig sind.

Diese Liste kann dann mit einer twig Schleife abgearbeitet werden.

Innerhalb eines Produktes können folgende Attribute verwendet werden.

* id
* productNumber
* stock
* restockTime
* autoIncrement
* active
* availableStock
* available
* isCloseout
* variation
* displayGroup
* configurationGroupConfig
* mainVariantId
* variantRestrictions
    * Nachschauen
* manufacturerNumber
* ean
* purchaseSteps
* maxPurchase
* mniPurchase
* purchaseUnit
* referenceUnit
* shippingFree
* purchasePrice
    * Nachschauen
* markAsTopseller
* weight
* width
* height
* length
* releaseDate
* ratingAverage
* categoryTree
    * Nachschauen
* properties
    * Liste
* options
    * Liste
* tags
    * Liste
* customFieldSetSelectionActive
* sales
* cheapestPrice
    * Nachschauen
* metaDescription
* name
* keywords
* description
* metaTitle
* packUnit
* packUnitPlural
* customFields
* deliveryTime
    * Objekt
* tax
    * Objekt
* manufacturer
    * Objekt
* unit
    * Objekt
* cover
    * Objekt
* featureSet
    * Objekt
* prices
    * Liste
* media
    * Liste
* crossSellings
    * Liste
* crossSellingAssignedProducts
    * Liste
* configuratiorSettings
    * Liste
* visibilities
    * Liste
* searchKeywords
    * Liste
* productReviews
    * Liste
* mainCategories
    * Liste
* seoUrls
    * Liste
* orderLineItems
    * Liste
* options
    * Liste
* properties
    * Liste
* categories
    * Liste
* streams
    * Liste
* categoriesRo
    * Liste
* tags
    * Liste
* customFieldSets
    * Liste
* customSearchKeywords
* wishlists
    * Liste
* canonicalProduct
    * Objekt
* cmsPage
    * Liste
* slotConfig

Und alle Custom Properties die im jeweilgen shop verwendet werden können verwendet werden.

#### categories

Eine Liste aller Kategorien

* id
* displayNestedProducts
* autoIncrement
* breadcrumb
* level
    * nachschauen
* path
    * nachschauen
* type
* productAssignmentType
* visible
* active
* name
* customFields
* slotConfig
* linkType
* internalLink
* externalLink
* linkNewTab
* description
* metaTitle
* metaDescription
* keywords
* media
    * Liste
* products
    * Liste
* nestedProducts
    * Liste
* tags
    * Liste
* cmsPage
    * Objekt
* productStream
    * Objekt
* navigationSalesChannels
    * Liste
* footerSalesChannels
    * Liste
* serviceSalesChannels
    * Liste
* serviceSalesChannels
    * Liste
* mainCategories
    * Liste
* seoUrls
    * Liste

#### paymentMethods

#### salesChannel

#### shippingMethodPrice

## FTP / SFTP Zustellung

Es ist möglich die erstellen Feeds über FTP bzw. SFTP zu versenden.

Dazu muss ein Host, Username, Passwort und ein Verzeichnis angegeben werden.

## Benachrichtigungen

Es ist möglich Benachrchtigungen zu bekommen.

### E-Mail Adress(en)

Wenn Benachrichtigungen angeschaltet sind, 

### Benachrchtigungsevents

Es gibt vier Events zu denen man benachrichtigt werden kann

* Generieren erfolgreich
    * Wenn ein Feed erfolgreich erstellt wurde
* Generieren fehlgeschlagen
    * Wenn ein Fehler aufgetreten ist, während ein Feed erstellt wurde
* Versenden erfolgreich
    * Wenn das Versenden eines Feeds, über FTP oder SFTP, erfolgreich war
* Versenden fehlgeschlagen
    * Wenn das Versenden eines Feeds, über FTP oder SFTP, fehlgeschlagen ist

## Ausführmodus

Entscheidet wie und wann ein Feed erstellt wird

### Manuell

Wenn diese Option ausgewählt ist, werden Feeds nur manuell erstellt.

### Cron

Cron steht für den Unix Dienst [Cron](https://en.wikipedia.org/wiki/Cron)
Dieser Dienst ermögicht es, Programme in gegeben Zeitintervallen ausführen zu lassen.

Hier ist es möglich Feeds automatisch in gegebenen Zeitintervallen zu erstellen.
Das Zeitintervall lässt sich in Minuten, Stunden, Tagen oder Wochen angeben.

## Filter

Hier ist es möglich Produkte zu Filtern die in den Feed mitaufgenommen werden.

Aktuell ist es möglich nach folgendem Attributen zu filtern:

* Produkt Name
* Produkt Id
* Produkt Preis
* Produkte innerhalb einer Kategorie
* Kategorie Namen
* Hersteller Name

Die oben angegebenen Bedingungen können in verschiedenen "UND" oder "ODER" Container verschachtelt werden