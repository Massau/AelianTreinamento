<?php include("cabecalho.php"); ?>

<div class="parallax div1" data-divisor="2">		
    <div class="text">
		<blockquote class="blockquote text-center">
			<h4>O Universo não é só mais estranho do que imaginamos, mas <b class="text-danger">mais estranho do que podemos imaginar.</b></h4>
		</blockquote>
		<blockquote class="blockquote-footer"><h5>Sir Arthur Stanley Eddington</h5></blockquote>
	</div>
</div>
		
<div class="container-fluid text-light" style="background-color:#000000;">
	<div class="estilizaEspacamento">
		<h2 class="text-center">Uma reflexão apressada...</h2>
			<p>
				Se o leitor se dispuser a um pequeno experimento sobre conteúdos abrigados por trás dessa consideração, pergunte a uma pessoa, digamos, de cultura média <b>o que ela pensa que o Universo seja.</b>
			</p>
			<p>
				A resposta que deve ouvir é algo difuso e impreciso, mas certamente acompanhado de que o universo está no reino das estrelas, e mesmo a Lua não se encaixa bem no conceito de Cosmos. A razão para isso, embora a pessoa questionada possa não explicar claramente, é que a Lua está próxima da Terra e, além disso, nos é muito familiar.
			</p>

			<p class="text-center">"O Cosmos é tudo o que existe, existiu e existirá."</p>

			<p>
				Ocorre que, rigorosamente, cada um de nós, os humanos, não apenas pertence ao Universo. Na verdade somos parte tão indissociável do Universo quanto as estrelas, galaxias, quasares ou qualquer outra instância de natureza cosmológica. A dedução que vem a seguir então é: <b class="text-danger">se somos indissociáveis do Universo, parte do que é possível reconhecer como Universo, então o Universo é inteligente e consciente, à medida que somos dotados dessas características ?</b>
			</p>				
	</div>
</div>
				
<div class="parallax div2" data-divisor="4"></div>
		
	<div class="estilizaEspacamento">
		<h2 class="text-center">Distinguindo o real do imaginário</h2>

		<div class="row">
			<div class="col-md-7 col-lg-7">
				<p>
    				O astrônomo e divulgador científico <a href="https://bit.ly/2zE7OPY">Carl Sagan</a>, um dos maiores divulgadores científicos que o mundo já conheceu, dedicou sua vida a desmistificar criações do imaginário popular repassadas como se tivessem fundamentação científica.</p>
				<p>
                    Em sua obra O Mundo Assombrado pelos Demônios a Ciência é vista como uma vela no escuro em em mundo infestado de demônios pseudocientíficos.
				</p>
			</div>
			<div class="col-md-5 col-lg-5">
				<img src="imagens/carl.jpg" class="img-fluid">
			</div>
			</div>
        
        <br>
		
		<form action="responde-quiz.php" class="formQuiz">
			<h2 class="text-center"><b class="text-danger">Quiz científico</b><link></h2>
		
        	<div class="form-row p-3">
				<div class="form-group col-md-6 col-lg-6">
					<label for="nomeUserQuiz">Seu nome</label>
					<input type="text" class="form-control" name="nome" id="nomeUserQuiz" placeholder="Valéria">
						
					<label for="idadeUserQuiz">Sua idade:</label>
					<input type="number" class="form-control" name="idade" placeholder=" 13" id="idadeUserQuiz">
				</div>

				<div class="form-group col-md-6 col-lg-6">
					<label>Você se considera uma pessoa cética ?</label>
					
                    <div class="form-check custom-control custom-checkbox">                    
						<input class="form-check-input" type="radio" id="inlineRadioS" value="sim">
						<label class="form-check-label" for="inlineRadioS">Sim</label>
					</div>
					<div class="form-check custom-control custom-checkbox">                    
						<input class="form-check-input" type="radio" id="inlineRadioN" value="nao">
						<label class="form-check-label" for="inlineRadioN">Não</label>
					</div>
				</div>
			</div>
				
			<h5 class="text-center">Baseado na sua visão de ciência, marque como <b class="text-success">verdadeiro</b> itens comprovadamente científicos e com <b class="text-danger">Falso</b> itens que não tem comprovação científica de sua eficácia.</h5>

                <div class="card">
                    <img class="card-img-top" src="imagens/imgQuiz03.png" alt="Card image cap astrologia">
                    <div class="row text-center">
                        <div class="col-md-6 col-lg-6">
                            <a href="" class="btn btn-outline-success">Verdadeiro !</a>   
                        </div>                     
                        <div class="col-md-6 col-lg-6">
                            <a href="" class="btn btn-outline-danger">Falso !</a>
                        </div>                        
                    </div>
				</div><br>
				
				<div class="card">
					<img class="card-img-top" src="imagens/imgQuiz04.png" alt="Card image cap astronomia">
					<div class="row text-center">
						<div class="col-md-6 col-lg-6">
							<a href="" class="btn btn-outline-success">Verdadeiro !</a>   
						</div>                     
						<div class="col-md-6 col-lg-6">
							<a href="" class="btn btn-outline-danger">Falso !</a>
						</div>                        
					</div>
				</div><br>

                <div class="card">
                    <img class="card-img-top" src="imagens/imgQuiz02.png" alt="Card image cap homeopatia">
                    <div class="row text-center">
                        <div class="col-md-6 col-lg-6">
                            <a href="#" class="btn btn-outline-success">Verdadeiro !</a>   
                        </div>                     
                        <div class="col-md-6 col-lg-6">
                            <a href="#" class="btn btn-outline-danger">Falso !</a>
                        </div>                        
                    </div>
                </div><br>               

                <div class="card">
                    <img class="card-img-top" src="imagens/imgQuiz01.png" alt="Card image cap html">
                    <div class="row text-center">
                        <div class="col-md-6 col-lg-6">
                            <a href="" class="btn btn-outline-success">Verdadeiro !</a>   
                        </div>                     
                        <div class="col-md-6 col-lg-6">
                            <a href="" class="btn btn-outline-danger">Falso !</a>
                        </div>                        
                    </div>
                </div><br>               

                <div class="form-group row">
                    <div class="col-md-2 col-lg-2">
                        <button class="btn btn-outline-primary" type="button submit">Gravar respostas</button>
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <button class="btn btn-outline-danger" type="reset">Cancelar</button>
                    </div>
                    <div class="col-md-10 col-lg-8">
                        <!--vazia-->
                    </div>
                </div>
		</form>
									
	</div>


<?php include("rodape.php"); ?>