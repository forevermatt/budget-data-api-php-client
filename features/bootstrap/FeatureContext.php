<?php

use Behat\Behat\Context\Context;
use BudgetData\ApiClient\BudgetDataApiClient;
use BudgetData\ApiClient\Model\Account;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /** @var BudgetDataApiClient */
    private $client;

    /**
     * @Given I have a Budget Data API Client
     */
    public function iHaveABudgetDataApiClient()
    {
        $this->client = new BudgetDataApiClient('http://httpbin.org/anything');
    }

    /**
     * @When I use it to list accounts
     */
    public function iUseItToListAccounts()
    {
        $this->result = $this->client->accountsGet();
    }

    /**
     * @Then no exception will have been thrown
     */
    public function noExceptionWillHaveBeenThrown()
    {
        echo 'Result: ' . json_encode($this->result, JSON_PRETTY_PRINT);
    }

    /**
     * @When I use it to add an account
     */
    public function iUseItToAddAnAccount()
    {
        $this->result = $this->client->accountPost(new Account([
            'name' => 'Test Card',
            'uuid' => 'c0dc4d95-7d99-4cff-81ba-44b8a4c55815',
        ]));
    }
}
