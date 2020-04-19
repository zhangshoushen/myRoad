<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'laminas/laminas-mvc-skeleton';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'aist/aist-git-tools' => '0.1.3@c6e9515e9c2f6518473a9c177ba4752b4710751b',
  'aura/di' => '3.4.0@f676b38a0d1c3b0d7897b0a082f4811eb8b08faa',
  'container-interop/container-interop' => '1.2.0@79cbf1341c22ec75643d841642dd5d6acd83bdb8',
  'doctrine/annotations' => '1.10.1@5eb79f3dbdffed6544e1fc287572c0f462bd29bb',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.12.0@2053eafdf60c2172ee1373d1b9289ba1db7f1fc6',
  'doctrine/dbal' => 'v2.10.1@c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8',
  'doctrine/doctrine-module' => '1.2.0@9407d04d0b08e7071dab05c9d068cefda9dc5a6f',
  'doctrine/doctrine-orm-module' => '1.1.8@d0ff7aaa1c4eabf4bab2a6ae73317c34330467c3',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/orm' => 'v2.7.2@dafe298ce5d0b995ebe1746670704c0a35868a6a',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'gitonomy/gitlib' => 'v1.2.1@718ca021c67f3ea8f6a5fa5d231ec49675068868',
  'http-interop/http-middleware' => '0.4.1@9a801fe60e70d5d608b61d56b2dcde29516c81b9',
  'jhuet/zdt-logger-module' => '1.0.0@8a021b47d265b87ff2e4dc4b441efbc616d153cb',
  'laminas/laminas-auradi-config' => '1.0.2@dbec23ad448a4f4f02ee1bace55b563651b0c6d4',
  'laminas/laminas-authentication' => '2.7.0@53505e07858d243792b96be763456f786d953501',
  'laminas/laminas-barcode' => '2.8.2@7806b774328a32b1f121f2972c72a0ded85939e1',
  'laminas/laminas-cache' => '2.9.0@f4746a868c3e2f2da63c19d23efac12b9d1bb554',
  'laminas/laminas-captcha' => '2.9.0@b88f650f3adf2d902ef56f6377cceb5cd87b9876',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-coding-standard' => '1.0.0@08880ce2fbfe62d471cd3cb766a91da630b32539',
  'laminas/laminas-component-installer' => '2.1.2@a12c65077c6b046d8f4338f9a2479e783e97aaab',
  'laminas/laminas-composer-autoloading' => '2.1.0@88f31ae2e6aa0fbf428e4ffce7677a89c3d716e6',
  'laminas/laminas-config' => '2.6.0@71ba6d5dd703196ce66b25abc4d772edb094dae1',
  'laminas/laminas-config-aggregator' => '1.2.2@20b9d5d801372ab4c7f5b3f7fbda8e447fdc2438',
  'laminas/laminas-config-aggregator-modulemanager' => '1.0.1@5e1e9f303191198923b91aadabd2837ea41a58eb',
  'laminas/laminas-config-aggregator-parameters' => '1.2.0@ace6fabeff2ae993891cc4e9426a6a2e4cbd893a',
  'laminas/laminas-console' => '2.8.0@478a6ceac3e31fb38d6314088abda8b239ee23a5',
  'laminas/laminas-container-config-test' => '0.2.2@426b0b0385f301dc6be6353a69591d60090c647e',
  'laminas/laminas-crypt' => '3.3.1@5f5dfe3ca08c965cc1f44f95831a83a81a93bf78',
  'laminas/laminas-db' => '2.11.3@6c4238918b9204db1eb8cafae2c1940d40f4c007',
  'laminas/laminas-dependency-plugin' => '1.0.3@f269716dc584cd7b69e7f6e8ac1092d645ab56d5',
  'laminas/laminas-developer-tools' => '1.3.2@8c29d053be1815711ef049a7a2fd0b7f437978e3',
  'laminas/laminas-development-mode' => '3.2.0@203cf2f61dbea1489cb6e0c42ffdc987ebe4f796',
  'laminas/laminas-di' => '2.6.1@239b22408a1f8eacda6fc2b838b5065c4cf1d88e',
  'laminas/laminas-diactoros' => '1.8.7p2@6991c1af7c8d2c8efee81b22ba97024781824aaa',
  'laminas/laminas-diagnostics' => '1.6.0@9434b93ca7fc66999e0a2f01400e7f20214169c4',
  'laminas/laminas-dom' => '2.7.2@631fa74ae6f68e9019b73512f1b3b139d43f3572',
  'laminas/laminas-escaper' => '2.6.1@25f2a053eadfa92ddacb609dcbbc39362610da70',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-feed' => '2.12.2@8a193ac96ebcb3e16b6ee754ac2a889eefacb654',
  'laminas/laminas-file' => '2.8.3@cb0bf270cc3e7a4d7dd780b573e2481a09951993',
  'laminas/laminas-filter' => '2.9.4@3c4476e772a062cef7531c6793377ae585d89c82',
  'laminas/laminas-form' => '2.14.5@3e22e09751cf6ae031be87a44e092e7925ce5b7b',
  'laminas/laminas-http' => '2.11.2@8c66963b933c80da59433da56a44dfa979f3ec88',
  'laminas/laminas-httphandlerrunner' => '1.1.0@296f5ff35074dd981d1570a66b95596c81808087',
  'laminas/laminas-hydrator' => '2.4.2@4a0e81cf05f32edcace817f1f48cb4055f689d85',
  'laminas/laminas-i18n' => '2.10.3@94ff957a1366f5be94f3d3a9b89b50386649e3ae',
  'laminas/laminas-i18n-resources' => 'dev-develop@24787e0e4bebe6df88c325cc26350c95ff83cbd3',
  'laminas/laminas-inputfilter' => '2.10.1@b29ce8f512c966468eee37ea4873ae5fb545d00a',
  'laminas/laminas-json' => '3.1.2@00dc0da7b5e5018904c5c4a8e80a5faa16c2c1c6',
  'laminas/laminas-json-server' => '3.2.2@5580959966a99bc110066566ca8965773ef49c13',
  'laminas/laminas-ldap' => '2.10.3@649fae8982149b93071c4a7d56f2c4efeed51aa8',
  'laminas/laminas-loader' => '2.6.1@5d01c2c237ae9e68bec262f339947e2ea18979bc',
  'laminas/laminas-log' => '2.12.0@4e92d841b48868714a070b10866e94be80fc92ff',
  'laminas/laminas-mail' => '2.10.0@019fb670c1dff6be7fc91d3b88942bd0a5f68792',
  'laminas/laminas-math' => '3.2.0@dd603c7d151d46eafd243a405d5b7eefa4222d74',
  'laminas/laminas-memory' => 'dev-develop@ff1ad04e48db6ab5ca6202630e1a0e70eb0b029f',
  'laminas/laminas-migration' => '1.1.0@466759645c825a228ec57bde797d22368c46ede1',
  'laminas/laminas-mime' => '2.7.4@e45a7d856bf7b4a7b5bd00d6371f9961dc233add',
  'laminas/laminas-modulemanager' => '2.8.4@92b1cde1aab5aef687b863face6dd5d9c6751c78',
  'laminas/laminas-mvc' => '3.1.1@ead09f8ab5ff0e562dbd0198c7f67523c2f61980',
  'laminas/laminas-mvc-console' => '1.2.0@0c16223557fdb9bba853f6de22e1040824c1c966',
  'laminas/laminas-mvc-form' => '1.0.0@42254dd6d6d221f0825e79b1811bc734027908ed',
  'laminas/laminas-mvc-i18n' => '1.1.1@4184f6572b5244a5f5781604f1e03d7955e304a0',
  'laminas/laminas-mvc-middleware' => '1.1.0@f2d31a99dea5f564e5a4135c9e469d5800a92540',
  'laminas/laminas-mvc-plugin-fileprg' => '1.1.0@4a1a3729b3789a4d9e7cfe285ce84a636be87a67',
  'laminas/laminas-mvc-plugin-flashmessenger' => '1.2.0@f5a522c3aab215a9b89a0630beb91582f4a3f202',
  'laminas/laminas-mvc-plugin-identity' => '1.1.1@0dc0c349be0faee67bbb4ae2a0206435a7a51516',
  'laminas/laminas-mvc-plugin-prg' => '1.2.0@f9b094373795dd4250d3551a1fbd6d304762b621',
  'laminas/laminas-mvc-plugins' => '1.0.1@896104a57c3898c2ca932c1ec10c6a3afea2f815',
  'laminas/laminas-navigation' => '2.9.1@1b4210ea3afeffb8a69e502e169088180ba3275d',
  'laminas/laminas-oauth' => '2.0.3@8e58570a37c6638cb257786319326d8e8c560f8d',
  'laminas/laminas-paginator' => '2.8.2@5e53d927776b2d20e420bc2b289fa0c364a6b0bd',
  'laminas/laminas-permissions-acl' => '2.7.1@624567fe376a70e0bfb5aa8217d5afa13b9d6e61',
  'laminas/laminas-permissions-rbac' => '3.0.2@82757287735fc5c3d437aa59de65d61fe7d6b16c',
  'laminas/laminas-pimple-config' => '1.1.1@2f62d16388ff53e3f1423d633d8e309e1cade7aa',
  'laminas/laminas-progressbar' => '2.7.0@15f9e983276462f30d7d38660dc7488c6e3df34b',
  'laminas/laminas-psr7bridge' => '1.2.2@d310ce73aae9ff4723f7561539e33c79c38602fe',
  'laminas/laminas-recaptcha' => '3.2.0@f84222c958c9784db8bcc5b37a8021e5ffcb9557',
  'laminas/laminas-router' => '3.3.2@01a6905202ad41a42ba63d60260eba32b89e18c7',
  'laminas/laminas-serializer' => '2.9.1@c1c9361f114271b0736db74e0083a919081af5e0',
  'laminas/laminas-server' => '2.8.1@4aaca9174c40a2fab2e2aa77999da99f71bdd88e',
  'laminas/laminas-servicemanager' => '3.4.0@044cb8e380682563fb277ed5f6de4f690e4e6239',
  'laminas/laminas-servicemanager-di' => '1.2.1@abb2409f9dbf1b7c88f5dbe06bac726daa7c0325',
  'laminas/laminas-session' => '2.9.3@519e8966146536cd97c1cc3d59a21b095fb814d7',
  'laminas/laminas-skeleton-installer' => '0.1.7@3cde5af4ded6b5d72deaa7388b8dcff0decc77d3',
  'laminas/laminas-soap' => '2.8.0@34f91d5c4c0a78bc5689cca2d1eaf829b27edd72',
  'laminas/laminas-stdlib' => '3.2.1@2b18347625a2f06a1a485acfbc870f699dbe51c6',
  'laminas/laminas-stratigility' => '2.2.2p2@cc6f48fd9cedb446debe9c4a1710b31ff7e6a62d',
  'laminas/laminas-tag' => '2.7.1@6af061af4d7a54f3ee6ba94846c0f21ad284dc10',
  'laminas/laminas-test' => '3.4.1@b540d62ca1d3efc0813cdb50bfaf8e4abcf88426',
  'laminas/laminas-text' => '2.7.1@3601b5eacb06ed0a12f658df860cc0f9613cf4db',
  'laminas/laminas-twitter' => '3.0.4@541b4e53779a111f874d25ce13b7a30640e44d91',
  'laminas/laminas-uri' => '2.7.1@6be8ce19622f359b048ce4faebf1aa1bca73a7ff',
  'laminas/laminas-validator' => '2.13.4@93593684e70b8ed1e870cacd34ca32b0c0ace185',
  'laminas/laminas-view' => '2.11.4@3bbb2e94287383604c898284a18d2d06cf17301e',
  'laminas/laminas-xml' => '1.2.0@879cc66d1bba6a37705e98074f52a6960c220020',
  'laminas/laminas-xml2json' => '3.1.2@e5bbd99e073b8c8b05f2675640fe8b339fcf05a3',
  'laminas/laminas-xmlrpc' => '2.9.0@1461f9777ec59f6c5dcbd727e23548ea1cbe4dcc',
  'laminas/laminas-zendframework-bridge' => '1.0.3@bfbbdb6c998d50dbf69d2187cb78a5f1fa36e1e9',
  'myclabs/deep-copy' => '1.9.5@b2c28789e80a97badd14145fda39b545d83ca3ef',
  'ocramius/package-versions' => '1.8.0@421679846270a5772534828013a93be709fb13df',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'phpspec/prophecy' => 'v1.10.3@451c3cd1418cf640de218914901e51b064abb093',
  'phpunit/php-code-coverage' => '7.0.10@f1884187926fbb755a9aaf0b3836ad3165b478bf',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '8.5.3@67750516bc02f300e2742fed2f50177f8f37bedf',
  'pimple/pimple' => 'v3.3.0@e55d12f9d6a0e7f9c85992b73df1267f46279930',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.0@496a823ef742b632934724bf769560c2a5c7c44e',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/http-server-handler' => '1.0.1@aff2f80e33b7f026ec96bb42f63242dc50ffcae7',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'san/san-session-toolbar' => '1.0.12@8dcabb057041ee80c258795ca2ce1a736367e8df',
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
  'squizlabs/php_codesniffer' => '2.9.2@2acf168de78487db620ab4bc524135a13cfe6745',
  'symfony/console' => 'v3.4.39@bf60d5e606cd595391c5f82bf6b570d9573fa120',
  'symfony/debug' => 'v4.4.7@346636d2cae417992ecfd761979b2ab98b339a45',
  'symfony/dependency-injection' => 'v5.0.7@4e48dc44680d8efa357410c78093a04753196981',
  'symfony/event-dispatcher' => 'v5.0.7@24f40d95385774ed5c71dbf014edd047e2f2f3dc',
  'symfony/event-dispatcher-contracts' => 'v2.0.1@af23c2584d4577d54661c434446fb8fbed6025dd',
  'symfony/lock' => 'v5.0.7@ea855d9b50ca995fa53d2dafae336fb7c011cd8c',
  'symfony/polyfill-ctype' => 'v1.15.0@4719fa9c18b0464d399f1a63bf624b42b6fa8d14',
  'symfony/polyfill-mbstring' => 'v1.15.0@81ffd3a9c6d707be22e3012b827de1c9775fc5ac',
  'symfony/polyfill-php72' => 'v1.15.0@37b0976c78b94856543260ce09b460a7bc852747',
  'symfony/process' => 'v5.0.7@c5ca4a0fc16a0c888067d43fbcfe1f8a53d8e70e',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/var-dumper' => 'v4.4.7@5a0c2d93006131a36cf6f767d10e2ca8333b0d4a',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'true/punycode' => 'v2.1.1@a4d0c11a36dd7f4e7cd7096076cab6d3378a071e',
  'webimpress/composer-extra-dependency' => '0.2.2@31fa56391d30f03b1180c87610cbe22254780ad9',
  'webimpress/http-middleware-compatibility' => '0.1.4@8ed1c2c7523dce0035b98bc4f3a73ca9cd1d3717',
  'webimpress/safe-writer' => '2.0.1@d6e879960febb307c112538997316371f1e95b12',
  'webmozart/assert' => '1.7.0@aed98a490f9a8f78468232db345ab9cf606cf598',
  'zendframework/zendpdf' => '2.0.2@041f90c339cff63a3c4d03a28ef1ea5188059793',
  'laminas/laminas-mvc-skeleton' => 'dev-master@26b6e06b107fa40f9678593203023e0a5a693618',
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
