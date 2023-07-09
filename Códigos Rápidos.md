# BLADE E FRAMWORKS JAVASCRIPT
Como muitos frameworks JavaScript também usam chaves "chaves duplas" para indicar que uma determinada expressão deve ser exibida no navegador, 
você pode usar o símbolo @ para informar ao mecanismo de renderização do Blade que uma expressão deve permanecer intocada. Por exemplo:
<br>
Linha unica:

```
Hello, @{{ name }}.
```
<br>

varias linhas de variaveis

```
@verbatim
{{ titlejs }}
    <div class="container">
        Hello, {{ name }}.
    </div>
@endverbatim
```

