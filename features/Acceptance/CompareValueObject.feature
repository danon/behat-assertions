Feature: Assertion compare value objects
  In order to compare value objects,
  as a developer test-driving the implementation,
  I need to see the value object and the array.

  Scenario: Failing assertion shows diff (phpunit)
    When a test fails due to unexpected result
    Then the phpunit assertion returns the vo and the array

  Scenario: Failing assertion shows diff (webmozart)
    When a test fails due to unexpected result
    Then the webmozart assertion returns the vo and the array

  Scenario: Failing assertion shows diff (beberlei)
    When a test fails due to unexpected result
    Then the beberlei assertion returns the vo and the array
