# BLADE E FRAMWORKS JAVASCRIPT
Como muitos frameworks JavaScript também usam chaves "encurvadas" para indicar que uma determinada expressão deve ser exibida no navegador, 
você pode usar o @símbolo para informar ao mecanismo de renderização do Blade que uma expressão deve permanecer intocada. Por exemplo:
Linha unica:

```
Hello, @{{ name }}.
```
varias linhas de variaveis

```
@verbatim
{{ titlejs }}
    <div class="container">
        Hello, {{ name }}.
    </div>
@endverbatim
```

