# NfeAccessKey

- `v::nfeAccessKey(string $accessKey)`

Validates the access key of the Brazilian electronic invoice (NFe).

```php
v::nfeAccessKey()->validate('31841136830118868211870485416765268625116906'); // true
```

***
See also:

  * [Cnh](Cnh.md)
  * [Cnpj](Cnpj.md)
  * [Cpf](Cpf.md)
