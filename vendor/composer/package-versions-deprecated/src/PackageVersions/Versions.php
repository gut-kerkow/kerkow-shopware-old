<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    const ROOT_PACKAGE_NAME = 'shopware/production';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'aws/aws-sdk-php' => '3.133.6@cd7bd2fdd159146ef6c7eeb90b73fae4fd11da57',
  'cocur/slugify' => 'v4.0.0@3f1ffc300f164f23abe8b64ffb3f92d35cec8307',
  'composer/ca-bundle' => '1.2.8@8a7ecad675253e4654ea05505233285377405215',
  'composer/composer' => '1.9.2@7a04aa0201ddaa0b3cf64d41022bd8cdcd7fafeb',
  'composer/package-versions-deprecated' => '1.8.0@98df7f1b293c0550bd5b1ce6b60b59bdda23aa47',
  'composer/semver' => '1.5.1@c6bea70230ef4dd483e6bbcab6005f682ed3a8de',
  'composer/spdx-licenses' => '1.5.4@6946f785871e2314c60b4524851f3702ea4f2223',
  'composer/xdebug-handler' => '1.4.3@ebd27a9866ae8254e873866f795491f02418c5a5',
  'defuse/php-encryption' => 'v2.2.1@0f407c43b953d571421e0020ba92082ed5fb7620',
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/dbal' => 'v2.10.1@c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dompdf/dompdf' => 'v0.8.4@8f49b3b01693f51037dd50da81090beba1b5c005',
  'egulias/email-validator' => '2.1.19@840d5603eb84cc81a6a0382adac3293e57c1c64c',
  'elasticsearch/elasticsearch' => 'v7.2.2@eefeaa8decab4056d6457d179147cd885faf6653',
  'enqueue/amqp-tools' => '0.10.0@e41d56966fdd1c7681d342e431e65bccb1962a9e',
  'enqueue/dbal' => '0.10.0@78bc56f49b247cc58cce3eb77cd3be966d0a3eff',
  'enqueue/dsn' => '0.10.1@e503546bacc0f2e8d45590b089683140ecf91cd3',
  'enqueue/enqueue' => '0.10.3@49d22d26fc57bd1f17ccd7c22a8b0554c8c1e34c',
  'enqueue/enqueue-bundle' => '0.10.3@f4fd2b7be3d34c2835451c42f20cda80a3d415f7',
  'enqueue/null' => '0.10.1@7fb83a0f87ce3a95645a9aa2c495200e453dd366',
  'ezyang/htmlpurifier' => 'v4.12.0@a617e55bc62a87eec73bd456d146d134ad716f03',
  'firebase/php-jwt' => 'v5.2.0@feb0e820b8436873675fd3aca04f3728eb2185cb',
  'google/auth' => 'v1.11.1@bb959e91bd8ffbd352ab76cbf11d656ce6435088',
  'google/cloud-core' => 'v1.38.0@5379a3a2ffae2b6ad7eb55a4fa56acdd694a460e',
  'google/cloud-storage' => 'v1.17.0@626e910530f0b9463a15563f697a66f1cfbd6369',
  'google/crc32' => 'v0.1.0@a8525f0dea6fca1893e1bae2f6e804c5f7d007fb',
  'guzzlehttp/guzzle' => '6.5.2@43ece0e75098b7ecd8d13918293029e555a50f82',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'guzzlehttp/ringphp' => '1.1.1@5e2a174052995663dd68e6b5ad838afd47dd615b',
  'guzzlehttp/streams' => '3.0.0@47aaa48e27dae43d39fc1cea0ccf0d84ac1a2ba5',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'justinrainbow/json-schema' => '5.2.10@2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
  'lcobucci/jwt' => '3.3.1@a11ec5f4b4d75d1fcd04e133dede4c317aac9e18',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '1.0.63@8132daec326565036bc8e8d1876f77ec183a7bd6',
  'league/flysystem-aws-s3-v3' => '1.0.23@15b0cdeab7240bf8e8bffa85ae5275bbc3692bf4',
  'league/oauth2-server' => '7.3.3@c7f499849704ebe2c60b45b6d6bb231df5601d4a',
  'marc1706/fast-image-size' => 'v1.1.6@3a3a2b036be20f43fa06ce00dfa754df503e6684',
  'monolog/monolog' => '1.25.5@1817faadd1846cd08be9a49e905dc68823bc38c0',
  'mtdowling/jmespath.php' => '2.6.0@42dae2cbd13154083ca6d70099692fef8ca84bfb',
  'nyholm/psr7' => '1.2.1@55ff6b76573f5b242554c9775792bd59fb52e11c',
  'ongr/elasticsearch-dsl' => 'v7.0.0@b86153ce7a4192ff7caf8d93f59c2e7c151cba1f',
  'padaliyajay/php-autoprefixer' => '1.2@0f36b7cfbd71d25836bcb9f4b58c09252ca4e9ec',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'phenx/php-font-lib' => '0.5.2@ca6ad461f032145fff5971b5985e5af9e7fa88d8',
  'phenx/php-svg-lib' => 'v0.3.3@5fa61b65e612ce1ae15f69b3d223cb14ecc60e32',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'queue-interop/amqp-interop' => '0.8.1@2029c3b3b9f10cc1c0a219650f66ab68fcfe656d',
  'queue-interop/queue-interop' => '0.8.0@b43af85f635439fa2c9a6d8fd486489da4869741',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/uuid' => '3.9.3@7e1633a6964b48589b142d60542f9ed31bd37a92',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'rize/uri-template' => '0.3.2@9e5fdd5c47147aa5adf7f760002ee591ed37b9ca',
  'sabberworm/php-css-parser' => '8.3.1@d217848e1396ef962fb1997cf3e2421acba7f796',
  'scssphp/scssphp' => '1.0.6@5b3c9d704950d8f9637f5110c36c281ec47dc13c',
  'seld/jsonlint' => '1.8.1@3d5eb71705adfa34bd34b993400622932b2f62fd',
  'seld/phar-utils' => '1.1.1@8674b1d84ffb47cc59a101f5d5a3b61e87d23796',
  'sensio/framework-extra-bundle' => 'v5.5.3@98f0807137b13d0acfdf3c255a731516e97015de',
  'shopware/administration' => '6.3.0.2@b676e1a6ce0221d63707449cb52fe7ea8a8f5312',
  'shopware/core' => '6.3.0.2@ff26ec0efdca2ed38f809623c7ee9b805eefb3f6',
  'shopware/elasticsearch' => '6.3.0.2@aeae60e86a3de1c563a02ab41ea09b1ba07a1544',
  'shopware/recovery' => '6.3.0.2@4d922a975a0a622a8845a92daa2f2d43ca89a0e7',
  'shopware/storefront' => '6.3.0.2@6d254ed7703d218d67af0f5677f3f02767e7640e',
  'sroze/messenger-enqueue-transport' => '0.4.0@a698418e702ecb29aa51ee2e40e40c90798057f0',
  'superbalist/flysystem-google-storage' => '7.2.2@87e2f450c0e4b5200fef9ffe6863068cc873d734',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/asset' => 'v4.4.4@2c67c89d064bfb689ea6bc41217c87100bb94c17',
  'symfony/cache' => 'v4.4.4@0198a01c8d918d6d717f96dfdcba9582bc5f6468',
  'symfony/cache-contracts' => 'v1.1.7@af50d14ada9e4e82cfabfabdc502d144f89be0a1',
  'symfony/config' => 'v4.4.4@4d3979f54472637169080f802dc82197e21fdcce',
  'symfony/console' => 'v4.4.4@f512001679f37e6a042b51897ed24a2f05eba656',
  'symfony/debug' => 'v4.4.4@20236471058bbaa9907382500fc14005c84601f0',
  'symfony/debug-bundle' => 'v4.4.4@570c3c69e69f7709f184ee3acbebe45e5ff1adce',
  'symfony/dependency-injection' => 'v4.4.4@ec60a7d12f5e8ab0f99456adce724717d9c1784a',
  'symfony/dotenv' => 'v4.4.4@b74a1638f53e3c65e4bbfc2a03c23fdc400fd243',
  'symfony/error-handler' => 'v4.4.4@d2721499ffcaf246a743e01cdf6696d3d5dd74c1',
  'symfony/event-dispatcher' => 'v4.4.4@9e3de195e5bc301704dd6915df55892f6dfc208b',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/filesystem' => 'v4.4.4@266c9540b475f26122b61ef8b23dd9198f5d1cfd',
  'symfony/finder' => 'v4.4.4@3a50be43515590faf812fbd7708200aabc327ec3',
  'symfony/framework-bundle' => 'v4.4.4@afc96daad6049cbed34312b34005d33fc670d022',
  'symfony/http-foundation' => 'v4.4.7@62f92509c9abfd1f73e17b8cf1b72c0bdac6611b',
  'symfony/http-kernel' => 'v4.4.4@62116a9c8fb15faabb158ad9cb785c353c2572e5',
  'symfony/inflector' => 'v4.4.4@f419ab2853cc00471ffd7fc18e544b5f5a90adb1',
  'symfony/intl' => 'v5.1.3@7299f8c95ffd2623986c976fb8c48beb4c4cb44d',
  'symfony/messenger' => 'v4.4.4@caad29e3bda89683a0cd0c24bee5e7cb22e8a7f5',
  'symfony/mime' => 'v4.4.4@225034620ecd4b34fd826e9983d85e2b7a359094',
  'symfony/monolog-bridge' => 'v4.4.4@b582d06cc125f3659f5ca00757bbfd8b822c0706',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.4.4@9a02d6662660fe7bfadad63b5f0b0718d4c8b6b0',
  'symfony/polyfill-ctype' => 'v1.18.1@1c302646f6efc070cd46856e600e5e0684d6b454',
  'symfony/polyfill-iconv' => 'v1.18.1@6c2f78eb8f5ab8eaea98f6d414a5915f2e0fce36',
  'symfony/polyfill-intl-grapheme' => 'v1.18.1@b740103edbdcc39602239ee8860f0f45a8eb9aa5',
  'symfony/polyfill-intl-icu' => 'v1.18.1@4e45a6e39041a9cc78835b11abc47874ae302a55',
  'symfony/polyfill-intl-idn' => 'v1.18.1@5dcab1bc7146cf8c1beaa4502a3d9be344334251',
  'symfony/polyfill-intl-normalizer' => 'v1.18.1@37078a8dd4a2a1e9ab0231af7c6cb671b2ed5a7e',
  'symfony/polyfill-mbstring' => 'v1.18.1@a6977d63bf9a0ad4c65cd352709e230876f9904a',
  'symfony/polyfill-php70' => 'v1.18.1@0dd93f2c578bdc9c72697eaa5f1dd25644e618d3',
  'symfony/polyfill-php72' => 'v1.18.1@639447d008615574653fb3bc60d1986d7172eaae',
  'symfony/polyfill-php73' => 'v1.13.1@4b0e2222c55a25b4541305a053013d5647d3a25f',
  'symfony/polyfill-php80' => 'v1.18.1@d87d5766cbf48d72388a9f6b85f280c8ad51f981',
  'symfony/process' => 'v4.4.4@f5697ab4cb14a5deed7473819e63141bf5352c36',
  'symfony/property-access' => 'v4.4.4@090b4bc92ded1ec512f7e2ed1691210769dffdb3',
  'symfony/property-info' => 'v4.4.4@e6355ba81c738be31c3c3b3cd7929963f98da576',
  'symfony/psr-http-message-bridge' => 'v2.0.0@ce709cd9c90872c08c2427b45739d5f3c781ab4f',
  'symfony/routing' => 'v4.4.4@7bf4e38573728e317b926ca4482ad30470d0e86a',
  'symfony/security-core' => 'v4.4.4@d2550b4ecd63f612763e0af2cbcb1a69a700fe99',
  'symfony/security-csrf' => 'v4.4.4@da4664d94164e2b50ce75f2453724c6c33222505',
  'symfony/serializer' => 'v4.4.4@76ecc214a93b763c29b924277e85f64326f9fbb2',
  'symfony/service-contracts' => 'v1.1.8@ffc7f5692092df31515df2a5ecf3b7302b3ddacf',
  'symfony/string' => 'v5.1.3@f629ba9b611c76224feb21fe2bcbf0b6f992300b',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/translation' => 'v4.4.4@f5d2ac46930238b30a9c2f1b17c905f3697d808c',
  'symfony/translation-contracts' => 'v1.1.7@364518c132c95642e530d9b2d217acbc2ccac3e6',
  'symfony/twig-bridge' => 'v4.4.4@d5f3e83e2cc2fcdd60c351b5be1beb9533cf698c',
  'symfony/twig-bundle' => 'v4.4.4@d3e3e46e9e683e946746219570299ba07506260a',
  'symfony/validator' => 'v4.4.4@eb3e15de5c63873ca6e2a88b56a029f7be4c5953',
  'symfony/var-dumper' => 'v4.4.11@2125805a1a4e57f2340bc566c3013ca94d2722dc',
  'symfony/var-exporter' => 'v4.4.4@1a76a943f2af334da13bc9f33f49392fa530eec9',
  'symfony/yaml' => 'v4.4.4@cd014e425b3668220adb865f53bff64b3ad21767',
  'true/punycode' => 'v2.1.1@a4d0c11a36dd7f4e7cd7096076cab6d3378a071e',
  'twig/intl-extra' => 'v2.12.3@e1b768be4847bc0cf748ac1651b043faf7454a71',
  'twig/string-extra' => 'v2.12.3@54fb5511c4a0189de1d48d0f7c98843c270084e8',
  'twig/twig' => 'v2.12.3@97b6311585cae66a26833b14b33785f5797f7d39',
  'zircote/swagger-php' => '3.0.3@c86386bd623ffad6f7e6f9269bf51d42d2797012',
  'bheller/images-generator' => '1.0.1@50b61fe1dcf1b72b6a830debec4db22afd1e8ee1',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'fzaninotto/faker' => 'v1.8.0@f72816b43e74063c8b10357394b6bba8cb1c10de',
  'johnkary/phpunit-speedtrap' => 'v3.1.0@dac11b8640d4be7a70f336616947fa84f169835a',
  'league/flysystem-memory' => '1.0.2@d0e87477c32e29f999b4de05e64c1adcddb51757',
  'mbezhanov/faker-provider-collection' => '1.2.1@076c00f0d438f12ec7da0fdaadbfb7940913763e',
  'myclabs/deep-copy' => '1.10.1@969b211f9a51aa1f6c01d1d2aef56d3bd91598e5',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.1@d870572532cd70bc3fab58f2e23ad423c8404c44',
  'phpdocumentor/type-resolver' => '1.3.0@e878a14a65245fbe78f8080eba03b47c3b705651',
  'phpspec/prophecy' => '1.11.1@b20034be5efcdab4fb60ca3a29cba2949aead160',
  'phpunit/php-code-coverage' => '7.0.10@f1884187926fbb755a9aaf0b3836ad3165b478bf',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '8.3.5@302faed7059fde575cf3403a78c730c5e3a62750',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '3.0.0@edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/type' => '1.1.3@3aaaa15fa71d27650d62a948be022fe3b48541a3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'smalot/pdfparser' => 'v0.14.0@ec72a99028ba5e21a0acad92047b85e128cbf81f',
  'symfony/browser-kit' => 'v4.4.11@f53310646af9901292488b2ff36e26ea10f545f5',
  'symfony/dom-crawler' => 'v4.4.11@72b3a65ddd5052cf6d65eac6669748ed311f39bf',
  'symfony/phpunit-bridge' => 'v4.4.11@0bc6184e78cd73abb0820e160a202c3989409631',
  'symfony/stopwatch' => 'v4.4.11@f51fb90df1154a7f75987198a9689e28f91e6a50',
  'symfony/web-profiler-bundle' => 'v4.4.11@c946a250ac41542c481265d8e958d62cf5a172c9',
  'tecnickcom/tcpdf' => '6.3.5@19a535eaa7fb1c1cac499109deeb1a7a201b4549',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'shopware/production' => 'dev-master@fdf5c69c5213f27101cf1dc9e772e947eb9b2ea0',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}