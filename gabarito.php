<?php
// Gabarito: Exercícios básicos de PHP 8.5 (Turma de Sábado)

// 1.1
$nome = "Carlos"; $idade = 25; $altura = 1.78; $cidade = "Recife";
echo "Nome: $nome, Idade: $idade, Altura: $altura, Cidade: $cidade\n";

// 1.2
$pontos = 10;
$pontos += 5; $pontos *= 2; $pontos--;
echo $pontos . "\n"; // 29

// 1.3
$a = "maçã"; $b = "banana";
$aux = $a; $a = $b; $b = $aux;
echo "$a $b\n";
[$a, $b] = [$b, $a];
echo "$a $b\n";

// 1.4: dá erro de sintaxe, porque uma constante não pode ser reatribuída
const TAXA = 0.15;
// TAXA = 0.20; // descomente para ver o erro

// 2.1
$produto = "Teclado"; $preco = 149.90;
echo "O produto " . $produto . " custa R$ " . $preco . "\n";

// 2.2
$frase = "PHP";
$frase .= " é"; $frase .= " muito"; $frase .= " legal!";
echo $frase . "\n";

// 2.3
echo $a, " ", $b, "\n";
echo $a . " " . $b . "\n";

// 3.1: aspas simples NÃO interpretam variáveis nem \n; só \' e \\ funcionam
echo "Eu moro em $cidade\n";
echo 'Eu moro em $cidade\n';
echo "\n";
echo "Eu moro em {$cidade}!\n";
echo 'Eu moro em ' . $cidade . "\n";

// 3.2
$usuario = ['nome' => 'Ana', 'idade' => 22];
echo "{$usuario['nome']} tem {$usuario['idade']} anos\n";

// 3.3
echo 'Ele disse: "It\'s PHP!" e custou $5' . "\n";
echo "Ele disse: \"It's PHP!\" e custou \$5\n";

// 3.4: "$frutaS" procura uma variável chamada $frutaS; as {} delimitam o nome
$fruta = "maçã";
echo "{$fruta}S\n";

// 4.1
$x = 17; $y = 5;
echo $x + $y, "\n", $x - $y, "\n", $x * $y, "\n",
     $x / $y, "\n", $x % $y, "\n", $x ** $y, "\n";

// 4.2
$media = (7.5 + 8.0 + 6.5) / 3;
echo "Média: $media\n";

// 4.3
$f = 98.6;
$c = ($f - 32) * 5 / 9;
echo "$f °F = $c °C\n"; // 37

// 4.4
$preco = 200;
$final = $preco - $preco * 10 / 100;
echo "Preço final: R$ $final\n"; // 180

// 4.5
echo 2 + 3 * 4, "\n";   // 14
echo (2 + 3) * 4, "\n"; // 20
echo -2 ** 2, "\n";     // -4 (a potência é calculada antes do sinal)

// 4.6
$i = 5;
echo $i++ . "\n"; // 5 (mostra e depois incrementa)
echo ++$i . "\n"; // 7 (incrementa e depois mostra)

// 5.1
$frutas = ["maçã", "banana", "uva"];
$frutas[] = "manga";
$frutas[1] = "pera";
echo "$frutas[0], $frutas[1], $frutas[2], $frutas[3]\n";

// 5.2
$aluno = ['nome' => 'João', 'idade' => 20, 'curso' => 'ADS'];
$aluno['idade'] = 21;
$aluno['email'] = 'joao@email.com';
echo "{$aluno['nome']}, {$aluno['idade']} anos, {$aluno['curso']}, {$aluno['email']}\n";

// 5.3
$turma = [
    ['nome' => 'Ana', 'nota' => 9],
    ['nome' => 'Bruno', 'nota' => 7],
];
echo $turma[1]['nome'] . "\n";
$media = ($turma[0]['nota'] + $turma[1]['nota']) / 2;
echo "Média da turma: $media\n"; // 8

// 5.4
$numeros = [10, 20, 30];
$numeros[0] += 5;
$numeros[1] *= 2;
$soma = $numeros[0] + $numeros[1] + $numeros[2];
echo "Soma: $soma\n"; // 85
