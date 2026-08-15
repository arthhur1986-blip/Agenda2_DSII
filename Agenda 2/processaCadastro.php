<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: cadastro.html");
    exit;
}

$nome1 = $_POST["nome1"] ?? "";
$idade2 = $_POST["idade2"] ?? "";
$profissao3 = $_POST["profissao3"] ?? "";
$salario4 = $_POST["salario4"] ?? "";
$experiencia5 = $_POST["experiencia5"] ?? "";

$nome1 = htmlspecialchars($nome1, ENT_QUOTES, "UTF-8");
$idade2 = htmlspecialchars($idade2, ENT_QUOTES, "UTF-8");
$profissao3 = htmlspecialchars($profissao3, ENT_QUOTES, "UTF-8");
$salario4 = htmlspecialchars($salario4, ENT_QUOTES, "UTF-8");
$experiencia5 = htmlspecialchars($experiencia5, ENT_QUOTES, "UTF-8");

$salarioFormatado = number_format((float)$salario4, 2, ",", ".");

echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<head><meta charset='UTF-8'><title>Dados do Cadastro</title>";
echo "<style>
body{font-family:Arial,sans-serif;background:#f2f2f2;padding:30px}
main{max-width:650px;margin:auto;background:white;padding:25px;border-radius:10px}
.linha{padding:10px 0;border-bottom:1px solid #ddd}
.mensagem{margin-top:20px;padding:15px;background:#e8f5e9;border-radius:8px}
a{display:inline-block;margin-top:20px}
</style></head><body><main>";

echo "<h1>Dados recebidos</h1>";
echo "<div class='linha'><strong>Nome:</strong> $nome1</div>";
echo "<div class='linha'><strong>Idade:</strong> $idade2 anos</div>";
echo "<div class='linha'><strong>Profissão:</strong> $profissao3</div>";
echo "<div class='linha'><strong>Salário pretendido:</strong> R$ $salarioFormatado</div>";
echo "<div class='linha'><strong>Experiência anterior:</strong> $experiencia5</div>";

echo "<div class='mensagem'>";
echo "<strong>Mensagem:</strong> Olá, $nome1! Recebemos seu cadastro. Sua experiência como $profissao3 foi registrada: $experiencia5";
echo "</div>";

echo "<a href='cadastro.html'>Voltar para o formulário</a>";
echo "</main></body></html>";
?>