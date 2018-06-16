<!DOCTYPE html>
<html>
<head>
	<title>REA | qmmp</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
</head>
<body>
	<?php include 'navbar.php';?>
	<div id="texto">
		<h1> qmmp</h1>
		<p>
		O qmmp é um player de audio de codigo aberto escrito em C++ usando a a biblioteca Qt. Tem suporte para Linux, FreeBSD e Microsoft Windows.A interface grafica do qmmp é baseada no Winamp
		</p>
		<div id="car">
			<h2>Características</h2>
			
			<ul id="caracteristicas_ul">
				<li>Apresenta uma inteface grafica simples.</li>
				<li>Pode usar skins de Winamp.</li>
				<li>Suporta arquivos Ogg Vorbis, FLAC e MP3.</li>
				<li>Busca automatica de capa do album.</li>
				<li>Suporta ID3v2 melhorado pra imagens de album.</li>
				<li>Surporte a ReplarGain.</li>
				<li>Suporte a multiplos artistas por musica.</li>
				<li>Apresenta bandeja de sistema.</li>
				<li>Suporte a plugins.</li>
				<li>Tradução para vários idiomas.	</li>
			</ul>
		</div>
		<div id="qt">
			<h2>Biblioteca Qt</h2>
			
				<h3>QThread</h3>
				<p>
				QThread é um classe usada para implementar uma thread de uma forma independente da plataforma. Essa classe pertence ao framework Qt, que pode ser usado para criar aplicações com UI em C++ com um ambiente de desenvolvimento integrado e ferramentas para auciliar o desenvolvimento de sofware.
				</p>
				<p>
				UM objeto QThread gerencia uma thread no programa, essa thread começa com execução da função <span class="codigo">run</span>(), que cria um 'loop de eventos' chamado pela função <span class="codigo">exec</span>() e roda um Qt event loop dentro da thread.
				</p>
				<p>
				QThread , durante o programa, pode notificar via um sinal com as funções <span class="codigo">started</span>(), executada logo apos a thread começar, <span class="codigo">finished</span>(), executado logo antes da thread terminar, ou pode-se usar o <span class="codigo">isFinished</span>() ou <span class="codigo">isRunning</span>(), para verificar o estado da thread.

				Para para a finalização de uma thread pode-se chamar <span class="codigo">exit</span>(), retorna um valor inteiro que é mandado de parametro, ou <span class="codigo">quit</span>(), retorna zero.

				<span class="codigo">wait</span>() bloqueia a thread atual até que uma condição seja verdadeira, semelhante a POSIX <span class="codigo">pthread_join</span>().

				A função <span class="codigo">sleep</span>() pode ser usada para a thread q a chama ser pausada pelo numero de milisegundos mandados de parametro.

				<span class="codigo">currentThreadId</span>() e <span class="codigo">currentThread</span>() sao usados para retornar os indentificadores  da thread.</br>
				<a href="https://www.qt.io/">Site do Framework Qt</a></br>
				<a href="http://doc.qt.io/qt-5/qthread.html">Documentação do QThread</a></br>
			</p>
		</div>
		<div id="funcionamento">
			<h2>Funcionamento</h2>
			
				<h3>OutputWriter</h3>
				<p>A classe OutputWriter herda a classe Qthread, assim ela implementa a função run(), e nela roda uma thread disponibilizada pela biblioteca Qt.</p>

				<p>bool <span class="codigo">initialize</span>() - prepara o objeto para ser usado, e preconfigura os parametros de audio, como o mapa de canais, returnando true para sucesso na inicialização e false para fracasso, caso algum erro ocorra manda uma mensagem atraves de qWarning().</p>

				<p>void <span class="codigo">pause</span>() - pausa o que estiver tocando no programa, caso ja pausado, o audio volta a ser tocado.
				essa função utiliza um mutex para alterar a a a variavel q sinaliza a pausa (m_pause).</p>

				<p>void <span class="codigo">stop</span>() - para a musica
				essa função estabelece o estado da variavel de parado (m_stop).</p>

				<p>void <span class="codigo">setMuted</span>()- muta e restaura o volume
				essa função estabelece o estado da variavel de mutado (m_muted).</p>

				<p>void <span class="codigo">finish</span>()- requere que o audio pare de tocar
				a variavel que estabelece o estado de terminado como verdadeiro.</p>

				<p>void <span class="codigo">seek</span>()- faz uma busca no tempo passado por parametro, em milisegundos, caso o parametro reset seja true o buffer de saida sao limpos, caso contrario nada ocorre com os buffers</p>

				<p>void <span class="codigo">run</span>() - funcionamento da thread</p>

			</p>

		</div>
		<div id="referencias">
			<h2>Referencias</h2>
			
		</div>
		<div id="integrantes">
			<h2>Integrantes</h2>
		</div>

		<?php include 'footer.php'; ?>
	</div>

</body>
</html>

