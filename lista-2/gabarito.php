<?php
// Gabarito: Lista 2 de PHP 8.5 (Turma de Sábado)
// Só usa variáveis, echo, strings, operadores, arrays e (int).
// O único if/elseif aparece no desafio do Ex. 1.

echo "===== 1. Calculadora de IMC =====\n";
$nome = "Marina";
$peso = 70;      // kg
$altura = 1.75;  // m

$imc = $peso / $altura ** 2;
$imcArredondado = (int) ($imc * 100 + 0.5) / 100;

$pesoMinimo = (int) (18.5 * $altura ** 2 * 10 + 0.5) / 10;
$pesoMaximo = (int) (24.9 * $altura ** 2 * 10 + 0.5) / 10;

echo "Paciente: $nome\n";
echo "Peso: {$peso} kg | Altura: {$altura} m\n";
echo "IMC: $imcArredondado\n";
echo "Faixa de peso ideal: {$pesoMinimo} kg a {$pesoMaximo} kg\n";

// Desafio (usa if/elseif)
if ($imc < 18.5) {
    $classificacao = "Abaixo do peso";
} elseif ($imc < 25) {
    $classificacao = "Peso normal";
} elseif ($imc < 30) {
    $classificacao = "Sobrepeso";
} else {
    $classificacao = "Obesidade";
}
echo "Classificação: $classificacao\n\n";


echo "===== 2. Dividindo a conta do restaurante =====\n";
$consumo = [
    'pizza' => 89.90,
    'refrigerante' => 12.00,
    'suco' => 9.50,
    'sobremesa' => 24.60,
];
$pessoas = 4;

$subtotal = $consumo['pizza'] + $consumo['refrigerante'] + $consumo['suco'] + $consumo['sobremesa'];
$servico = $subtotal * 10 / 100;
$total = $subtotal + $servico;
$porPessoa = (int) ($total / $pessoas * 100 + 0.5) / 100;

echo "Subtotal: R$ $subtotal\n";
echo "Serviço (10%): R$ $servico\n";
echo "Total: R$ $total\n";
echo "Cada um dos $pessoas paga: R$ $porPessoa\n\n";


echo "===== 3. Conversor de tempo =====\n";
$segundosTotais = 200000;

$dias = (int) ($segundosTotais / 86400);
$resto = $segundosTotais % 86400;
$horas = (int) ($resto / 3600);
$resto = $resto % 3600;
$minutos = (int) ($resto / 60);
$segundos = $resto % 60;

echo "$segundosTotais segundos = $dias dia(s), $horas hora(s), $minutos minuto(s) e $segundos segundo(s)\n\n";


echo "===== 4. Caixa eletrônico =====\n";
$saque = 387;
$restante = $saque;

$n100 = (int) ($restante / 100); $restante %= 100;
$n50  = (int) ($restante / 50);  $restante %= 50;
$n20  = (int) ($restante / 20);  $restante %= 20;
$n10  = (int) ($restante / 10);  $restante %= 10;
$n5   = (int) ($restante / 5);   $restante %= 5;
$n2   = (int) ($restante / 2);   $restante %= 2;
$n1   = $restante;

echo "Saque de R$ $saque:\n";
echo "  $n100 nota(s) de R$ 100\n";
echo "  $n50 nota(s) de R$ 50\n";
echo "  $n20 nota(s) de R$ 20\n";
echo "  $n10 nota(s) de R$ 10\n";
echo "  $n5 nota(s) de R$ 5\n";
echo "  $n2 nota(s) de R$ 2\n";
echo "  $n1 moeda(s) de R$ 1\n";
$totalCedulas = $n100 + $n50 + $n20 + $n10 + $n5 + $n2 + $n1;
echo "Total de cédulas e moedas: $totalCedulas\n\n";


echo "===== 5. Brincando com dígitos =====\n";
$numero = 472;

$centena = (int) ($numero / 100);
$dezena = (int) ($numero / 10) % 10;
$unidade = $numero % 10;

