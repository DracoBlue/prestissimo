<?php
/*
 * hirak/prestissimo
 * @author Hiraku NAKANO
 * @license MIT https://github.com/hirak/prestissimo
 */
namespace Hirak\Prestissimo\Aspects;

use Composer\IO;

/**
 * Simple Container for http-get request
 * GitHub edition
 */
class GitHubRequest extends HttpGetRequest
{
    const TOKEN_LABEL = 'github-token';

    public function promptAuth(HttpGetResponse $res, IO\IOInterface $io)
    {
        $util = new \Composer\Util\GitHub($io, $this->config, null);
        $this->promptAuthWithUtil(404, $util, $res, $io);
    }
}
