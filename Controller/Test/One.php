<?php

namespace Inchoo\Sample02\Controller\Test;

class One extends \Magento\Framework\App\Action\Action
{
    protected $dummy;
    protected $b;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Inchoo\Sample02\Model\DummyInterface $dummy,
        \Inchoo\Sample02\Model\B $b
    ) {
        parent::__construct($context);
        $this->dummy = $dummy;
        $this->b = $b;
    }

    public function execute()
    {
        var_dump($this->dummy);
        var_dump($this->b);
    }
}