$invertido = $unidade * 100 + $dezena * 10 + $centena;
$somaDigitos = $centena + $dezena + $unidade;

echo "Número: $numero\n";
echo "Centena: $centena | Dezena: $dezena | Unidade: $unidade\n";
echo "Invertido: $invertido\n";
echo "Soma dos dígitos: $somaDigitos\n";
echo "Número + invertido: " . ($numero + $invertido) . "\n\n";


echo "===== 6. Carrinho de compras =====\n";
$carrinho = [
    ['produto' => 'Mouse',   'preco' => 89.90,  'qtd' => 2],
    ['produto' => 'Teclado', 'preco' => 149.90, 'qtd' => 1],
    ['produto' => 'Cabo USB', 'preco' => 19.90, 'qtd' => 3],
];
$cupom = 10;   // %
$frete = 25.00;
$parcelas = 3;

$carrinho[0]['subtotal'] = $carrinho[0]['preco'] * $carrinho[0]['qtd'];
$carrinho[1]['subtotal'] = $carrinho[1]['preco'] * $carrinho[1]['qtd'];
$carrinho[2]['subtotal'] = $carrinho[2]['preco'] * $carrinho[2]['qtd'];

$totalProdutos = $carrinho[0]['subtotal'] + $carrinho[1]['subtotal'] + $carrinho[2]['subtotal'];
$desconto = $totalProdutos * $cupom / 100;
$totalFinal = $totalProdutos - $desconto + $frete;
$valorParcela = (int) ($totalFinal / $parcelas * 100 + 0.5) / 100;

echo "{$carrinho[0]['qtd']}x {$carrinho[0]['produto']} (R$ {$carrinho[0]['preco']}) = R$ {$carrinho[0]['subtotal']}\n";
echo "{$carrinho[1]['qtd']}x {$carrinho[1]['produto']} (R$ {$carrinho[1]['preco']}) = R$ {$carrinho[1]['subtotal']}\n";
echo "{$carrinho[2]['qtd']}x {$carrinho[2]['produto']} (R$ {$carrinho[2]['preco']}) = R$ {$carrinho[2]['subtotal']}\n";
echo "--------------------------------\n";
echo "Produtos: R$ $totalProdutos\n";
echo "Cupom ({$cupom}%): -R$ $desconto\n";
echo "Frete: R$ $frete\n";
echo "TOTAL: R$ $totalFinal\n";
echo "Ou {$parcelas}x de R$ $valorParcela\n\n";


echo "===== 7. Juros simples x compostos =====\n";
$capital = 1000;
$taxa = 2;     // % ao mês
$meses = 12;

$i = $taxa / 100;
$montanteSimples = $capital * (1 + $i * $meses);
$montanteComposto = $capital * (1 + $i) ** $meses;
$montanteComposto = (int) ($montanteComposto * 100 + 0.5) / 100;
$diferenca = $montanteComposto - $montanteSimples;

echo "Capital: R$ $capital a {$taxa}% ao mês por $meses meses\n";
echo "Juros simples: R$ $montanteSimples\n";
echo "Juros compostos: R$ $montanteComposto\n";
echo "Diferença: R$ $diferenca\n\n";


echo "===== 8. Boletim da turma =====\n";
$turma = [
    ['nome' => 'Ana',   'notas' => [8.0, 9.5, 7.0]],
    ['nome' => 'Bruno', 'notas' => [6.0, 5.5, 8.0]],
    ['nome' => 'Carla', 'notas' => [10.0, 9.0, 9.5]],
];

$turma[0]['media'] = ($turma[0]['notas'][0] + $turma[0]['notas'][1] + $turma[0]['notas'][2]) / 3;
$turma[1]['media'] = ($turma[1]['notas'][0] + $turma[1]['notas'][1] + $turma[1]['notas'][2]) / 3;
$turma[2]['media'] = ($turma[2]['notas'][0] + $turma[2]['notas'][1] + $turma[2]['notas'][2]) / 3;

