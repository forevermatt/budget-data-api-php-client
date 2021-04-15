Feature: PHP client for Budget Data API

  Scenario Outline: Calling the various methods
    Given I have a Budget Data API Client
    When I use it to <doSomething> <toSomething>
    Then no exception will have been thrown

    Examples:
      | doSomething | toSomething |
      | list        | accounts    |
      | add         | an account  |
