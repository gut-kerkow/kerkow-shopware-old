# Documentation

## General

## Configuration

### Template

the template gets rendered by the twig template engine
so you can use loops, ifs like in every twig template

#### Variables

##### products

this variable includes all products, except products that are excluded by the filter

most of the time you iterate over the products to create the feed
this could look like this

````
{% for product in products %}
    {{ product.id }}
{% endfor %}
````

every product has all properties from default shopware


### Delivery

you can configure delivery, this means the feed gets uploaded to a SFTP or FTP server

#### Enabled

delivery only gets executed when this field is turned on

#### Delivery Protocol

there are two supported types SFTP and FTP, SFTP is recommended, because it is encrypted

#### Host url

the host url is usually a domain like idowapro.de but it can be an IP address, too.

#### Host password



### Email Notifications

with email notification you can get informed every time the plugin does something

#### Email Adress(es)

you can define one or multiple email addresses to which the notifications are sent

you can seperate different email addresses with a comma, as the tooltip tells you

#### Triggers

there are 4 different triggers, which are all quiet self explanatory

* Create Success
* Create Error
* Delivery Success
* Delivery Error

### Execution Type

There are two different execution types

#### Manual

When you change a feed generator to execution type normal
you have to execute the feed manual

when the feed has the execution type manual, at the upper right corner appears a button "Generate feed"

#### Cron

Cron https://en.wikipedia.org/wiki/Cron

executes the productfeed automatically in given intervals

you can define the interval in minutes, hours, days or weeks

### Filter

Here you can define a shopware rule to include or exclude some products

you can define every rule you like
* products with a specific name
* products with a specific category
* products with a specific price

## Testing

you can create the feed manual