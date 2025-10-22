Feature: Assertions example
  In order to compare expected and actual values,
  as a developer test-driving the implementation,
  I need to see the difference of values in the assertion.

  Scenario: Assertion equals
    When a test fails due to unexpected result
    Then the assertion returns the difference the expected and the actual

  Scenario: Assertion array contains
    When a test fails due to unexpected result
    Then the assertion returns the item and the array

  Scenario: Compares value objects
    When a test fails due to unexpected result
    Then the assertion compares the value object and the array