// Bruno fez prova de recuperação e a 2ª nota virou 7.5
$turma[1]['notas'][1] = 7.5;
$turma[1]['media'] = ($turma[1]['notas'][0] + $turma[1]['notas'][1] + $turma[1]['notas'][2]) / 3;

$turma[0]['media'] = (int) ($turma[0]['media'] * 10 + 0.5) / 10;
$turma[1]['media'] = (int) ($turma[1]['media'] * 10 + 0.5) / 10;
$turma[2]['media'] = (int) ($turma[2]['media'] * 10 + 0.5) / 10;

$mediaTurma = ($turma[0]['media'] + $turma[1]['media'] + $turma[2]['media']) / 3;
$mediaTurma = (int) ($mediaTurma * 10 + 0.5) / 10;

echo "{$turma[0]['nome']}: {$turma[0]['media']}\n";
echo "{$turma[1]['nome']}: {$turma[1]['media']}\n";
echo "{$turma[2]['nome']}: {$turma[2]['media']}\n";
echo "Média da turma: $mediaTurma\n\n";


echo "===== 9. Controle de estoque =====\n";
$estoque = ['arroz' => 50, 'feijao' => 40, 'cafe' => 30];
$precos  = ['arroz' => 25.90, 'feijao' => 8.50, 'cafe' => 18.00];

// Segunda-feira: vendas
$estoque['arroz'] -= 12;
$estoque['feijao'] -= 15;
$estoque['cafe'] -= 8;

// Terça-feira: chegou reposição e um produto novo
$estoque['feijao'] += 20;
$estoque['acucar'] = 25;
$precos['acucar'] = 4.99;

// Reajuste de 5% no café
$precos['cafe'] *= 1.05;

$valorArroz  = $estoque['arroz']  * $precos['arroz'];
$valorFeijao = $estoque['feijao'] * $precos['feijao'];
$valorCafe   = $estoque['cafe']   * $precos['cafe'];
$valorAcucar = $estoque['acucar'] * $precos['acucar'];
$valorTotal  = $valorArroz + $valorFeijao + $valorCafe + $valorAcucar;

echo "Arroz:  {$estoque['arroz']} un x R$ {$precos['arroz']} = R$ $valorArroz\n";
echo "Feijão: {$estoque['feijao']} un x R$ {$precos['feijao']} = R$ $valorFeijao\n";
echo "Café:   {$estoque['cafe']} un x R$ {$precos['cafe']} = R$ $valorCafe\n";
echo "Açúcar: {$estoque['acucar']} un x R$ {$precos['acucar']} = R$ $valorAcucar\n";
echo "Valor total do estoque: R$ $valorTotal\n\n";


echo "===== 10. Ficha cadastral com heredoc =====\n";
$cliente = [
    'nome' => 'Rafael Souza',
    'nascimento' => ['dia' => 14, 'mes' => 3, 'ano' => 1998],
    'endereco' => ['rua' => 'Rua das Flores', 'numero' => 120, 'cidade' => 'Recife'],
    'plano' => 'Premium',
    'mensalidade' => 79.90,
];
$anoAtual = 2026;
$idade = $anoAtual - $cliente['nascimento']['ano'];
$anual = $cliente['mensalidade'] * 12;

echo <<<TXT
+---------------------------------------+
  FICHA DO CLIENTE
  Nome: {$cliente['nome']}
  Nascimento: {$cliente['nascimento']['dia']}/{$cliente['nascimento']['mes']}/{$cliente['nascimento']['ano']} ($idade anos)
  Endereço: {$cliente['endereco']['rua']}, {$cliente['endereco']['numero']} - {$cliente['endereco']['cidade']}
  Plano: {$cliente['plano']} (R$ {$cliente['mensalidade']}/mês, R$ $anual/ano)
+---------------------------------------+

TXT;

echo <<<'MODELO'
Modelo (nowdoc, nada é interpretado): Nome: {$cliente['nome']}

MODELO;
