一个静态代理类库,方便静态调用

## install

`composer require ysandreew/facade`

## usage

你只需要做的就是实现的`getFacadeAccessor()`方法中返回一个需要代理的实例,然后通过`register()`注册他

```php
<?php
use Ysandreew\Facade\Facade;
class Person{
    public function echo(string $name)
    {
        echo "Hello {$name}"; 
    }
}

class PersonFacade extends Facade{
    public function getFacadeAccessor()
    {
        return new Person();
    }
}

PersonFacade::register();
PersonFacade::echo("Lee");
```



