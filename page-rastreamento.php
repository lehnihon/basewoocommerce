<?php
/**
 * The page template file.
 *
 */

get_header(); ?>
<section id="tracking-main">
	<div class="container">
		<?php 
		$pesq_webserv = $_POST['pesquisawebserv'];
		$valor = $_POST['valor'];

		if($pesq_webserv == 'remessa')
			$url = "http://34.200.50.59/webserv-main.php?idexterno-webserv=$valor";
		elseif($pesq_webserv == 'cpf')
			$url = "http://34.200.50.59/webserv-main.php?cpf_webserv=$valor";
		else
			$url = "http://34.200.50.59/webserv-main.php?ra_webserv=$valor";
		$ch = curl_init();
		curl_setopt ($ch, CURLOPT_URL, $url);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 15);
		curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17');
	    curl_setopt($ch, CURLOPT_AUTOREFERER, true); 
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	    curl_setopt($ch, CURLOPT_VERBOSE, 1);
		$contents = curl_exec($ch);
		
		if (curl_errno($ch)) {
			echo curl_error($ch);
			echo "\n<br />";
			$contents = '';
		}else {
			curl_close($ch);
		}

		if (!is_string($contents) || !strlen($contents)) {
			echo "Failed to get contents.";
			$contents = '';
		}
		$contentsArrs = json_decode($contents);

		if(!empty($contentsArrs)){
		?>
			<table class="table">
			<thead>
				<tr>
					<th style="background-color:rgba(0,56,105,1); color:white">ID INTERNO</th>
					<th style="background-color:rgba(0,56,105,1); color:white">C. BAR/NOTA FISCAL</th>
					<th style="background-color:rgba(0,56,105,1); color:white">EMISSÃO</th>
					<th style="background-color:rgba(0,56,105,1); color:white">STATUS</th>
					<th style="background-color:rgba(0,56,105,1); color:white">NOTA</th>
					<th style="background-color:rgba(0,56,105,1); color:white">VER DETALHES</th>
					<th style="background-color:rgba(0,56,105,1); color:white">VER COMPROVANTE</th>
				</tr>
			</thead>
			<tbody>
			<?php
			foreach($contentsArrs as $contentsArr){
			?>
			<tr>
				<td><?php echo $contentsArr->interno;?></td>
				<td><?php echo $contentsArr->externo;?></td>
				<td><?php echo $contentsArr->emissao;?></td>
				<td><?php echo $contentsArr->status;?></td>
				<td><?php echo (($contentsArr->codcliente == 6670)?$contentsArr->numconta:$contentsArr->numnotafiscal) ?></td>
				<td><a href="#" class="ver-info"><img width="25" height="25" src="<?php bloginfo('template_url'); ?>/images/lupa_tabela.png"></a></td>
				<td><a target="_blank" href="<?php echo "http://34.200.50.59/exibe_pdf_demillus.php?opt=I&idexterno=".$contentsArr->externo; ?>"><img width="25" height="25" src="<?php bloginfo('template_url'); ?>/images/pdf.png"></a></td>
			</tr>
			<tr class="info-hide" style="display:none">
				<td colspan="7" style="padding: 50px 10px;">

					<section class="tracking-info">
						<?php
						if(!empty($contentsArr->destinatario)){
						?>
						<div>
							<table class="table">
								<tr>
									<th>REMETENTE</th>
									<td><?php echo $contentsArr->remetentecli." / ".$contentsArr->remetentepro;?></td>
								</tr>
								<tr>
									<th>DESTINATÁRIO</th>
									<td><?php echo $contentsArr->destinatario;?></td>
								</tr>
								<tr>
									<th>DATA DE EMISSÃO</th>
									<td><?php echo $contentsArr->emissao;?></td>
								</tr>
								<tr>
									<th>ENDEREÇO</th>
									<td><?php echo $contentsArr->endereco;?></td>
								</tr>
								<tr>
									<th>COMPLEMENTO</th>
									<td><?php echo $contentsArr->complemento;?></td>
								</tr>
								<tr>
									<th>BAIRRO</th>
									<td><?php echo $contentsArr->bairro;?></td>
								</tr>
								<tr>
									<th>CIDADE</th>
									<td><?php echo $contentsArr->cidade;?></td>
								</tr>
								<tr>
									<th>UF</th>
									<td><?php echo $contentsArr->uf;?></td>
								</tr>
								<tr>
									<th>CEP</th>
									<td><?php echo $contentsArr->cep;?></td>
								</tr>
								<tr>
									<th>NOTA FISCAL</th>
									<td><?php echo $contentsArr->notafiscal;?></td>
								</tr>
								<tr>
									<th>INTERNO</th>
									<td><?php echo $contentsArr->interno;?></td>
								</tr>
								<tr>
									<th>VALOR</th>
									<td><?php echo $contentsArr->valorentrega;?></td>
								</tr>
								<tr>
									<th>PESO</th>
									<td><?php echo $contentsArr->peso;?></td>
								</tr>
								<tr>
									<th>PROMESSA</th>
									<td><?php echo $contentsArr->promessa;?></td>
								</tr>
								<tr>
									<th>COLETA</th>
									<td>
										<?php if($contentsArr->coleta): ?>
											SIM
										<?php else: ?>
											NÃO
										<?php endif; ?>
									</td>
								</tr>
								<tr>
									<th>SETOR</th>
									<td><?php echo $contentsArr->setor;?></td>
								</tr>

								<tr>
									<th>OBS</th>
									<td><?php echo $contentsArr->obs;?></td>
								</tr>
								<tr style="background-color:#eee">
									<th style="border-right:1px solid white">STATUS</th>
									<td><?php echo $contentsArr->status;?></td>
								</tr>
							</table>
						</div>
						<?php 
						}else{
						?>
						<h3 class="title tmodel2" style="text-align:center">
							Não há dados de rastreamento para esse número.				
						</h3>
						<?php
						} 
						?>
					<div class="clearfix"></div>
					</section>
					<?php 
					$lt = $contentsArr->latitude;
					$ln = $contentsArr->longitude;
					$idmovimento = $contentsArr->idmovimento;
					if(!empty($lt)){ 
					?>
					<hr/>
					<section class="tracking-maps" style=" margin-top:25px">
						<div class="col twelve">
							<div class="movimentacao">
							  <!-- Mapa -->

							  <iframe src="http://34.200.50.59/movimentacao/mapa.php?lt=<?=$lt?>&ln=<?=$ln?>" id="mapaL" style="float: left; width: 60%; height:500px;"></iframe>

							  <!-- Foto -->
							  <iframe src="http://34.200.50.59/movimentacao/foto.php?id=<?=$idmovimento?>" id="fotoL" style="float: right; width: 40%; height:500px; margin-top:8px"></iframe>

							</div>		
						</div>
						<div class="clearfix"></div>			
					</section>
					<?php 
					} 
					?>
				</td>
			</tr>
			<?php 
			}
			?>
			</tbody>
			</table>
		<?php
		}else{
		?>
			<h3 class="tmodel2" style="text-align:center">Não há registro</h3>
		<?php	
		}
		?>
	</div>
</section>
<?php get_footer(); ?>
<script type="text/javascript">
	function init() { resizeWin(); }

	function resizeWin() {

	    var bodyHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

		document.getElementById("mapaL").style.height = (bodyHeight - 210) + "px";
	    document.getElementById("fotoL").style.height = (bodyHeight - 210) + "px";
	}

	$('.botao-maps').on('click',function(){
		$(this).parent().parent().next('.tracking-maps').slideToggle( "slow");
	});
	$('.ver-info').on('click',function(){
		$(this).parent().parent().next('.info-hide').toggle( "slow");
		return false;
	})	
</script>
