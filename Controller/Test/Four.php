<?php


namespace Inchoo\Sample02\Controller\Test;


use Magento\Framework\App\Action\Context;
use Inchoo\Sample02\Model\BFactory;

class Four extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Inchoo\Sample02\Model\BFactory
     */
    protected $bFactory;

    /**
     * BFactory constructor.
     * @param Context $context
     * @param BFactory $bFactory
     */
    public function __construct(Context $context, BFactory $bFactory)
    {
        parent::__construct($context);
        $this->bFactory = $bFactory;
    }

    public function execute()
    {
        $b = $this->bFactory->create();
        var_dump($b);
    }
}
