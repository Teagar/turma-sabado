# Lista 2: Problemas práticos em PHP 8.5

Mesmas regras da lista 1: **sem funções do PHP**. Use só variáveis, `echo`, strings, operadores aritméticos e arrays.

Truques que você vai precisar:
- `(int) $x` corta as casas decimais: `(int) 7.9` dá `7`.
- `%` dá o resto da divisão: `387 % 100` dá `87`.
- Para arredondar com 2 casas: `(int) ($x * 100 + 0.5) / 100`.

As soluções estão em [`gabarito.php`](gabarito.php).

---

### 1. Calculadora de IMC
Com `$nome`, `$peso` (kg) e `$altura` (m), calcule o IMC (`peso / altura²`) e mostre:
```
Paciente: Marina
Peso: 70 kg | Altura: 1.75 m
IMC: 22.86
Faixa de peso ideal: 56.7 kg a 76.3 kg
```
A faixa ideal vai de `18.5 × altura²` até `24.9 × altura²`, com 1 casa decimal.

**Desafio:** pesquise `if / elseif / else` e mostre a classificação: abaixo de 18.5 é *Abaixo do peso*, abaixo de 25 é *Peso normal*, abaixo de 30 é *Sobrepeso* e acima disso é *Obesidade*.

### 2. Dividindo a conta do restaurante
Guarde o consumo num array associativo (`'pizza' => 89.90`, `'refrigerante' => 12.00`, `'suco' => 9.50`, `'sobremesa' => 24.60`). Calcule o subtotal, os 10% do garçom, o total e quanto cada uma das 4 pessoas paga (2 casas decimais).

### 3. Conversor de tempo
Converta `$segundosTotais = 200000` em dias, horas, minutos e segundos:
```
200000 segundos = 2 dia(s), 7 hora(s), 33 minuto(s) e 20 segundo(s)
```

### 4. Caixa eletrônico
Um cliente quer sacar R$ 387. Calcule a **menor quantidade** de notas de 100, 50, 20, 10, 5 e 2 e de moedas de 1 para pagar o valor. Mostre também o total de cédulas e moedas.

### 5. Brincando com dígitos
Com `$numero = 472`, separe centena, dezena e unidade usando só `/`, `%` e `(int)`. Depois mostre:
- o número invertido (274), **montado com aritmética**, não com string
- a soma dos dígitos
- o número somado ao invertido.

### 6. Carrinho de compras
```php
$carrinho = [
    ['produto' => 'Mouse',    'preco' => 89.90,  'qtd' => 2],
    ['produto' => 'Teclado',  'preco' => 149.90, 'qtd' => 1],
    ['produto' => 'Cabo USB', 'preco' => 19.90,  'qtd' => 3],
];
```
- Adicione a chave `'subtotal'` em cada item do array (preço × quantidade).
- Aplique um cupom de 10% no total dos produtos, some R$ 25 de frete e calcule a parcela em 3x.
- Mostre um cupom fiscal:
```
2x Mouse (R$ 89.9) = R$ 179.8
...
--------------------------------
Produtos: R$ 389.4
Cupom (10%): -R$ 38.94
Frete: R$ 25
TOTAL: R$ 375.46
Ou 3x de R$ 125.15
```

### 7. Juros simples × compostos
Com R$ 1000 aplicados a 2% ao mês por 12 meses, calcule:
- juros simples: `M = C × (1 + i × n)`
- juros compostos: `M = C × (1 + i)ⁿ` (use `**`)
- a diferença entre os dois.

Lembre que 2% = `0.02`.

### 8. Boletim da turma
```php
$turma = [
    ['nome' => 'Ana',   'notas' => [8.0, 9.5, 7.0]],
    ['nome' => 'Bruno', 'notas' => [6.0, 5.5, 8.0]],
    ['nome' => 'Carla', 'notas' => [10.0, 9.0, 9.5]],
];
```
- Adicione a chave `'media'` em cada aluno.
- Bruno fez a recuperação e a **2ª nota** dele passou a ser 7.5. Altere isso no array e recalcule a média dele.
- Mostre a média de cada aluno e a da turma, com 1 casa decimal.

### 9. Controle de estoque
```php
$estoque = ['arroz' => 50, 'feijao' => 40, 'cafe' => 30];
$precos  = ['arroz' => 25.90, 'feijao' => 8.50, 'cafe' => 18.00];
```
Simule a semana usando `-=`, `+=` e `*=`:
- **Segunda:** vendeu 12 arroz, 15 feijão e 8 café.
- **Terça:** chegaram 20 feijões e um produto novo, 25 açúcares a R$ 4.99.
- **Quarta:** o café teve reajuste de 5%.

Mostre a quantidade, o preço e o valor parado em estoque de cada produto, e o valor total do estoque.

### 10. Ficha cadastral com heredoc
Pesquise a sintaxe **heredoc** (`<<<TXT ... TXT;`), uma terceira forma de escrever strings que funciona como as aspas duplas, mas aceita várias linhas.
```php
$cliente = [
    'nome' => 'Rafael Souza',
    'nascimento' => ['dia' => 14, 'mes' => 3, 'ano' => 1998],
    'endereco' => ['rua' => 'Rua das Flores', 'numero' => 120, 'cidade' => 'Recife'],
    'plano' => 'Premium',
    'mensalidade' => 79.90,
];
```
Calcule a idade e o valor anual do plano e monte esta ficha com **um único** heredoc:
```
+---------------------------------------+
  FICHA DO CLIENTE
  Nome: Rafael Souza
  Nascimento: 14/3/1998 (28 anos)
  Endereço: Rua das Flores, 120 - Recife
  Plano: Premium (R$ 79.9/mês, R$ 958.8/ano)
+---------------------------------------+
```
**Extra:** repita a primeira linha com **nowdoc** (`<<<'TXT'`) e explique a diferença. Ela é parecida com a diferença entre aspas duplas e simples.
