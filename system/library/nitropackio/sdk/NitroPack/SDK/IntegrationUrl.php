<?php
namespace NitroPack\SDK;

class IntegrationUrl {
    const INTEGRATION_BASE = 'https://nitropack.io/integration';
    private $url;

    public function __construct($widget, $siteId, $siteSecret, $version = null) {
        $timestamp = time();
        $query = array(
            "site_id" => $siteId,
            "timestamp" => $timestamp,
        );
        $nonce = $this->getNonce($query, $siteSecret);
        $query["nonce"] = $nonce;
        
        if ($version !== null) {
            $query["ver"] = $version;
        }

        $this->url = self::INTEGRATION_BASE . "/$widget?" . http_build_query($query);
    }

    public function getNonce($query, $secret) {
        return hash_hmac("sha256", http_build_query($query), $secret);
    }

    public function getUrl() {
        return $this->url;
    }
}
