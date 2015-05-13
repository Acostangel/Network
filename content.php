<!-- Create News -->
<link rel="stylesheet" type="text" href="">
<style type="text/css">


#header{
	margin: auto;
	width: auto;
	font-family: arial, Helvetica;	
	margin-left: 500px;
	margin-top: -20px;
	margin-bottom: 10px;
} 
#nav{
	margin-left: -60px;
}

ul {
	list-style: none;
	margin-left: -55px;
}
#nav li a {
	background-color: white;
	color: black;
	text-decoration: none;
	display: block;
}
#nav ul li a{
	border-left: solid blue;
	border-right: solid blue;
}


#nav ul li a:hover{
	background-color: #C0C0C0;	
	border-left: solid blue;
}
#nav li  ul{
	display:none;
	position: absolute;
}
#nav li:hover > ul{
	display: block;
}


</style>
<div class="box animate hinge">
	<div class="header" style="border: 1px solid #B7B7BC; "><h4 class="white1">Qué hay de nuevo</h4></div>
	<div class="contenidos news" style="">
			<form method="post" action="includes/posteando.php">
					<textarea align="center" rows="5" cols="10" name="texto" placeholder="Publicar algo..."  class="form-control" class="expand" style="padding:5px 10px; width:96%; resize:none; overflow:hidden; border:1px solid #ccc;"></textarea>	<br>
					<p style="margin-top:4px;  margin-right:15px;" align="right"><button  type="submit" class="button1" name="publicar">Publicar</button></p>
			</form>		
	</div>
</div>
<!-- Linea -->
<div class="line animate bounceIn">
	<img src="imgs/block.png">
</div>
<!-- Showing News -->
<div class="box line animate bounceIn">
	<table cellpadding="0" cellspacing="0" style="margin-left:6px;">
		<tr>
			<td width="48" height="48" style="text-align:center;"><img src="imgs/me2.jpg" width="50" height="50" class="border"></td>
			<td width="10"><img src="imgs/block2.png" style="padding-top:20px;"></td>
			<td width="560" rowspan="2">
				<div style="background-color: #fff; width:100%; height:100%; padding:10px; border: 1px solid #BFC3C8; border-radius: 4px;">
					<p><span style="font-size:16px; font-weight:bold;"><a href="">Michelle Rodriguez.</a> </span>&nbsp;
							<img src="imgs/date.png"> 00/00/0000  &nbsp; 
							<img src="imgs/comment.png"> (6) &nbsp; 
							rate: <img src="imgs/star.png">
							<!--Obciones de personalizar, eliminar & editar-->
							<span style="float:right;"><a href="">

								<div id="header">
									<ul id="nav">
										<li><img src="imgs/settings.png">
											<ul>
												<li><a href="" id="eliminar">Eliminar</a></li>
												<li><a href="" id="editar">Editar</a></li>
												<li><a href="" id="Personificar">Personificar <img src="imgs/settings.png"></a></li>
											</ul>
										</li>	
									</ul>
 								</div>
							</a></span>
					<p><?php 
include_once('includes/blocks.php');
			$query="Select posts_content from posts";
			$resultado = mysqli_query($conx, $query);
			$total= mysqli_num_rows($resultado);

			while ($dato=mysqli_fetch_array($resultado)) {
			# code...
			echo $dato['posts_content'];
			echo "</br>";

		}
?></p>
					<div style="width:100%; border: 1px solid #ccc; padding:2px;border-radius:4px; background-color: #f5f5f5; margin-top:20px;">
						<div class="btn-group" role="group" aria-label="...">
						  <button type="button" class="btn btn-default">hace 10 minutos</button>
						  <button type="button" class="btn btn-default">Comentar</button>
						  <button type="button" class="btn btn-default">Compartir</button>
						  <button type="button" class="btn btn-default">Eliminar</button>
						</div>
						<p style="margin-left:6px; margin-top:4px;"><a href="">Michelle Rodriguez</a> and <a href="">Michelle Rodriguez</a> like this.</p><br>
						<table style="margin-left:6px; margin-bottom:6px; width:94%;">
							<tr>
								<td width="40"><img src="imgs/me2.jpg" class="thumb"></td>
								<td style="padding-left:4px;"><p><strong>Michelle Rodriguez</strong> Maecenas est enim, pellentesque eget tempus eget, semper sit amet ipsum. Morbi facilisis, velit in maximus sagittis velit in maximus sagittis, nisi.</p></td>
							</tr>
							<tr>
								<td></td>
								<td style="padding-left:4px;"><p>12 minutes ago <a href="">like</a> - <a href="">delete</a></p></td>
							</tr>
							<tr>
								<td width="40"><img src="imgs/me2.jpg" class="thumb"></td>
								<td style="padding-left:4px;"><p><strong>Michelle Rodriguez</strong> Maecenas est enim, pellentesque eget tempus eget, semper sit amet ipsum. Morbi facilisis, velit in maximus sagittis velit in maximus sagittis, nisi.</p></td>
							</tr>
							<tr>
								<td></td>
								<td style="padding-left:4px;"><p>12 minutes ago <a href="">like</a> - <a href="">delete</a></p></td>
							</tr>
							<tr>
								<td width="40"><img src="imgs/me2.jpg" class="thumb"></td>
								<td style="padding-left:4px;"><p><strong>Michelle Rodriguez</strong> Maecenas est enim, pellentesque eget tempus eget, semper sit amet ipsum. Morbi facilisis, velit in maximus sagittis velit in maximus sagittis, nisi.</p></td>
							</tr>
							<tr>
								<td></td>
								<td style="padding-left:4px;"><p>12 minutes ago <a href="">like</a> - <a href="">delete</a></p></td>
							</tr>

						</table>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td height="auto" class="back"><img src="imgs/block3.png" width="35" class="height"></td>
			<td></td>
		</tr>
	</table>
