<?php

/**
 * @see       https://github.com/laminas/laminas-oauth for the canonical source repository
 * @copyright https://github.com/laminas/laminas-oauth/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-oauth/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\OAuth\Config;

use Laminas\OAuth\Config as OAuthConfig;
use Laminas\OAuth\Exception;
use Laminas\OAuth\OAuth;
use Laminas\OAuth\Token\TokenInterface;
use Laminas\Stdlib\ArrayUtils;
use Laminas\Uri;
use Traversable;

/**
 * @category   Laminas
 * @package    Laminas_OAuth
 */
class StandardConfig implements ConfigInterface
{
    /**
     * Signature method used when signing all parameters for an HTTP request
     *
     * @var string
     */
    protected $_signatureMethod = 'HMAC-SHA1';

    /**
     * Three request schemes are defined by OAuth, of which passing
     * all OAuth parameters by Header is preferred. The other two are
     * POST Body and Query String.
     *
     * @var string
     */
    protected $_requestScheme = OAuth::REQUEST_SCHEME_HEADER;

    /**
     * Preferred request Method - one of GET or POST - which Laminas_OAuth
     * will enforce as standard throughout the library. Generally a default
     * of POST works fine unless a Provider specifically requires otherwise.
     *
     * @var string
     */
    protected $_requestMethod = OAuth::POST;

    /**
     * OAuth Version; This defaults to 1.0 - Must not be changed!
     *
     * @var string
     */
    protected $_version = '1.0';

    /**
     * This optional value is used to define where the user is redirected to
     * after authorizing a Request Token from an OAuth Providers website.
     * It's optional since a Provider may ask for this to be defined in advance
     * when registering a new application for a Consumer Key.
     *
     * @var string
     */
    protected $_callbackUrl = null;

    /**
     * The URL root to append default OAuth endpoint paths.
     *
     * @var string
     */
    protected $_siteUrl = null;

    /**
     * The URL to which requests for a Request Token should be directed.
     * When absent, assumed siteUrl+'/request_token'
     *
     * @var string
     */
    protected $_requestTokenUrl = null;

    /**
     * The URL to which requests for an Access Token should be directed.
     * When absent, assumed siteUrl+'/access_token'
     *
     * @var string
     */
    protected $_accessTokenUrl = null;

    /**
     * The URL to which users should be redirected to authorize a Request Token.
     * When absent, assumed siteUrl+'/authorize'
     *
     * @var string
     */
    protected $_authorizeUrl = null;

    /**
     * An OAuth application's Consumer Key.
     *
     * @var string
     */
    protected $_consumerKey = null;

    /**
     * Every Consumer Key has a Consumer Secret unless you're in RSA-land.
     *
     * @var string
     */
    protected $_consumerSecret = null;

    /**
     * If relevant, a PEM encoded RSA private key encapsulated as a
     * Laminas_Crypt_Rsa Key
     *
     * @var \Laminas\Crypt\PublicKey\Rsa\PrivateKey
     */
    protected $_rsaPrivateKey = null;

    /**
     * If relevant, a PEM encoded RSA public key encapsulated as a
     * Laminas_Crypt_Rsa Key
     *
     * @var \Laminas\Crypt\PublicKey\Rsa\PublicKey
     */
    protected $_rsaPublicKey = null;

    /**
     * Generally this will nearly always be an Access Token represented as a
     * Laminas_OAuth_Token_Access object.
     *
     * @var \Laminas\OAuth\Token\TokenInterface
     */
    protected $_token = null;

    /**
     * Constructor; create a new object with an optional array|Traversable
     * instance containing initialising options.
     *
     * @param  array|Traversable $options
     */
    public function __construct($options = null)
    {
        if ($options instanceof Traversable) {
            $options = ArrayUtils::iteratorToArray($options);
        }
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }

    /**
     * Parse option array and setup options using their
     * relevant mutators.
     *
     * @param  array $options
     * @return StandardConfig
     */
    public function setOptions(array $options)
    {
        foreach ($options as $key => $value) {
            switch ($key) {
                case 'consumerKey':
                    $this->setConsumerKey($value);
                    break;
                case 'consumerSecret':
                    $this->setConsumerSecret($value);
                    break;
                case 'token':
                    $this->setToken($value);
                    break;
                case 'signatureMethod':
                    $this->setSignatureMethod($value);
                    break;
                case 'version':
                    $this->setVersion($value);
                    break;
                case 'callbackUrl':
                    $this->setCallbackUrl($value);
                    break;
                case 'siteUrl':
                    $this->setSiteUrl($value);
                    break;
                case 'requestTokenUrl':
                    $this->setRequestTokenUrl($value);
                    break;
                case 'accessTokenUrl':
                    $this->setAccessTokenUrl($value);
                    break;
                case 'userAuthorizationUrl':
                    $this->setUserAuthorizationUrl($value);
                    break;
                case 'authorizeUrl':
                    $this->setAuthorizeUrl($value);
                    break;
                case 'requestMethod':
                    $this->setRequestMethod($value);
                    break;
                case 'requestScheme':
                    $this->setRequestScheme($value);
                    break;
                case 'rsaPrivateKey':
                    $this->setRsaPrivateKey($value);
                    break;
                case 'rsaPublicKey':
                    $this->setRsaPublicKey($value);
                    break;
            }
        }
        if (isset($options['requestScheme'])) {
            $this->setRequestScheme($options['requestScheme']);
        }

        return $this;
    }

