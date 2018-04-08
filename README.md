<h1>MoIP Assinaturas v1.5 PHP client SDK</h1>

<h4>Índice</h4>
<ul>
  <li><a href="#section-installation">Instalação</a></li>
  <li><a href="#section-installation">Autenticação</a></li>
</ul>

<h2 id="section-installation">Instalação</h4>
<p>Execute em seu shell:</p>
<div class="highlight highlight-text-html-php">
<pre>composer require pinheironinja/moip-assinaturas</pre>
</div>
<h2 id="section-autentication">Autenticação</h2>
<div class="highlight highlight-text-html-php">
	<pre>
	<?php

	require "vendor/autoload.php";

	use MoipAssinatura\MoipSubscription;

	$moip_account_info = array(
		'token' => 'DQ7TIA2B7MSKP4NFCFBTFG9QYLZ04XDJ',
		'key' => 'XYEXOGOZXJS8PGXBB240WCUY1Y3IL1UOYVURJ44O',
		'sandbox' => true
	);

	$moip = new MoipSubscription($moip_account_info);
	</pre>
</div>