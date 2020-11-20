<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'hyperf/hyperf-skeleton';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'egulias/email-validator' => '2.1.24@ca90a3291eee1538cd48ff25163240695bd95448',
  'elasticsearch/elasticsearch' => 'v6.7.2@9ba89f905ebf699e72dacffa410331c7fecc8255',
  'fig/http-message-util' => '1.1.4@3242caa9da7221a304b8f84eb9eaddae0a7cf422',
  'guzzlehttp/guzzle' => '6.5.5@9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
  'guzzlehttp/promises' => '1.4.0@60d379c243457e073cff02bc323a2a86cb355631',
  'guzzlehttp/psr7' => '1.7.0@53330f47520498c0ae1f61f7e2c90f55690c06a3',
  'guzzlehttp/ringphp' => '1.1.1@5e2a174052995663dd68e6b5ad838afd47dd615b',
  'guzzlehttp/streams' => '3.0.0@47aaa48e27dae43d39fc1cea0ccf0d84ac1a2ba5',
  'hyperf/amqp' => 'v1.1.32@8ed84e91cafbdb062148baa9756d0f470ca97a9d',
  'hyperf/async-queue' => 'v1.1.26@f6829680ec8989340107eec366491e16edd8f72c',
  'hyperf/cache' => 'v1.1.30@086e4f20aaf12ff7060729d50c3e4f7f7293f004',
  'hyperf/command' => 'v1.1.32@7dc5734aa60748c08efc5fb8d4671f73d8a4804e',
  'hyperf/config' => 'v1.1.26@8b882c9e057544a62fda130a272938be3f9784ef',
  'hyperf/contract' => 'v1.1.32@796ba16e61dd904332dc336ae6861f397ae658be',
  'hyperf/database' => 'v1.1.32@7ab8c9b800cf4ad800f3cfdc7b3012e3b8e14dff',
  'hyperf/db-connection' => 'v1.1.26@6a66c0cc5fc8377092eff6edfeedea977fa78ce6',
  'hyperf/devtool' => 'v1.1.31@8e9e6e1c2fa43cd29abdde2545219e899d65ea44',
  'hyperf/di' => 'v1.1.29@8935c54dedd0890f2c6224ae032f8a3c22f3b2d3',
  'hyperf/dispatcher' => 'v1.1.26@0a20af0373f3a59901719ef568eb95d55eef27eb',
  'hyperf/elasticsearch' => 'v1.1.26@d4f81a1ae5ac4d1886edb417f4fc5350a2d437bb',
  'hyperf/event' => 'v1.1.26@bd9dc52c2cb99c90058a7ddc828b93777d8d92b8',
  'hyperf/exception-handler' => 'v1.1.31@17cdfb50071adfcb0c84851523033edef2b874c1',
  'hyperf/framework' => 'v1.1.27@a41468dafd35e65bed13a6daf94cff574df55ee3',
  'hyperf/guzzle' => 'v1.1.26@9cd50c250669a7e4100411adcfdc3664a9cc8b11',
  'hyperf/http-message' => 'v1.1.26@932f25bbadc03056baf631e4ce9a9e5bfbb5900e',
  'hyperf/http-server' => 'v1.1.29@e8704f7da13b3b3ece71e3b4013f4d2fd9352334',
  'hyperf/logger' => 'v1.1.26@42553fe23a883cef71cd1272f22eb3014ac314dc',
  'hyperf/memory' => 'v1.1.26@43120425a0180a6ab7223f3bdeb51326abad6c66',
  'hyperf/model-cache' => 'v1.1.28@aec608d6ab5afec5d48897c9a8803b415766321b',
  'hyperf/model-listener' => 'v1.1.26@06e1b7411660df834a9c8a53111612c3f7d0bf9e',
  'hyperf/paginator' => 'v1.1.26@80a946b58a94fb427f83232a4c990b32583379a3',
  'hyperf/pool' => 'v1.1.32@c9e6500b226403e985d3bff0cccb8f9e2b0e8173',
  'hyperf/process' => 'v1.1.26@a629e2bbec3ecb146f3f991c6c7935e86592db3a',
  'hyperf/redis' => 'v1.1.26@7778027f413aed50c59f0b95df0aa904767007a9',
  'hyperf/server' => 'v1.1.32@2c9bbc5ba7a918a82f165f3b17230ffeef4ed012',
  'hyperf/task' => 'v1.1.26@feff576be6d9c0409a0f92f19b7a75395d4fa3d9',
  'hyperf/tracer' => 'v1.1.26@8b1ff3840b8d11ff205d688f15a55c4c8911643f',
  'hyperf/translation' => 'v1.1.26@08172730bf0267d36e878571c94ecef6168a254a',
  'hyperf/utils' => 'v1.1.31@5cbe38b7c114d3384ec16dfbf8c903074b0c3ba7',
  'hyperf/validation' => 'v1.1.32@447a5cf74fc805b5def15be91231f8a2ac16dfde',
  'jcchavezs/zipkin-opentracing' => '0.1.5@565f3bed0fef52d7004b0faba2439e3cac992837',
  'jetbrains/phpstorm-stubs' => 'v2019.3@883b6facd78e01c0743b554af86fa590c2573f40',
  'laminas/laminas-mime' => '2.7.4@e45a7d856bf7b4a7b5bd00d6371f9961dc233add',
  'laminas/laminas-stdlib' => '3.2.1@2b18347625a2f06a1a485acfbc870f699dbe51c6',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'lcobucci/jwt' => '3.3.3@c1123697f6a2ec29162b82f170dd4a491f524773',
  'monolog/monolog' => '1.25.5@1817faadd1846cd08be9a49e905dc68823bc38c0',
  'nesbot/carbon' => '2.41.5@c4a9caf97cfc53adfc219043bcecf42bc663acee',
  'nikic/fast-route' => 'v1.3.0@181d480e08d9476e61381e04a71b34dc0432e812',
  'nikic/php-parser' => 'v4.10.2@658f1be311a230e0907f5dfe0213742aff0596de',
  'opentracing/opentracing' => '1.0.0-beta5@19591d4084e32eaea061eebd9448b62e5ee3ec19',
  'openzipkin/zipkin' => '1.3.6@4e49ac5f4088c52fa01ab2eb09e72e2af6d62a05',
  'php-amqplib/php-amqplib' => 'v2.12.1@0eaaa9d5d45335f4342f69603288883388c2fe21',
  'php-di/phpdoc-reader' => '2.2.1@66daff34cbd2627740ffec9469ffbac9f8c8185c',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpoption/phpoption' => '1.7.5@994ecccd8f3283ecf5ac33254543eb0ac946d525',
  'phpseclib/phpseclib' => '2.0.29@497856a8d997f640b4a516062f84228a772a48a8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/http-server-handler' => '1.0.1@aff2f80e33b7f026ec96bb42f63242dc50ffcae7',
  'psr/http-server-middleware' => '1.0.1@2296f45510945530b9dceb8bcedb5cb84d40c5f5',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'roave/better-reflection' => '4.3.0@aa017e698b47feed410721f3d20e2bacfcba59d5',
  'roave/signature' => '1.1.0@c4e8a59946bad694ab5682a76e7884a9157a8a2c',
  'symfony/console' => 'v4.4.16@20f73dd143a5815d475e0838ff867bce1eebd9d5',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/finder' => 'v4.4.16@26f63b8d4e92f2eecd90f6791a563ebb001abe31',
  'symfony/inflector' => 'v5.1.8@ba33a08d608c5b26ef768b6652876098dd3ace36',
  'symfony/polyfill-ctype' => 'v1.20.0@f4ba089a5b6366e453971d3aad5fe8e897b37f41',
  'symfony/polyfill-intl-grapheme' => 'v1.20.0@c7cf3f858ec7d70b89559d6e6eb1f7c2517d479c',
  'symfony/polyfill-intl-idn' => 'v1.20.0@3b75acd829741c768bc8b1f84eb33265e7cc5117',
  'symfony/polyfill-intl-normalizer' => 'v1.20.0@727d1096295d807c309fb01a851577302394c897',
  'symfony/polyfill-mbstring' => 'v1.20.0@39d483bdf39be819deabf04ec872eb0b2410b531',
  'symfony/polyfill-php72' => 'v1.20.0@cede45fcdfabdd6043b3592e83678e42ec69e930',
  'symfony/polyfill-php73' => 'v1.20.0@8ff431c517be11c78c48a39a66d37431e26a6bed',
  'symfony/polyfill-php80' => 'v1.20.0@e70aa8b064c5b72d3df2abd5ab1e90464ad009de',
  'symfony/property-access' => 'v4.4.16@3d97341e820c248f8dc0b6b5bf991964bda5a3ac',
  'symfony/serializer' => 'v4.4.16@2af7e86db04ee65fdf1991b17ee0b3e955c93de9',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/string' => 'v5.1.8@a97573e960303db71be0dd8fda9be3bca5e0feea',
  'symfony/translation' => 'v5.1.8@27980838fd261e04379fa91e94e81e662fe5a1b6',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'vlucas/phpdotenv' => 'v3.6.7@2065beda6cbe75e2603686907b2e45f6f3a5ad82',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'composer/semver' => '3.2.4@a02fdf930a3c1c3ed3a49b5f63859c0c20e10464',
  'composer/xdebug-handler' => '1.4.5@f28d44c286812c714741478d968104c5e604a1d4',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.2@fa587178be682efe90d005e3a322590d6ebb59a5',
  'friendsofphp/php-cs-fixer' => 'v2.16.7@4e35806a6d7d8510d6842ae932e8832363d22c87',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'hyperf/testing' => 'v1.1.28@774dd0a2c83be76495578eb00573268f6ce2dbac',
  'jean85/pretty-package-versions' => '1.5.1@a917488320c20057da87f67d0d40543dd9427f7a',
  'mockery/mockery' => '1.3.3@60fa2f67f6e4d3634bb4a45ff3171fa52215800d',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nette/bootstrap' => 'v3.0.2@67830a65b42abfb906f8e371512d336ebfb5da93',
  'nette/di' => 'v3.0.5@766e8185196a97ded4f9128db6d79a3a124b7eb6',
  'nette/finder' => 'v2.5.2@4ad2c298eb8c687dd0e74ae84206a4186eeaed50',
  'nette/neon' => 'v3.2.1@a5b3a60833d2ef55283a82d0c30b45d136b29e75',
  'nette/php-generator' => 'v3.5.1@fe54415cd22d01bee1307a608058bf131978610a',
  'nette/robot-loader' => 'v3.3.1@15c1ecd0e6e69e8d908dfc4cca7b14f3b850a96b',
  'nette/schema' => 'v1.0.2@febf71fb4052c824046f5a33f4f769a6e7fa0cb4',
  'nette/utils' => 'v3.1.3@c09937fbb24987b2a41c6022ebe84f4f1b8eec0f',
  'pdepend/pdepend' => '2.8.0@c64472f8e76ca858c79ad9a4cf1e2734b3f8cc38',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'php-cs-fixer/diff' => 'v1.3.1@dbd31aeb251639ac0b9e7e29405c1441907f5759',
  'phpmd/phpmd' => '2.9.1@ce10831d4ddc2686c1348a98069771dd314534a8',
  'phpspec/prophecy' => '1.11.1@b20034be5efcdab4fb60ca3a29cba2949aead160',
  'phpstan/phpdoc-parser' => '0.3.5@8c4ef2aefd9788238897b678a985e1d5c8df6db4',
  'phpstan/phpstan' => '0.11.20@938dcc03a005280e1a9587ec7684345bff06ebfc',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '7.5.20@9467db479d1b0487c99733bb1e7944d32deded2c',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'swoft/swoole-ide-helper' => 'v4.4.8@dfbe372cca6baccd362bc276aa07c5d65b2c1b36',
  'symfony/config' => 'v5.1.8@11baeefa4c179d6908655a7b6be728f62367c193',
  'symfony/dependency-injection' => 'v5.1.8@829ca6bceaf68036a123a13a979f3c89289eae78',
  'symfony/event-dispatcher' => 'v4.4.16@4204f13d2d0b7ad09454f221bb2195fccdf1fe98',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/filesystem' => 'v5.1.8@df08650ea7aee2d925380069c131a66124d79177',
  'symfony/options-resolver' => 'v5.1.8@c6a02905e4ffc7a1498e8ee019db2b477cd1cc02',
  'symfony/polyfill-php70' => 'v1.20.0@5f03a781d984aae42cebd18e7912fa80f02ee644',
  'symfony/process' => 'v5.1.8@f00872c3f6804150d6a0f73b4151daab96248101',
  'symfony/stopwatch' => 'v5.1.8@3d9f57c89011f0266e6b1d469e5c0110513859d5',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'hyperf/hyperf-skeleton' => 'dev-master@c00621677663f5c65b56fbc1ff4b35473e44bd3a',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
