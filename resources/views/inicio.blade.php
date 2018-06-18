@extends('layout.app')
@section('title','Home')
@section('content')
	<div class="container">
		<div class="row">
			<div class="offset-1"></div>
			<div class="col-md-7">
				<painel titulo="Introdução" classe="fa fa-lg fa-info introducao">
						<p>Seja bem vindo</p>						
						<p>Para realizar o sorteio vá na aba "Realizar sorteio" e selecione o seu
						nome na barra de seleção.</p>
						<p>Apos selecionar o nome, verifique se o mesmo está correto para não causar 
						problemas para os demais participantes</p>
						<p>Apos realizado a verificação,clique no botão de realizar sorteio e 
						irá aparecer uma pequena mensagem verde com o nome do seu Amigo Oculto </p>
						<p>Depois de decorar o nome do seu sorteado, clique no <strong style="color : green" >X</strong> no canto direito da mensagem para
						dar continuidade ao proximo participante</p>
						
				</painel>
				<div class="mb-2"></div>
			</div>
			
			<div class="col-md-3 ">
				@guest
				<painel titulo="Participantes" classe="fa fa-lg fa-id-card" style="color : #27bbce">
						<span>Você precisa estar logado para visualizar</span>
				</painel>
				@endguest
				@auth
				<painel titulo="Participantes" classe="fa fa-lg fa-id-card" style="color : #27bbce">
						<participantes :usuarios="{{$usuarios}}"></participantes>
				</painel>
				@endauth
					
			</div>
		</div>
		
	</div>

@endsection
