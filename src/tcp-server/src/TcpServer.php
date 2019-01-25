<?php

namespace Swoft\Tcp\Server;

use Swoft\Bean\Annotation\Mapping\Bean;
use Swoft\Server\Server;

/**
 * Class TcpServer
 *
 * @Bean("tcpServer")
 *
 * @since 2.0
 */
class TcpServer extends Server
{
    /**
     * Start server
     */
    public function start(): void
    {
        $this->swooleServer = new \Co\Server($this->host, $this->port, $this->mode, $this->type);
        $this->startSwoole();
    }
}