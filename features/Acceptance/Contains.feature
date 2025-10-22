Feature: Assert array contains
  In order to make sure element is inside an array,
  as a developer test-driving the implementation,
  I need to see the element and the array.

  Scenario: Failing assertion shows diff (phpunit)
    When a test fails due to unexpected result
    Then the phpunit assertion returns the item and the array

  Scenario: Failing assertion shows diff (webmozart)
    When a test fails due to unexpected result
    Then the webmozart assertion returns the item and the array

  Scenario: Failing assertion shows diff (beberlei)
    When a test fails due to unexpected result
    Then the beberlei assertion returns the item and the array
