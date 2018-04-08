<h1>MoIP Assinaturas v1.5 PHP client SDK</h1>

<h4>Índice</h4>
<ul>
  <li><a href="#section-installation">Instalação</a></li>
  <li><a href="#section-autentication">Autenticação</a></li>
  <li><a href="#section-customers">Clientes</a></li>
</ul>

<h2 id="section-installation">Instalação</h4>
<p>Execute em seu shell:</p>
<pre>composer require pinheironinja/moip-assinaturas</pre>

<h2 id="section-autentication">Autenticação</h2>
<h3>Basic Auth</h3>
<pre>
<?php

require "vendor/autoload.php";

use MoipAssinatura\Moip;

$moip_account_info = array(
	'token' => '10101010101010101010101010101010',
	'key' => 'ABABABABABABBABVABAVABASVBSAVSABSAVSBAVABS',
	'sandbox' => true
);

$moip = new Moip($moip_account_info);
</pre>
<h2 id="section-customers">Clientes</h2>
<h3>Criando um cliente</h3>
<pre>
$customer = $moip->customers();

$customer->setCode(uniqid());
$customer->setFullName('Joãozinho Exemplo da Silva');
$customer->setEmail('email@example.com');
$customer->setCPF('22222222222');
$customer->setPhone('99','999999999');
$customer->setBirthdate('1994-01-18');
$customer->setAddress('R Teste', '12', 'Centro', 'Nova Iguaçu', 'RJ', '00000000', 'BRA' );
$customer->create();

print_r($customer);
</pre>

<h3>Consultando dados de um cliente</h3>
<pre>
$customer = $moip->customers()->get('5ac9a60880684');
print_r($customer);
</pre>

<h3>Consultando todos os clientes</h3>
<pre>
$customers = $moip->customers()->all();
print_r($customers);
</pre>