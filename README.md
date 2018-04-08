<h1>MoIP Assinaturas v1.5 PHP client SDK</h1>

<h4>Índice</h4>
<ul>
  <li><a href="#section-installation">Instalação</a></li>
  <li><a href="#section-autentication">Autenticação</a></li>
</ul>

<h2 id="section-installation">Instalação</h4>
<p>Execute em seu shell:</p>
<pre>composer require pinheironinja/moip-assinaturas</pre>

<h2 id="section-autentication">Autenticação</h2>
<pre>
<?php

require "vendor/autoload.php";

use MoipAssinatura\MoipSubscription;

$moip_account_info = array(
	'token' => '10101010101010101010101010101010',
	'key' => 'ABABABABABABBABVABAVABASVBSAVSABSAVSBAVABS',
	'sandbox' => true
);

$moip = new MoipSubscription($moip_account_info);
</pre>