</div>

<!-- Linea -->
<div class="line animate bounceIn">
	<img src="imgs/block.png">
</div>
<!-- Showing News -->
<div class="box line animate bounceIn">
	<table cellpadding="0" cellspacing="0" style="margin-left:6px;">
		<tr>
			<td width="48" height="48" style="text-align:center;"><img src="imgs/me2.jpg" width="50" height="50" class="border"></td>
			<td width="10"><img src="imgs/block2.png" style="padding-top:20px;"></td>
			<td width="560" rowspan="2">
				<div style="background-color: #fff; width:100%; height:100%; padding:10px; border: 1px solid #BFC3C8; border-radius: 4px;">
					<p><span style="font-size:16px; font-weight:bold;">Michelle Rodriguez. </span>&nbsp;<img src="imgs/date.png"> 00/00/0000  &nbsp; <img src="imgs/comment.png"> (?) &nbsp; rate: <img src="imgs/star.png"> <span style="float:right;">
							<span style="float:right;"><a href="">

								<div id="header">
									<ul id="nav">
										<li><img src="imgs/settings.png">
											<ul>
												<li><a href="">Eliminar</a></li>
												<li><a href="">Editar</a></li>
												<li><a href="">Personificar <img src="imgs/settings.png"></a></li>
											</ul>
										</li>	
									</ul>
 								</div>

							</a></span>

					</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed massa maximus, condimentum ante nec, viverra eros. Sed porta dolor in nulla luctus semper. Vestibulum ut ex eu mauris viverra egestas. Nulla a porta diam. Cras placerat lacinia malesuada. Suspendisse sit amet nulla posuere, lobortis sapien at, suscipit nibh.</p>
					<div style="width:100%; border: 1px solid #ccc; padding:2px;border-radius:4px; background-color: #f5f5f5;">
						<div class="btn-group" role="group" aria-label="...">
						  <button type="button" class="btn btn-default">10 minutes ago</button>
						  <button type="button" class="btn btn-default">Comment</button>
						  <button type="button" class="btn btn-default">Share</button>
						  <button type="button" class="btn btn-default">Delete</button>
						</div>
						<p style="margin-left:6px; margin-top:4px;"><a href="">Michelle Rodriguez</a> and <a href="">Michelle Rodriguez</a> like this.</p>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td height="auto" class="back"><img src="imgs/block3.png" width="35" class="height"></td>
			<td></td>
		</tr>
	</table>
</div>

<!-- Linea -->
<div class="line animate bounceIn">
	<img src="imgs/block.png">
</div>
<!-- Showing News -->
<div class="box line animate bounceIn">
	<table cellpadding="0" cellspacing="0" style="margin-left:6px;">
		<tr>
			<td width="48" height="48" style="text-align:center;"><img src="imgs/me2.jpg" width="50" height="50" class="border"></td>
			<td width="10" style="padding-top:15px;"><img src="imgs/block-last.png"></td>
			<td width="560" rowspan="2">
				<div style="background-color: #fff; width:100%; height:100%; padding:10px; border: 1px solid #BFC3C8; border-radius: 4px;">
					<p><span style="font-size:16px;"><strong>Michelle Rodriguez. </strong> posted a new video:</span> 

						<span style="float:right;"><a href="">

								<div id="header">
									<ul id="nav">
										<li><img src="imgs/settings.png">
											<ul>
												<li><a href="">Eliminar</a></li>
												<li><a href="">Editar</a></li>
												<li><a href="">Personificar <img src="imgs/settings.png"></a></li>
											</ul>
										</li>	
									</ul>
 								</div>

							</a></span>


					</p>
					
						<table>
							<tr>
								<td><img src="imgs/me2.jpg" width="128"></td>
								<td><h4 style="padding-left:10px;"><a href="">In the way with Tom tiberlake</a></h4>
									<p style="padding-left:10px;">New video Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></td>
							</tr>
						</table>
					<div style="width:100%; border: 1px solid #ccc; padding:2px;border-radius:4px; background-color: #f5f5f5;">
						<div class="btn-group" role="group" aria-label="...">
						  <button type="button" class="btn btn-default">10 minutes ago</button>
						  <button type="button" class="btn btn-default">Comment</button>
						  <button type="button" class="btn btn-default">Share</button>
						  <button type="button" class="btn btn-default">Delete</button>
						</div>
						<p style="margin-left:6px; margin-top:4px;"><a href="">Michelle Rodriguez</a> and <a href="">Michelle Rodriguez</a> like this.</p>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td height="auto"></td>
			<td></td>
		</tr>
	</table>
</div>
