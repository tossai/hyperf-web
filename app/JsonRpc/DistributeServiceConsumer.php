<?php

namespace App\JsonRpc;

use Hyperf\RpcClient\AbstractServiceClient;

class DistributeServiceConsumer extends AbstractServiceClient implements DistributeServiceInterface
{
    /**
     * 定义对应服务提供者的服务名称
     * @var string
     */
    protected $serviceName = 'DistributeService';
    /**
     * 定义对应服务提供者的服务协议
     * @var string
     */
    protected $protocol = 'jsonrpc-http';

    public function add(int $a, int $b): int
    {
        return $this->__request(__FUNCTION__, compact('a', 'b'));
    }
}