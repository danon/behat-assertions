Comparison of assertion libraries, to be used in acceptance tests written in [
`behat/behat`](https://github.com/Behat/Behat).

## Currently considered libraries:

- `phpunit/phpunit`
- `webmozart/assert`
- `beberlei/assert`
- `letsdrink/ouzo-goodies`


## Problems

### Phpunit configuration

Currently, `phpunit/phpunit` and `letsdrink/ouzo-goodies` rely on phpunit,
and fail due to phpunit configuration error.

### Comparison of values

Currently, `webmozart/assert`, when comparing arrays, will return:
```
Expected a value identical to array. Got: array
```
Same goes for `beberlei/assert`:
```
Value "<ARRAY>" is not the same as expected value "<ARRAY>".
```

However, `phpunit/phpunit` and `letsdrink/ouzo-goodies` will show:
```
Failed asserting that two arrays are equal.
```

because they output `---Expected`/`+++Actual` diff, that can be presented in multiple
lines with IDE support. Not sure we're supposed to output multiple lines in `behat`/`behat`?
