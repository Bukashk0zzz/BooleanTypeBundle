# Symfony BooleanType Bundle

[![Build Status](https://img.shields.io/scrutinizer/build/g/Bukashk0zzz/BooleanTypeBundle.svg?style=flat-square)](https://travis-ci.org/Bukashk0zzz/BooleanTypeBundle)
[![Code Coverage](https://img.shields.io/codecov/c/github/Bukashk0zzz/BooleanTypeBundle.svg?style=flat-square)](https://codecov.io/github/Bukashk0zzz/BooleanTypeBundle)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/Bukashk0zzz/BooleanTypeBundle.svg?style=flat-square)](https://scrutinizer-ci.com/g/Bukashk0zzz/BooleanTypeBundle/?branch=master)
[![License](https://img.shields.io/packagist/l/Bukashk0zzz/booleantype-bundle.svg?style=flat-square)](https://packagist.org/packages/Bukashk0zzz/booleantype-bundle)
[![Latest Stable Version](https://img.shields.io/packagist/v/Bukashk0zzz/booleantype-bundle.svg?style=flat-square)](https://packagist.org/packages/Bukashk0zzz/booleantype-bundle)
[![Total Downloads](https://img.shields.io/packagist/dt/Bukashk0zzz/booleantype-bundle.svg?style=flat-square)](https://packagist.org/packages/Bukashk0zzz/booleantype-bundle)


About
-----

A simple Symfony bundle that adds boolean form field type.

Installation Symfony Flex
------------

```bash
composer config extra.symfony.allow-contrib true
composer require bukashk0zzz/booleantype-bundle
```

Installation without Symfony Flex
------------

```bash
composer require bukashk0zzz/booleantype-bundle
```

Add the bundle to `app/AppKernel.php`

```php
$bundles = array(
	// ... other bundles
	new Bukashk0zzz\BooleanTypeBundle\Bukashk0zzzBooleanTypeBundle(),
);
```

Configuration
-------------

Not needed.


Usage
-----

Inside a FormType:

```php
class AccountProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameFirst', TextType::class, ['label' => 'First Name'])
            ->add('nameLast', TextType::class, ['label' => 'Last Name'])
            ->add('active', BooleanType::class, [
                'label' => 'User active?',
                'required' => false,
            ])
        ;
    }
}
```

Copyright / License
-------------------

See [LICENSE](https://github.com/bukashk0zzz/BooleanTypeBundle/blob/master/LICENSE)
