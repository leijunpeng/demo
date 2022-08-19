<?php


namespace Leijunpeng\Demo\Http\Parser;


use Illuminate\Http\Request;

class Parser
{

    /**
     * @var array
     */
    private $chain;

    /**
     * @var Request
     */
    protected $request;

    /**
     * Parser constructor.
     * @param Request $request
     * @param array $chain
     */
    public function __construct(Request $request, array $chain = [])
    {
        $this->request = $request;
        $this->chain = $chain;
    }

    public function getChain()
    {
        return $this->chain;
    }

    /**
     * @param array $chain
     * @return $this
     */
    public function setChain(array $chain)
    {
        $this->chain = $chain;

        return $this;
    }

    /**
     * @param array $chain
     *
     * @return $this
     */
    public function setChainOrder(array $chain)
    {
        return $this->setChain($chain);
    }

    /**
     * @return mixed
     */
    public function parseToken()
    {
        foreach ($this->chain as $parser) {
            if ($response = $parser->parse($this->request)) {
                return $response;
            }
        }
    }

    /**
     * @return bool
     */
    public function hasToken()
    {
        return $this->parseToken() !== null;
    }

    /**
     *
     * @param Request $request
     *
     * @return $this
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;

        return $this;
    }
}