    /**
     * Set consumer key
     *
     * @param  string $key
     * @return StandardConfig
     */
    public function setConsumerKey($key)
    {
        $this->_consumerKey = $key;
        return $this;
    }

    /**
     * Get consumer key
     *
     * @return string
     */
    public function getConsumerKey()
    {
        return $this->_consumerKey;
    }

    /**
     * Set consumer secret
     *
     * @param  string $secret
     * @return StandardConfig
     */
    public function setConsumerSecret($secret)
    {
        $this->_consumerSecret = $secret;
        return $this;
    }

    /**
     * Get consumer secret
     *
     * Returns RSA private key if set; otherwise, returns any previously set
     * consumer secret.
     *
     * @return string
     */
    public function getConsumerSecret()
    {
        if ($this->_rsaPrivateKey !== null) {
            return $this->_rsaPrivateKey;
        }
        return $this->_consumerSecret;
    }

    /**
     * Set signature method
     *
     * @param  string $method
     * @return StandardConfig
     * @throws Exception\InvalidArgumentException if unsupported signature method specified
     */
    public function setSignatureMethod($method)
    {
        $method = strtoupper($method);
        if (!in_array($method, array(
                'HMAC-SHA1', 'HMAC-SHA256', 'RSA-SHA1', 'PLAINTEXT'
            ))
        ) {
            throw new Exception\InvalidArgumentException('Unsupported signature method: '
                . $method
                . '. Supported are HMAC-SHA1, RSA-SHA1, PLAINTEXT and HMAC-SHA256');
        }
        $this->_signatureMethod = $method;
        return $this;
    }

    /**
     * Get signature method
     *
     * @return string
     */
    public function getSignatureMethod()
    {
        return $this->_signatureMethod;
    }

    /**
     * Set request scheme
     *
     * @param  string $scheme
     * @return StandardConfig
     * @throws Exception\InvalidArgumentException if invalid scheme specified, or if POSTBODY set when request method of GET is specified
     */
    public function setRequestScheme($scheme)
    {
        $scheme = strtolower($scheme);
        if (!in_array($scheme, array(
                OAuth::REQUEST_SCHEME_HEADER,
                OAuth::REQUEST_SCHEME_POSTBODY,
                OAuth::REQUEST_SCHEME_QUERYSTRING,
            ))
        ) {
            throw new Exception\InvalidArgumentException(
                '\'' . $scheme . '\' is an unsupported request scheme'
            );
        }
        if ($scheme == OAuth::REQUEST_SCHEME_POSTBODY
            && $this->getRequestMethod() == OAuth::GET
        ) {
            throw new Exception\InvalidArgumentException(
                'Cannot set POSTBODY request method if HTTP method set to GET'
            );
        }
        $this->_requestScheme = $scheme;
        return $this;
    }

    /**
     * Get request scheme
     *
     * @return string
     */
    public function getRequestScheme()
    {
        return $this->_requestScheme;
    }

    /**
     * Set version
     *
     * @param  string $version
     * @return StandardConfig
     */
    public function setVersion($version)
    {
        $this->_version = $version;
        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->_version;
    }

    /**
     * Set callback URL
     *
     * @param  string $url Valid URI or Out-Of-Band constant 'oob'
     * @return StandardConfig
     * @throws Exception\InvalidArgumentException for invalid URLs
     */
    public function setCallbackUrl($url)
    {
        if ($url !== 'oob') {
            $this->_validateUrl($url);
        }
        $this->_callbackUrl = $url;
        return $this;
    }

    /**
     * Get callback URL
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->_callbackUrl;
    }

    /**
     * Set site URL
     *
     * @param  string $url
     * @return StandardConfig
     * @throws Exception\InvalidArgumentException for invalid URLs
     */
    public function setSiteUrl($url)
    {
        $this->_validateUrl($url);
        $this->_siteUrl = $url;
        return $this;
    }

    /**
     * Get site URL
     *
     * @return string
     */
    public function getSiteUrl()
    {
        return $this->_siteUrl;
    }

    /**
     * Set request token URL
     *
     * @param  string $url
     * @return StandardConfig
     * @throws Exception\InvalidArgumentException for invalid URLs
     */
    public function setRequestTokenUrl($url)
    {
        $this->_validateUrl($url);
        $this->_requestTokenUrl = rtrim($url, '/');
        return $this;
    }

