# Upgrade

## 3.4.0

`Taylix\MjmlBundle\SwiftMailer\MjmlPlugin` is deprecated and will be removed in v4, you must copy and paste the class in your project.

## 3.0.0

The class `Taylix\MjmlBundle\Mjml` is replaced with `Taylix\MjmlBundle\Renderer\BinaryRenderer`.

### Configuration

Most of the options are now in `mjml.options`:

Before:

```
# config/packages/mjml.yaml
mjml:
    bin: 'mjml'
    mimify: true
```

After:


```
# config/packages/mjml.yaml
mjml:
  renderer: binary
  options:
    binary: 'mjml'
    minify: true
```

### Services

The service `@Taylix\MjmlBundle\Mjml` no longer exists, you must use `@mjml` or `@Taylix\MjmlBundle\Renderer\RendererInterface`.
