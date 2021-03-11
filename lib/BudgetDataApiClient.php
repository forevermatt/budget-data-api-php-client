<?php

namespace BudgetData\ApiClient;

use BudgetData\ApiClient\Api\DefaultApi;

class BudgetDataApiClient
{
    /** @var DefaultApi */
    private $defaultApi;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(string $host)
    {
        $config = new Configuration();
        $config->setHost($host);
        $this->defaultApi = new DefaultApi(null, $config);
    }

    /**
     * Operation accountsGet
     *
     * List the current user's (financial) Accounts
     *
     *
     * @throws \BudgetData\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BudgetData\ApiClient\Model\Account[]
     */
    public function accountsGet()
    {
        return $this->defaultApi->accountsGet();
    }

    /**
     * Operation accountsPost
     *
     * Add an account
     *
     * @param  \BudgetData\ApiClient\Model\Account $body body (required)
     *
     * @throws \BudgetData\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function accountsPost($body)
    {
        return $this->defaultApi->accountsPost($body);
    }
}
