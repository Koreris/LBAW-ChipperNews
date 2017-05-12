<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article Page</title>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
	<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap-social.css">
	<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-article.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://www.w3schools.com/lib/w3data.js"></script>	
	<script src="{$BASE_URL}js/bootstrap.min.js"></script>


</head>


<div id="bg">
	<img class="bg" src="{$BASE_URL}images/assets/circuit.jpg" alt="">
</div>

<div class="container article-snip" id="article-snip-5">
		<br>
		<h2 id="headline">{$article.title}</h2>
			<h6>By <a href={$BASE_URL}pages/users/viewprofile?id={$article.author} style="color:black; font-style:italic">{$article.authorname}</a> {$article.published_date}</h6>
            {$subcategories = fetchSubcategories($article.article_id)}
			 {foreach $subcategories as $subart}
                            {if $subart.category==1}
                                <span class="label label-primary ">{$subart.name}</span>
                            {/if}
                            {if $subart.category==2}
                                <span class="label label-warning ">{$subart.name}</span>
                            {/if}
                            {if $subart.category==3}
                                <span class="label label-info ">{$subart.name}</span>
                            {/if}
                            {if $subart.category==4}
                                <span class="label label-default ">{$subart.name}</span>
                            {/if}
                            {if $subart.category==5}
                                <span class="label label-danger ">{$subart.name}</span>
                            {/if}
                            {if $subart.category==6}
                                <span class="label label-success ">{$subart.name}</span>
                            {/if}     
            {/foreach}
			<h3 id="lead">{$article.lead}</h3>
			<div id="ratings">
					<span id="postext4" style="color:#357266">{$article.posratings}</span>
					<button type="button" class="btn btn-default btn-circle btnlike">
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
					</button>
					<span id="negtext4" style="color:#f11066">{$article.negratings}</span>
					<button type="button" class="btn btn-default btn-circle btndislike">
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
					</button>
			</div>
			<br>
			<div id="article-body-5">
                <div class="container" style=" width: 40%; height: 30%; margin-bottom:5%">
                    <img src="{$BASE_URL}images\articles\{$article.article_id}" alt="..." style=" width: 100%; height: auto; border-radius:5%">
                </div>
                <div id="content" class="container" style=" width: 100%; height: auto;">
                {$article.content}
                </div>
            </div>		
   </div>
   <!-- ONLY SHOW COMMENT BOX IF LOGGED IN -->
   {if $USERNAME}
   <div class="row">
    
    <div class="col-md-6 col-md-offset-3">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
									<form >
										<div id="wmd-button-bar"></div>
							<textarea id="wmd-input" class="wmd-input"></textarea>
							
							
										<ul>
											<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
										</ul>
										<button type="submit" class="btn btn-success" style="background-color:#357266"> Submit</button>
									</form>
								</div><!-- Status Upload  -->
							</div><!-- Widget Area -->
	</div>
    </div>
    {/if}

	