    /**
     * Get request token URL
     *
     * If no request token URL has been set, but a site URL has, returns the
     * site URL with the string "/request_token" appended.
     *
     * @return string
     */
    public function getRequestTokenUrl()
    {
        if (!$this->_requestTokenUrl && $this->_siteUrl) {
            return rtrim($this->_siteUrl, '/') . '/request_token';
        }
        return $this->_requestTokenUrl;
    }

    /**
     * Set access token URL
     *
     * @param  string $url
     * @return StandardConfig
     * @throws Exception\InvalidArgumentException for invalid URLs
     */
    public function setAccessTokenUrl($url)
    {
        $this->_validateUrl($url);
        $this->_accessTokenUrl = rtrim($url, '/');
        return $this;
    }

    /**
     * Get access token URL
     *
     * If no access token URL has been set, but a site URL has, returns the
     * site URL with the string "/access_token" appended.
     *
     * @return string
     */
    public function getAccessTokenUrl()
    {
        if (!$this->_accessTokenUrl && $this->_siteUrl) {
            return rtrim($this->_siteUrl, '/') . '/access_token';
        }
        return $this->_accessTokenUrl;
    }

    /**
     * Set user authorization URL
     *
     * @param  string $url
     * @return StandardConfig
     * @throws Exception\InvalidArgumentException for invalid URLs
     */
    public function setUserAuthorizationUrl($url)
    {
        return $this->setAuthorizeUrl($url);
    }

    /**
     * Set authorization URL
     *
     * @param  string $url
     * @return StandardConfig
     * @throws Exception\InvalidArgumentException for invalid URLs
     */
    public function setAuthorizeUrl($url)
    {
        $this->_validateUrl($url);
        $this->_authorizeUrl = rtrim($url, '/');
        return $this;
    }

    /**
     * Get user authorization URL
     *
     * @return string
     */
    public function getUserAuthorizationUrl()
    {
        return $this->getAuthorizeUrl();
    }

    /**
     * Get authorization URL
     *
     * If no authorization URL has been set, but a site URL has, returns the
     * site URL with the string "/authorize" appended.
     *
     * @return string
     */
    public function getAuthorizeUrl()
    {
        if (!$this->_authorizeUrl && $this->_siteUrl) {
            return rtrim($this->_siteUrl, '/') . '/authorize';
        }
        return $this->_authorizeUrl;
    }

    /**
     * Set request method
     *
     * @param  string $method
     * @return StandardConfig
     * @throws Exception\InvalidArgumentException for invalid request methods
     */
    public function setRequestMethod($method)
    {
        $method = strtoupper($method);
        if (!in_array($method, array(
                OAuth::GET,
                OAuth::POST,
                OAuth::PUT,
                OAuth::DELETE,
            ))
        ) {
            throw new Exception\InvalidArgumentException('Invalid method: ' . $method);
        }
        $this->_requestMethod = $method;
        return $this;
    }

    /**
     * Get request method
     *
     * @return string
     */
    public function getRequestMethod()
    {
        return $this->_requestMethod;
    }

    /**
     * Set RSA public key
     *
     * @param  \Laminas\Crypt\PublicKey\Rsa\PublicKey $key
     * @return StandardConfig
     */
    public function setRsaPublicKey(\Laminas\Crypt\PublicKey\Rsa\PublicKey $key)
    {
        $this->_rsaPublicKey = $key;
        return $this;
    }

    /**
     * Get RSA public key
     *
     * @return \Laminas\Crypt\PublicKey\Rsa\PublicKey
     */
    public function getRsaPublicKey()
    {
        return $this->_rsaPublicKey;
    }

    /**
     * Set RSA private key
     *
     * @param  \Laminas\Crypt\PublicKey\Rsa\PrivateKey $key
     * @return StandardConfig
     */
    public function setRsaPrivateKey(\Laminas\Crypt\PublicKey\Rsa\PrivateKey $key)
    {
        $this->_rsaPrivateKey = $key;
        return $this;
    }

    /**
     * Get RSA private key
     *
     * @return \Laminas\Crypt\PublicKey\Rsa\PrivateKey
     */
    public function getRsaPrivateKey()
    {
        return $this->_rsaPrivateKey;
    }

    /**
     * Set OAuth token
     *
     * @param  TokenInterface $token
     * @return StandardConfig
     */
    public function setToken(TokenInterface $token)
    {
        $this->_token = $token;
        return $this;
    }

    /**
     * Get OAuth token
     *
     * @return TokenInterface
     */
    public function getToken()
    {
        return $this->_token;
    }

    /**
     * Determine if a given URL is valid
     *
     * @param  string $url
     * @return void
     * @throws Exception\InvalidArgumentException
     */
    protected function _validateUrl($url)
    {
        $uri = Uri\UriFactory::factory($url);
        if (!$uri->isValid()) {
            throw new Exception\InvalidArgumentException(sprintf("'%s' is not a valid URI", $url));
        } elseif (!in_array($uri->getScheme(), array('http', 'https'))) {
            throw new Exception\InvalidArgumentException(sprintf("'%s' is not a valid URI", $url));
        }
    }
}
