Feature: Assert equals
  In order to compare expected and actual values,
  as a developer test-driving the implementation,
  I need to see the difference of values in the assertion.

  Scenario: Failing assertion shows diff (phpunit)
    When a test fails due to unexpected result
    Then the phpunit assertion returns the difference of values

  Scenario: Failing assertion shows diff (webmozart)
    When a test fails due to unexpected result
    Then the webmozart assertion returns the difference of values

  Scenario: Failing assertion shows diff (beberlei)
    When a test fails due to unexpected result
    Then the beberlei assertion returns the difference of values
