# Turma de Sábado: Exercícios básicos de PHP 8.5

Exercícios sobre variáveis, `echo`, concatenação, aspas, operações aritméticas e arrays, **sem usar funções do PHP**.

As soluções estão em [`gabarito.php`](gabarito.php). Para rodar:

```bash
php gabarito.php
```

---

## 1. Variáveis: criar e modificar

**Ex. 1.1** Crie as variáveis `$nome` (string), `$idade` (int), `$altura` (float) e `$cidade` (string). Mostre todas numa frase com `echo`.

**Ex. 1.2** Crie `$pontos = 10`. Depois:
- some 5 com `+=`
- multiplique por 2 com `*=`
- diminua 1 com `--`
- mostre o valor final (deve dar 29).

**Ex. 1.3** Troque os valores de `$a = "maçã"` e `$b = "banana"` usando uma variável auxiliar `$aux`. Depois faça a troca sem auxiliar: `[$a, $b] = [$b, $a];`

**Ex. 1.4** Crie a constante `TAXA` com `const TAXA = 0.15;`. Tente mudar o valor dela e veja qual erro aparece.

---

## 2. `echo` e concatenação com `.`

**Ex. 2.1** Com `$produto = "Teclado"` e `$preco = 149.90`, mostre a frase abaixo usando **só o operador `.`**:
```
O produto Teclado custa R$ 149.9
```

**Ex. 2.2** Monte a string `$frase` aos poucos usando `.=`:
```php
$frase = "PHP";
// adicione " é", depois " muito", depois " legal!"
```

**Ex. 2.3** Use `echo` com vários argumentos separados por vírgula (`echo $a, " ", $b;`) e compare com a concatenação (`echo $a . " " . $b;`).

---

## 3. Aspas duplas `""` × aspas simples `''`

**Ex. 3.1** Com `$cidade = "Recife";`, rode e anote o que cada linha mostra:
```php
echo "Eu moro em $cidade\n";
echo 'Eu moro em $cidade\n';
echo "Eu moro em {$cidade}!\n";
echo 'Eu moro em ' . $cidade . "\n";
```
**Pergunta:** por que a segunda linha mostra `$cidade` e `\n` literalmente?

**Ex. 3.2** Com `$usuario = ['nome' => 'Ana', 'idade' => 22];`, mostre `Ana tem 22 anos` usando aspas duplas com `{}`.

**Ex. 3.3** Mostre exatamente este texto, uma vez com aspas simples e outra com aspas duplas:
```
Ele disse: "It's PHP!" e custou $5
```
(Dica: escape os caracteres com `\`.)

**Ex. 3.4 (desafio)** Por que `"$frutaS"` dá aviso de variável indefinida, e `"{$fruta}S"` funciona?

---

## 4. Operações aritméticas

**Ex. 4.1** Com `$x = 17` e `$y = 5`, mostre o resultado de `+`, `-`, `*`, `/`, `%` (resto) e `**` (potência).

**Ex. 4.2** Calcule a média de três notas (7.5, 8.0 e 6.5) e mostre o resultado.

**Ex. 4.3** Converta 98.6 °F para Celsius com a fórmula `C = (F - 32) * 5 / 9`.

**Ex. 4.4** Calcule o preço final de um produto de R$ 200 com 10% de desconto.

**Ex. 4.5** Teste a precedência: qual a diferença entre `2 + 3 * 4` e `(2 + 3) * 4`? E quanto dá `-2 ** 2`?

**Ex. 4.6** Mostre a diferença entre `$i++` e `++$i` com `echo`.

---

## 5. Arrays: criar e modificar

**Ex. 5.1** Crie o array indexado `$frutas = ["maçã", "banana", "uva"]`. Depois:
- adicione `"manga"` no final com `$frutas[] = ...`
- troque a fruta do índice 1 por `"pera"`
- mostre cada fruta com `echo $frutas[0]`, `$frutas[1]` etc.

**Ex. 5.2** Crie o array associativo `$aluno` com as chaves `nome`, `idade` e `curso`. Depois:
- mude a idade
- adicione a chave `email`
- mostre todos os dados numa frase com aspas duplas e `{}`.

**Ex. 5.3** Crie uma matriz `$turma` com 2 alunos (cada um é um array associativo com `nome` e `nota`). Mostre o nome do segundo aluno e a média das duas notas.

**Ex. 5.4** Crie `$numeros = [10, 20, 30]`. Some 5 ao primeiro com `+=`, dobre o segundo com `*=` e mostre a soma dos três.

---

## Próxima lista

[Lista 2: problemas práticos (IMC, caixa eletrônico, carrinho de compras...)](lista-2/README.md)
